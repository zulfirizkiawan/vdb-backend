<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\TransactionPraktik;
use Exception;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PraktikController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 20);
        $status = $request->input('status');

        if ($id) {
            $transaction = TransactionPraktik::with(['doctor', 'user'])->find($id);

            if ($transaction)
                return ResponseFormatter::success(
                    $transaction,
                    'Data transaksi praktik berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
        }

        $transaction = TransactionPraktik::with(['user'])->where('user_id', Auth::user()->id);


        if ($status)
            $transaction->where('status', $status);

        return ResponseFormatter::success(
            $transaction->paginate($limit),
            'Data list transaksi praktik berhasil diambil'
        );
    }

    public function update(Request $request, $id)
    {
        $transaction = TransactionPraktik::findOrFail($id);

        $transaction->update($request->all());

        return ResponseFormatter::success($transaction, 'Transaksi praktik berhasil diperbarui');
    }

    public function checkoutpraktik(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'animal_name' => 'required',
            'animal_type' => 'required',
            'descendants' => 'required',
            'animal_gender' => 'required',
            'note' => 'required',
            'first_symptom' => 'required',
            'second_symptom' => 'required',
            'doctor_id' => 'required',
            'status' => 'required',
            'sub_total' => 'required',
            'shipping_cost' => 'required',
            'discount' => 'required',
            'total' => 'required',
            'image' => 'required|image:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $image_uploaded_path = $image->store('praktik', 'public');
        $path_url = Storage::disk('public')->url($image_uploaded_path);

        $transaction = TransactionPraktik::create([
            'user_id' => $request->user_id,
            'animal_name' => $request->animal_name,
            'animal_type' => $request->animal_type,
            'descendants' => $request->descendants,
            'animal_gender' => $request->animal_gender,
            'note' => $request->note,
            'first_symptom' => $request->first_symptom,
            'second_symptom' => $request->second_symptom,
            'doctor_id' => $request->doctor_id,
            'status' => $request->status,
            'sub_total' => $request->sub_total,
            'shipping_cost' => $request->shipping_cost,
            'discount' => $request->discount,
            'total' => $request->total,
            'payment_url' => '',
            'praktik_photo_path' => $path_url,
        ]);

        // Konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');


        $transaction = TransactionPraktik::with(['doctor', 'user'])->find($transaction->id);

        $midtrans = array(
            'transaction_details' => array(
                'order_id' =>  $transaction->id,
                'gross_amount' => (int) $transaction->total,
            ),
            'customer_details' => array(
                'first_name'    => $transaction->user->name,
                'email'         => $transaction->user->email
            ),
            'enabled_payments' => array('gopay', 'bank_transfer'),
            'vtweb' => array()
        );

        try {
            // Ambil halaman payment midtrans
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            // Redirect ke halaman midtrans
            return ResponseFormatter::success($transaction, 'Transaksi berhasil');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 'Transaksi Gagal');
        }
    }
}

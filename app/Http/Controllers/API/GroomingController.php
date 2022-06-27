<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\TransactionGrooming;
use Exception;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;

class GroomingController extends Controller
{

    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 20);
        $status = $request->input('status');

        if ($id) {
            $transaction = TransactionGrooming::with(['user'])->find($id);

            if ($transaction)
                return ResponseFormatter::success(
                    $transaction,
                    'Data transaksi grooming berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
        }

        $transaction = TransactionGrooming::with(['user'])->where('user_id', Auth::user()->id);


        if ($status)
            $transaction->where('status', $status);

        return ResponseFormatter::success(
            $transaction->paginate($limit),
            'Data list transaksi grooming berhasil diambil'
        );
    }

    public function update(Request $request, $id)
    {
        $transaction = TransactionGrooming::findOrFail($id);

        $transaction->update($request->all());

        return ResponseFormatter::success($transaction, 'Transaksi grooming berhasil diperbarui');
    }

    public function checkoutgrooming(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'animal_name' => 'required',
            'animal_type' => 'required',
            'descendants' => 'required',
            'animal_gender' => 'required',
            'note' => 'required',
            'packet_grooming' => 'required',
            'status' => 'required',
            'sub_total' => 'required',
            'shipping_cost' => 'required',
            'discount' => 'required',
            'total' => 'required',
        ]);

        $transaction = TransactionGrooming::create([
            'user_id' => $request->user_id,
            'animal_name' => $request->animal_name,
            'animal_type' => $request->animal_type,
            'descendants' => $request->descendants,
            'animal_gender' => $request->animal_gender,
            'note' => $request->note,
            'packet_grooming' => $request->packet_grooming,
            'status' => $request->status,
            'sub_total' => $request->sub_total,
            'shipping_cost' => $request->shipping_cost,
            'discount' => $request->discount,
            'total' => $request->total,
            'payment_url' => ''
        ]);

        // Konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');


        $transaction = TransactionGrooming::with(['user'])->find($transaction->id);

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

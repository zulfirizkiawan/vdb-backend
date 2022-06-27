<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Diskon;
use Illuminate\Http\Request;

class DiscountController extends Controller
{

    public function all(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $data = Diskon::find($id);

            if ($data)
                return ResponseFormatter::success(
                    $data,
                    'Data produk berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }
    }
}

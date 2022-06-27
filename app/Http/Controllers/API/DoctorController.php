<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function all(Request $request)
    {
        // $id = $request->input('id');

        // if ($id) {
        $data = Doctor::all();

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
        // }
    }
}

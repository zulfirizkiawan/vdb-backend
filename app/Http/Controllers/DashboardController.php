<?php

namespace App\Http\Controllers;

use App\Models\TransactionGrooming;
use App\Models\TransactionPenitipan;
use App\Models\TransactionPraktik;
use App\Models\TsGroomingManual;
use App\Models\TsPenitipanManual;
use App\Models\TsPraktikManual;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $grooming = TransactionGrooming::count();
        $penitipan = TransactionPenitipan::count();
        $praktik = TransactionPraktik::count();

        $manualgrooming = TsGroomingManual::count();
        $manualpenitipan = TsPenitipanManual::count();
        $manualpraktik = TsPraktikManual::count();


        return view('dashboard', compact('grooming', 'penitipan', 'praktik', 'manualgrooming', 'manualpenitipan', 'manualpraktik'));
    }
}

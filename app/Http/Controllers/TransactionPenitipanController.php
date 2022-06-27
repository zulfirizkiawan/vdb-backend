<?php

namespace App\Http\Controllers;

use App\Models\TransactionPenitipan;
use DateTime;
use Illuminate\Http\Request;

class TransactionPenitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactionspenitipan = TransactionPenitipan::with(['user'])->paginate(10);

        return view('transactionspenitipan.index', [
            'transactionspenitipan' => $transactionspenitipan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionPenitipan $transactionspenitipan)
    {
        return view('transactionspenitipan.detail', [
            'item' => $transactionspenitipan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionPenitipan $transactionspenitipan)
    {
        $transactionspenitipan->delete();

        return redirect()->route('transactionspenitipan.index');
    }
}

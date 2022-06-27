<?php

namespace App\Http\Controllers;

use App\Models\TransactionGrooming;
use Illuminate\Http\Request;

class TransactionGroomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactionsgrooming = TransactionGrooming::with(['user'])->paginate(10);

        return view('transactionsgrooming.index', [
            'transactionsgrooming' => $transactionsgrooming
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
    public function show(TransactionGrooming $transactionsgrooming)
    {
        return view('transactionsgrooming.detail', [
            'item' => $transactionsgrooming
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
    public function destroy(TransactionGrooming $transactionsgrooming)
    {
        $transactionsgrooming->delete();

        return redirect()->route('transactionsgrooming.index');
    }
}

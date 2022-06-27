<?php

namespace App\Http\Controllers;

use App\Http\Requests\TsPraktikRequest;
use App\Models\TsPraktikManual;
use Illuminate\Http\Request;

class TsManualPraktikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $praktikmanual = TsPraktikManual::paginate(10);

        return view('praktikmanual.index', [
            'praktikmanual' => $praktikmanual
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praktikmanual.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TsPraktikRequest $request)
    {
        $data = $request->all();



        $transaction = TsPraktikManual::create($data);

        $transaction = TsPraktikManual::with(['doctor'])->find($transaction->id);

        return redirect()->route('praktikmanual.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TsPraktikManual $praktikmanual)
    {
        return view('praktikmanual.detail', [
            'item' => $praktikmanual
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TsPraktikManual $praktikmanual)
    {
        return view('praktikmanual.edit', [
            'item' => $praktikmanual
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TsPraktikRequest $request, TsPraktikManual $praktikmanual)
    {
        $data = $request->all();

        $praktikmanual->update($data);

        return redirect()->route('praktikmanual.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TsPraktikManual $praktikmanual)
    {
        $praktikmanual->delete();

        return redirect()->route('praktikmanual.index');
    }
}

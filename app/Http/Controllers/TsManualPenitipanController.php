<?php

namespace App\Http\Controllers;

use App\Http\Requests\TsPenitipanRequest;
use App\Models\TsPenitipanManual;
use Illuminate\Http\Request;

class TsManualPenitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penitipanmanual = TsPenitipanManual::paginate(10);

        return view('penitipanmanual.index', [
            'penitipanmanual' => $penitipanmanual
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penitipanmanual.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TsPenitipanRequest $request)
    {
        $data = $request->all();

        TsPenitipanManual::create($data);

        return redirect()->route('penitipanmanual.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TsPenitipanManual $penitipanmanual)
    {
        return view('penitipanmanual.detail', [
            'item' => $penitipanmanual
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TsPenitipanManual $penitipanmanual)
    {
        return view('penitipanmanual.edit', [
            'item' => $penitipanmanual
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TsPenitipanRequest $request, TsPenitipanManual $penitipanmanual)
    {
        $data = $request->all();

        $penitipanmanual->update($data);

        return redirect()->route('penitipanmanual.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TsPenitipanManual $penitipanmanual)
    {
        $penitipanmanual->delete();

        return redirect()->route('penitipanmanual.index');
    }
}

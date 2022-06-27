<?php

namespace App\Http\Controllers;

use App\Http\Requests\TsGroomingRequest;
use App\Models\TsGroomingManual;
use Illuminate\Http\Request;

class TsManualGroomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groomingmanual = TsGroomingManual::paginate(10);

        return view('groomingmanual.index', [
            'groomingmanual' => $groomingmanual
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groomingmanual.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TsGroomingRequest $request)
    {
        $data = $request->all();

        TsGroomingManual::create($data);

        return redirect()->route('groomingmanual.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TsGroomingManual $groomingmanual)
    {
        return view('groomingmanual.detail', [
            'item' => $groomingmanual
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TsGroomingManual $groomingmanual)
    {
        return view('groomingmanual.edit', [
            'item' => $groomingmanual
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TsGroomingRequest $request, TsGroomingManual $groomingmanual)
    {
        $data = $request->all();

        $groomingmanual->update($data);

        return redirect()->route('groomingmanual.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TsGroomingManual $groomingmanual)
    {
        $groomingmanual->delete();

        return redirect()->route('groomingmanual.index');
    }
}

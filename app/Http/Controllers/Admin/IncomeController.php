<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestIncome;
use App\income;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = income::all();
        return view('pages.pemasukan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pemasukan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestIncome $request)
    {
        $data = $request->all();
        $data['nominal'] = Str::slug($request->nominal);

        income::create($data);
        return redirect()->route('pemasukan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = income::findOrFail($id);
        return view('pages.pemasukan.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestIncome $request, $id)
    {
        $data = $request->all();
        $data['nominal'] = Str::slug($request->nominal);

        $item = income::findOrFail($id);
        $item->update($data);

        return redirect()->route('pemasukan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = income::findOrFail($id);
        $item->delete();

        return redirect()->route('pemasukan.index');
    }
}

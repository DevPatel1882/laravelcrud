<?php

namespace App\Http\Controllers;

use App\Models\operations;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('index')->with('crud',operations::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rec = new operations;
        $rec->name = $request->input('name');
        $rec->email = $request->input('email');
        $rec->address = $request->input('address');
        $rec->phone = $request->input('phone');
        $rec->city = $request->input('city');
        $rec->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function show(operations $operations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function edit(operations $operations,$id)
    {
        return view('edit')->with('crud',operations::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, operations $operations)
    {
        $res = operations::find($request->id);
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->address = $request->input('address');
        $res->phone = $request->input('phone');
        $res->city = $request->input('city');
        $res->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function destroy(operations $operations,$id)
    {
        operations::destroy(array('id',$id));
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rivew;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RivewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rivew = new Rivew();
        $data = $rivew->getAllRivew();


        return view ('rivew/index',['rivew'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rivew $rivew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rivew $rivew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rivew $rivew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rivew $rivew)
    {
        //
    }
}

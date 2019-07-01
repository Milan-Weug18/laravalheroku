<?php

namespace App\Http\Controllers;

use App\Toets;
use Illuminate\Http\Request;

class ToetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
            {
                $this->middleware('auth');
                $this->middleware('admin');
            }
          


    public function index()
    {
        return view('toets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $toets = Toets::all();
        return view('toets.index');
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
     * @param  \App\Toets  $toets
     * @return \Illuminate\Http\Response
     */
    public function show(Toets $toets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Toets  $toets
     * @return \Illuminate\Http\Response
     */
    public function edit(Toets $toets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Toets  $toets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toets $toets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Toets  $toets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toets $toets)
    {
        //
    }
}

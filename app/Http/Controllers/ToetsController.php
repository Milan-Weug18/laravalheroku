<?php

namespace App\Http\Controllers;

use App\Toets;
use Illuminate\Http\Request;
use App\Http\Requests\ToetsRequest;

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
        $toets = Toets::All();
        return view('toets.index', compact('toets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $toets = Toets::all();
        return view('toets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToetsRequest $request)
    {
        $request->validated();
        Toets::query()->create($request->all());
        return redirect('/toets');
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
        Toets::find($id)->delete();
        return redirect('/toets');
    }
}

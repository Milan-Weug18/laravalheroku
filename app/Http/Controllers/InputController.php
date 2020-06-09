<?php

namespace App\Http\Controllers;

use App;
use App\Input;
use Illuminate\Http\Request;
use App\Http\Requests\InputRequest;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        App::abort(500);
        $input = Input::all();
        return view('input.index', compact('input'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InputRequest $request)
    {

        $request->validated();
        input::query()->create($request->all());
        return redirect('/input');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show(Input $input)
    {
        return view('input.show', compact('input'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $input = Input::find($id);
        //dd($test);


        //$input = Input::all();

        return view ('input.edit', compact('input'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(InputRequest $request, Input $input)
    {
        $request->validated();
        $input->update($request->all());

        return view('input.show', compact('input'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Input::find($id)->delete();
        return redirect('/input');
    }
}

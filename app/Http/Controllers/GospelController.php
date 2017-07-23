<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use ShawnSandy\Bluelines\App\Blueline;

class GospelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
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
     * @param  \ShawnSandy\Bluelines\App\Blueline $blueline
     * @return \Illuminate\Http\Response
     */
    public function show(Blueline $article)
    {
        $article->load(['categories', 'tags']);
        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \ShawnSandy\Bluelines\App\Blueline $blueline
     * @return \Illuminate\Http\Response
     */
    public function edit(Blueline $blueline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request                    $request
     * @param \App\Http\Controllers\Blueline $blueline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blueline $blueline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \ShawnSandy\Bluelines\App\Blueline $blueline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blueline $blueline)
    {
        //
    }
}

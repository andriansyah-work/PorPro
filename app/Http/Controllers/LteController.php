<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('home');
    }

    public function dashboard1(){
        return view('dashboard.dashboard1');
    }
    public function dashboard2(){
        return view('dashboard.dashboard2');
    }
    public function dashboard3(){
        return view('dashboard.dashboard3');
    }
    public function widgets(){
        return view('widgets');
    }
    public function chartjs(){
        return view('chart.chartjs');
    }
    public function flot(){
        return view('chart.flot');
    }
    public function inline(){
        return view('chart.inline');
    }
    public function uplot(){
        return view('chart.uplot');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

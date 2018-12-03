<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('report.index');
    }

    /**
     * Show the form for creating a new HAI report.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHai()
    {
        return view('reportHai.create');
    }

    /**
     * Show the form for creating a new mortality report
     * 
     * @return \Illuminate\Http\Response
     */  
    public function createMortality()
    {
        return view('reportMortality.create');
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
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('cost-centres.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('cost-centres.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CostCentre $costCentre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function destroy(CostCentre $costCentre)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\InterestSurvey;
use Illuminate\Http\Request;

class InterestSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.interestSurvey');
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
     * @param  \App\InterestSurvey  $interestSurvey
     * @return \Illuminate\Http\Response
     */
    public function show(InterestSurvey $interestSurvey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InterestSurvey  $interestSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(InterestSurvey $interestSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InterestSurvey  $interestSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InterestSurvey $interestSurvey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InterestSurvey  $interestSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(InterestSurvey $interestSurvey)
    {
        //
    }
}

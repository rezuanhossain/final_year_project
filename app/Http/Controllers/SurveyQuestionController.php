<?php

namespace App\Http\Controllers;

use App\SurveyQuestion;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SurveyQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $question=SurveyQuestion::first();
        // dd($question);
        return view('survey.interestSurvey', compact('question'));
    }
    public function get_options(Request $request){
       if($request->type !=="cat"){
            $question=SurveyQuestion::where('type',$request->type)->first();
       }
        if($request->type=="cat"){
            $cats=Category::all();
            return response(['cats' => $cats]);
            

        }elseif($request->type=="subcat"){
            $sub_cats=SubCategory::all();
            return response(['message'=>"Your Feedback Stored Successfully..!!",'sub_cats' => $sub_cats,'question'=>$question]);
        }else{

        }
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
        $question=SurveyQuestion::create([
            'question_body' => $request->question_body,
            'type' => $request->selectedType,
        ]);
        return response(['message'=>'success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(SurveyQuestion $surveyQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyQuestion $surveyQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyQuestion $surveyQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyQuestion $surveyQuestion)
    {
        //
    }
}

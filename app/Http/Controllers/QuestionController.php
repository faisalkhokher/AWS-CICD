<?php

namespace App\Http\Controllers;

use App\Option;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // store multiple questions
        $questions =  $request->questions;
        // dd($questions);

        foreach ($questions as $question) {
            $QObj = (object) $question;
            $questionObj = new Question();
            $questionObj->company_id = auth()->user()->id;
            $questionObj->subject   = $request->subject;
            $questionObj->type = $request->category;
            $questionObj->question = $QObj->question;
            $questionObj->save();

            // Now save options
            Option::insert(
                ['options' => $QObj->o1, 'is_correct' => $QObj->checkbox1[0] ?? 0 , 'question_id' => $questionObj->id],
            );
            Option::insert(
                ['options' => $QObj->o2, 'is_correct' => $QObj->checkbox2[0] ?? 0 , 'question_id' => $questionObj->id],
            );
            Option::insert(
                ['options' => $QObj->o3, 'is_correct' => $QObj->checkbox3[0] ?? 0 , 'question_id' => $questionObj->id],
            );
            Option::insert(
                ['options' => $QObj->o4, 'is_correct' => $QObj->checkbox4[0] ?? 0, 'question_id' => $questionObj->id]
            );

        }
        return back()->with('success', 'Questions added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

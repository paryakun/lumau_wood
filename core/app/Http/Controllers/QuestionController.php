<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Toastr;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::all();
        return view('admin.question.index',compact('questions'));
    }
    public function edit($id){
        $question = Question::find($id);
        return view('admin.question.edit',compact('question'));
    }
    public function update(Request $request){
        $question = Question::find($request->id);
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->save();
        return 1;
    }
}

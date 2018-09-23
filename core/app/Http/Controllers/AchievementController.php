<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achievement;
use Toastr;

class AchievementController extends Controller
{
    public function index(){
        $achievements = Achievement::paginate(10);
        return view('admin.achievement.index',compact('achievements'));
    }
    public function edit($id){
        $achievement = Achievement::find($id);
        return view('admin.achievement.edit',compact('achievement'));
    }
    public function update(Request $request){
        $achievement = Achievement::find($request->id);
        $achievement->title = $request->title;
        $achievement->icon = $request->icon;
        $achievement->total = $request->total;
        $achievement->save();
        return 1;
    }
}

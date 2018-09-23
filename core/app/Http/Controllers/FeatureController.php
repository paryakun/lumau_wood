<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use Image;
use Toastr;

class FeatureController extends Controller
{
    public function index(){
        $features = Feature::paginate(10);
        return view('admin.feature.index',compact('features'));
    }
    public function edit($id){
        $feature = Feature::find($id);
        return view('admin.feature.edit',compact('feature'));
    }
    public function update(Request $request){
        $feature = Feature::find($request->id);
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->icon = $request->icon;
        $feature->save();
        return 1;
    }
}

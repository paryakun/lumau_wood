<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
use Image;
use Toastr;

class AppController extends Controller
{
    public function index(){
        $apps = App::orderBy('id','desc')->paginate(10);
        return view('admin.app-section.index',compact('apps'));
    }
    public function create(){
        return view('admin.app-section.create');
    }
    public function edit($id){
        $app = App::find($id);
        return view('admin.app-section.edit',compact('app'));
    }
    public function store(Request $request){
        // return $request->all();

        $this->validate($request,array(
            'image' => 'required|mimes:png,jpg,jpeg' ,
        ));
        $app = new App();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/app-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $app->image = $imgUrl;
        }

        $app->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function update(Request $request){
        // return $request->all();
        $this->validate($request,array(
            'image' => 'required|mimes:png,jpg,jpeg' ,
        ));
        $app =  App::find($request->id);
        if($request->hasFile('image')){
            @unlink($app->image);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/app-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $app->image = $imgUrl;
            $app->save();
            Toastr::success('Information Updated Successfully...');
        }

        return redirect()->back();
    }
    public function delete(Request $request){
        $app = App::find($request->id);
        @unlink($app->image);
        $app->delete();
        Toastr::success('Information Deleted Successfully...');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserReview;
use Image;
use Toastr;

class UserReviewController extends Controller
{
    public function index(){
        $userReviews = UserReview::orderBy('id','desc')->paginate(10);
        return view('admin.users-review.index',compact('userReviews'));
    }
    public function create(){
        return view('admin.users-review.create');
    }
    public function edit($id){
        $userReview = UserReview::find($id);
        return view('admin.users-review.edit',compact('userReview'));
    }
    public function store(Request $request){

        $this->validate($request,array(
            'image' => 'required|mimes:png,jpg,jpeg' ,
            'name' => 'required' ,
            'position' => 'required' ,
            'description' => 'required' ,
        ));

        $userReview = new UserReview();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/member-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $userReview->image = $imgUrl;
        }

        $userReview->name = $request->name;
        $userReview->position = $request->position;
        $userReview->description = $request->description;
        $userReview->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function update(Request $request){
        // return $request->all();
        $this->validate($request,array(
            'image' => 'nullable|mimes:png,jpg,jpeg' ,
            'name' => 'required' ,
            'position' => 'required' ,
            'description' => 'required' ,
        ));


        $userReview =  UserReview::find($request->id);
        if($request->hasFile('image')){
            @unlink($userReview->image);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/user-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $userReview->image = $imgUrl;
        }

        $userReview->name = $request->name;
        $userReview->position = $request->position;
        $userReview->description = $request->description;
        $userReview->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function delete(Request $request){
        $userReview = UserReview::find($request->id);
        @unlink($userReview->image);
        $userReview->delete();
        Toastr::success('Information Deleted Successfully...');
        return redirect()->back();
    }
}

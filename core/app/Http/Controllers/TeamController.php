<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Image;
use Toastr;

class TeamController extends Controller
{
    public function index(){
        $members = Team::orderBy('id','desc')->paginate(10);
        return view('admin.team.index',compact('members'));
    }
    public function create(){
        return view('admin.team.create');
    }
    public function edit($id){
        $member = Team::find($id);
        return view('admin.team.edit',compact('member'));
    }
    public function store(Request $request){
        // return $request->all();

        $this->validate($request,array(
            'image' => 'required|mimes:png,jpg,jpeg' ,
            'name' => 'required',
            'position' => 'required',
            'lnk_one' => 'required',
            'lnk_two' => 'required',
            'lnk_three' => 'required',
            'lnk_four' => 'required',
        ));

        $member = new Team();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/member-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $member->image = $imgUrl;
        }

        $member->name = $request->name;
        $member->position = $request->position;
        $member->lnk_one = $request->lnk_one;
        $member->lnk_two = $request->lnk_two;
        $member->lnk_three = $request->lnk_three;
        $member->lnk_four = $request->lnk_four;
        $member->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function update(Request $request){
        // return $request->all();

        $this->validate($request,array(
            'image' => 'nullable|mimes:png,jpg,jpeg' ,
            'name' => 'required',
            'position' => 'required',
            'lnk_one' => 'required',
            'lnk_two' => 'required',
            'lnk_three' => 'required',
            'lnk_four' => 'required',
        ));

        $member =  Team::find($request->id);
        if($request->hasFile('image')){
            @unlink($member->image);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/member-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $member->image = $imgUrl;
        }

        $member->name = $request->name;
        $member->position = $request->position;
        $member->lnk_one = $request->lnk_one;
        $member->lnk_two = $request->lnk_two;
        $member->lnk_three = $request->lnk_three;
        $member->lnk_four = $request->lnk_four;
        $member->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function delete(Request $request){

       

        $member = Team::find($request->id);
        @unlink($member->image);
        $member->delete();
        Toastr::success('Information Deleted Successfully...');
        return redirect()->back();
    }
}

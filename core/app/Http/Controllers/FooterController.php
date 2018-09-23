<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use Toastr;

class FooterController extends Controller
{
    public function index(){
        $footers = Footer::orderBy('id','desc')->paginate(10);
        return view('admin.footer.index',compact('footers'));
    }
    public function create(){
        return view('admin.footer.create');
    }
    public function edit($id){
        $footers = Footer::find($id);
        return view('admin.footer.edit',compact('footers'));
    }
    public function store(Request $request){
        // return $request->all();
        $this->validate($request,[
            'icon' => 'required',
            'link' => 'required|url',
        ]);

        $footer = new Footer();
       
        $footer->icon = $request->icon;
        $footer->link = $request->link;
        $footer->save();
        return 1;
    }
    public function update(Request $request){
        // return $request->all();
        $footer =  Footer::find($request->id);
        $footer->icon = $request->icon;
        $footer->link = $request->link;
        $footer->save();
        Toastr::success('Information Updated Successfully...');
        return 1;
    }
    public function delete(Request $request){
        $footer = Footer::find($request->id);
        $footer->delete();
        Toastr::success('Information Deleted Successfully...');
        return redirect()->back();
    }
}

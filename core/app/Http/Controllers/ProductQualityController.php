<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductQuality;
use App\Image;
use Toastr;
use Session;

class ProductQualityController extends Controller
{
    public function index(){
        $productQuality = ProductQuality::paginate(10);
        return view('admin.product-quality.index',compact('productQuality'));
    }
    public function edit($id){
        $productQuality = ProductQuality::find($id);
        // return $productQuality;
        return view('admin.product-quality.edit',compact('productQuality'));
    }
    public function update(Request $request){

        $this->validate($request,[
            'title' =>'required|max:191',
        ]);
        $productQuality = ProductQuality::find($request->id);
        $productQuality->title = $request->title;
        $productQuality->icon = $request->icon;
        $productQuality->save();
        return 1;
    }
}

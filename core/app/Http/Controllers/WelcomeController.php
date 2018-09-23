<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;
use App\Feature;
use App\ProductQuality;
use App\Achievement;
use App\App;
use App\Team;
use App\UserReview;
use App\Question;
use App\Footer;
use App\PricingPlan;
use App\PricingPlanDetail;
use App\Subscriber;
use App\UserMessage;

class WelcomeController extends Controller
{
    public function index(){
        $data = GeneralSetting::first();
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
        return view('frontend.master',[
            'data' => $data,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
        ]);
    }

    public function subscribe(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:subscribers',
        ]
        );
        $subscriber = new Subscriber();
        $subscriber->email  = $request->email;
        $subscriber->save();
        return back();
    }
    public function sendMessage(Request $request){
        $this->validate($request,[
            'name' => 'required|max:30',
            'email' => 'required|email',
            'message' => 'required|max:300',
        ]);
        $userMessage = new UserMessage();
        $userMessage->name = $request->name;
        $userMessage->email = $request->email;
        $userMessage->message = $request->message;
        $userMessage->save();
        return back();
    }
}

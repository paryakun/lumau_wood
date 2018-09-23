<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;
use Image;
use Toastr;

class GeneralSettingController extends Controller
{
    public function viewGeneralSetting(){
        $settings = GeneralSetting::first();
        return view('admin.setting.index',compact('settings'));
    }

    public function updateGeneralSetting(Request $request){
        $settings = GeneralSetting::first();
        $settings->website_name = $request->website_name;
        $settings->website_title = $request->website_title;
        $settings->menu_download_link = $request->menu_download_link;
        $settings->base_color = substr($request->base_color,1);
        $settings->sub_color = substr($request->sub_color,1);
        $settings->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewLogoIcon(){
        return view('admin.logo-icon.index');
    }

    public function updateLogoIcon(Request $request){
   
        $this->validate($request,array(
            'logo' => 'nullable|mimes:png,jpg,jpeg' ,
            'icon' => 'nullable|mimes:png,jpg,jpeg' ,
        ));
  
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $filename = 'logo' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            Image::make($image)->save($location);
        };
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $filename = 'icon' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewHeaderSection(){
        $header = GeneralSetting::first();
        return view('admin.header-section.index',compact('header'));
    }
    public function updateHeaderSection(Request $request){

        $this->validate($request,array(
            'background_image' => 'nullable|mimes:png,jpg,jpeg' ,
            'advertise_image' => 'nullable|mimes:png,jpg,jpeg' ,
            'link_one_image' => 'nullable|mimes:png,jpg,jpeg' ,
            'link_two_image' => 'nullable|mimes:png,jpg,jpeg' ,
        ));


        if ($request->hasFile('background_image')) {
            $image = $request->file('background_image');
            $filename = 'background-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            Image::make($image)->save($location);
        };
        if ($request->hasFile('advertise_image')) {
            $image = $request->file('advertise_image');
            $filename = 'advertise-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };
        if ($request->hasFile('link_one_image')) {
            $image = $request->file('link_one_image');
            $filename = 'link-one-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };
        if ($request->hasFile('link_two_image')) {
            $image = $request->file('link_two_image');
            $filename = 'link-two-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };


        $header = GeneralSetting::first();
        $header->header_title = $request->header_title;
        $header->header_text = $request->header_text;
        $header->link_one = $request->link_one;
        $header->link_two = $request->link_two;
        $header->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    

    public function viewAboutCompanyInfo(){
        $company = GeneralSetting::first();
        return view('admin.about-company.index',compact('company'));
    }
    public function updateAboutCompanyInfo(Request $request){

        $this->validate($request,array(
            'about_section_img' => 'nullable|mimes:png,jpg,jpeg' ,
        ));
       
        if ($request->hasFile('about_section_img')) {
            $image = $request->file('about_section_img');
            $filename = 'about-section-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };

        $header = GeneralSetting::first();
        $header->company_title = $request->company_title;
        $header->company_short_title = $request->company_short_title;
        $header->company_description = $request->company_description;
        $header->company_btn_link = $request->company_btn_link;
        $header->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewFeatureHeaderInfo(){
        $featureHeader = GeneralSetting::first();
        return view('admin.feature.header',compact('featureHeader'));
    }

    
    public function updateFeatureHeaderInfo(Request $request){
        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $filename = 'feature-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };

        $featureHeader = GeneralSetting::first();
        $featureHeader->feature_title = $request->feature_title;
        $featureHeader->feature_text = $request->feature_text;
        $featureHeader->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewQuestioneHaderInfo(){
        $question = GeneralSetting::first();
        return view('admin.question.header',compact('question'));
    }

    
    public function updateQuestionHeaderInfo(Request $request){
        if ($request->hasFile('question_section_image')) {
            $image = $request->file('question_section_image');
            $filename = 'question-section-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };

        $question = GeneralSetting::first();
        $question->question_title = $request->question_title;
        $question->question_description = $request->question_description;
        $question->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function viewContactHeaderInfo(){
        $contact = GeneralSetting::first();
        return view('admin.contact.header',compact('contact'));
    }

    public function updateContactHeaderInfo(Request $request){
        $contact = GeneralSetting::first();
        $contact->contact_title = $request->contact_title;
        $contact->contact_description = $request->contact_description;
        $contact->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewVideoInfo(){
        $video = GeneralSetting::first();
        return view('admin.video-section.index',compact('video'));
    }

    public function updateVideoInfo(Request $request){

        $this->validate($request,array(
            'video_section_bg_img' => 'nullable|mimes:png,jpg,jpeg' ,
        ));

        if ($request->hasFile('video_section_bg_img')) {
            $image = $request->file('video_section_bg_img');
            $filename = 'video-section-bg-img' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };

        $video = GeneralSetting::first();
        $video->video_title = $request->video_title;
        $video->video_link = $request->video_link;
        $video->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function viewpPicingHeaderInfo(){
        $pricing = GeneralSetting::first();
        return view('admin.pricing-plan.header',compact('pricing'));
    }

    public function updatePricingHeaderInfo(Request $request){
        $pricing = GeneralSetting::first();
        $pricing->pricing_title = $request->pricing_title;
        $pricing->pricing_description = $request->pricing_description;
        $pricing->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    public function viewContactInfo(){
        $contact = GeneralSetting::first();
        return view('admin.contact.index',compact('contact'));
    }

    public function updateContactInfo(Request $request){
        $contact = GeneralSetting::first();
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewSuitableSectionInfo(){
        $suitableInfo = GeneralSetting::first();
        return view('admin.suitable-section.index',compact('suitableInfo'));
    }

    
    public function updateSuitableSectionInfo(Request $request){


        $this->validate($request,array(
            'suitable_section_bg_img' => 'nullable|mimes:png,jpg,jpeg' ,
            'suitable_section_img' => 'nullable|mimes:png,jpg,jpeg' ,
        ));

       
        if ($request->hasFile('suitable_section_bg_img')) {
            $image = $request->file('suitable_section_bg_img');
            $filename = 'suitable-section-bg-img' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };
        if ($request->hasFile('suitable_section_img')) {
            $image = $request->file('suitable_section_img');
            $filename = 'suitable-section-img' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };

        $featureHeader = GeneralSetting::first();
        $featureHeader->suitable_title = $request->suitable_title;
        $featureHeader->suitable_description = $request->suitable_description;
        $featureHeader->suitable_link = $request->suitable_link;
        $featureHeader->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewAppHeaderInfo(){
        $appHeader = GeneralSetting::first();
        return view('admin.app-section.header',compact('appHeader'));
    }

    
    public function updateAppHeaderInfo(Request $request){
        $featureHeader = GeneralSetting::first();
        $featureHeader->screensoht_title = $request->screensoht_title;
        $featureHeader->screensoht_description = $request->screensoht_description;
        $featureHeader->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewTeamHeaderInfo(){
        $teamHeader = GeneralSetting::first();
        return view('admin.team.header',compact('teamHeader'));
    }

    
    public function updateTeamHeaderInfo(Request $request){
        $featureHeader = GeneralSetting::first();
        $featureHeader->team_title = $request->team_title;
        $featureHeader->team_description = $request->team_description;
        $featureHeader->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }
    

    public function viewFooterImage(){
        return view('admin.footer.header');
    }

    
    public function updateFooterImage(Request $request){

        $this->validate($request,array(
            'footer_image' => 'required|mimes:png,jpg,jpeg' ,
        ));
       
        if ($request->hasFile('footer_image')) {
            $image = $request->file('footer_image');
            $filename = 'footer-image' . '.' . 'png';
            $location = 'assets/frontend/img/'. $filename;
            $img = Image::make($image)->save($location);
        };

        $footerImg = GeneralSetting::first();
        $footerImg->feature_title = $request->feature_title;
        $footerImg->feature_text = $request->feature_text;
        $footerImg->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewUserReviewHeaderInfo(){
        $userRvHeader = GeneralSetting::first();
        return view('admin.users-review.header',compact('userRvHeader'));
    }

    public function updateUserReviewHeaderInfo(Request $request){
        $userRvHeader = GeneralSetting::first();
        $userRvHeader->user_review_title = $request->user_review_title;
        $userRvHeader->user_review_star = $request->user_review_star;
        $userRvHeader->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

    public function viewsubScriberHeaderInfo(){
        $subscriberHeader = GeneralSetting::first();
        return view('admin.subscriber.header',compact('subscriberHeader'));
    }

    public function updatesubScriberHeaderInfo(Request $request){
        $userRvHeader = GeneralSetting::first();
        $userRvHeader->subscriber_title = $request->subscriber_title;
        $userRvHeader->save();
        Toastr::success('Information Updated Successfully...');
        return redirect()->back();
    }

}


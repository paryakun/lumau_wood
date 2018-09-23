<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/','WelcomeController@index')->name('website');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login')->name('login');


Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){


    Route::get('/change-password', 'HomeController@showChangePasswordForm')->name('admin.change-password');
    Route::post('/change-password', 'HomeController@updatePassword')->name('admin.change-password');

    Route::get('general-setting','GeneralSettingController@viewGeneralSetting')->name('admin.general-setting');
    Route::post('general-setting','GeneralSettingController@updateGeneralSetting')->name('admin.general-setting.update');

    // logo and icon
    Route::get('logo-icon','GeneralSettingController@viewLogoIcon')->name('admin.logo-icon');
    Route::post('logo-icon','GeneralSettingController@updateLogoIcon')->name('admin.logo-icon.update');

    Route::get('header','GeneralSettingController@viewHeaderSection')->name('admin.header');
    Route::post('header','GeneralSettingController@updateHeaderSection')->name('admin.header.update');
    
    //company route
    Route::get('about-company','GeneralSettingController@viewAboutCompanyInfo')->name('admin.about-company');
    Route::post('about-company','GeneralSettingController@updateAboutCompanyInfo')->name('admin.about-company.update');

    //contact route
    Route::get('contact','GeneralSettingController@viewContactInfo')->name('admin.contact');
    Route::post('contact','GeneralSettingController@updateContactInfo')->name('admin.contact.update');

    //contact header route
    Route::get('contact-header','GeneralSettingController@viewContactHeaderInfo')->name('admin.contact-header');
    Route::post('contact-header','GeneralSettingController@updateContactHeaderInfo')->name('admin.contact-header.update');

    //video route
    Route::get('video','GeneralSettingController@viewVideoInfo')->name('admin.video');
    Route::post('video','GeneralSettingController@updateVideoInfo')->name('admin.video.update');

     //suitable section route
     Route::get('suitable-section','GeneralSettingController@viewSuitableSectionInfo')->name('admin.suitable-section');
     Route::post('suitable-section','GeneralSettingController@updateSuitableSectionInfo')->name('admin.suitable-section.update');

    //product qualuty
    Route::get('product-quality','ProductQualityController@index')->name('admin.product-quality');
    Route::get('product-quality-edit/{id}','ProductQualityController@edit')->name('admin.product-quality.edit');
    Route::post('product-quality','ProductQualityController@update')->name('admin.product-quality.update');
    
    //featur route
    Route::get('feature-header','GeneralSettingController@viewFeatureHeaderInfo')->name('admin.feature-header');
    Route::post('feature-header','GeneralSettingController@updateFeatureHeaderInfo')->name('admin.feature-header.update');

    Route::get('features','FeatureController@index')->name('admin.features');
    Route::get('feature-edit/{id}','FeatureController@edit')->name('admin.feature.edit');
    Route::post('feature-update','FeatureController@update')->name('admin.feature.update');

   //Achievement route
    Route::get('achievements','AchievementController@index')->name('admin.achievements');
    Route::get('achievement-edit/{id}','AchievementController@edit')->name('admin.achievement.edit');
    Route::post('achievement-update','AchievementController@update')->name('admin.achievement.update');

   //App route
   Route::get('app-header','GeneralSettingController@viewAppHeaderInfo')->name('admin.app-header');
   Route::post('app-header','GeneralSettingController@updateAppHeaderInfo')->name('admin.app-header.update');

   Route::get('apps','AppController@index')->name('admin.apps');
   Route::get('app-create','AppController@create')->name('admin.app.create');
   Route::post('app-store','AppController@store')->name('admin.app.store');
   Route::get('app-edit/{id}','AppController@edit')->name('admin.app.edit');
   Route::post('app-update','AppController@update')->name('admin.app.update');
   Route::post('app-delete','AppController@delete')->name('admin.app.delete');

    //team  route
    Route::get('team-header','GeneralSettingController@viewTeamHeaderInfo')->name('admin.team-header');
    Route::post('team-header','GeneralSettingController@updateTeamHeaderInfo')->name('admin.team-header.update');
 
    Route::get('members','TeamController@index')->name('admin.members');
    Route::get('member-create','TeamController@create')->name('admin.member.create');
    Route::post('member-store','TeamController@store')->name('admin.member.store');
    Route::get('member-edit/{id}','TeamController@edit')->name('admin.member.edit');
    Route::post('member-update','TeamController@update')->name('admin.member.update');
    Route::post('member-delete','TeamController@delete')->name('admin.member.delete');

    //question  route
    Route::get('question-header','GeneralSettingController@viewQuestioneHaderInfo')->name('admin.question-header');
    Route::post('question-header','GeneralSettingController@updateQuestionHeaderInfo')->name('admin.question-header.update');
 
    Route::get('questions','QuestionController@index')->name('admin.questions');
    Route::get('question-edit/{id}','QuestionController@edit')->name('admin.question.edit');
    Route::post('question-update','QuestionController@update')->name('admin.question.update');

      //footer  route
      Route::get('footer-image','GeneralSettingController@viewFooterImage')->name('admin.footer-image');
      Route::post('footer-image','GeneralSettingController@updateFooterImage')->name('admin.footer-image.update');
   
      Route::get('icons','FooterController@index')->name('admin.icons');
      Route::get('icon-create','FooterController@create')->name('admin.icon.create');
      Route::post('icon-store','FooterController@store')->name('admin.icon.store');
      Route::get('icon-edit/{id}','FooterController@edit')->name('admin.icon.edit');
      Route::post('icon-update','FooterController@update')->name('admin.icon.update');
      Route::post('icon-delete','FooterController@delete')->name('admin.icon.delete');
  
    //user review  route
    Route::get('user-review','GeneralSettingController@viewUserReviewHeaderInfo')->name('admin.user-review');
    Route::post('user-review','GeneralSettingController@updateUserReviewHeaderInfo')->name('admin.user-review-header.update');

    Route::get('users-review','UserReviewController@index')->name('admin.users-review');
    Route::get('user-review-create','UserReviewController@create')->name('admin.user-review.create');
    Route::post('user-review-store','UserReviewController@store')->name('admin.user-review.store');
    Route::get('user-review-edit/{id}','UserReviewController@edit')->name('admin.user-review.edit');
    Route::post('user-review-update','UserReviewController@update')->name('admin.user-review.update');
    Route::post('user-review-delete','UserReviewController@delete')->name('admin.user-review.delete');


    //subscribers route
    Route::get('subscriber-header','GeneralSettingController@viewsubScriberHeaderInfo')->name('admin.subscriber-header');
    Route::post('subscriber-header','GeneralSettingController@updatesubScriberHeaderInfo')->name('admin.subscriber-header.update');

    Route::get('subscribers','SubscriberController@index')->name('admin.subscribers');


    // user message  route
    Route::get('users-messages','UserMessageController@index')->name('admin.users-messages');
    // pricing plan route

    Route::get('pricing-header','GeneralSettingController@viewpPicingHeaderInfo')->name('admin.pricing-header');
    Route::post('pricing-header','GeneralSettingController@updatePricingHeaderInfo')->name('admin.pricing-header.update');

    Route::get('plans','PricingPlanController@index')->name('admin.plans');
    Route::get('plan-create','PricingPlanController@create')->name('admin.plan.create');
    Route::post('plan-store','PricingPlanController@store')->name('admin.plan.store');
    Route::get('plan-edit/{id}','PricingPlanController@edit')->name('admin.plan.edit');
    Route::post('plan-update','PricingPlanController@update')->name('admin.plan.update');

    Route::get('delete-plan-detail/{id}','PricingPlanController@deleteItem')->name('admin.plan-detail.delete');


});

Route::post('subscriber-mail','WelcomeController@subscribe')->name('subscriber.mail');
Route::post('user-message','WelcomeController@sendMessage')->name('user.message');





<?php

use Illuminate\Support\Facades\Route;
use App\Mail\newsLetterMail;

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


Auth::routes(['verify' => true]);
Route::group(['middleware' => ['verified', 'adminConfirm']], function () {
  
    Route::get('/home', 'HomeController@index')->name('home');
    //banner start
        Route::get('home/addBanners', 'bannerController@addBanner')->name('addBanner');
        Route::post('home/bannerPost', 'bannerController@bannerPost')->name('bannerPost');
        Route::get('home/bannerView', 'bannerController@bannerView')->name('bannerView');
        Route::get('home/bannerUpdate/{id}', 'bannerController@bannerUpdate')->name('bannerUpdate');
        Route::post('home/bannerUpdatePost', 'bannerController@bannerUpdatePost')->name('bannerUpdatePost');
    //banner end
    
    //servide start
        Route::get('home/serviceAdd', 'serviceController@serviceAdd')->name('serviceAdd');
        Route::post('home/servicePost', 'serviceController@servicePost')->name('servicePost');
        Route::get('home/serviceView', 'serviceController@serviceView')->name('serviceView');
        Route::get('home/serviceUpdate/{id}', 'serviceController@serviceUpdate')->name('serviceUpdate');
        Route::post('home/serviceUpdatePost', 'serviceController@serviceUpdatePost')->name('serviceUpdatePost');
        Route::get('home/serviceDelete/{id}', 'serviceController@serviceDelete')->name('serviceDelete');
    //service end

    //Destination start
        Route::get('home/destinationAdd', 'destinationController@destinationAdd')->name('destinationAdd');
        Route::post('home/destinationPost', 'destinationController@destinationPost')->name('destinationPost');
        Route::get('home/destinationView', 'destinationController@destinationView')->name('destinationView');
        Route::get('home/popularDestination', 'destinationController@popularDestination')->name('popularDestination');
        Route::get('home/destinationUpdate/{slug}', 'destinationController@destinationUpdate')->name('destinationUpdate');
        Route::post('home/destinationUpdatePost', 'destinationController@destinationUpdatePost')->name('destinationUpdatePost');
        Route::get('home/destinationDelete/{id}', 'destinationController@destinationDelete')->name('destinationDelete');
        Route::get('home/popularDestinationRemove/{id}', 'destinationController@popularDestinationRemove')->name('popularDestinationRemove');
    //Destination end
  
    //Blog start
        Route::get('home/blogAdd', 'blogController@blogAdd')->name('blogAdd');
        Route::post('home/blogPost', 'blogController@blogPost')->name('blogPost');
        Route::get('home/blogView', 'blogController@blogView')->name('blogView');
        Route::get('home/blogUpdate/{slug}', 'blogController@blogUpdate')->name('blogUpdate');
        Route::post('home/blogUpdatePost', 'blogController@blogUpdatePost')->name('blogUpdatePost');
        Route::get('home/blogDelete/{slug}', 'blogController@blogDelete')->name('blogDelete');

        Route::get('home/viewCommentOnPage/{id}', 'blogController@viewCommentOnPage')->name('viewCommentOnPage');
        Route::get('home/allComments', 'blogController@allComments')->name('allComments');
        Route::get('home/commentDelete/{id}', 'blogController@commentDelete')->name('commentDelete');
        Route::get('home/allCommentClear', 'blogController@allCommentClear')->name('allCommentClear');
    //Blog end

    //Message start
    Route::get('home/viewMessageOnPage/{id}', 'messageController@viewMessageOnPage')->name('viewMessageOnPage');
    Route::get('home/allMessage', 'messageController@allMessage')->name('allMessage');
    Route::get('home/messageDelete/{id}', 'messageController@messageDelete')->name('messageDelete');
    Route::get('home/markUnread/{id}', 'messageController@markUnread')->name('markUnread');
    Route::get('home/allMessageClear', 'messageController@allMessageClear')->name('allMessageClear');
    //Message end

    //tourist_exper start
        Route::get('home/tourist_experAdd', 'tourist_experienceController@tourist_experAdd')->name('tourist_experAdd');
        Route::post('home/tourist_experPost', 'tourist_experienceController@tourist_experPost')->name('tourist_experPost');
        Route::get('home/tourist_experView', 'tourist_experienceController@tourist_experView')->name('tourist_experView');
        Route::get('home/tourist_experUpdate/{slug}', 'tourist_experienceController@tourist_experUpdate')->name('tourist_experUpdate');
        Route::post('home/tourist_experUpdatePost', 'tourist_experienceController@tourist_experUpdatePost')->name('tourist_experUpdatePost');
        Route::get('home/tourist_experDelete/{slug}', 'tourist_experienceController@tourist_experDelete')->name('tourist_experDelete');
    //tourist_exper end

    //newsLatter start
        Route::get('home/subscriber', 'newsLatterController@subscriber')->name('subscriber');
        Route::get('home/subscriberDelete/{id}', 'newsLatterController@subscriberDelete')->name('subscriberDelete');
        Route::get('/email', 'newsLatterController@sendNewsLetter')->name('sendNewsLetter');
        
    //newsLetter end

    //Our team start
        Route::get('home/our_teamAdd', 'our_teamController@our_teamAdd')->name('our_teamAdd');
        Route::get('home/home_item/', 'our_teamController@home_item')->name('home_item');
        Route::get('home/home_item_remove/{slug}', 'our_teamController@home_item_remove')->name('home_item_remove');
        Route::post('home/our_teamPost', 'our_teamController@our_teamPost')->name('our_teamPost');
        Route::get('home/our_teamView', 'our_teamController@our_teamView')->name('our_teamView');
        Route::get('home/our_teamUpdate/{slug}', 'our_teamController@our_teamUpdate')->name('our_teamUpdate');
        Route::post('home/our_teamUpdatePost', 'our_teamController@our_teamUpdatePost')->name('our_teamUpdatePost');
        Route::get('home/our_teamDelete/{slug}', 'our_teamController@our_teamDelete')->name('our_teamDelete');
    //Our team end

    //Our team start
        Route::get('home/why_choose_usAdd', 'why_choose_useController@why_choose_usAdd')->name('why_choose_usAdd');
        Route::post('home/why_choose_usPost', 'why_choose_useController@why_choose_usPost')->name('why_choose_usPost');
        Route::get('home/why_choose_usView', 'why_choose_useController@why_choose_usView')->name('why_choose_usView');
        Route::get('home/why_choose_usUpdate/{slug}', 'why_choose_useController@why_choose_usUpdate')->name('why_choose_usUpdate');
        Route::post('home/why_choose_usUpdatePost', 'why_choose_useController@why_choose_usUpdatePost')->name('why_choose_usUpdatePost');
        Route::get('home/why_choose_usDelete/{slug}', 'why_choose_useController@why_choose_usDelete')->name('why_choose_usDelete');
    //Our team end
    
    //achivement start
        Route::get('home/achivement/', 'achivementController@achivement')->name('achivement');
        Route::post('home/achivementUpdatePost', 'achivementController@achivementUpdatePost')->name('achivementUpdatePost');
    //achivement end
    
    //Genarel setting start
        Route::get('home/genarel_setting', 'genarel_settingController@genarel_setting')->name('genarel_setting');
        Route::post('home/genarel_settingUpdatePost', 'genarel_settingController@genarel_settingUpdatePost')->name('genarel_settingUpdatePost');
    //Genarel setting end
    
    //My account start
        Route::get('home/user_profile', 'userController@user_profile')->name('user_profile');
        Route::post('home/user_profile_update', 'userController@user_profile_update')->name('user_profile_update');

       
    //My account end
    
    //footer start
        Route::get('home/footer', 'footerController@footer')->name('footer');
        Route::post('home/footerUpdatePost', 'footerController@footerUpdatePost')->name('footerUpdatePost');
    //footer end
    
    Route::group(['middleware' => ['role']], function () {
        //User
        Route::get('home/userView', 'userController@userView')->name('userView');
        Route::get('home/userUpdate', 'userController@userUpdate')->name('userUpdate');
        Route::get('home/userUpdatePost/{id}', 'userController@userUpdatePost')->name('userUpdatePost');
        Route::get('home/userDelete{id}', 'userController@userDelete')->name('userDelete');

        //blog
        Route::get('home/allBlog', 'blogController@allBlog')->name('allBlog');
   
    });
});



//frontend start
Route::get('/', 'frontendController@index')->name('index');

//description
Route::get('destination/', 'frontendController@destination')->name('destination');

//single description
Route::get('destination/{slug}', 'frontendController@singleDestination')->name('singleDestination');

//All memebers
Route::get('all_memebers/', 'frontendController@all_memebers')->name('all_memebers');
//about
Route::get('/about', 'frontendController@about')->name('about');

//contact
Route::get('contact/', 'frontendController@contact')->name('contact');

//blog
Route::get('blog/', 'frontendController@blog')->name('blog');

//single blog
Route::get('singleBlog/{slug}', 'frontendController@singleBlog')->name('singleBlog');
Route::post('blogComment', 'frontendController@blogComment')->name('blogComment');

//Message
Route::post('messagePost', 'frontendController@messagePost')->name('messagePost');
Route::post('newsLetter', 'frontendController@newsLetter')->name('newsLetter');

//search
Route::get('search/', 'frontendController@search')->name('search');
//frontend end


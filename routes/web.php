<?php

use Illuminate\Support\Facades\Route;

use App\post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reg', function () {
    return view('register');
});

Route::view('/home1','pages.home');

Route::view('/gethome','pages.index');

Route::post('/registers','usercontroller@store');

Route::post('/logins','usercontroller@log');

Route::view('/log','login');

Route::get('/about','pagecontroller@about');

Route::get('/index','pagecontroller@index');

Route::get('/contactus','pagecontroller@contactus');

Route::resource('posts','postcontroller');

Route::post('/submit','postcontroller@store');

Route::post('/loginauthpw/{id}','authcontroller@logpw');

Route::post('/update/{id}','postcontroller@update');

Route::post('/updatelog/{id}','postlogcontroller@updatelog');

Route::get('/save/{id}','postcontroller@show');

Route::get('/savelog/{id}','postlogcontroller@showviewlog');

Route::get('/edit&delete/{id}','postcontroller@show');

Route::get('/posts/{id}', 'PostsController@show')->name('post.show');



Route::get('/deleteposts/{id}','postcontroller@destroys');


Route::get('/deletelogpost/{id}','postlogcontroller@destroy');

Route::get('/deletecomment/{id}','commentcontroller@destroy');


Route::get('/create','postcontroller@create');



Route::view('/authed','authlogin');



Route::post('/loginauth','authcontroller@log');



Route::get('/viewcomment/{id}','commentcontroller@showuser');

Route::get('/viewcommentlog/{id}','commentcontroller@showuserlog');

Route::get('/authdetail/{user_id}','usercontroller@author');

Route::get('/click/{id}','usercontroller@show');

Route::get('/postss','postlogcontroller@index');

Route::get('/seepost/{user_Id}','postlogcontroller@showlog');

Route::get('/editlogpost/{id}','postlogcontroller@editlog');

Route::get('/click','postlogcontroller@back');

Route::view('/seeaccount','mypro');

Route::view('/demo','pages.demo');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/admin','admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/



Route::get('/logcomment/{id}','commentcontroller@showlogin');

Route::view('/getlogin','comment/addcomment');

Route::post('/logcomment', 'commentcontroller@loggedcomment');

Route::view('/showreg','register');

Route::view('/addcomment','inc/addcommentcar');

Route::post('/loggedcomment','commentcontroller@loggedcomment');

Route::post('/commentstore','commentcontroller@commentstore');

Route::post('/commentstoreuser','commentcontroller@commentstoreuser');

Route::get('/logout',function(){
 return redirect()->back();
});


Route::view('/adminlog','admin/login');

Route::post('/adminlogged','admincontroller@log');

Route::get('/postdetail','postcontroller@all');

Route::get('/postdetailauth/{id}','postcontroller@allauth');

Route::post('/storeadmin','postcontroller@storeadmin');

Route::get('/saveadmin/{id}','postcontroller@showadmin');

Route::view('/mypro','admin/dashboard');

Route::get('/usershow','usercontroller@all');

//Route::get('/adminviewcomments/{id}','commentcontroller@adminshow');

Route::view('/adminlogout','pages/home');

Route::view('/auth','email.sendemail');

//Route::post('/sendrequest','authorcontroller@stored');

Route::get('/showrequest','authorcontroller@show');

Route::get('/acceptreq/{id}','authorcontroller@accept');

Route::get('/authcheck/{id}','authorcontroller@check');

Route::get('/authorshow','authorcontroller@authorshow');

Route::post('/saveauthor','authorcontroller@stored');

Route::post('/sendemail/send','mailController@send');

Route::view('authlogin','author/authlogin');

Route::view('/addauth','admin.authoradds');

Route::post('/authlogged','authorcontroller@log');

Route::get('/authhome/{id}','authorcontroller@authhome');

Route::get('/createlog/{id}','userlogcontroller@create');

Route::post('/store','postcontroller@store');

Route::get('/seemypost/{id}/{name}','postcontroller@showauthor');

Route::view('/authlogout','pages.home');

Route::get('/viewpost/{id}/{name}','postcontroller@viewpost');

Route::get('/editpost/{id}/{name}','postcontroller@edit');

Route::view('/indexauth','author.authorhome');

Route::get('/deletepost/{id}','postcontroller@destroy');

Route::get('/seeallposts/{id}','postcontroller@alluser');

Route::get('/userhome/{id}','postcontroller@userhome');

Route::post('/saveuser/{id}','postcontroller@showuser');

Route::get('/logcommentuser/{id}','usercontroller@');

Route::get('/homeback','usercontroller@homeback');

Route::view('/forgetpw','changepw');

Route::post('/newpw','usercontroller@newpw');

Route::post('/updatedpw/{id}','usercontroller@updatedpw');

Route::view('/forgetauthpw','author.changeauthpw');

Route::post('/newauthpw','authorcontroller@newauthpw');

Route::post('/updatedauthpw/{id}','authorcontroller@updatedauthpw');

Route::view('/forgetadminpw','admin.changeadminpw');

Route::post('/newadminpw','admincontroller@newadminpw');

Route::post('/updatedadminpw/{id}','admincontroller@updatedadminpw');

Route::get('/clickauth/{id}','authorcontroller@show');

Route::get('/updateauthpro/{id}','authorcontroller@updateauthpro');

Route::post('/updatedpro/{id}','authorcontroller@updatedpro');

Route::post('ckeditor/image_upload','ckeditcontroller@upload')->name('upload');

Route::get('admindelcomment/{id}','commentcontroller@admindelcomment');

Route::get('deletecomment/{id}','commentcontroller@destroy');

Route::get('admindeluser/{id}','usercontroller@admindeluser');

Route::view('/tutorial','pages.tutorial');

Route::view('/admintutorial','admin.tutorial');

Route::post('/savevedio','vediocontroller@store');

Route::get('/seevedios','vediocontroller@show');

Route::get('/seeuservedios','vediocontroller@showuser');

Route::get('/seeuserlogvedios/{id}','vediocontroller@showloguser');

Route::get('/seeauthorvedios/{name}','vediocontroller@showauthor');

Route::get('/updatedescrip/{id}','vediocontroller@edit');

Route::post('/updatedes/{id}','vediocontroller@update');

Route::get('/frontend/{catergory}','vediocontroller@frontend');

Route::get('/backend/{catergory}','vediocontroller@backend');

Route::get('/frontenduserlog/{catergory}/{id}','vediocontroller@frontenduserlog');

Route::get('/backenduserlog/{catergory}/{id}','vediocontroller@backenduserlog');

Route::get('/frontendauthor/{catergory}/{name}','vediocontroller@frontendauthor');

Route::get('/backendauthor/{catergory}/{name}','vediocontroller@backendauthor');

Route::post('/searchu','postcontroller@searchu');


Route::post('/searchuseradmin','usercontroller@searchuseradmin');

Route::post('/searcha','postcontroller@searcha');

Route::post('/searchadmin','authorcontroller@searchadmin');

Route::post('/addlike','postcontroller@addlike');

Route::get('/updateuserdetail/{id}','usercontroller@updateuserdetail');

Route::post('/updateduserpro/{id}','usercontroller@updateduserpro');

Route::get('approved/{id}','postcontroller@updatepostasapproved');

Route::get('notapproved/{id}','postcontroller@updatepostasnotapproved');

Route::view('/homepage','pages.home');
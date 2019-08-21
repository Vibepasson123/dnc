<?php
//default routing form laravel for home page//

Route::get('/public', function () {
    return view('admin.DNC-Welcome');
});
Route::get('/', function () {
    return view('admin.DNC-Welcome');
});

Route::get('AdminLayout', function () {
    return view('admin.layout.AdminLayout');
});

Route::get('index', function () {
    return view('projectadmin.index');
});



Route::get('/dashbord','AdminControl@index');
Route::get('employeeRegistration','AdminControl@indexx');
Route::get('/final','AdminControl@getdata');


Route::group(['middleware' => 'revalidate'], function()
{
 Route::get('register','AdminControl@register');
//Route::get('dashbord','AdminControl@getdata');
Route::get('/login','login@login');
Route::post('/login','login@postlogin');

});


Route::get('/logout','login@logout');

//Password reset and password forgot//
Route::get('/forgot-password','ForgotPasswordController@forgotpassword');
Route::post('/forgot-password','ForgotPasswordController@postforgotpassword');
Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
Route::post('/reset/{email}/{resetCode}','ForgotPasswordController@postResetPassword');

//Employee registrations

Route::post('/employeeRegistration','Employereg@postemployeeReg')->middleware('Admin');
Route::post('/regmanager','manager@regmanager')->middleware('Admin');
Route::post('regnurse','Employereg@regnurse')->middleware('Admin');
Route::post('/create_department','Employereg@create_department')->middleware('Admin');
Route::post('/addnewband','pbands@addnewband')->middleware('Admin');
Route::post('regoprator','Employereg@regoprator')->middleware('Admin');
Route::post('regtecnition','Employereg@regtecnition')->middleware('Admin');
Route::post('regdoctor','Employereg@regdoctor')->middleware('Admin');

//Employee registrations components for form data and another variable
// Route::get('/employeeRegistration','Employereg@getdata');

//Employee Account activation
Route::get('/activate/{email}/{activationCode}','ActivationController@activate');


// Admin Controls
Route:: get('/employeeView','AdminControl@accessEmpReg') ->middleware('Admin');

//nurse Controlls and redirects

Route::get('/nursehome','nurseController@acessNurse') ->middleware('Nurse');

//doctor  Controlls and redirects

Route::get('/employeeView','employee_management@manage');

Route::get('/employeeView/read-data','employee_management@readData');

//oprator  Controlls and redirects
Route::get('/opratorhome','opratorController@acessOprator');


//techniction  Controlls and redirects

Route::get('/techhome','technictionController@acessTechniction');
Route::post('/createnew','managepatient@createnew');
Route::post('/collect','managepatient@collect');
Route::post('changeband','managepatient@changeband');
Route::post('issueband','managepatient@issueband');
Route::get('/register','technictionController@acessTechniction');


Route::get('/register','managepatient@allpatient');
Route::get('/nursehome','manageptdisplays@pt');
Route::get('/test','manageptdisplays@dataTest');
Route::get('/nurs','graph@patientgraph');
Route::POST('/getchart','graph@getchart');
Route::POST('/gettodaychart','graph@today');
Route::POST('/life','graph@totalreport');
Route::GET('timel','patienttimeline@patienttl');
Route::POST('/useraction','employee_management@deactivation');
Route::POST('/useractivation','employee_management@activation');
Route::get('/Mail','userMail@checkMail');
Route::POST('/send','userMail@send');
//Route::POST('puchart')
//Route::ge.t('register','managepatient@getptdata');.


Route::GET('/ChatMessage','ChatMessage@getMessage');
Route::GET('/contacts','ChatMessage@get');

Route:: get('/conversation/{id}','ChatMessage@getMessageFor');
Route:: post('/conversation/send', 'ChatMessage@send');
Route:: get('/getmail','userMail@getMail');

Route::group(['middleware' => 'AuthUser'], function() {

    Route::get('/profile','userProfile@getProfile');
    Route::POST('/uploadProfilePic','userProfile@uploadAvatar');
    Route::POST('/updateUser','userProfile@updateUser');
    Route::POST('/updatePassword','userProfile@updatePassword');

});


/* <!--  !!============*=====*(PUBLIC REVIEW)*=====*===========!! --> */
Route::post('/revP','reviews@postReview');

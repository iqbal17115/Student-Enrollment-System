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


Route::get('/adminLogin', function () {
    return view('admin.adminLogin');
});
Route::get('/studentLogin', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
	Route::post('login', 'AdminController@loginFrame')->name('admin.login');
	Route::get('logout', 'AdminController@logout')->name('admin.logout');
	Route::get('adminDashboard', 'AdminController@adminDashboard');
	Route::get('addStudent', 'AddStudentController@addStudentForm');
	Route::post('addStudent', 'AddStudentController@addStudent');
	Route::get('allStudent', 'AllStudentController@allStudent');
	Route::post('allStudent', 'AllStudentController@allStudent1');
    Route::get('cse','CourseController@cse');
    Route::get('ece','CourseController@ece');
    Route::get('eee','CourseController@eee');
    Route::get('mba','CourseController@mba');
    Route::get('bba','CourseController@mba');
    Route::get('view','AdminController@viewProfile');
    
    Route::get('setting','AdminController@viewSetting');

    Route::get('delete','AdminController@delete');
    Route::get('view','AdminController@view');
    Route::get('edit','AdminController@edit');
    Route::post('edit','AdminController@editStudent');

    Route::get('addTeacher','TeacherController@addTeacherForm');
    Route::post('addTeacher','TeacherController@addTeacher');
    Route::get('allTeacher','TeacherController@allTeacher');

});

Route::group(['prefix'=>'student'],function(){
    
    Route::post('login', 'StudentController@login')->name('student.login');
    Route::get('studentDashboard','StudentController@dashboard');
    Route::get('profile','StudentController@studentProfile');
    Route::get('setting','StudentController@setting');
    Route::post('setting','StudentController@update');
    Route::get('logout','StudentController@logout');
});

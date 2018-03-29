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


Route::get('/', 'HomeController@index');

Route::get('/course', 'CourseController@index');

Route::get('/course/{id}', 'CourseController@show');
   




/*
+Home
	-Popular
	-Recommendation
+Courses
	-List
+Course Detail
	- Moderasi Komentar
*/

/*
//Listing semua course yg dimiliki instruktur

// Menampilkan Course
GET /courses
// Menampilkan Form Create
GET /courses/create
// Menyimpan Course baru
POST /courses
// Menampilkan Form Edit
GET /courses/{id}/edit 
// Ubah Course
PUT /courses/{id}
// Lihat Detail Course
GET /courses/{id}
// Delete Course
DELETE /courses/{id}


CourseController

PublishCourseController

//Publish option
POST /courses/{id}/publish
PUT /courses/{id}/publish
POST /publish-courses/{id}/

//Unpublish option
POST /courses/{id}/publish
PUT /courses/{id}/unpublish
DELETE /publish-courses/{id}/

*/
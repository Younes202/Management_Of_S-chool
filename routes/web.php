<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Classrooms\ClassroomController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
/*
Auth::routes();

Route::group(['middleware' => ['guest']], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

});


 //==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

     //==============================dashboard============================
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

   //==============================dashboard============================
    Route::group(['namespace' => 'Grades'], function () {
        Route::resource('Grades', 'GradeController');
    });

    //==============================Classrooms============================
    Route::group(['namespace' => 'Classrooms'], function () {
        Route::resource('Classrooms', 'ClassroomController');
    });
  /*==============================Classrooms============================
    Route::group(['namespace' => 'Classrooms'], function () {
        Route::resource('Classrooms', 'ClassroomController');

    });

    Route::post('delete_all', [ClassroomController::class, 'delete_all'])->name('delete_all');
    Route::post('Filter_Classes',[ClassroomController::class,'Filter_Classes'])->name('Filter_Classes');


       //==============================Sections============================

       Route::group(['namespace' => 'Sections'], function () {

        Route::resource('Sections', 'SectionController');

        Route::get('/classes/{id}', 'SectionController@getclasses');

    });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
*/
     //==============================dashboard============================

 Route::get('/', function () {
    return view('dashboard');
});

        //==============================Grades============================

        Route::group(['namespace' => 'Grades'], function () {
            Route::resource('Grades', 'GradeController');
        });
//==============================Classrooms  ============================
Route::group(['namespace' => 'Classrooms'], function () {
    Route::resource('Classrooms', 'ClassroomController');

});

Route::post('delete_all', [ClassroomController::class, 'delete_all'])->name('delete_all');
Route::post('Filter_Classes',[ClassroomController::class,'Filter_Classes'])->name('Filter_Classes');




//==============================Sections============================

Route::group(['namespace' => 'Sections'], function () {

    Route::resource('Sections', 'SectionController');

    Route::get('/classes/{id}', 'SectionController@getclasses');

});
Route::view('add_parent','Livewire.show_Form');   
                        

// Teachers
Route::group(['namespace' => 'Teachers'], function () {
      Route::resource('Teachers','TeacherController');
});
// Students
Route::group(['namespace' => 'Students'], function () {
    Route::resource('Students', 'StudentController');
    Route::get('/Get_classrooms/{id}', 'StudentController@Get_classrooms');
    Route::get('/Get_Sections/{id}', 'StudentController@Get_Sections');
    Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
    Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
    Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
	Route::resource('Attendance', 'AttendanceController');
	Route::get('/indirect', 'OnlineClasseController@indirectCreate')->name('indirect.create');
        Route::post('/indirect', 'OnlineClasseController@storeIndirect')->name('indirect.store');
        Route::resource('online_classes', 'OnlineClasseController');

});
 //==============================Subjects============================
 Route::group(['namespace' => 'Subjects'], function () {
    Route::resource('subjects', 'SubjectController');
});

    //==============================Exams============================
    Route::group(['namespace' => 'Exams'], function () {
        Route::resource('Exams', 'ExamController');
    });
      //==============================Quizzes============================
      Route::group(['namespace' => 'Quizzes'], function () {
        Route::resource('Quizzes', 'QuizzController');
    });
    //==============================questions============================
    Route::group(['namespace' => 'questions'], function () {
        Route::resource('questions', 'QuestionController');
    });



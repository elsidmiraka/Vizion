<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\storeMemberController;
use App\Http\Controllers\showMemberController;
use App\Http\Controllers\scolarshipMember;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard',[DashboardController::class, 'index']); 
});

Route::get('/aboutus',[UserController::class, 'aboutus']);

Route::get('/contact',[UserController::class, 'contact']);

Route::get('/scolarship',[UserController::class, 'scolarship']);

Route::get('/scolarship_form',[UserController::class, 'scolarship_form']);

Route::post('/scolarship_form',[storeMemberController::class, 'store_scolarshipMember']);

Route::get('/scolarshipMembersList',[showMemberController::class, 'show_scolarship_members']);

Route::get('/summerSchool',[UserController::class, 'summerSchool']);

Route::get('/summerSchool_form',[UserController::class, 'summerSchool_form']);

Route::post('/summerSchool_form',[storeMemberController::class, 'store_summerSchoolMember']);

Route::get('/summerSchoolMembersList',[showMemberController::class, 'show_summerSchool_members']);


Route::get('/dormMembers_form',[UserController::class, 'dormMembers_form']);

Route::post('/dormMembers_form',[storeMemberController::class, 'store_dormMember']);

Route::get('/dormMembersList',[showMemberController::class, 'show_dorm_members']);

Route::any('delete/{id}',[UserController::class, 'delete_dorm_member']);



Route::get('editMember/{id}',[UserController::class, 'showData']);

Route::post('editMember/',[UserController::class, 'update']);
Route::post('editMember/',[UserController::class, 'update']);




Route::any('delete/{id}',[UserController::class, 'delete_scolarship_member']);

Route::get('editScolarshipMember/{id}',[UserController::class, 'showScolarshipData']);

Route::post('editScolarshipMember/',[UserController::class, 'updateScolarship']);


Route::any('delete/{id}',[UserController::class, 'delete_summer_school_member']);

Route::get('editSummerSchoolMember/{id}',[UserController::class, 'showSummerSchoolData']);

Route::post('editSummerSchoolMember/',[UserController::class, 'updateSummerSchool']);



require __DIR__.'/auth.php';

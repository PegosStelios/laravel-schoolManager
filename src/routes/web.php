<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;

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
    return view('students', [
        'heading' => 'Recent Students',
        'students' => Student::all()
    ]);
});

// Single Student

Route::get('/students/{id}', function ($id) {
    return view('student', [
        'student' => Student::find($id)
    ]);
});

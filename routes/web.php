<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppLoanController;

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

// Route::get('/', function () {
//     return view('appLoanIdInd');
// });

Route::get('/', [AppLoanController::class, 'addLoans'])
    ->name('addLoans');

Route::post('/addLoansStore', [AppLoanController::class, 'addLoansStore'])
    ->name('addLoansStore');

    

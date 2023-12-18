<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsaVirtualNoController;
use App\Http\Controllers\CanadaVirtualNoController;
use App\Http\Controllers\SmartIvrSystemController;
use App\Http\Controllers\DistributedCallCenterController;
use App\Http\Controllers\UsaTollFreeNoController;
use App\Http\Controllers\CanadaTollFreeNoController;
use App\Http\Controllers\OutboundCallServiceController;
use App\Http\Controllers\CallConferencingServiceController;
use App\Http\Controllers\EFaxController;
use App\Http\Controllers\MessagingController;
use App\Http\Controllers\ClickToCallController;
use App\Http\Controllers\ConversationalAiController;
use App\Http\Controllers\ResellerProgramController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhoneNumberMaskingController;

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
Route::get('usa-virtual-phone-number', [UsaVirtualNoController::class,'index']);
Route::get('canada-virtual-phone-number', [CanadaVirtualNoController::class,'index']);
Route::get('smart-ivr-system', [SmartIvrSystemController::class,'index']);
Route::get('call-center-services', [DistributedCallCenterController::class,'index']);
Route::get('usa-toll-free-number', [UsaTollFreeNoController::class,'index']);
Route::get('canada-toll-free-number', [CanadaTollFreeNoController::class,'index']);
Route::get('outbound-call-service', [OutboundCallServiceController::class,'index']);
Route::get('call-conferencing-service', [CallConferencingServiceController::class,'index']);
Route::get('e-fax', [EFaxController::class,'index']);
Route::get('messaging', [MessagingController::class,'index']);
Route::get('click-to-call', [ClickToCallController::class,'index']);
Route::get('conversationalai', [ConversationalAiController::class,'index']);
Route::get('reseller-program', [ResellerProgramController::class,'index']);
Route::get('career', [CareerController::class,'index']);
Route::get('contact', [ContactController::class,'index']);
Route::get('phone-number-masking', [PhoneNumberMaskingController::class,'index']);
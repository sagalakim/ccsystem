<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceQualityDimension;
use Carbon\Carbon;
use App\Models\Client;
use App\Models\CcSurvey;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function home(){
        $getTodayClients = Client::whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getTodayFemaleClients = Client::where('sex', '=', 'female')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getTodayMaleClients = Client::where('sex', '=', 'male')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        //{{$getTodayClients->count()}}           ->>Apply inside blade same as other variable
        $clientList = Client::whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->orderBy('status', 'asc')->orderBy('created_at', 'desc')->get();
        $getClientFilledSqd1 = ServiceQualityDimension::whereNotNull('sqd0')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientFilledSqd5 = ServiceQualityDimension::whereNotNull('sqd5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();

        $getClientSqd1Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd2Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd3Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd4Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd5Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd6Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd7Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd8Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd9Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        
        $CC1a = CcSurvey::where('cc1', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC1b = CcSurvey::where('cc1', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC1c = CcSurvey::where('cc1', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC1d = CcSurvey::where('cc1', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();

        $CC2a = CcSurvey::where('cc2', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC2b = CcSurvey::where('cc2', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC2c = CcSurvey::where('cc2', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC2d = CcSurvey::where('cc2', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC2e = CcSurvey::where('cc2', '=', 'N/A')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();

        $CC3a = CcSurvey::where('cc3', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC3b = CcSurvey::where('cc3', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC3c = CcSurvey::where('cc3', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
        $CC3d = CcSurvey::where('cc3', '=', 'N/A')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();


        return view('admin.todayresult', compact( 'clientList', 'getClientFilledSqd1', 'getTodayClients', 'getClientFilledSqd5', 'getClientSqd1Evaluation','getClientSqd1Evaluation2','getClientSqd1Evaluation3','getClientSqd1Evaluation4','getClientSqd1Evaluation5',
         'getClientSqd2Evaluation','getClientSqd2Evaluation2','getClientSqd2Evaluation3','getClientSqd2Evaluation4','getClientSqd2Evaluation5',
         'getClientSqd3Evaluation','getClientSqd3Evaluation2','getClientSqd3Evaluation3','getClientSqd3Evaluation4','getClientSqd3Evaluation5',
         'getClientSqd4Evaluation','getClientSqd4Evaluation2','getClientSqd4Evaluation3','getClientSqd4Evaluation4','getClientSqd4Evaluation5',
         'getClientSqd5Evaluation','getClientSqd5Evaluation2','getClientSqd5Evaluation3','getClientSqd5Evaluation4','getClientSqd5Evaluation5',
         'getClientSqd6Evaluation','getClientSqd6Evaluation2','getClientSqd6Evaluation3','getClientSqd6Evaluation4','getClientSqd6Evaluation5',
         'getClientSqd7Evaluation','getClientSqd7Evaluation2','getClientSqd7Evaluation3','getClientSqd7Evaluation4','getClientSqd7Evaluation5', 
         'getClientSqd8Evaluation','getClientSqd8Evaluation2','getClientSqd8Evaluation3','getClientSqd8Evaluation4','getClientSqd8Evaluation5',
         'getClientSqd9Evaluation','getClientSqd9Evaluation2','getClientSqd9Evaluation3','getClientSqd9Evaluation4','getClientSqd9Evaluation5',
         'CC1a','CC1b','CC1c','CC1d',
         'CC2a','CC2b','CC2c','CC2d','CC2e',
         'CC3a','CC3b','CC3c','CC3d', 'getTodayFemaleClients', 'getTodayMaleClients'));
    }

    public function yesterday(){
        $getTodayClients = Client::whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getTodayFemaleClients = Client::where('sex', '=', 'female')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getTodayMaleClients = Client::where('sex', '=', 'male')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        //{{$getTodayClients->count()}}           ->>Apply inside blade same as other variable
        $clientList = Client::whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->orderBy('service_availed', 'asc')->get();
        $getClientFilledSqd1 = ServiceQualityDimension::whereNotNull('sqd0')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientFilledSqd5 = ServiceQualityDimension::whereNotNull('sqd5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();

        $getClientSqd1Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd2Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd3Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd4Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd5Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd6Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd7Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd8Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd9Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option5')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        
        $CC1a = CcSurvey::where('cc1', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC1b = CcSurvey::where('cc1', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC1c = CcSurvey::where('cc1', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC1d = CcSurvey::where('cc1', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();

        $CC2a = CcSurvey::where('cc2', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC2b = CcSurvey::where('cc2', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC2c = CcSurvey::where('cc2', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC2d = CcSurvey::where('cc2', '=', 'option4')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC2e = CcSurvey::where('cc2', '=', 'N/A')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();

        $CC3a = CcSurvey::where('cc3', '=', 'option1')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC3b = CcSurvey::where('cc3', '=', 'option2')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC3c = CcSurvey::where('cc3', '=', 'option3')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();
        $CC3d = CcSurvey::where('cc3', '=', 'N/A')->whereDate('created_at', Carbon::yesterday()->setTimezone('Asia/Manila'))->get();


        return view('admin.yesterdayresult', compact( 'clientList', 'getClientFilledSqd1', 'getTodayClients', 'getClientFilledSqd5', 'getClientSqd1Evaluation','getClientSqd1Evaluation2','getClientSqd1Evaluation3','getClientSqd1Evaluation4','getClientSqd1Evaluation5',
         'getClientSqd2Evaluation','getClientSqd2Evaluation2','getClientSqd2Evaluation3','getClientSqd2Evaluation4','getClientSqd2Evaluation5',
         'getClientSqd3Evaluation','getClientSqd3Evaluation2','getClientSqd3Evaluation3','getClientSqd3Evaluation4','getClientSqd3Evaluation5',
         'getClientSqd4Evaluation','getClientSqd4Evaluation2','getClientSqd4Evaluation3','getClientSqd4Evaluation4','getClientSqd4Evaluation5',
         'getClientSqd5Evaluation','getClientSqd5Evaluation2','getClientSqd5Evaluation3','getClientSqd5Evaluation4','getClientSqd5Evaluation5',
         'getClientSqd6Evaluation','getClientSqd6Evaluation2','getClientSqd6Evaluation3','getClientSqd6Evaluation4','getClientSqd6Evaluation5',
         'getClientSqd7Evaluation','getClientSqd7Evaluation2','getClientSqd7Evaluation3','getClientSqd7Evaluation4','getClientSqd7Evaluation5', 
         'getClientSqd8Evaluation','getClientSqd8Evaluation2','getClientSqd8Evaluation3','getClientSqd8Evaluation4','getClientSqd8Evaluation5',
         'getClientSqd9Evaluation','getClientSqd9Evaluation2','getClientSqd9Evaluation3','getClientSqd9Evaluation4','getClientSqd9Evaluation5',
         'CC1a','CC1b','CC1c','CC1d',
         'CC2a','CC2b','CC2c','CC2d','CC2e',
         'CC3a','CC3b','CC3c','CC3d', 'getTodayFemaleClients', 'getTodayMaleClients'));
    }

    public function thisweek(){
        $getTodayFemaleClients = Client::where('sex', '=', 'female')->whereDate('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getTodayMaleClients = Client::where('sex', '=', 'male')->whereDate('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getTodayClients = Client::where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        //{{$getTodayClients->count()}}           ->>Apply inside blade same as other variable
        $clientList = Client::where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->orderBy('created_at', 'desc')->get();
        $getClientFilledSqd1 = ServiceQualityDimension::whereNotNull('sqd0')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientFilledSqd5 = ServiceQualityDimension::whereNotNull('sqd5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();

        $getClientSqd1Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd2Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd3Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd4Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd5Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd6Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd7Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd8Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd9Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        
        $CC1a = CcSurvey::where('cc1', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC1b = CcSurvey::where('cc1', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC1c = CcSurvey::where('cc1', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC1d = CcSurvey::where('cc1', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();

        $CC2a = CcSurvey::where('cc2', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC2b = CcSurvey::where('cc2', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC2c = CcSurvey::where('cc2', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC2d = CcSurvey::where('cc2', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC2e = CcSurvey::where('cc2', '=', 'N/A')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();

        $CC3a = CcSurvey::where('cc3', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC3b = CcSurvey::where('cc3', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC3c = CcSurvey::where('cc3', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();
        $CC3d = CcSurvey::where('cc3', '=', 'N/A')->where('created_at', '>=', Carbon::now()->startOfWeek()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfWeek()->setTimezone('Asia/Manila'))->get();


        return view('admin.weekresult', compact( 'clientList', 'getClientFilledSqd1', 'getTodayClients', 'getClientFilledSqd5', 'getClientSqd1Evaluation','getClientSqd1Evaluation2','getClientSqd1Evaluation3','getClientSqd1Evaluation4','getClientSqd1Evaluation5',
         'getClientSqd2Evaluation','getClientSqd2Evaluation2','getClientSqd2Evaluation3','getClientSqd2Evaluation4','getClientSqd2Evaluation5',
         'getClientSqd3Evaluation','getClientSqd3Evaluation2','getClientSqd3Evaluation3','getClientSqd3Evaluation4','getClientSqd3Evaluation5',
         'getClientSqd4Evaluation','getClientSqd4Evaluation2','getClientSqd4Evaluation3','getClientSqd4Evaluation4','getClientSqd4Evaluation5',
         'getClientSqd5Evaluation','getClientSqd5Evaluation2','getClientSqd5Evaluation3','getClientSqd5Evaluation4','getClientSqd5Evaluation5',
         'getClientSqd6Evaluation','getClientSqd6Evaluation2','getClientSqd6Evaluation3','getClientSqd6Evaluation4','getClientSqd6Evaluation5',
         'getClientSqd7Evaluation','getClientSqd7Evaluation2','getClientSqd7Evaluation3','getClientSqd7Evaluation4','getClientSqd7Evaluation5', 
         'getClientSqd8Evaluation','getClientSqd8Evaluation2','getClientSqd8Evaluation3','getClientSqd8Evaluation4','getClientSqd8Evaluation5',
         'getClientSqd9Evaluation','getClientSqd9Evaluation2','getClientSqd9Evaluation3','getClientSqd9Evaluation4','getClientSqd9Evaluation5',
         'CC1a','CC1b','CC1c','CC1d',
         'CC2a','CC2b','CC2c','CC2d','CC2e',
         'CC3a','CC3b','CC3c','CC3d', 'getTodayFemaleClients', 'getTodayMaleClients'));
    }

    public function thismonth(){
        $getTodayFemaleClients = Client::where('sex', '=', 'female')->whereDate('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getTodayMaleClients = Client::where('sex', '=', 'male')->whereDate('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getTodayClients = Client::where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        //{{$getTodayClients->count()}}           ->>Apply inside blade same as other variable
        $clientList = Client::where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->orderBy('created_at', 'desc')->get();
        $getClientFilledSqd1 = ServiceQualityDimension::whereNotNull('sqd0')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientFilledSqd5 = ServiceQualityDimension::whereNotNull('sqd5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();

        $getClientSqd1Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd2Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd3Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd4Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd5Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd6Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd7Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd8Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd9Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        
        $CC1a = CcSurvey::where('cc1', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC1b = CcSurvey::where('cc1', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC1c = CcSurvey::where('cc1', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC1d = CcSurvey::where('cc1', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();

        $CC2a = CcSurvey::where('cc2', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC2b = CcSurvey::where('cc2', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC2c = CcSurvey::where('cc2', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC2d = CcSurvey::where('cc2', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC2e = CcSurvey::where('cc2', '=', 'N/A')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();

        $CC3a = CcSurvey::where('cc3', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC3b = CcSurvey::where('cc3', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC3c = CcSurvey::where('cc3', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();
        $CC3d = CcSurvey::where('cc3', '=', 'N/A')->where('created_at', '>=', Carbon::now()->startOfMonth()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfMonth()->setTimezone('Asia/Manila'))->get();


        return view('admin.monthresult', compact( 'clientList', 'getClientFilledSqd1', 'getTodayClients', 'getClientFilledSqd5', 'getClientSqd1Evaluation','getClientSqd1Evaluation2','getClientSqd1Evaluation3','getClientSqd1Evaluation4','getClientSqd1Evaluation5',
         'getClientSqd2Evaluation','getClientSqd2Evaluation2','getClientSqd2Evaluation3','getClientSqd2Evaluation4','getClientSqd2Evaluation5',
         'getClientSqd3Evaluation','getClientSqd3Evaluation2','getClientSqd3Evaluation3','getClientSqd3Evaluation4','getClientSqd3Evaluation5',
         'getClientSqd4Evaluation','getClientSqd4Evaluation2','getClientSqd4Evaluation3','getClientSqd4Evaluation4','getClientSqd4Evaluation5',
         'getClientSqd5Evaluation','getClientSqd5Evaluation2','getClientSqd5Evaluation3','getClientSqd5Evaluation4','getClientSqd5Evaluation5',
         'getClientSqd6Evaluation','getClientSqd6Evaluation2','getClientSqd6Evaluation3','getClientSqd6Evaluation4','getClientSqd6Evaluation5',
         'getClientSqd7Evaluation','getClientSqd7Evaluation2','getClientSqd7Evaluation3','getClientSqd7Evaluation4','getClientSqd7Evaluation5', 
         'getClientSqd8Evaluation','getClientSqd8Evaluation2','getClientSqd8Evaluation3','getClientSqd8Evaluation4','getClientSqd8Evaluation5',
         'getClientSqd9Evaluation','getClientSqd9Evaluation2','getClientSqd9Evaluation3','getClientSqd9Evaluation4','getClientSqd9Evaluation5',
         'CC1a','CC1b','CC1c','CC1d',
         'CC2a','CC2b','CC2c','CC2d','CC2e',
         'CC3a','CC3b','CC3c','CC3d', 'getTodayFemaleClients', 'getTodayMaleClients'));
    }

    public function thisyear(){
        $getTodayFemaleClients = Client::where('sex', '=', 'female')->whereDate('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))
        ->get();
        $getTodayMaleClients = Client::where('sex', '=', 'male')->whereDate('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))
        ->get();
        
        $getYearClients = Client::where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))
        ->get();        //{{$getTodayClients->count()}}           ->>Apply inside blade same as other variable
        $clientList = Client::where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->orderBy('created_at', 'desc')->get();
        $getClientFilledSqd1 = ServiceQualityDimension::whereNotNull('sqd0')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientFilledSqd5 = ServiceQualityDimension::whereNotNull('sqd5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();

        $getClientSqd1Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd1Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd2Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd1', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd2Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd1', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd3Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd2', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd3Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd2', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd4Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd3', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd4Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd3', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd5Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd4', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd5Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd4', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd6Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd5', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd6Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd5', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd7Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd6', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd7Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd6', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd8Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd7', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd8Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd7', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $getClientSqd9Evaluation = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation2 = ServiceQualityDimension::whereNotNull('sqd5')->where('sqd8', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation3 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation4 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $getClientSqd9Evaluation5 = ServiceQualityDimension::where('sqd5', '!=', null)->where('sqd8', '=', 'option5')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        
        $CC1a = CcSurvey::where('cc1', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC1b = CcSurvey::where('cc1', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC1c = CcSurvey::where('cc1', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC1d = CcSurvey::where('cc1', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();

        $CC2a = CcSurvey::where('cc2', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC2b = CcSurvey::where('cc2', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC2c = CcSurvey::where('cc2', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC2d = CcSurvey::where('cc2', '=', 'option4')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC2e = CcSurvey::where('cc2', '=', 'N/A')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();

        $CC3a = CcSurvey::where('cc3', '=', 'option1')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC3b = CcSurvey::where('cc3', '=', 'option2')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC3c = CcSurvey::where('cc3', '=', 'option3')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();
        $CC3d = CcSurvey::where('cc3', '=', 'N/A')->where('created_at', '>=', Carbon::now()->startOfYear()->setTimezone('Asia/Manila'))
        ->where('created_at', '<=', Carbon::now()->endOfYear()->setTimezone('Asia/Manila'))->get();


        return view('admin.yearresult', compact( 'clientList', 'getClientFilledSqd1', 'getYearClients', 'getClientFilledSqd5', 'getClientSqd1Evaluation','getClientSqd1Evaluation2','getClientSqd1Evaluation3','getClientSqd1Evaluation4','getClientSqd1Evaluation5',
         'getClientSqd2Evaluation','getClientSqd2Evaluation2','getClientSqd2Evaluation3','getClientSqd2Evaluation4','getClientSqd2Evaluation5',
         'getClientSqd3Evaluation','getClientSqd3Evaluation2','getClientSqd3Evaluation3','getClientSqd3Evaluation4','getClientSqd3Evaluation5',
         'getClientSqd4Evaluation','getClientSqd4Evaluation2','getClientSqd4Evaluation3','getClientSqd4Evaluation4','getClientSqd4Evaluation5',
         'getClientSqd5Evaluation','getClientSqd5Evaluation2','getClientSqd5Evaluation3','getClientSqd5Evaluation4','getClientSqd5Evaluation5',
         'getClientSqd6Evaluation','getClientSqd6Evaluation2','getClientSqd6Evaluation3','getClientSqd6Evaluation4','getClientSqd6Evaluation5',
         'getClientSqd7Evaluation','getClientSqd7Evaluation2','getClientSqd7Evaluation3','getClientSqd7Evaluation4','getClientSqd7Evaluation5', 
         'getClientSqd8Evaluation','getClientSqd8Evaluation2','getClientSqd8Evaluation3','getClientSqd8Evaluation4','getClientSqd8Evaluation5',
         'getClientSqd9Evaluation','getClientSqd9Evaluation2','getClientSqd9Evaluation3','getClientSqd9Evaluation4','getClientSqd9Evaluation5',
         'CC1a','CC1b','CC1c','CC1d',
         'CC2a','CC2b','CC2c','CC2d','CC2e',
         'CC3a','CC3b','CC3c','CC3d', 'getTodayFemaleClients', 'getTodayMaleClients'));
    }

    public function adminprofile(){
        $user = Auth::user();

        return view('admin.profile.adminprofile', compact('user'));
    }

    public function usercreate(){
        return view('admin.usercreate');
    }
}

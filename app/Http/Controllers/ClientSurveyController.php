<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CcSurvey;
use App\Models\Client;
use App\Models\ServiceQualityDimension;
use App\Models\User;
use Carbon\Carbon; //composer require nesbot/carbon
use PDF;


class ClientSurveyController extends Controller
{
    public function ccsurvey(Request $request)
{
    date_default_timezone_set('Asia/Manila');

    $request->validate([
        'clienttype' => 'required',
        'gender'=> 'required',
        'date' => 'required',
        'age' => 'required',
        'address' => 'required',
        'service' => 'required',
        'CC1' => 'required',
        'CC2' => '',
        'CC3' => ''
    ], ['clienttype.required' => 'Please select at least one on the client type.',
        'gender.required' => 'Please select your gender.',
        'date.required' => 'Please select date.',
        'age.required' => 'Please type your age.',
        'address.required' => 'Please type your address.',
        'service.required' => 'Please select the service type you acquired.',
        'CC1.required' => 'Please select at least one on the CC1',
        'CC2.required' => 'Please select at least one on the CC2',
        'CC3.required' => 'Please select at least one on the CC3']);

    $CC1 = $request->input('CC1');
    $CC2 = $request->input('CC2');
    $CC3 = $request->input('CC3');

    if ($request->service != 'Asosasyon'){
        $client = Client:: create([
            'client_type' => $request->clienttype,
            'sex' => $request->gender,
            'age' => $request->age,
            'region_of_residence' => $request->address,
            'service_availed' => $request->userinput,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
    else{
        $client = Client:: create([
            'client_type' => $request->clienttype,
            'sex' => $request->gender,
            'age' => $request->age,
            'region_of_residence' => $request->address,
            'service_availed' => $request->service,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    if ($CC1 == 'option4'){
        $ccsurvey = CcSurvey::create([
            'client_id' => $client->id,
            'date' => $request->date,
            'cc1' => $CC1,
            "cc2"=> 'N/A',
            "cc3"=> 'N/A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
    else{
        $ccsurvey = CcSurvey::create([
            'client_id' => $client->id,
            'date' => $request->date,
            'cc1' => $CC1,
            "cc2"=> $CC2,
            "cc3"=> $CC3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
    
    
    return redirect()->route('sqd1', $ccsurvey->id)->with('success', 'Data saved successfully!');
    //return response()->json(['success']);
}

public function sqd1(CcSurvey $ccsurvey) {
    if (session('success')) {
        $survey = CcSurvey::findOrFail($ccsurvey->id);

        if ($survey->client->service_availed == 'Asosasyon') {
            return view('sqd.smiley', compact('survey'));
        } else {
            return view('sqd.smiley2', compact('survey'));
        }
    } else {
        return redirect()->back();
    }
}

public function sqd1post(Request $request){

    date_default_timezone_set('Asia/Manila');

    $sqd = ServiceQualityDimension::create([
        'client_id' => $request->clientid,
        'cc_survey_id' => $request->ccsurvey,
        'sqd0' => $request->SQD0,
        'sqd1' => $request->SQD1,
        'sqd2' => $request->SQD2,
        'sqd3' => $request->SQD3,
        'sqd4' => $request->SQD4,
        'sqd5' => null,
        'sqd6' => null,
        'sqd7' => null,
        'sqd8' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->route('summone', $sqd->id)->with('success', "Data saved successfully!");
}

public function summone(ServiceQualityDimension $sqd){
    $sqd1 = ServiceQualityDimension::findOrFail($sqd->id);

    return view('summary', compact('sqd1'));
}

public function finish(Request $request){
    return redirect()->route('citizencharter')->with('success', "Data saved successfully!");
}

public function sqd2post(Request $request){
    date_default_timezone_set('Asia/Manila');

    $sqd = ServiceQualityDimension::create([
        'client_id' => $request->clientid,
        'cc_survey_id' => $request->ccsurvey,
        'sqd5' => $request->SQD0,
        'sqd6' => $request->SQD1,
        'sqd7' => $request->SQD2,
        'sqd8' => $request->SQD3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->route('summone', $sqd->id)->with('success', "Data saved successfully!");
}


    public function directsqd1(){
        if(1 == 2){
            return view('sqd.smiley');
        }
        else{
            return redirect()->back();
        }
    }

    public function directsqd2(){
        if(1 == 2){
            return view('sqd.smiley2');
        }
        else{
            return redirect()->back();
        }
    }

public function downloadpdf(){
    /*
        $liquidation = Liquidation::findOrFail($id);
        $data = LiquidationData::where('liquidation_id', $liquidation->id)->get();
        $date = Carbon::now();
        $year = $date->year;
        $info = [
            'liquidation' => $liquidation,
            'data' => $data,
            'year' => $year
        ];
        */

        //$pdf = Pdf::loadView('agent.download.liquidation', $info);
        $pdf = PDF::loadView('prints.artaprint');
        return $pdf->download('ARTA-test.pdf');
}


}

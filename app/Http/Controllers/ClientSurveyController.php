<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CcSurvey;
use App\Models\Client;
use App\Models\ServiceQualityDimension;
use App\Models\User;
use Carbon\Carbon; //composer require nesbot/carbon
use PDF; //composer require barryvdh/laravel-dompdf


class ClientSurveyController extends Controller
{
    public function ccsurveyenglish(Request $request)
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
            'status' => 'Pending',
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
            'status' => 'Pending',
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
    
    
    return redirect()->route('sqd1english', $ccsurvey->id)->with('success', 'Data saved successfully!');
    //return response()->json(['success']);
}

public function sqd1english(CcSurvey $ccsurvey) {
    if (session('success')) {
        $survey = CcSurvey::findOrFail($ccsurvey->id);

        if ($survey->client->service_availed == 'Asosasyon') {
            return view('English.smiley-english', compact('survey'));
        } else {
            return view('English.smiley2-english', compact('survey'));
        }
    } else {
        return redirect()->back();
    }
}

public function sqd1englishpost(Request $request){

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

public function sqd2englishpost(Request $request){
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

    public function ccsurveytagalog(Request $request)
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
            'status' => 'Pending',
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
            'status' => 'Pending',
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
    
    
    return redirect()->route('sqd1tagalog', $ccsurvey->id)->with('success', 'Data saved successfully!');
    //return response()->json(['success']);
}

public function sqd1tagalog(CcSurvey $ccsurvey) {
    if (session('success')) {
        $survey = CcSurvey::findOrFail($ccsurvey->id);

        if ($survey->client->service_availed == 'Asosasyon') {
            return view('Tagalog.smiley-tagalog', compact('survey'));
        } else {
            return view('Tagalog.smiley2-tagalog', compact('survey'));
        }
    } else {
        return redirect()->back();
    }
}

public function sqd1tagalogpost(Request $request){

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

public function sqd2tagalogpost(Request $request){
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
            'status' => 'Pending',
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
            'status' => 'Pending',
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

public function downloadpdf(ServiceQualityDimension $sqd){
    set_time_limit(300);

        $sqd = ServiceQualityDimension::findOrFail($sqd->id);
        $client = Client::findOrFail($sqd->client->id);
        $cc = CcSurvey::findOrFail($sqd->cc->id);

        $client->status = 'Printed';
        $client->save();

        $info = [
            'sqd' => $sqd,
            'client' => $client,
            'cc' => $cc,
        ];

        $pdf = Pdf::loadView('prints.artaprint', $info);
        $pdf->setPaper('Legal', 'Portrait');
        return $pdf->download('ARTA-test.pdf');
}

public function clientdownloadpdf(ServiceQualityDimension $sqd){
    set_time_limit(300);

        $sqd = ServiceQualityDimension::findOrFail($sqd->id);
        $client = Client::findOrFail($sqd->client->id);
        $cc = CcSurvey::findOrFail($sqd->cc->id);

        $info = [
            'sqd' => $sqd,
            'client' => $client,
            'cc' => $cc,
        ];

        $pdf = Pdf::loadView('prints.artaprint', $info);
        $pdf->setPaper('Legal', 'Portrait');
        return $pdf->download('ARTA-test.pdf');
}


}

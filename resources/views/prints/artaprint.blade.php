<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTA</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/emoji-java@1.0.0/dist/emoji-java.min.js"></script>

    <style>
        body {
  margin: 1in;
  padding: 0;
  font-size: 12px;
  line-height: 1.5;
  page-break-inside: avoid;
}
       .form-check-label {
  font-size: 12px;
}
        table {
  width: 100%;
  border-collapse: collapse;
}
       th, td {
  padding: 0.5em;
  border: 1px solid #000;
  border-collapse: collapse;
}
       .card {
            border: none; 
            box-shadow: none; 
            padding: 1em;
        }
       .form-check-input {
            border: 2px solid #000; 
        }
       .small-horizontal-line {
            display: inline-block;
            border: none;
            border-top: 2px solid #000; 
            width: 2in; 
            vertical-align: middle; 
            
        }
        
    </style>

</head>
<body>


        <div class="card" style="margin-top:-100px;">
            <div class="d-flex justify-content-between align-items-center">
                <h6 style="margin-top:-30px; font-size:15px; margin-left:-120px;">Control No. _______</h6>
                <div class="d-flex align-items-center"> 
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/DOLE_picture1.png'))) }}" style="height: 60px; margin-left: 20px; position:absolute; margin-top:-30px;" alt="Image">
            <div class="text-center" style="margin-top:-30px;">
                <p class="mb-0" style="font-size: 13px;">Republic of the Philippines</p>
                <h6 class="mb-5" style="font-size: 14px;">DEPARTMENT OF LABOR AND EMPLOYMENT</h6>
                <h6 class="mb-0" style="font-size: 14px; margin-top:-35px">HELP US SERVE YOU BETTER!</h6>
            </div>
        </div>
                <div class="card m-2">
                    <div class="card-body" style="margin-left:440px;margin-top:-80px; width:200px; border: 1px solid black; height:45px;">
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">ANTI-RED TAPE AUTHORITY</p>
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">CLIENT SATISFACTION MEASUREMENT FORM</p>
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">PSA approval No.: ARTA-2242-3</p>
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">Expires on 31 April 2024</p>
                    </div>
                </div>
            </div>
            
            <div class="card" style="background-color:black; color:white; width:770px; height:90px; margin-left:-140px; margin-top:-20px;">
                <div class="card-body">
                    <p class="card-text" style="font-size:13px;">
                        This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide better service. Personal information shared will be kept confidential, and you always have the option not to answer this form.
                        (Itong Client Satisfaction Measurement (CSM) ay sumusubaybay sa karanasan ng customer sa opisina ng gobyerno. Ang iyong feedback sa natapos kamakailan lang na transaksyon ay makakatulong sa opisinang ito para makapagbigay ng mas mahusay na serbisyo. Ang personal na impormasyon na ibinahagi ay mananatiling kumpidensyal at ikaw ay laging may opsyon na hindi sagutan ang form na ito)
                    </p>
                </div>
            </div>

    <div class="row mt-2">
        <div class="col" style="margin-left:-130px; font-weight: bold;">
            <p class="mr-2">Client type:</p>
        </div>
        <div class="col justify-content-between " style="margin-top:-100px; margin-left:-30px;">
            
                @if ($sqd->client->client_type == 'ciziten')
                <input type="checkbox" checked id="citizenCheckbox">
                <label class="" for="citizenCheckbox">
                    Citizen
                </label>
                @else
                <input type="checkbox" id="citizenCheckbox">
                <label class="" for="citizenCheckbox">
                    Citizen
                </label>
                @endif
                
                @if ($sqd->client->client_type == "business")
                <input checked style="margin-left:30px;" type="checkbox" id="BusinessCheckbox">
                <label class=" " for="BusinessCheckbox">
                    Business
                </label>
                @else
                <input style="margin-left:30px;" type="checkbox" id="BusinessCheckbox">
                <label class=" " for="BusinessCheckbox">
                    Business
                </label>
                @endif

                @if ($sqd->client->client_type == "governement")
                <input checked style="margin-left:30px;" type="checkbox" id="GovernCheckbox">
                <label class="" for="GovernCheckbox">
                    Government (Employee or another agency)
                </label>
                @else
                <input style="margin-left:30px;" type="checkbox" id="GovernCheckbox">
                <label class="" for="GovernCheckbox">
                    Government (Employee or another agency)
                </label>
                @endif

            
        </div>
    </div>

        <div class = "row mt-2">
            <div class="col" style="margin-left:-130px; margin-top:-10px; font-weight: bold;">
                <p class="mr-2">Petsa (Date): ___<a style="text-decoration: underline;">{{date('M d, Y', strtotime($sqd->cc->date))}}</a>________ </p>
            </div>
            <div class="" >
                <p style="margin-left:130px; margin-top:-32px; font-weight: bold;" class="mr-2">Sex (Kasarian): 
                    <div style="margin-left:205px;margin-top:-40px;">
                        @if($sqd->client->sex == 'male')
                        <input checked style="margin-left:10px; margin-top:0px;" type="checkbox" id="BusinessCheckbox">
                        <label class=" " for="BusinessCheckbox">
                            Male
                        </label>
                        @else
                        <input style="margin-left:10px; margin-top:0px;" type="checkbox" id="BusinessCheckbox">
                        <label class=" " for="BusinessCheckbox">
                            Male
                        </label>
                        @endif

                        @if($sqd->client->sex == 'female')
                        <input checked style="margin-left:8px; margin-top:0px;" type="checkbox" id="BusinessCheckbox">
                        <label class=" " for="BusinessCheckbox">
                            Female
                        </label>
                        @else
                        <input style="margin-left:8px; margin-top:0px;" type="checkbox" id="BusinessCheckbox">
                        <label class=" " for="BusinessCheckbox">
                            Female
                        </label>
                        @endif
                    </div>
                </p>
            </div>
            <div class="col">
                <p class="mr-2" style="width:200px; margin-left:400px; margin-top:-32px; font-weight: bold;">Age (Edad): __<a style="text-decoration: underline;">{{$sqd->client->age}}</a>___ </p>
            </div>

        </div>

        <div class = "row">
            <div class="col" style="margin-left:-130px; margin-top:-20px; font-weight: bold;">
                <p>Region of residence (Rehiyon o Lugar ng tirahan): ___<a style="text-decoration: underline;">{{$sqd->client->region_of_residence}}</a>______</p>
            </div>
            <div class="col" style="margin-left:290px; margin-top:-30px; font-weight: bold;">
                <p>Service Availed (Serbisyong Kinuha): __<a style="text-decoration: underline;">{{$sqd->client->service_availed}}</a>__ </p>
            </div>

        </div>

        <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:-140px; margin-top:-10px;">
                <p class="m-0">INSTRUCTIONS: <i style="font-weight: bold;"> Check mark (/) </i> your answer to the Citizen's Charter (CC) questions. Citizen's Charter is an official document that reflects the services of a government agency/office including requirements, fees, and processing time among others. (<i style="font-weight: bold;">Lagyan ng markang tsek (/)</i> ang iyong sagot sa mga katanungan ukol sa Citizen's Charter (CC). Ang Citizen's Charter ay isang opisyal na dokumento na sumasalamin sa mga serbisyo ng isang ahensya o opisina ng gobyerno kasama na ang kanilang mga kinakailangan, bayad, at ang oras ng pagpro-proseso).</p>    
            </div>
        </div>
        <div class = "m-2">
        
        <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:-130px; margin-top:-15px;">
            <p class="font-weight-bold"><i style="font-weight: bold;">CC1</i>     Which of the following best describes your awareness of a CC? (Alin sa mga sumusunod ang pinaka naglalarawan sa iyong kamalayan sa CC?)</p>
            <div class="form-check ms-4" style="margin-top:-15px;">
                @if($sqd->cc->cc1 == 'option1')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio1" value="option1">
                <label class="form-check-label" for="radio1">
                    1. I know what a CC is and I saw this office's CC. (Alam ko ang ibig sabihin ng CC at nakita ko na ito.)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio1" value="option1">
                <label class="form-check-label" for="radio1">
                    1. I know what a CC is and I saw this office's CC. (Alam ko ang ibig sabihin ng CC at nakita ko na ito.)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc1 == 'option2')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio2" value="option2">
                <label class="form-check-label" for="radio2">
                    2. I know what a CC is but I did NOT see this office's CC. (Alam ko ang ibig sabihin ng CC ngunit hindi ko pa ito nakita.)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio2" value="option2">
                <label class="form-check-label" for="radio2">
                    2. I know what a CC is but I did NOT see this office's CC. (Alam ko ang ibig sabihin ng CC ngunit hindi ko pa ito nakita.)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc1 == 'option3')
                <input style="margin-left:-10px;" checked class="" type="checkbox" name="CC1" id="radio3" value="option3">
                <label class="form-check-label" for="radio3">
                    3. I learned of the CC when I saw this office's CC. (Natutunan ko kung ano ang CC nung akita ko ito.)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio3" value="option3">
                <label class="form-check-label" for="radio3">
                    3. I learned of the CC when I saw this office's CC. (Natutunan ko kung ano ang CC nung akita ko ito.)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc1 == 'option4')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio4" value="option4">
                <label style="margin-top:-20px; margin-left:5px" class="form-check-label" for="radio4">
                    4. I don't know what a CC is and I did not see one in this office. Answer 'N/A' to CC2 and CC3. (Hindi ko alam kung ano ang CC at hindi ko pa ito nakikita. Lagyan ang 'N/A' sa CC2 at CC3)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio4" value="option4">
                <label style="margin-top:-20px; margin-left:5px" class="form-check-label" for="radio4">
                    4. I don't know what a CC is and I did not see one in this office. Answer 'N/A' to CC2 and CC3. (Hindi ko alam kung ano ang CC at hindi ko pa ito nakikita. Lagyan ang 'N/A' sa CC2 at CC3)
                </label>
                @endif
            </div>
            
            <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:0px; margin-top:0px;">
            <p class="font-weight-bold"><i style="font-weight: bold;">CC2</i>    If aware of CC (answered in 1-3 of CC1), would you say that the CC of this office was...? (Kung alam mo ang CC (kung ang sagot mo ay nasa 1-3 ng CC1), masasabi mo ba na ang CC ng opisinang ito ay...?)</p>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc2 == 'option1')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio5" value="option1">
                <label style="margin-left:0px; width:200px;" class="form-check-label" for="radio5">
                    1. Easy to see (Madaling makita)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio5" value="option1">
                <label style="margin-left:0px; width:200px;" class="form-check-label" for="radio5">
                    1. Easy to see (Madaling makita)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                @if($sqd->cc->cc2 == 'option2')
                <input checked style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC2" id="radio6" value="option2">
                <label style="margin-left:0px;" class="form-check-label" for="radio6">
                    2. Somewhat easy to see (Medyo madaling makita) 
                </label>
                @else
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC2" id="radio6" value="option2">
                <label style="margin-left:0px;" class="form-check-label" for="radio6">
                    2. Somewhat easy to see (Medyo madaling makita) 
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc2 == 'option3')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio7" value="option3">
                <label style="margin-left:0px;" class="form-check-label" for="radio7">
                    3. Difficult to see (Mahirap makita)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio7" value="option3">
                <label style="margin-left:0px;" class="form-check-label" for="radio7">
                    3. Difficult to see (Mahirap makita)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                @if($sqd->cc->cc2 == 'option4')
                <input checked style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC2" id="radio8" value="option4">
                <label style="margin-left:0px;" class="form-check-label" for="radio8">
                    4. Not visible at all (Hindi talaga nakikita)
                </label>
                @else
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC2" id="radio8" value="option4">
                <label style="margin-left:0px;" class="form-check-label" for="radio8">
                    4. Not visible at all (Hindi talaga nakikita)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc2 == 'option5')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio9" value="option5">
                <label style="margin-left:0px;" class="" for="radio9">
                    5. N/A (Hindi na-aangkop)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio9" value="option5">
                <label style="margin-left:0px;" class="" for="radio9">
                    5. N/A (Hindi na-aangkop)
                </label>
                @endif
            </div>

            
            <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:0px; margin-top:0px;">
            <p class="font-weight-bold"><i style="font-weight: bold;">CC3 </i>    If aware of CC (answered codes 1-3 of CC1), how much did the CC help you in your transaction? (Kung batid mo ang CC (kung ang sagot mo ay nasa code 1-3 ng CC1), gaano nakatulong ang CC sa iyong transaksyon?)</p>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc3 == 'option1')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC3" id="radio10" value="option1">
                <label class="form-check-label" for="radio10">
                    1. Helped very much (Nakaulong ng lubusan)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC3" id="radio10" value="option1">
                <label class="form-check-label" for="radio10">
                    1. Helped very much (Nakaulong ng lubusan)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                @if($sqd->cc->cc3 == 'option2')
                <input checked style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC3" id="radio11" value="option2">
                <label class="form-check-label" for="radio11">
                    2. Somewhat helped (Bahagyang nakatulong) 
                </label>
                @else
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC3" id="radio11" value="option2">
                <label class="form-check-label" for="radio11">
                    2. Somewhat helped (Bahagyang nakatulong) 
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                @if($sqd->cc->cc3 == 'option3')
                <input checked style="margin-left:-10px;" class="" type="checkbox" name="CC3" id="radio12" value="option3">
                <label class="form-check-label" for="radio12">
                    3. Did not help (Hindi ito nakatulong)
                </label>
                @else
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC3" id="radio12" value="option3">
                <label class="form-check-label" for="radio12">
                    3. Did not help (Hindi ito nakatulong)
                </label>
                @endif
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                @if($sqd->cc->cc3 == 'option4')
                <input checked style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC3" id="radio13" value="option4">
                <label class="form-check-label" for="radio13">
                    4. N/A (Hindi na-aangkop)
                </label>
                @else
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC3" id="radio13" value="option4">
                <label class="form-check-label" for="radio13">
                    4. N/A (Hindi na-aangkop)
                </label>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="row ">
            <div class="col-md-12">
                <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:-140px; font-weight-bold ">
                    <p class="m-0">INSTRUCTIONS:</p>
                </div>
            </div>
            <div class="col-md-12">
                <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:-140px; margin-top:0px;">
                    <p class="m-0">For SQD 0-8, please put a check (/) on the column that best corresponds to your answer. (Para sa SQD 0-8, pakilagyan ng markang tsek (/) ang hanay na pinakatumutugma sa inyong sagot.)</p>
                </div>
            </div>
        </div>

        <div class="row mt-4" style="position:absolute">
            <div class="col-md-6">
             <div class="table-responsive">
                <table class="table align-items-start align-content-center" style="font-size: 10px; width:760px; margin-left:-145px; margin-top:-10px;">
                    <thead>
                        <tr style="font-size: 1em">
                        <th scope="col" style="text-align: center;width:500px; font-size:15px; vertical-align:middle">Service Quality Dimension (SQD)</th>
                            <th scope="col" class="text-center align-content-start justify-content-center " style="vertical-align:top;"  >  <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/strongd.png'))) }}" style="width:25px;height:25px;" alt="Image"><br> Kusog nga Dili Mouyon</th>
                            <th scope="col" class="text-center align-content-start justify-content-center"  style="vertical-align:top;" > <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/disagree.png'))) }}" style="width:27px;height:27px;" alt="Image"><br> Dili mouyon </th>
                            <th scope="col" class="text-center align-content-start justify-content-center" style="width:60px;align-content:flex-start; vertical-align:top;"> <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/neither.png'))) }}" style="width:29px;height:29px;" alt="Image"><br> Dili mouyon o dili mouyon </th>
                            <th scope="col" class="text-center align-content-start justify-content-center" style="vertical-align:top;" > <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/agree.png'))) }}" style="width:25px;height:25px;" alt="Image"><br> Uyon </th>
                            <th scope="col" class="text-center align-content-start justify-content-center" style="vertical-align:top;" > <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/stronga.png'))) }}" style="width:28px;height:28px;" alt="Image"><br>Uyon kaayo </th>
                            <th scope="col" class="text-center align-content-start justify-content-center"style="vertical-align:top;" > N/A (Hindi Na-aangkop)</th>
                            <!-- <th  scope="col" class="text-center" ><br>N/A (Hindi Na-aangkop)</th> -->
                       
                        </tr>
                    </thead>
                    <tbody style="font-size:11px;">
                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD0. I am satisfied with the service that I availed (Ako ay kontento sa serbisyo na aking napakinabangan)</td>
                            @if($sqd->sqd0 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd0 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd0 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd0 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd0 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>

                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD1. I spent a reasonable amount of time for my transaction (Gumugol ako ng rasonableng oras para sa aking transaksyon)</td>
                            @if($sqd->sqd1 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd1 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd1 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd1 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd1 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>
                        
                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD2. The office followed the transaction's requirements and steps based on the information provided (Sinunod ng opisina ang mga kinakailangan at hakbang ng transaksyon batay sa ibinigay na impormasyon)</td>
                            @if($sqd->sqd2 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd2 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd2 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif
                            @if($sqd->sqd2 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd2 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>

                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD3. The steps (including payment) I needed to do for my transaction were easy and simple (Ang mga hakbang (kasama na ang pagbabayad) na aking kinailangan na gawin sa aking transaksyon ay naging madali at simple)</td>
                            @if($sqd->sqd3 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd3 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd3 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd3 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd3 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif

                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>

                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD4. I easily found information about my transaction from the office or its website (Naging madali ang paghanap ng impormasyon sa aking naging transaksyon mula sa opisina o website)</td>
                            @if($sqd->sqd4 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd4 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd4 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd4 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd4 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input  class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>
                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD5. I paid a reasonable amount of fees for my transaction (Nagbayad ako ng rasonableng kaukulang bayad para sa aking naging transaksyon)</td>
                            @if($sqd->sqd5 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd5 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd5 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd5 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd5 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif

                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>

                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD6. I feel the office was fair to everyone, or "walang palakasan", during my transaction (Pakiramdam ko na ang opisina ay naging patas sa lahat, o "walang palakasan", nung ako ay nakikipagtransaksyon)</td>
                            @if($sqd->sqd6 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd6 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd6 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd6 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd6 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>
                        
                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD7. I was treated courteously by the staff, and (if asked for help), the staff was helpful (Magalang ang naging pakikitungo sakin ng kawani, at (kung ako ay humingi ng tulong), ang kawani ay naging matulungin)</td>
                            @if($sqd->sqd7 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd7 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd7 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd7 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd7 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>

                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD8. I got what I needed from the government office, or (if denied) denial of the request was sufficiently explained to me (Nakuha ko ang aking kailangan sa opisina ng gobyerno, o (kung tinanggihan) pagtanggi sa kahilingan ay  napaliwanag ng husto)</td>
                            @if($sqd->sqd8 == 'option1')
                            <td style="text-align: center;"><input checked class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            @endif

                            @if($sqd->sqd8 == 'option2')
                            <td style="text-align: center;"><input checked class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            @endif

                            @if($sqd->sqd8 == 'option3')
                            <td style="text-align: center;"><input checked class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            @endif

                            @if($sqd->sqd8 == 'option4')
                            <td style="text-align: center;"><input checked class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            @endif

                            @if($sqd->sqd8 == 'option5')
                            <td style="text-align: center;"><input checked class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @else
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            @endif
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                            
                        </tr>
                    
                    </tbody>
                </table>
        <p class="text-left" style="text-align:left;margin-left:-140px">Suggestions on how we can further improve services (optional). (Mga mungkahi kung paano namin mapapabuti ang mga serbisyo) ___________________________________________________________________________________________________________________________________</p>
        <p style="margin-left:-140px">___________________________________________________________________________________________________________________________________</p>

</div>
            </div>
        </div>

        <hr>
        <hr>
        <hr>
        <hr>
        
    </div>

        

        </div>
        

        

        

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var emoji = new Emoji('&#x1F614;');
    document.getElementById('emoji').innerHTML = emoji.toSVG();
</script>
</body>
</html>

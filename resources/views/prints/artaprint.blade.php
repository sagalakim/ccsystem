<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTA</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <h6 style="margin-top:-30px; font-size:13px; margin-left:-120px;">Control No. _______</h6>
                <div class="d-flex align-items-center"> 
            <div class="text-center" style="margin-top:-30px;">
                <p class="mb-0" style="font-size: 14px;">Republic of the Philippines</p>
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
            
            <div class="card" style="background-color:black; color:white; width:770px; height:90px; margin-left:-150px; margin-top:-20px;">
                <div class="card-body">
                    <p class="card-text" style="font-size:13px;">
                        This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide better service. Personal information shared will be kept confidential, and you always have the option not to answer this form.
                        (Itong Client Satisfaction Measurement (CSM) ay sumusubaybay sa karanasan ng customer sa opisina ng gobyerno. Ang iyong feedback sa natapos kamakailan lang na transaksyon ay makakatulong sa opisinang ito para makapagbigay ng mas mahusay na serbisyo. Ang personal na impormasyon na ibinahagi ay mananatiling kumpidensyal at ikaw ay laging may opsyon na hindi sagutan ang form na ito)
                    </p>
                </div>
            </div>

    <div class="row mt-2">
        <div class="col" style="margin-left:-110px; font-weight: bold;">
            <p class="mr-2">Client type:</p>
        </div>
        <div class="col justify-content-between " style="margin-top:-100px; margin-left:-30px;">
            
                <input type="checkbox" id="citizenCheckbox">
                <label class="" for="citizenCheckbox">
                    Citizen
                </label>
                
                <input style="margin-left:30px;" type="checkbox" id="BusinessCheckbox">
                <label class=" " for="BusinessCheckbox">
                    Business
                </label>

                <input style="margin-left:30px;" type="checkbox" id="GovernCheckbox">
                <label class="" for="GovernCheckbox">
                    Government (Employee or another agency)
                </label>

            
        </div>
    </div>

        <div class = "row mt-2">
            <div class="col" style="margin-left:-110px;">
                <p class="mr-2">Petsa (Date): ________________________ </p>
            </div>
            <div class="" >
                <p style="margin-left:130px; margin-top:-32px;" class="mr-2">Sex (Kasarian): 
                    <div style="margin-left:205px;margin-top:-40px;">
                        <input style="margin-left:10px; margin-top:0px;" type="checkbox" id="BusinessCheckbox">
                        <label class=" " for="BusinessCheckbox">
                            Male
                        </label>
                        <input style="margin-left:8px; margin-top:0px;" type="checkbox" id="BusinessCheckbox">
                        <label class=" " for="BusinessCheckbox">
                            Female
                        </label>
                    </div>
                </p>
            </div>
            <div class="col">
                <p class="mr-2" style="width:200px; margin-left:400px; margin-top:-32px;">Age (Edad): _____________ </p>
            </div>

        </div>

        <div class = "row">
            <div class="col" style="margin-left:-110px; margin-top:-20px;">
                <p>Region of residence (Rehiyon o Lugar ng tirahan): ________________________</p>
            </div>
            <div class="col" style="margin-left:290px; margin-top:-30px;">
                <p>Service Availed (Serbisyong Kinuha): _________________ </p>
            </div>

        </div>

        <div style="font-family: Arial, sans-serif; font-size: 13px; width:770px; margin-left:-140px; margin-top:-10px;">
                <p class="m-0">Instructions: Check mark (/) your answer to the Citizen's Charter (CC) questions. Citizen's Charter is an official document that reflects the services of a government agency/office including requirements, fees, and processing time among others. (Lagyan ng markang tsek (/) ang iyong sagot sa mga katanungan ukol sa Citizen's Charter (CC). Ang Citizen's Charter ay isang opisyal na dokumento na sumasalamin sa mga serbisyo ng isang ahensya o opisina ng gobyerno kasama na ang kanilang mga kinakailangan, bayad, at ang oras ng pagpro-proseso).</p>    
            </div>
        </div>
        <div class = "m-2">
        
        <div style="font-family: Arial, sans-serif; font-size: 12px; width:770px; margin-left:-130px; margin-top:-15px;">
            <p class="font-weight-bold">CC1     Which of the following best describes your awareness of a CC? (Alin sa mga sumusunod ang pinaka naglalarawan sa iyong kamalayan sa CC?)</p>
            <div class="form-check ms-4" style="margin-top:-15px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio1" value="option1">
                <label class="form-check-label" for="radio1">
                    1. I know what a CC is and I saw this office's CC. (Alam ko ang ibig sabihin ng CC at nakita ko na ito.)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio2" value="option2">
                <label class="form-check-label" for="radio2">
                    2. I know what a CC is but I did NOT see this office's CC. (Alam ko ang ibig sabihin ng CC ngunit hindi ko pa ito nakita.)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio3" value="option3">
                <label class="form-check-label" for="radio3">
                    3. I learned of the CC when I saw this office's CC. (Natutunan ko kung ano ang CC nung akita ko ito.)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC1" id="radio4" value="option4">
                <label style="margin-top:-20px; margin-left:5px" class="form-check-label" for="radio4">
                    4. I don't know what a CC is and I did not see one in this office. Answer 'N/A' to CC2 and CC3. (Hindi ko alam kung ano ang CC at hindi ko pa ito nakikita. Lagyan ang 'N/A' sa CC2 at CC3)
                </label>
            </div>
            
            <div style="font-family: Arial, sans-serif; font-size: 13px; width:770px; margin-left:0px; margin-top:0px;">
            <p class="font-weight-bold">CC2     If aware of CC (answered in 1-3 of CC1), would you say that the CC of this office was...? (Kung alam mo ang CC (kung ang sagot mo ay nasa 1-3 ng CC1), masasabi mo ba na ang CC ng opisinang ito ay...?)</p>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio5" value="option1">
                <label style="margin-left:0px; width:200px;" class="form-check-label" for="radio5">
                    1. Easy to see (Madaling makita)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC2" id="radio6" value="option2">
                <label style="margin-left:0px;" class="form-check-label" for="radio6">
                    2. Somewhat easy to see (Medyo madaling makita) 
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio7" value="option3">
                <label style="margin-left:0px;" class="form-check-label" for="radio7">
                    3. Difficult to see (Mahirap makita)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC2" id="radio8" value="option4">
                <label style="margin-left:0px;" class="form-check-label" for="radio8">
                    4. Not visible at all (Hindi talaga nakikita)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC2" id="radio9" value="option5">
                <label style="margin-left:0px;" class="" for="radio9">
                    5. N/A (Hindi na-aangkop)
                </label>
            </div>

            
            <div style="font-family: Arial, sans-serif; font-size: 13px; width:770px; margin-left:0px; margin-top:0px;">
            <p class="font-weight-bold">CC3     If aware of CC (answered codes 1-3 of CC1), how much did the CC help you in your transaction? (Kung batid mo ang CC (kung ang sagot mo ay nasa code 1-3 ng CC1), gaano nakatulong ang CC sa iyong transaksyon?)</p>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC3" id="radio10" value="option1">
                <label class="form-check-label" for="radio10">
                    1. Helped very much (Nakaulong ng lubusan)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC3" id="radio11" value="option2">
                <label class="form-check-label" for="radio11">
                    2. Somewhat helped (Bahagyang nakatulong) 
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-10px;">
                <input style="margin-left:-10px;" class="" type="checkbox" name="CC3" id="radio12" value="option3">
                <label class="form-check-label" for="radio12">
                    3. Did not help (Hindi ito nakatulong)
                </label>
            </div>
            <div class="form-check ms-4" style="margin-top:-40px;">
                <input style="margin-left:-10px; margin-left:300px;" class="" type="checkbox" name="CC3" id="radio13" value="option4">
                <label class="form-check-label" for="radio13">
                    4. N/A (Hindi na-aangkop)
                </label>
            </div>
        </div>
        </div>
    </div>

    <div class="row ">
            <div class="col-md-12">
                <div style="font-family: Arial, sans-serif; font-size: 13px; width:770px; margin-left:-140px; ">
                    <p class="m-0 font-weight-bold">INSTRUCTIONS:</p>
                </div>
            </div>
            <div class="col-md-12">
                <div style="font-family: Arial, sans-serif; font-size: 13px; width:770px; margin-left:-140px; margin-top:0px;">
                    <p class="m-0">For SQD 0-8, please put a check (/) on the column that best corresponds to your answer. (Para sa SQD 0-8, pakilagyan ng markang tsek (/) ang hanay na pinakatumutugma sa inyong sagot.)</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
             <div class="table-responsive">
                <table class="table" style="font-size: 13px; width:770px; margin-left:-140px; margin-top:-10px;">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" >Service Quality Dimension (SQD)</th>
                            <th scope="col" class="text-center" > <span class="emoji" style="font-size: 2em;">&#x1F614; </span><br>Strongly Disagree (Lubos na hindi sumasang-ayon)</th>
                            <th scope="col" class="text-center" > <span class="emoji" style="font-size: 2em;">&#x1F641; </span><br>Disagree (Hindi sumasang-ayon)</th>
                            <th scope="col" class="text-center" > <span class="emoji" style="font-size: 2em;">&#128528; </span><br>Neither Agree nore Disagree (Sumasangy-ayon na hindi rin sumasang-ayon)</th>
                            <th scope="col" class="text-center" > <span class="emoji" style="font-size: 2em;">&#128578; </span><br>Agree (Sumasang-ayon)</th>
                            <th scope="col" class="text-center" > <span class="emoji" style="font-size: 2em;">&#128522; </span><br>Strongly Agree (Lubos na sumasang-ayon)</th>
                            <th scope="col" class="text-center" ><br>N/A (Hindi Na-aangkop)</th>
                        </tr>
                    </thead>
                    <tbody style="font-size:10px;">
                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD0. I am satisfied with the service that I availed (Ako ay kontento sa serbisyo na aking napakinabangan)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD1. I spent a reasonable amount of time for my transaction (Gumugol ako ng rasonableng oras para sa aking transaksyon)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>
                        
                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD2. The office followed the transaction's requirements and steps based on the information provided (Sinunod ng opisina ang mga kinakailangan at hakbang ng transaksyon batay sa ibinigay na impormasyon)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD3. The steps (including payment) I needed to do for my transaction were easy and simple (Ang mga hakbang (kasama na ang pagbabayad) na aking kinailangan na gawin sa aking transaksyon ay naging madali at simple)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px;  overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD4. I easily found information about my transaction from the office or its website (Naging madali ang paghanap ng impormasyon sa aking naging transaksyon mula sa opisina o website)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>
                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD5. I paid a reasonable amount of fees for my transaction (Nagbayad ako ng rasonableng kaukulang bayad para sa aking naging transaksyon)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD6. I feel the office was fair to everyone, or "walang palakasan", during my transaction (Pakiramdam ko na ang opisina ay naging patas sa lahat, o "walang palakasan", nung ako ay nakikipagtransaksyon)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>
                        
                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD7. I was treated courteously by the staff, and (if asked for help), the staff was helpful (Magalang ang naging pakikitungo sakin ng kawani, at (kung ako ay humingi ng tulong), ang kawani ay naging matulungin)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD8. I got what I needed from the government office, or (if denied) denial of the request was sufficiently explained to me (Nakuha ko ang aking kailangan sa opisina ng gobyerno, o (kung tinanggihan) pagtanggi sa kahilingan ay  napaliwanag ng husto)</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="checkbox" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="checkbox" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="checkbox" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="checkbox" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="checkbox" name="SQD0" value="option5"></td>
                            <td style="text-align: center;"><input class="form-check-input28" type="checkbox" name="SQD4" value="option6"></td>
                        </tr>
                    
                    </tbody>
                </table>
</div>
            </div>
        </div>

        <p>Suggestions on how we can further improve services (optional). (Mga mungkahi kung paano namin mapapabuti ang mga serbisyo)</p>
        <hr>
        <hr>
        <hr>
        <hr>
        
    </div>

        

        </div>
        

        

        

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

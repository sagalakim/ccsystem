<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almost Done!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <title>Personal Information</title> -->
    <link rel="icon" href="images/DOLE_picture.ico" type="image/x-icon">

     <style>
  .header-blue {
    /* back to normal color #21a9af */
  background:linear-gradient(135deg, #172a74, #21a9af);
  background-color:#184e8e;
  padding-bottom:80px;
  font-family:'Source Sans Pro', sans-serif;
}

@media (min-width:768px) {
  .header-blue {
    align-items:center;
    align-content:center;
    padding-bottom:120px;
    min-height:100vh;
  }
}

.header-blue .navbar {
  background:transparent;
  padding-top:.75rem;
  padding-bottom:.75rem;
  color:#fff;
  border-radius:0;
  box-shadow:none;
  border:none;
}

@media (min-width:768px) {
  .header-blue .navbar {
    padding-top:1rem;
    padding-bottom:1rem;
  }
}

.header-blue .navbar .navbar-brand {
  font-weight:bold;
  color:inherit;
}

.header-blue .navbar .navbar-brand:hover {
  color:#f0f0f0;
}

.header-blue .navbar .navbar-collapse {
  border-top:1px solid rgba(255,255,255,0.3);
  margin-top:.5rem;
}

@media (min-width:768px) {
  .header-blue .navbar .navbar-collapse {
    border-color:transparent;
    margin:0;
  }
}

.header-blue .navbar .navbar-collapse span .login {
  color:#d9d9d9;
  margin-right:.5rem;
  text-decoration:none;
}

.header-blue .navbar .navbar-collapse span .login:hover {
  color:#fff;
}

.header-blue .navbar .navbar-toggler {
  border-color:rgba(255,255,255,0.3);
}

.header-blue .navbar .navbar-toggler:hover, .header-blue .navbar-toggler:focus {
  background:none;
}

.header-blue .navbar .navbar-nav a.active, .header-blue .navbar .navbar-nav > .show .dropdown-item {
  background:none;
  box-shadow:none;
}

@media (min-width: 768px) {
  .header-blue .navbar-nav .nav-link {
    padding-left:.7rem;
    padding-right:.7rem;
  }
}

@media (min-width: 992px) {
  .header-blue .navbar-nav .nav-link {
    padding-left:1.2rem;
    padding-right:1.2rem;
  }
}

.header-blue .navbar .navbar-nav > li > .dropdown-menu {
  margin-top:-5px;
  box-shadow:0 4px 8px rgba(0,0,0,.1);
  background-color:#fff;
  border-radius:2px;
}

.header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item {
  line-height:2;
  color:#37434d;
}

.header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item:hover {
  background:#ebeff1;
}

.header-blue .action-button, .header-blue .action-button:not(.disabled):active {
  border:1px solid rgba(255,255,255,0.7);
  border-radius:40px;
  color:#ebeff1;
  box-shadow:none;
  text-shadow:none;
  padding:.3rem .8rem;
  background:transparent;
  transition:background-color 0.25s;
  outline:none;
}

.header-blue .action-button:hover {
  color:#fff;
}

.header-blue .navbar .form-inline label {
  color:#d9d9d9;
}

.header-blue .navbar .form-inline .search-field {
  display:inline-block;
  width:80%;
  background:none;
  border:none;
  border-bottom:1px solid transparent;
  border-radius:0;
  color:#ccc;
  box-shadow:none;
  color:inherit;
  transition:border-bottom-color 0.3s;
}

.header-blue .navbar .form-inline .search-field:focus {
  border-bottom:1px solid #ccc;
}


/*body


.bg-cover {
    background-size: cover !important;
}

*/

/*
CSM
*/

/*body {
    min-height: 100vh;
} */

.custom-button {
  background-color: #0000ff; /* Tomato color */
  color: white;
}

.font-size-25 {
    font-size: 30px;
}

/* Responsive font size for smaller screens */
@media (max-width: 768px) {
    .font-size-25 {
        font-size: 20px; /* Adjust as needed for smaller screens */
    }
}

.background-container {
            background:linear-gradient(135deg, #172a74, #21a9af);
            background-color:#184e8e;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .custom-btn {
            background-color: #007bff; 
            color: #fff; 
            border: none;
            padding: 7px 13px;
            border-radius: 50px;
            font-size: 16px;
            font-family: "Arial";
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

</style>  

  </head>
  <body >
  <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container d-flex justify-content-start align-content-center align-items-start">
                    <img src="{{ asset('images/DOLE_picture.png') }}" alt="Logo" width="40" height="100%" class="ml-3 d-inline-block align-text-top">
                    <a class="navbar-brand align-content-center align-items-center mx-1" style= "line-height:16px" href="/"> Department of Labor and Employment - X 
                    <p style="font-weight:500;font-size:12px;letter-spacing:4px;height:0">Misamis Oriental Provincial Field Office</p>
                
                </a>
                </div>
            </nav>
          
      
              <div class="container mt-5">

              @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif
              
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header form-container ">
                <h3 class="display-6 text-center mb-4 font-size-25 font-weight-bold">Summary</h3>
                <div>
                <h5 class="display-6 text-left mb-4  font-weight-bold">Personal Info</h5>

                    <div class="form-group  justify-content-between    row mx-5 border-bottom align-items-center " >
                        <div >
                            <label for="clienttype font-weight-bold">Client Type</label>
                        </div>
                        <div >
                            <label class="attributes text-color-red" id = "t" style="color:green;font-style:italic;font-weight:bold;">{{$sqd1->client->client_type}}</label>
                        </div>
                        
                        </div>

                        <div class="form-group  justify-content-between row mx-5 border-bottom align-items-center" >
                        <div >
                            <label for="gender font-weight-bold">Gender</label>
                        </div>
                        
                       
                        <div >
                            <label class="attributes text-color-red" style="color:green;font-style:italic;font-weight:bold;">{{$sqd1->client->sex}}</label>
                        </div>
                        
                        </div>

                   
                        <div class="form-group  justify-content-between row mx-5 border-bottom align-items-center" >
                        <div >
                            <label for="date font-weight-bold">Petsa</label>
                        </div>
                        <div >
                            <label class="attributes text-color-red" style="color:green;font-style:italic;font-weight:bold;">{{date('M d, Y', strtotime($sqd1->cc->date))}}</label>
                        </div>
                    </div>
                    <div class="form-group  justify-content-between row mx-5 border-bottom align-items-center" >
                        <div >
                            <label for="age font-weight-bold">Edad</label>
                        </div>
                        <div >
                            <label class="attributes text-color-red" style="color:green;font-style:italic;font-weight:bold;">{{$sqd1->client->age}}</label>
                        </div>
                    </div>
                    <div class="form-group  justify-content-between row mx-5 border-bottom align-items-center" >
                        <div >
                            <label for="address font-weight-bold">Lugar nga Gipuy-an</label>
                        </div>
                        <div >
                            <label class="attributes text-color-red" style="color:green;font-style:italic;font-weight:bold;">{{$sqd1->client->region_of_residence}}</label>
                        </div>
                    </div>

                    <div class="form-group  justify-content-between row mx-5 border-bottom align-items-center" >
                        <div >
                            <label for="service font-weight-bold">Service Availed</label>
                        </div>
                        <div >
                            <label class="attributes text-color-red" id='service_avail' style="color:green;font-style:italic;font-weight:bold;">{{$sqd1->client->service_availed}}</label>
                        </div>
                    </div>
    </div>
                        <div class="row justify-content-center align-items-center mt-4">
            <div style="font-family: Arial, sans-serif; font-size: 17px;">
                <p class="m-0 font-weight-bold">Citizen's Charter (CC)</p>    
            </div>
          
        </div>
        <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC1</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">1. Hain sa mosunod ang labing maayo nga naghulagway sa atong kahibalo sa usa ka CC?</p>
            
            <div class="form-check">
                @if($sqd1->cc->cc1 == 'option1')
                <input required class="form-check-input" type="radio" disabled name="CC1" id="radio1" value="option1" checked>
                <label class="form-check-label" for="radio1" style="color:green;font-weight:bold;" >
                    1. Nahibal-an ko kung unsa ang CC ug nakita nako ang CC sa opisina.
                </label>
                @else
                <input required class="form-check-input" type="radio" disabled name="CC1" id="radio1" value="option1" >
                <label class="form-check-label" for="radio1" >
                    1. Nahibal-an ko kung unsa ang CC ug nakita nako ang CC sa opisina.
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc1 == 'option2')
                <input class="form-check-input" type="radio" disabled name="CC1" id="radio2" value="option2" checked>
                <label class="form-check-label" for="radio2" style="color:green;font-weight:bold;">
                    2. Kabalo ko unsa ang CC pero WALA ko kakita sa CC ani nga opisina.
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC1" id="radio2" value="option2">
                <label class="form-check-label" for="radio2">
                    2. Kabalo ko unsa ang CC pero WALA ko kakita sa CC ani nga opisina.
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc1 == 'option3')
                <input checked class="form-check-input" type="radio" disabled name="CC1" id="radio3" value="option3">
                <label class="form-check-label" for="radio3" style="color:green;font-weight:bold;">
                    3. Nahibal-an ko ang CC sa dihang nakita nako ang CC sa opisina.
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC1" id="radio3" value="option3">
                <label class="form-check-label" for="radio3">
                    3. Nahibal-an ko ang CC sa dihang nakita nako ang CC sa opisina.
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc1 == 'option4')
                <input checked class="form-check-input" type="radio" disabled name="CC1" id="radio4" value="option4">
                <label class="form-check-label" for="radio4" style="color:green;font-weight:bold;">
                    4. Wala ko kahibalo kung unsa ang CC ug wala koy nakita niini sa opisina. Tubaga og 'N/A' sa CC2 ug CC3.
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC1" id="radio4" value="option4">
                <label class="form-check-label" for="radio4">
                    4. Wala ko kahibalo kung unsa ang CC ug wala koy nakita niini sa opisina. Tubaga og 'N/A' sa CC2 ug CC3.
                </label>
                @endif
            </div>
            <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC2</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">2. Kung nahibal-an nimo ang CC (gitubag sa 1-3 sa CC1), moingon ka ba nga ang CC niini nga opisina kay...?</p>
            
            <div class="form-check">
                @if($sqd1->cc->cc2 == 'option1')
                <input checked required class="form-check-input" type="radio" disabled name="CC2" id="radio5" value="option1" checked>
                <label class="form-check-label" for="radio5" style="color:green;font-weight:bold;">
                    1. Sayon nga makita
                </label>
                @else
                <input required class="form-check-input" type="radio" disabled name="CC2" id="radio5" value="option1">
                <label class="form-check-label" for="radio5">
                    1. Sayon nga makita
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc2 == 'option2')
                <input checked class="form-check-input" type="radio" disabled name="CC2" id="radio6" value="option2">
                <label class="form-check-label" for="radio6" style="color:green;font-weight:bold;">
                    2. Medyo dali makita 
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC2" id="radio6" value="option2">
                <label class="form-check-label" for="radio6">
                    2. Medyo dali makita 
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc2 == 'option3')
                <input checked class="form-check-input" type="radio" disabled name="CC2" id="radio7" value="option3">
                <label class="form-check-label" for="radio7" style="color:green;font-weight:bold;">
                    3. Lisod makita
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC2" id="radio7" value="option3">
                <label class="form-check-label" for="radio7">
                    3. Lisod makita
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc2 == 'option4')
                <input checked class="form-check-input" type="radio" disabled name="CC2" id="radio8" value="option4">
                <label class="form-check-label" for="radio8" style="color:green;font-weight:bold;">
                    4. Dili makita
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC2" id="radio8" value="option4">
                <label class="form-check-label" for="radio8">
                    4. Dili makita
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc2 == 'option5')
                <input checked class="form-check-input" type="radio" disabled name="CC2" id="radio9" value="option5">
                <label class="form-check-label" for="radio9" style="color:green;font-weight:bold;">
                    5. Dili magamit
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC2" id="radio9" value="option5">
                <label class="form-check-label" for="radio9">
                    5. Dili magamit
                </label>
                @endif
            </div>

            <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC3</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">3. Kung nahibal-an nimo ang CC (gitubag ang 1-3 sa CC1), pila ang natabang sa CC kanimo sa imong transaksyon?</p>
            
            <div class="form-check">
                @if($sqd1->cc->cc3 == 'option1')
                <input required class="form-check-input" type="radio" disabled name="CC3" id="radio10" value="option1" checked>
                <label class="form-check-label" for="radio10" style="color:green;font-weight:bold;">
                    1. Nakatabang kaayo 
                </label>
                @else
                <input required class="form-check-input" type="radio" disabled name="CC3" id="radio10" value="option1">
                <label class="form-check-label" for="radio10">
                    1. Nakatabang kaayo 
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc3 == 'option2')
                <input checked class="form-check-input" type="radio" disabled name="CC3" id="radio11" value="option2">
                <label class="form-check-label" for="radio11" style="color:green;font-weight:bold;">
                    2. Medyo nakatabang
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC3" id="radio11" value="option2">
                <label class="form-check-label" for="radio11">
                    2. Medyo nakatabang
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc3 == 'option3')
                <input checked class="form-check-input" type="radio" disabled name="CC3" id="radio12" value="option3">
                <label class="form-check-label" for="radio12" style="color:green;font-weight:bold;">
                    3. Wala makatabang 
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC3" id="radio12" value="option3">
                <label class="form-check-label" for="radio12">
                    3. Wala makatabang 
                </label>
                @endif
            </div>
            <div class="form-check">
                @if($sqd1->cc->cc3 == 'option4')
                <input checked class="form-check-input" type="radio" disabled name="CC3" id="radio13" value="option4">
                <label class="form-check-label" for="radio13" style="color:green;font-weight:bold;">
                    4. Dili magamit
                </label>
                @else
                <input class="form-check-input" type="radio" disabled name="CC3" id="radio13" value="option4">
                <label class="form-check-label" for="radio13">
                    4. Dili magamit
                </label>
                @endif
            </div>
        </div>
        <div class="con " id="gov_sqd" style="display:none">
        
        <div class="row mt-4">
            <div class="col-md">
             <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;align-content:center">Service Quality Dimension (SQD)</th>
                            <th scope="col" class="text-center align-content-center" style= "border: 1px solid #dee2e6;"> 
                                <!-- <span class="emoji  " style="font-size: 3em;">&#x1F614; </span> -->
                                <!-- <span class="emoji" style="font-size: 12px;line-height:0;">Kusog nga Dili Mouyon</span> -->
                                Evaluation
                            </th>
                            

                        </tr>
                    </thead>
                     
                    <tbody>
                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD0. Kontento ko sa serbisyo nga akong nakuha</td>
                            @if($sqd1->sqd0 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd0 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd0 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd0 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd0 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif

                        </tr>

                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD1. Gigugol nako ang igo nga oras sa akong transaksyon</td>
                            @if($sqd1->sqd1 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd1 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd1 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd1 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd1 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD2. Gisunod sa opisina ang mga kinahanglanon ug lakang sa transaksyon base sa gihatag nga kasayuran</td>
                            @if($sqd1->sqd2 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd2 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd2 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd2 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd2 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                        </tr>

                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD3. Ang mga lakang (lakip ang pagbayad) nga kinahanglan nakong buhaton alang sa akong transaksyon sayon ​​ug yano</td>
                            @if($sqd1->sqd3 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd3 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd3 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd3 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd3 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                        </td>
                        </tr>

                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD4. Dali ra nakong nakit-an ang impormasyon bahin sa akong transaksyon gikan sa opisina o sa website niini</td>
                            @if($sqd1->sqd4 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd4 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd4 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd4 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd4 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                        </tr>
                    </tbody>    
                    
                </table>
</div>
        </div>

    </div>
    </div>
    <div class="con "  id="others_sqd" style="display:none;">
        
        <div class="row mt-4">
            <div class="col-md">
             <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;align-content:center">Service Quality Dimension (SQD)</th>
                            <th scope="col" class="text-center align-content-center" style= "border: 1px solid #dee2e6;"> 
                                <!-- <span class="emoji  " style="font-size: 3em;">&#x1F614; </span> -->
                                <!-- <span class="emoji" style="font-size: 12px;line-height:0;">Kusog nga Dili Mouyon</span> -->
                                Evaluation
                            </th>
                            

                        </tr>
                    </thead>
                        
                        <input type="text" name='clientid' style="display:none;" >
                        <input type="text" name='ccsurvey' style="display:none;" >
                    <tbody>
                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD5. Nagbayad ako og makatarunganon nga kantidad sa bayad alang sa akong transaksyon</td>
                            @if($sqd1->sqd5 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd5 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd5 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd5 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd5 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                        </tr>

                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD6. Gibati nako nga patas ang opisina sa tanan, o "wala'y palakasan", sa akong transaksyon</td>
                            @if($sqd1->sqd6 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd6 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd6 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd6 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd6 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                            
                        </tr>
                        
                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD7. Gitratar ako nga matinahuron sa mga kawani, ug (kung nangayo og tabang), ang mga kawani makatabang</td>
                            @if($sqd1->sqd7 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd7 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd7 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd7 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd7 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                        </tr>

                        <tr>
                            <td class="align-content-center" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD8. Nakuha nako ang akong gikinahanglan gikan sa opisina sa gobyerno, o (kung gibalibaran) ang pagdumili sa hangyo igo nga gipasabut kanako</td>
                            @if($sqd1->sqd8 == 'option1')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F614; 
                                </span><br> Kusog nga Dili Mouyon
                            </td>
                            @elseif($sqd1->sqd8 == 'option2')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon
                            </td>
                            @elseif($sqd1->sqd8 == 'option3')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon
                            </td>
                            @elseif($sqd1->sqd8 == 'option4')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon
                            </td>
                            @elseif($sqd1->sqd8 == 'option5')
                            <td style="text-align: center;">
                            <span class="emoji" style="font-size: 3em;">&#128522; </span>
                            <p class="mb-0">Uyon kaayo</P> 
                            </td>
                            @endif
                        </td>
                        </tr>

                    </tbody>    
                    
                </table>
</div>
        </div>

    </div>
    </div>
        <form action = "{{route('finish')}}" method="GET"   >
            <div class="col-md-12 text-right mt-4">
                <button class="custom-btn btn btn-primary btn-lg" type='submit'> Finish <span>&rsaquo;&rsaquo;</span> </button>
            </div>
        </form>
    </div>
        
    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<script>
  // Get the current date
  var currentDate = new Date();
  
  // Format the date as YYYY-MM-DD
  var year = currentDate.getFullYear();
  var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
  var day = currentDate.getDate().toString().padStart(2, '0');
  var formattedDate = year + '-' + month + '-' + day;
  
  // Set the value of the input field
  document.getElementById("date").value = formattedDate;
</script>   
<script>
    
    function showNextPage() {
            var orgChecked = document.getElementById("org").checked;
            var otherChecked = document.getElementById("other").checked;

            if (orgChecked) {
                window.location.href = "smileysecond"; 
            } else if (otherChecked) {
                window.location.href = "smileyfirst"; 
            }
        }

    
        function enableInput() {
            document.getElementById("textInput").disabled = false;
            document.getElementById("textInput").required = true;
        }

        function disableInput() {
            document.getElementById("textInput").disabled = true;
            document.getElementById("textInput").required = false;
        }
</script>
<script>
        const label = document.getElementById("service_avail")
        const mydivgov = document.getElementById("gov_sqd")
        const mydivothers = document.getElementById("others_sqd")

        const myTimeout = setTimeout(myGreeting, 0);

function myGreeting() {
  //label.innerText = "Happy Birthday!"
  console.log(label.innerText)
       
        if (label.innerText === "Asosasyon"){
            mydivgov.style.display = "block";
            mydivothers.style.display = "none";
        
        }else{
            mydivgov.style.display = "none";
            mydivothers.style.display = "block";
            console.log(label.innerText === "Goberno")
            
        }
}

        console.log(label.innerText)
       
        if (label.innerText === "Goberno"){
            mydivgov.style.display = "block";
            mydivothers.style.display = "none";
        }else{
            mydivgov.style.display = "none";
            mydivothers.style.display = "block";
            console.log(label.innerText === "Goberno")
        }

</script>


<script>
    $('input[type=radio][name=service]').change(function() {
        if (this.value == 'other') {
            $('#other_service').show();
        } else {
            $('#other_service').hide();
        }
    });
</script>
  </body>
  
</html>

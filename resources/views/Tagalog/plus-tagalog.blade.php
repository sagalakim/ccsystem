<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
    padding-bottom:120px;
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
            <nav class="navbar navbar-dark navbar-expand-md  navigation-clean-search">
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
              
    <form action="{{route('submitsurveytagalog')}}" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-container ">

                <h3 class="display-6 text-center mb-4 font-size-25 font-weight-bold">Personal na Impormasyon</h3>
                    <div class="form-group justify-content-center" >
                            <label for="clienttype font-weight-bold">Uri ng Kliyente</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="clienttype" id="citizen" value="ciziten" required>
                                <label class="form-check-label" for="citizen">Mamamayan</label>
                            </div>
                            <div class="form-check form-check-inline justify-content-center align-content-center text-center">
                                <input class="form-check-input" type="radio" name="clienttype" id="business" value="business">
                                <label class="form-check-label" for="business">Negosyo</label>
                            </div>
                            <div class="form-check form-check-inline justify-content-center align-content-center text-center">
                                <input class="form-check-input" type="radio" name="clienttype" id="governement" value="governement">
                                <label class="form-check-label" for="governement">Gobyerno (Empleyado o ibang ahensya)</label>
                            </div>
                        
                        </div>

                        <div class="form-group">
                            <label for="gender font-weight-bold">Kasarian</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                <label class="form-check-label" for="male">Lalaki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Babae</label>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="date font-weight-bold">Petsa</label>
                            <input type="date" class="form-control" value='{{$currentDate}}' id="date" name="date"  required>
                           
                        </div>

                        <div class="form-group">
                            <label for="age font-weight-bold">Edad</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>

                        <div class="form-group">
                            <label for="location">Lugar</label>
                            <select class="form-control" name="address" id="location" required>
                                <option value=>-- Select --</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->location }}">{{ $location->location }}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="service font-weight-bold">Nagamit ang Serbisyo</label><br>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" name="service" id="org" value="Asosasyon" onclick="disableInput()" >
                                <label class="form-check-label" for="org">Asosasyon</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="service" id="other" value="other" onclick="enableInput()" >
                                <label class="form-check-label" for="other">Iba pa</label>
                            </div>
                            <input type="text" class="form-control" id="textInput" name="userinput" placeholder="Please specify" required disabled>
                            
                        </div>


                        <div class="row justify-content-center align-items-center mt-4">
            <div style="font-family: Arial, sans-serif; font-size: 17px;">
                <p class="m-0 font-weight-bold">Citizen's Charter (CC)</p>    
            </div>
            <div style="font-family: Arial, sans-serif; font-size: 15px;">
                <p class="m-0">Panuto: Lagyan ng markang tsek (/) ang iyong sagot sa mga katanungan ukol sa Citizen's Charter (CC). Ang Citizen's Charter ay isang opisyal na dokumento na sumasalamin sa mga serbisyo ng isang ahensya o opisina ng gobyerno kasama na ang kanilang mga kinakailangan, bayad, at ang oras ng pagpro-proseso.</p>    
            </div>
        </div>
        <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC1</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">1. Alin sa mga sumusunod ang pinaka naglalarawan sa iyong kamalayan sa CC?</p>
            
            <div class="form-check">
                <input required class="form-check-input" type="radio" onclick="enableInputcc()" name="CC1" id="radio1" value="option1">
                <label class="form-check-label" for="radio1" onclick="enableInputcc()">
                    1. Alam ko ang ibig sabihin ng CC at nakita ko na ito.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" onclick="enableInputcc()" name="CC1" id="radio2" value="option2">
                <label class="form-check-label" for="radio2" onclick="enableInputcc()">
                    2. Alam ko ang ibig sabihin ng CC ngunit hindi ko pa ito nakita.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC1" id="radio3" onclick="enableInputcc()" value="option3">
                <label class="form-check-label" for="radio3" onclick="enableInputcc()">
                    3. Natutunan ko kung ano ang CC nung akita ko ito.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC1" id="radio4" value="option4" onclick="disableInputcc()">
                <label class="form-check-label" for="radio4" onclick="disableInputcc()">
                    4. Hindi ko alam kung ano ang CC at hindi ko pa ito nakikita. Lagyan ang 'N/A' sa CC2 at CC3.
                </label>
            </div>
            <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC2</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">2. Kung alam mo ang CC (kung ang sagot mo ay nasa 1-3 ng CC1), masasabi mo ba na ang CC ng opisinang ito ay...?</p>
            
            <div class="form-check">
                <input required class="form-check-input" type="radio" name="CC2" id="radio5" value="option1" disabled>
                <label class="form-check-label" for="radio5">
                    1. Madaling makita
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio6" value="option2" disabled>
                <label class="form-check-label" for="radio6">
                    2. Medyo madaling makita 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio7" value="option3" disabled>
                <label class="form-check-label" for="radio7">
                    3. Mahirap makita
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio8" value="option4" disabled>
                <label class="form-check-label" for="radio8">
                    4. Hindi talaga nakikita
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio9" value="option5" disabled>
                <label class="form-check-label" for="radio9">
                    5. Hindi na-aangkop
                </label>
            </div>

            <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC3</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">3. Kung batid mo ang CC (kung ang sagot mo ay nasa code 1-3 ng CC1), gaano nakatulong ang CC sa iyong transaksyon?</p>
            
            <div class="form-check">
                <input required class="form-check-input" type="radio" name="CC3" id="radio10" value="option1" disabled>
                <label class="form-check-label" for="radio10">
                    1. Nakatulong ng lubusan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio11" value="option2" disabled>
                <label class="form-check-label" for="radio11">
                    2. Bahagyang nakatulong
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio12" value="option3" disabled>
                <label class="form-check-label" for="radio12">
                    3. Hindi ito nakatulong
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio13" value="option4" disabled>
                <label class="form-check-label" for="radio13">
                    4. Hindi na-aangkop
                </label>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-12 text-right mt-4">
            <button class="custom-btn btn btn-primary btn-lg" type='submit'> Next <span>&rsaquo;&rsaquo;</span> </button>
        </div>
        </div>
        
    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
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

        function enableInputcc() {
            document.getElementById("radio5").disabled = false;
            document.getElementById("radio5").required = true;

            document.getElementById("radio6").disabled = false;
            document.getElementById("radio6").required = true;

            document.getElementById("radio7").disabled = false;
            document.getElementById("radio7").required = true;

            document.getElementById("radio8").disabled = false;
            document.getElementById("radio8").required = true;

            document.getElementById("radio9").disabled = false;
            document.getElementById("radio9").required = true;

            document.getElementById("radio10").disabled = false;
            document.getElementById("radio10").required = true;

            document.getElementById("radio11").disabled = false;
            document.getElementById("radio11").required = true;

            document.getElementById("radio12").disabled = false;
            document.getElementById("radio12").required = true;

            document.getElementById("radio13").disabled = false;
            document.getElementById("radio13").required = true;
        }

        function disableInputcc() {
            document.getElementById("radio5").disabled = true;
            document.getElementById("radio5").required = false;

            document.getElementById("radio6").disabled = true;
            document.getElementById("radio6").required = false;

            document.getElementById("radio7").disabled = true;
            document.getElementById("radio7").required = false;

            document.getElementById("radio8").disabled = true;
            document.getElementById("radio8").required = false;

            document.getElementById("radio9").disabled = true;
            document.getElementById("radio9").required = false;

            document.getElementById("radio10").disabled = true;
            document.getElementById("radio10").required = false;

            document.getElementById("radio11").disabled = true;
            document.getElementById("radio11").required = false;

            document.getElementById("radio12").disabled = true;
            document.getElementById("radio12").required = false;

            document.getElementById("radio13").disabled = true;
            document.getElementById("radio13").required = false;
        }
        
</script>
  </body>
  
</html>
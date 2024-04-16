
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   

    <title>DOLE ARTA</title>
    <link rel="icon" href="images/DOLE_picture.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="resources/css/app.css">
</head>

<body>
    <div>
        
            <div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="bg-cover text-white " >
            <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container " style="justify-content:flex-start">
                <!-- <img src="{{asset('images/DOLE_picture.png')}}" alt="Logo" width="30" height="24" class="ml-3 d-inline-block align-text-top">
                  <a class="navbar-brand" href="/">Department of Labor and Employment</a> -->
                  <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="align-items:center"><span class="sr-only">Toggle navigation</span><span style="align-items:center" class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse "
                        id="navcol-1"> 
                        <form class="form-inline mr-auto" target="_self">
                          
                        </form> 
                        <form action="admin-login" method="GET" class="menu">  
                        <button class="btn btn-light action-button " data-toggle="modal" data-target="#exampleModal" type="button">Language</button >
                        <button class="btn btn-light action-button" type="submit">Admin</button>
                        </form>
                        
                </div>
            </nav>
            </div>
            <div class="container py-1  text-center">
      <div class="treed justify-content-center" style = "
       width: 100%;
      height: 100%;
      justify-content:center;
     
      ">
      <img src="{{asset('images/DOLE_picture.png')}}" alt="Logo" width="130" height="124" class="ml-3 my-3 d-inline-block align-text-top" >

      </div>
                        
        <p class="display-6 mb-0">Republic of the Philippines</p>
        <h3 class="display-4 font-weight-bold">Department of Labor and Employment</h3>
        <p class="display-6 mb-0">Regional Office No. X</p>
        <p class="display-6 mb-0">Northern Mindanao</p>
        <p class="display-4 mb-0">Misamis Oriental Field Office</p>
        <form action = "CitizenCharter" method="Get"   >
          <button class="btn btn-primary btn-lg action-button" style = "background-color:transparent;border-radius:50px" type="submit" >Next</button>
        <form>
      </div>

      <div class="container px-5">
    <h2 class="h3 font-weight-bold">Client Satisfaction Measurement</h2>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <p class="display-7 text-light">Kini nga Client Satisfaction Measurement (CSM) nagsubay 
                          sa kasinatian sa kustomer sa mga opisina sa gobyerno. Ang imong feedback sa imong bag-o 
                          lang nahuman nga transaksyon makatabang niini nga opisina sa paghatag ug mas maayong serbisyo. 
                          Ang personal nga impormasyon nga gipaambit pagkatapigan nga kompidensyal ug kanunay kang adunay
                           kapilian nga dili motubag niini nga porma.</p>
        </div>
    </div>
</div>
<!-- </div> -->

<!-- For Demo Purpose -->

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Select Language</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="row justify-content-center">
    <div class="col-md-3">
    <button type="button" class="btn btn-secondary" style="width:100%" data-dismiss="modal">English</button>
    </div>
    <div class="col-md-3">
    <button type="button" class="btn btn-secondary" style="width:100%" data-dismiss="modal">Filipino</button>
    </div>
    <div class="col-md-3">
    <button type="button" class="btn btn-secondary" style="width:100%" data-dismiss="modal">Bisaya</button>
    </div>
  </div>
</div>

    </div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  
  </body>

<style>
  .header-blue {
  background:linear-gradient(135deg, #172a74 ,#21a9af);
  /* border-radius:0 0 30px 30px; */
  /* default color in "red" is #21a9af */
  background-color:transparent;
  position: sticky;
  /* padding-bottom:80px; */
  font-family:'Source Sans Pro', sans-serif;
}

@media (min-width:768px) {
  .header-blue {
    /* padding-bottom:120px; */
    height:45px;
    align-items:center;
    align-content:center; 
    
  }
}
.treed img:hover {
    transform:  rotateZ(-360deg);
    transform-style: preserve-3d; /* Ensures child elements are rendered in 3D space */
      transition: transform .5s;
     /* Rotate the image on the Y-axis when hovered */
  }

  .itreed img {
    width: 100%;
    height: 100%;
  }
.header-blue .navbar {
  background:transparent;
  /* padding-top:.75rem;
  padding-bottom:.75rem; */
  color:#fff;
  border-radius:0;
  box-shadow:none;
  border:none;
}

@media (min-width:768px) {
  .header-blue .navbar {
    /* padding-top:1rem;
    padding-bottom:1rem; */
    height:40px;
    
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
  /* margin-top:.5rem; */
  /* margin-bottom:10px; */
  /* align-self: middle;
  width:100%;,
  align-items:center;  */
  /*background-color:red;
  /* justify-content: space-between; */
}

@media (min-width:768px) {
  .header-blue .navbar .navbar-collapse {
    border-color:transparent;
    margin:0;
  }
}

.menu{
text-align:left;
width: 100%;
padding-top:10px;
}
@media (min-width:768px){
 .menu{
  text-align: right;
  padding-top:0px;
  
  
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

.header-blue .hero {
  margin-top:20px;
  text-align:center;
}

@media (min-width:768px) {
  .header-blue .hero {
    margin-top:60px;
    text-align:left;
  }
}

.header-blue .hero h1 {
  color:#fff;
  font-size:40px;
  margin-top:0;
  margin-bottom:15px;
  font-weight:300;
  line-height:1.4;
}

@media (min-width:992px) {
  .header-blue .hero h1 {
    margin-top:190px;
    margin-bottom:24px;
    line-height:1.2;
  }
}

.header-blue .hero p {
  color:rgba(255,255,255,0.8);
  font-size:20px;
  margin-bottom:30px;
  font-weight:300;
}




/*body

*/
.bg-cover {
    background-size: cover !important;
    /* height:100%; */
    
}


@media (min-width:768px) {
  .bg-cover {
    background-size: cover !important;
    min-height:100vh;
    
  }
}
/*
CSM
*/


</style>

</html>
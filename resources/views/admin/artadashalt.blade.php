<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" href="images/DOLE_picture.ico" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    
/*font */
.poppins-regular {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  *,
  ::after
  ::before {
    box-sizing: border-box;
  }

  body {
    font-family: "Poppins", sans-serif;
    font-size: 0.875rem;
    opacity: 1;
    overflow-y: scroll;
    margin: 0;
  }

  a {
    cursor: pointer;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
  }

  li {
    list-style: none;

  }

  h4{
    font-family: 'Poppins', sans-serif;
    font-size: 1.275rem;
    color: var(--bs-emphasis-color);
  }

  /*layout admin dashboard*/
  .wrapper {
    align-items: stretch;
    display: flex;
    width: 100%;
  }

  #welcomei {
    max-width: 150px;
    min-width: 150px;
    transition: all 0.35s ease-in-out;
  }

  #welcomes {
    max-width: 150px;
    min-width: 150px;
    transition: all 0.35s ease-in-out;
  }

  #sidebar {
    max-width: 244px;
    min-width: 244px;
    background: var(--bs-dark);
    transition: all 0.35s ease-in-out;
  }

  .main {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    min-width: 0;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
    width: 100%;
    background: var(--bs-dark-bg-subtle);
  }

  /*sidebar elements */
  .sidebar-logo {
    padding: 1.15rem;
  }

  .sidebar-logo a {
    color: #e9ecef; 
    font-size: 1.15;
    font-weight: 600;
  }

  .sidebar-nav{
    flex-grow: 1;
    list-style: none;
    margin-bottom: 0;
    padding-left: 0;
    margin-left: 0;
  }

  .sidebar-header{
    color: #e9ecef;
    font-size: .75rem;
    padding: 1.5rem 1.5rem .375rem;
  }

  a.sidebar-link{
    padding: .625rem 1.625rem;
    color: #e9ecef;
    position: relative;
    display: block;
    font-size: 0.875rem; 
  }

  .sidebar-link[data-bs-toggle="collapse"]::after{
    border: solid;
    border-width: - .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
  }

  .sidebar-link[data-bs-toggle="collapse"].collapsed::after{
    transform: rotate(45deg);
    transition: all .2s ease-out;
  }

  .avatar {
    height: 40px;
    width: 40px;
  }

  .navbar-expand .navbar-nav {
    margin-left: auto;
    
  }

  .content{
    flex: 1;
    max-width: 100vw;
    width: 100vw;
  }

  @media (min-width:768px){
    .content{
      max-width: auto;
      width: auto;
    }
  }  

  .card{
    box-shadow: 0 0 .875rem 0 rgba(34, 46, 60, .05);
    margin-bottom: 24px;
  }

  .illustration {
    background-color: var(--bs-primary-bg-subtle);
    color: var(--bs-emphasis-color);
  }

  .illustration-img{
    max-width: 150px;
    width: 100%;
  }
  
  /*sidebar toggle */
  #sidebar.collapsed {
    margin-left: -252px;
  }

  #welcomei.collapsed {
    margin-top:-50px;
    margin-left: -77px;
    max-width: 200px;
    min-width: 200px;
  }
  #welcomes.collapsed {
    max-width: 190px;
    min-width: 190px;
  }

  #wtext {
    font-size:20px;
    font-weight:bold;
    transition: all 0.35s ease-in-out;
  }

  #wtext.collapsed {
    font-size:25px;
    width:300px;
  }

  #stext {
    font-size:15px;
    width: 300px;
    transition: all 0.35s ease-in-out;
  }

  #stext.collapsed{
    font-size:20px;
  }

  #wtext2 {
    font-size:20px;
    font-weight:bold;
    transition: all 0.35s ease-in-out;
  }

  #wtext2.collapsed {
    font-size:25px;
    width:300px;
  }

  #stext2 {
    font-size:15px;
    width: 300px;
    transition: all 0.35s ease-in-out;
  }

  #stext2.collapsed{
    font-size:20px;
  }

  .btn-group {
    padding: 10px;
  }

  .people{
    background-color: #Ffffff;
  }
  /*pie */
  

  /*pie bar */
  </style>
</head>
<body>
  <div class="wrapper">
    <!--for sidebar-->
    <aside id="sidebar">
    <!--content sidebar-->
    <div class="h-100">
      <div class="sidebar-logo">
      <img src="{{asset('images/DOLE_picture.png')}}" alt="Logo" width="30" height="24" class="ml-3 d-inline-block align-text-top">
        <a href="#" style="font-size:20px; vertical-align:middle; margin-left:10px;">DOLE</a>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Admin
        </li>
        <!--sidebar items-->
        <li class="sidebar-item">
          <a href="/Admin/Dashboard" class="sidebar-link">
            <i class="fa-solid fa-list pe-2"></i>
            Dashboard
          </a>
        </li>
        <li class="sidebar-item">
          <a href="/create-user" class="sidebar-link">
          <svg xmlns="http://www.w3.org/2000/svg" style='margin-top:-5px;margin-right:5px;' width="18" height="18" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
          </svg>            Add user
          </a>
        </li>
        <!----> <!--for graph -->
        <!--same sa header
        <li class="sidebar-header">
          Multi Level Menu
        </li>
        <li class="sidebar-item">
        <a href="#"class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" 
          aria-expanded="false">
          <i class="fa-solid fa-share-nodes pe-2"></i>
          Multi Dropdown</a> 
        </li>
        #same sa dropdown sa graph
        -->
      </ul>
    </div>
  </aside> 
  <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom" >
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!----> <!--profile-->
        <div class="navbar-collapse navbar justify-content-end  " >
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="{{asset('images/cat.jpg')}}" class="avatar img-fluid rounded" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
              <form method="GET" action="{{ route('admin.profile') }}">
                    @csrf

                    <x-dropdown-link class="dropdown-item" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link class="dropdown-item" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
              </div>
            </li>
          </ul>
        </div>
    </nav>

    
    <!--card that welcome admin-->
    <main class="content px-0 py-2">
        @yield('content')
    </main>
  </div>
</div> 

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/28d81edfcb.js" crossorigin="anonymous"></script>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Your custom script -->
</body>
</html>

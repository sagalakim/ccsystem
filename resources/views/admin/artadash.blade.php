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
  <link rel="stylesheet" href="resources/css/app.css">
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
    margin-left: -264px;
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
        <a href="#">DOLE</a>
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
        <!----> <!--for graph -->
        <li class="sidebar-item">
          <a href="#"class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" 
          aria-expanded="false">
          <i class="fa-solid fa-chart-line pe-2"></i>
          Graph</a>
          <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Bar Graph</a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Line Graph</a>
            </li>
          </ul>
        </li>
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
              <form method="POST" action="{{ route('logout') }}">
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
      <div class="container-fluid">
        <div class="mb-1 d-flex justify-content-between">
          <h4>Admin Dashboard</h4>
          <button type="button" class="btn btn-primary btn-sm align-self-end text-end">Print Results</button>
        </div>
        <!--for dropdown button for days total-->
        <div class="btn-group ml-4">
          <button class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Today
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" id="day">Yesterday</a>
            <a class="dropdown-item" href="#" id="week">Week</a>
            <a class="dropdown-item" href="#" id="month">Month</a>
            <a class="dropdown-item" href="#" id="year">Year</a>
          </div>
        </div>
        <!--end dropdown-->
        <div class="col-md-12">
          <div class="con d-flex col-md-12"> 
                  <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                      <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                          <div class="row g-0 w-100  ">
                            <div class="col-6">
                              <div class="p-3 m-6">
                                <h4>Welcome back, Admin</h4>
                                <p class="mb-0">See today's analysis</p>
                              </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                              <img src="{{asset('images/4207.jpg')}}" class="img-fluid illustration-img" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
          <!--card for total
          <div class="col-12 col-md-6 d-flex">
            <div class="card flex-fill border-0">
              <div class="card-body py-4">
                <div class="d-flex align-items-start">
                  <div class="flex-grow-1">
                    <h4 class="mb-2">
                      128
                    </h4>
                    <p class="mb-2">
                      Total survey
                    </p>
                    <div class="mb-0">
                      
                      <span class="badge text-success me-2">
                        +5%
                      </span>
                      
                      <span class="text-muted">
                        Since last week 
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        end sa card-->
        <!--for the total with pic-->
        <div class="col-12 col-md-6 d-flex" >
            <div class="card flex-fill border-0 people">
              <div class="card-body p-0 d-flex flex-fill">
                <div class="row g-0 w-100 ">
                  <div class="col-6">
                    <div class="p-3 m-6">
                    <h4 class="mb-2">
                      Total Survey
                    </h4>
                    <p class="mb-2">
                    {{$getTodayClients->count()}} clients
                    </p>
                    <div class="mb-0">
                      
                      <span class="text-muted">
                        For today 
                      </span>
                  </div>
                    </div>
                  </div>
                  <div class="col-6 align-self-end text-end" >
                    <img src="{{asset('images/group.png')}}" class="img-fluid illustration-img" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--end the total with pic-->
        <!--for non org bar graph-->
        <div class="d-flex  align-items-start align-content-center " >
           
  
        
        <div class="row ">

          <div class="col-12 col-md-12 ">
            <div class="card border-0 people">
              <h7 class="mt-4 mb-3 align-self-center text-center font-weight-bold">
                      Association
                    </h7>
              <div class="card-body p-0 d-flex flex-fill">
                <canvas id="nonbarChart" width="400" height="160"></canvas>
              </div>
            </div>
        
        </div>
        
       

        <!--end for non org bar graph-->
        <!--for org bar graph-->
      
          <div class="col-12 col-md-12">
            <div class="card border-0 people">
                    <h7 class="mt-4 mb-3 align-self-center text-center font-weight-bold">
                      Others
                    </h7>
              <div class="card-body p-0 d-flex flex-fill">
                <canvas id="orgbarChart" width="400" height="160"></canvas>
              </div>
            
          </div>
          </div>
          </div>
          </div>
          </div>

        <div class="col-12 col-md-4 d-flex">
        <div class="card">
        <div class="card-body ">
          <div style="justify-content:center;align-content:center;align-items:center;" class="row justify-content-between justify-content-center align-content-center align-items-center">
          <h7 class="mt-1 mb-1 align-self-center text-center font-weight-bold">
                            Citizen's Charter
                          </h7>
            <div class="col-md-12 border-1 justify-content-center align-content-center align-items-center">
            
                          <h8 class="mt-1 mb-3 align-self-start  font-weight-bold">
                            CC1
                          </h8>
              <canvas id="pie-chart-1" width="10" height="10"></canvas>
            </div>
            <div class="col-md-12 justify-content-center align-content-center align-items-center">
            <h8 class="mt-4 mb-3 align-self-start font-weight-bold">
                            CC2
                          </h8>
              <canvas id="pie-chart-2" width="10" height="10"></canvas>
            </div>
            <div class="col-md-12 justify-content-center align-content-center align-items-center">
            <h8 class="mt-4 mb-3 align-self-start  font-weight-bold">
                            CC3
                          </h8>
              <canvas id="pie-chart-3" width="10" height="10"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--table-->
<div class="col-12 col-md-12 d-flex">
        <div class="card col-md-12" style="overflow-y:scroll;max-height:200px" >
        <div class="card-body ">
<table class="table " >
  <thead class="thead-dark">
    <tr >
      <th scope="col">Date</th>
      <th scope="col">Client Type</th>
      <th scope="col">Region of Residence</th>
      <th scope="col">Service Availed</th>
      <th scope="col">Print</th>
    </tr>
  </thead>
  <tbody>
    @if($clientList->count() > 0)
      @foreach($clientList as $client)
        <tr>
          <th scope="row">{{date('M d, Y', strtotime($client->ccs->date))}}</th>
          @if($client->client_type == 'ciziten')
          <td>Citizen</td>
          @elseif($client->client_type == 'governement')
          <td>Government</td>
          @else
          <td>Business</td>
          @endif
          <td>{{$client->region_of_residence}}</td>
          <td>{{$client->service_availed}}</td>
          <td>
              <a href="{{route('download', $client->sqd->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                </svg>
              </a>
          </td>
        </tr>
      @endforeach
    @else
    <tr><td colspan="4" style="text-align:center">No Clients Yet</td><tr>
    @endif
  </tbody>
</table>
</div>
</div>
</div>
<!--table-->
</div>
          </div>
</div>

</div>
<!--end for org bar graph-->
        <!--pie graph-->

</div>

        
</div>

        <!--end pie graph-->

      </div>
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
<script>
  // Function to handle dropdown item click
  function handleDropdownItemClick(event) {
    // Get the text content of the clicked dropdown item
    const selectedItem = event.target.textContent;
    // Set the text content of the dropdown button to the selected item
    document.getElementById("dropdownMenuButton").textContent = selectedItem;
  }

  // Add event listeners to dropdown items
  document.getElementById("day").addEventListener("click", handleDropdownItemClick);
  document.getElementById("week").addEventListener("click", handleDropdownItemClick);
  document.getElementById("month").addEventListener("click", handleDropdownItemClick);
  document.getElementById("year").addEventListener("click", handleDropdownItemClick);

  // Data for the non org bar chart
  var data = {
    labels: ['Question 0', 'Question 1', 'Question 2', 'Question 3', 'Question 4'],
    datasets: [{
      label: 'Dili jd muoyon',
      backgroundColor: '#ff0000',
      borderColor: '#ff0000',
      borderWidth: 1,
      data: [{{$getClientSqd1Evaluation->count()}}, {{$getClientSqd2Evaluation->count()}}, {{$getClientSqd3Evaluation->count()}}, {{$getClientSqd4Evaluation->count()}}, {{$getClientSqd5Evaluation->count()}}] // Example data for Option A
    }, {
      label: 'Dili muoyon',
      backgroundColor: '#9900cc',
      borderColor: '#9900cc',
      borderWidth: 1,
      data: [{{$getClientSqd1Evaluation2->count()}}, {{$getClientSqd2Evaluation2->count()}}, {{$getClientSqd3Evaluation2->count()}}, {{$getClientSqd4Evaluation2->count()}}, {{$getClientSqd5Evaluation2->count()}}] // Example data for Option B
    },
    {
      label: 'Uyon o di muoyon',
      backgroundColor: '#f5e132',
      borderColor: '#f5e132',
      borderWidth: 1,
      data: [{{$getClientSqd1Evaluation3->count()}}, {{$getClientSqd2Evaluation3->count()}}, {{$getClientSqd3Evaluation3->count()}}, {{$getClientSqd4Evaluation3->count()}}, {{$getClientSqd5Evaluation3->count()}}] // Example data for Option B
    },
    {
      label: 'Uyon',
      backgroundColor: '#182390',
      borderColor: '#182390',
      borderWidth: 1,
      data: [{{$getClientSqd1Evaluation4->count()}}, {{$getClientSqd2Evaluation4->count()}}, {{$getClientSqd3Evaluation4->count()}}, {{$getClientSqd4Evaluation4->count()}}, {{$getClientSqd5Evaluation4->count()}}] // Example data for Option A
    },
    {
      label: 'Uyon kaayo',
      backgroundColor: '#00FF00',
      borderColor: '#00FF00',
      borderWidth: 1,
      data: [{{$getClientSqd1Evaluation5->count()}}, {{$getClientSqd2Evaluation5->count()}}, {{$getClientSqd3Evaluation5->count()}}, {{$getClientSqd4Evaluation5->count()}}, {{$getClientSqd5Evaluation5->count()}}] // Example data for Option A
    },
    {
      label: 'N/A',
      backgroundColor: '#FFA500',
      borderColor: '#FFA500',
      borderWidth: 1,
      data: [0, 0, 0, 0, 0] // Example data for Option A
    }
  ]
  };

  // Options for the chart
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  };

  // Get the canvas element
  var ctx = document.getElementById('nonbarChart').getContext('2d');

  // Create the bar chart
  var barChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });

  // Data for the org bar chart
  var data = {
    labels: ['Question 5', 'Question 6', 'Question 7', 'Question 8'],
    datasets: [{
      label: 'Dili jd muoyon',
      backgroundColor: '#ff0000',
      borderColor: '#ff0000',
      borderWidth: 1,
      data: [{{$getClientSqd6Evaluation->count()}}, {{$getClientSqd7Evaluation->count()}}, {{$getClientSqd8Evaluation->count()}}, {{$getClientSqd9Evaluation->count()}}] // Example data for Option A
    }, {
      label: 'Dili muoyon',
      backgroundColor: '#9900cc',
      borderColor: '#9900cc',
      borderWidth: 1,
      data: [{{$getClientSqd6Evaluation2->count()}}, {{$getClientSqd7Evaluation2->count()}}, {{$getClientSqd8Evaluation2->count()}}, {{$getClientSqd9Evaluation2->count()}}] // Example data for Option B
    },
    {
      label: 'Uyon o di muoyon',
      backgroundColor: '#f5e132',
      borderColor: '#f5e132',
      borderWidth: 1,
      data: [{{$getClientSqd6Evaluation3->count()}}, {{$getClientSqd7Evaluation3->count()}}, {{$getClientSqd8Evaluation3->count()}}, {{$getClientSqd9Evaluation3->count()}}] // Example data for Option B
    },
    {
      label: 'Uyon',
      backgroundColor: '#182390',
      borderColor: '#182390',
      borderWidth: 1,
      data: [{{$getClientSqd6Evaluation4->count()}}, {{$getClientSqd7Evaluation4->count()}}, {{$getClientSqd8Evaluation4->count()}}, {{$getClientSqd9Evaluation4->count()}}] // Example data for Option A
    },
    {
      label: 'Uyon kaayo',
      backgroundColor: '#00FF00',
      borderColor: '#00FF00',
      borderWidth: 1,
      data: [{{$getClientSqd6Evaluation5->count()}}, {{$getClientSqd7Evaluation5->count()}}, {{$getClientSqd8Evaluation5->count()}}, {{$getClientSqd9Evaluation5->count()}}] // Example data for Option A
    },
    {
      label: 'N/A',
      backgroundColor: '#FFA500',
      borderColor: '#FFA500',
      borderWidth: 1,
      data: [0, 0, 0, 0] // Example data for Option A
    }
  ]
  };

  // Options for the chart
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    plugins: {
    legend: {
      labels: {
        font: {
          size: 12 // Adjust the font size of the dataset label
        }
      }
    }
  }

  };

  // Get the canvas element
  var ctx = document.getElementById('orgbarChart').getContext('2d');

  // Create the bar chart
  var barChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });


//pie
// Sample data for the pie charts
const ctx1 = document.getElementById('pie-chart-1').getContext('2d');
const pieChart1 = new Chart(ctx1, {
  type: 'pie',
  data: {
    labels: [
      '1. I know what a CC is and I saw this office CC ',
       '2. I know what a CC is but I did NOT see this office CC', 
       '3. I learned of a CC only when I saw this office', 
       '4.  I do not know what a CC is'],
    datasets: [{
      label: 'Citizen Charter',
      data: [{{$CC1a->count()}}, {{$CC1b->count()}}, {{$CC1c->count()}}, {{$CC1d->count()}}],
      backgroundColor: [
        'rgba(63, 81, 181, 0.5)',
        'rgba(77, 182, 172, 0.5)',
        'rgba(66, 133, 244, 0.5)',
        'rgba(156, 39, 176, 0.5)'
      ]
    }]
  },
  options: {
    plugins: {
      legend: {
        labels: {
          font: {
            size: 12 // Adjust the font size of the legend labels
          }
        }
      }
    }
  }
});

const ctx2 = document.getElementById('pie-chart-2').getContext('2d');
const pieChart2 = new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: ['1. Easy to see', '2. Somewhat easy to see',
     '3. Difficult to see', '4. Not visible at all', '5. Not Applicable'],
    datasets: [{
      label: 'Citizen Charter',
      data: [{{$CC2a->count()}}, {{$CC2b->count()}}, {{$CC2c->count()}}, {{$CC2d->count()}}, {{$CC2e->count()}}],
      backgroundColor: [
        'rgba(63, 81, 181, 0.5)',
        'rgba(77, 182, 172, 0.5)',
        'rgba(66, 133, 244, 0.5)',
        'rgba(156, 39, 176, 0.5)',
        'rgba(233, 30, 99, 0.5)'
      ]
    }]
  },
  options: {
    plugins: {
      legend: {
        labels: {
          font: {
            size: 12 // Adjust the font size of the legend labels
          }
        }
      }
    }
  }
});

const ctx3 = document.getElementById('pie-chart-3').getContext('2d');
const pieChart3 = new Chart(ctx3, {
  type: 'pie',
  data: {
    labels: ['1. Helped very much', '2. Somewhat help', '3. Did not help', '4. Not Applicable'],
datasets: [{
      label: 'Citizen Charter',
      data: [{{$CC3a->count()}}, {{$CC3b->count()}}, {{$CC3c->count()}}, {{$CC3d->count()}}],
      backgroundColor: ['rgba(63, 81, 181, 0.5)',
        'rgba(77, 182, 172, 0.5)',
        'rgba(66, 133, 244, 0.5)',
        'rgba(156, 39, 176, 0.5)'
      ]
    }]
  },
  options: {
    plugins: {
      legend: {
        labels: {
          font: {
            size: 12 // Adjust the font size of the legend labels
          }
        }
      }
    }
  }

});
</script>
</body>
</html>
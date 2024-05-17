@extends('admin.artadash')

@section('content')
<div class="container-fluid">
        <div class="mb-1 d-flex justify-content-between">
          <h4>This Year's results</h4>
        </div>
        <!--for dropdown button for days total-->
        <div class="btn-group ml-4">
          <button class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Year
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/Admin/Dashboard" id="day">Today</a>
            <a class="dropdown-item" href="/Admin/Yesterday-result" id="week">Yesterday</a>
            <a class="dropdown-item" href="/Admin/Week-result" id="month">Week</a>
            <a class="dropdown-item" href="/Admin/Month-result" id="year">Month</a>
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
                                <h4 id="wtext">Welcome back, Admin</h4>
                                <p id="stext" class="mb-0">See today's analysis</p>
                              </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                              <img id="welcomei" src="{{asset('images/4207.jpg')}}" class="img-fluid illustration-img" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

        <!--for the total with pic-->
        <div class="col-12 col-md-6 d-flex" >
            <div class="card flex-fill border-0 people">
              <div class="card-body p-0 d-flex flex-fill">
                <div class="row g-0 w-100 ">
                  <div class="col-6">
                    <div class="p-3 m-6">
                    <h4 id="wtext2" class="mb-2">
                      Total Survey
                    </h4>
                    <p id="stext2" class="mb-2">
                    {{$getYearClients->count()}} clients
                    </p>
                    <div class="mb-0">
                      
                    @if($getTodayFemaleClients->count() > 1)
                      <span id="stext2" class="text-muted">
                        {{$getTodayFemaleClients->count()}} females
                      </span>
                      @else
                      <span id="stext2" class="text-muted">
                        {{$getTodayFemaleClients->count()}} female
                      </span>
                      @endif
                      
                      <br>
                      @if( $getTodayMaleClients->count() > 1)
                      <span id="stext2" class="text-muted">
                        {{$getTodayMaleClients->count()}} males
                      </span>
                      @else
                      <span id="stext2" class="text-muted">
                        {{$getTodayMaleClients->count()}} male
                      </span>
                      @endif
                  </div>
                    </div>
                  </div>
                  <div class="col-6 align-self-end text-end" >
                    <img id="welcomes" src="{{asset('images/group.png')}}" class="img-fluid illustration-img" alt="">
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
              <div class="card-body p-0 d-flex flex-fill justify-content-center">
                <canvas id="nonbarChart" ></canvas>
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
              <div class="card-body p-0 d-flex flex-fill justify-content-center">
                <canvas id="orgbarChart" ></canvas>
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
@endsection
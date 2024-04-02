@extends('layouts.guest')

@section('content')
<!-- Improve! -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
<!-- -->

<div class="background-container"></div>
    <div class="jumbotron container" style="position: relative; z-index: 1;">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class='alert alert-danger'>
                <strong>Whoops!</strong> There were some problem with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div>
                        <img src="{{ asset('images/DOLE_picture.png') }}" class="img-fluid mb-3" alt="DOLE image" style="max-height: 20px;">
                    </div>
                    <div style="font-family: Arial, sans-serif; font-size: 16px;">
                        <p class="m-0 ml-2 font-weight-bold">Department of Labor and Employment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-4">
            <div style="font-family: Arial, sans-serif; font-size: 17px;">
                <p class="m-0 font-weight-bold">Citizen's Charter (CC)</p>    
            </div>
            <div style="font-family: Arial, sans-serif; font-size: 15px;">
                <p class="m-0">Instruksyon: Butangi og marka (/) ang imong tubag sa mga pangutana sa citizen's charter (CC). Ang Citizen's Charter usa ka opisyal nga dokumento nga nagpakita sa mga serbisyo sa usa ka ahensya/opisina sa gobyerno lakip ang mga kinahanglanon, bayronon, ug oras sa pagproseso ug uban pa.</p>    
            </div>
        </div>
        <form action="{{route('submitsurvey')}}" method="Post" enctype="multipart/form-data">
            @csrf
        <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC1</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">1. Hain sa mosunod ang labing maayo nga naghulagway sa atong kahibalo sa usa ka CC?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC1" id="radio1" value="Nahibal-an ko kung unsa ang CC ug nakita nako ang CC sa opisina.">
                <label class="form-check-label" for="radio1">
                    1. Nahibal-an ko kung unsa ang CC ug nakita nako ang CC sa opisina.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC1" id="radio2" value="Kabalo ko unsa ang CC pero WALA ko kakita sa CC ani nga opisina.">
                <label class="form-check-label" for="radio2">
                    2. Kabalo ko unsa ang CC pero WALA ko kakita sa CC ani nga opisina.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC1" id="radio3" value="Nahibal-an ko ang CC sa dihang nakita nako ang CC sa opisina.">
                <label class="form-check-label" for="radio3">
                    3. Nahibal-an ko ang CC sa dihang nakita nako ang CC sa opisina.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC1" id="radio4" value="Wala ko kahibalo kung unsa ang CC ug wala koy nakita niini sa opisina. Tubaga og 'N/A' sa CC2 ug CC3.">
                <label class="form-check-label" for="radio4">
                    4. Wala ko kahibalo kung unsa ang CC ug wala koy nakita niini sa opisina. Tubaga og 'N/A' sa CC2 ug CC3.
                </label>
            </div>
            <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC2</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">2. Kung nahibal-an nimo ang CC (gitubag sa 1-3 sa CC1), moingon ka ba nga ang CC niini nga opisina kay...?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio5" value="Sayon nga makita">
                <label class="form-check-label" for="radio5">
                    1. Sayon nga makita
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio6" value="Medyo dali makita">
                <label class="form-check-label" for="radio6">
                    2. Medyo dali makita 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio7" value="Lisod makita">
                <label class="form-check-label" for="radio7">
                    3. Lisod makita
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio8" value="Dili makita">
                <label class="form-check-label" for="radio8">
                    4. Dili makita
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC2" id="radio9" value="Dili magamit">
                <label class="form-check-label" for="radio9">
                    5. Dili magamit
                </label>
            </div>

            <p class="m-0 font-weight-bold" style="font-family: Arial, sans-serif; font-size: 17px;">CC3</p>
        <div style="font-family: Arial, sans-serif; font-size: 15px;">
            <p class="font-weight-bold">3. Kung nahibal-an nimo ang CC (gitubag ang 1-3 sa CC1), pila ang natabang sa CC kanimo sa imong transaksyon?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio10" value="Nakatabang kaayo">
                <label class="form-check-label" for="radio10">
                    1. Nakatabang kaayo 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio11" value="Medyo nakatabang">
                <label class="form-check-label" for="radio11">
                    2. Medyo nakatabang  
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio12" value="Wala makatabang">
                <label class="form-check-label" for="radio12">
                    3. Wala makatabang 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CC3" id="radio13" value="Dili magamit">
                <label class="form-check-label" for="radio13">
                    4. Dili magamit
                </label>
            </div>
        </div>
        </div>
    </div>
        <div class="col-md-12 text-right mt-4">
            <button class="custom-btn btn btn-primary btn-lg" type="submit"> Submit <span>&rsaquo;&rsaquo;</span> </button>
        </div>
    </form>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function showNextPage() {
            // Hide the previous page
            document.getElementById("previousPage").style.display = "none";
            // Show the next page
            document.getElementById("nextPage").style.display = "block";
            // Scroll to the next page
            document.getElementById("nextPage").scrollIntoView();
        }

    </script>

<style>
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
        
        
    </style>

@endsection
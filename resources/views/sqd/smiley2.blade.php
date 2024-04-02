@extends('layouts.app2')

@section('smiley2')
<div class="background-container"></div>
    <div class="jumbotron">
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
        <div class="row ">
            <div class="col-md-12">
                <div style="font-family: Arial, sans-serif; font-size: 17px;">
                    <p class="m-0 font-weight-bold">INSTRUKSYON:</p>
                </div>
            </div>
            <div class="col-md-12">
                <div style="font-family: Arial, sans-serif; font-size: 15px;">
                    <p class="m-0">Para sa SQD 0-8, palihug butangi og tsek (/) ang kolum nga labing haum sa imong tubag.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
             <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: left;">Service Quality Dimension (SQD)</th>
                            <th scope="col" class="text-center" style= "border: 1px solid #dee2e6;"> <span class="emoji" style="font-size: 3em;">&#x1F614; </span><br> Kusog nga Dili Mouyon</th>
                            <th scope="col" class="text-center" style= "border: 1px solid #dee2e6;"> <span class="emoji" style="font-size: 3em;">&#x1F641; </span><br> Dili mouyon </th>
                            <th scope="col" class="text-center" style= "border: 1px solid #dee2e6;"> <span class="emoji" style="font-size: 3em;">&#128528; </span><br> Dili mouyon o dili mouyon </th>
                            <th scope="col" class="text-center" style= "border: 1px solid #dee2e6;"> <span class="emoji" style="font-size: 3em;">&#128578; </span><br> Uyon </th>
                            <th scope="col" class="text-center"> <span class="emoji" style="font-size: 3em;">&#128522; </span><br>Uyon kaayo </th>

                        </tr>
                    </thead>
                    <form method="POST" action="{{route('submitsqd2survey')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name='clientid' style="display:none;" value="{{$survey->client_id}}">
                        <input type="text" name='ccsurvey' style="display:none;" value="{{$survey->id}}">
                    <tbody>
                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD5. Nagbayad ako og makatarunganon nga kantidad sa bayad alang sa akong transaksyon</td>
                            <td style="text-align: center;"><input class="form-check-input1" type="radio" name="SQD0" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input2" type="radio" name="SQD0" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input3" type="radio" name="SQD0" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input4" type="radio" name="SQD0" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input5" type="radio" name="SQD0" value="option5"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD6. Gibati nako nga patas ang opisina sa tanan, o "wala'y palakasan", sa akong transaksyon</td>
                            <td style="text-align: center;"><input class="form-check-input6" type="radio" name="SQD1" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input7" type="radio" name="SQD1" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input8" type="radio" name="SQD1" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input9" type="radio" name="SQD1" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input10" type="radio" name="SQD1" value="option5"></td>
                        </tr>
                        
                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD7. Gitratar ako nga matinahuron sa mga kawani, ug (kung nangayo og tabang), ang mga kawani makatabang</td>
                            <td style="text-align: center;"><input class="form-check-input11" type="radio" name="SQD2" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input12" type="radio" name="SQD2" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input13" type="radio" name="SQD2" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input14" type="radio" name="SQD2" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input15" type="radio" name="SQD2" value="option5"></td>
                        </tr>

                        <tr>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; text-align: left;">SQD8. Nakuha nako ang akong gikinahanglan gikan sa opisina sa gobyerno, o (kung gibalibaran) ang pagdumili sa hangyo igo nga gipasabut kanako</td>
                            <td style="text-align: center;"><input class="form-check-input16" type="radio" name="SQD3" value="option1"></td>
                            <td style="text-align: center;"><input class="form-check-input17" type="radio" name="SQD3" value="option2"></td>
                            <td style="text-align: center;"><input class="form-check-input18" type="radio" name="SQD3" value="option3"></td>
                            <td style="text-align: center;"><input class="form-check-input19" type="radio" name="SQD3" value="option4"></td>
                            <td style="text-align: center;"><input class="form-check-input20" type="radio" name="SQD3" value="option5"></td>
                        </tr>
                    </tbody>
                </table>
</div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12  text-right">
                <button class="custom-btn btn btn-primary btn-lg" type='submit'>Submit <span>&rsaquo;&rsaquo;</span></button>
                </div>
        </div>
        </form>


     </div>


    <script>
        const checkboxes = document.querySelectorAll('input[type="radio"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function() {
                const currentRowRadios = document.querySelectorAll(`input[name="${this.name}"]`);
                currentRowRadios.forEach(radio => {
                    if (radio !== this) {
                        radio.checked = false;
                    }
                });
            });
        });
    </script>

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

<script>
        function showPreviousPage() {
        window.history.back();
    }
    document.getElementById('previousButton').addEventListener('click', showPreviousPage);
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
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
    </style>
@endsection

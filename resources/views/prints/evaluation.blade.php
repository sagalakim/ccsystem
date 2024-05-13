<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/emoji-java@1.0.0/dist/emoji-java.min.js"></script>

</head>
<body>
    <div class="container">
        <!--dole card-->
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
        <!--end dole card-->
        <!--red tape-->
        <div class="card m-2">
                    <div class="card-body" style="margin-left:440px;margin-top:-80px; width:200px; border: 1px solid black; height:45px;">
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">ANTI-RED TAPE AUTHORITY</p>
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">CLIENT SATISFACTION MEASUREMENT FORM</p>
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">PSA approval No.: ARTA-2242-3</p>
                        <p class="mb-0" style="font-size: 7px; margin-left:10px;">Expires on 31 April 2024</p>
                    </div>
                </div>
            </div>
        <!--red tape-->
        <!--summary-->
        <div class="card" style="background-color:black; color:white; width:770px; height:90px; margin-left:-140px; margin-top:-20px;">
                <div class="card-body">
                    <p class="card-text" style="font-size:13px;">
                        Summary
                    </p>
                    <p class="card-text" style="font-size:12px;">
                        This is the summary of all the data today from ARTA
                    </p>
                </div>
            </div>
        <!--end summary-->
        <!--total-->
        <div class="card" style="background-color:black; color:white; width:770px; height:90px; margin-left:-140px; margin-top:-20px;">
                <div class="card-body">
                    <p class="card-text" style="font-size:13px;">
                        Total
                    </p>
                    <p class="card-text" style="font-size:12px;">
                        This is the summary of all the data today from ARTA
                    </p>
                </div>
            </div>
        <!--end total-->
</div>
</body>
</html>

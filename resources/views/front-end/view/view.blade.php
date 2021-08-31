<!doctype html>
<html lang="en" style="height: 100%;">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Birth Registration System Bangladesh | Home :: BRSBD </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/')}}/css/style-starter.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/certificate.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap-datepicker.min.css">



</head>
<body style="background-color: slateblue">
@include('front-end.includes.header')
<div class="container" style="padding-top: 100px; padding-bottom: 80px">
    <div class="cert-box">

        <div class="" style="border:2px solid black;">

            <h3 align="center" class="spacing" style="padding-top: 40px; padding-bottom: 60px">Birth Certificate</h3>
            <div class="row card-body" style="margin-left: 2px; margin-right: 2px">
                <div class="col-sm-12 spacing">
                    <strong>Register No : </strong> <p class="table-bordered"> </p>
                </div>
                <div class="col-sm-6 spacing">
                    <p>Date of Registration : </p> <p align="center" style="left: 10px">{{$target->created_at}} </p>
                </div>
                <div class="col-sm-6 spacing">
                    <p>Date of Issue : </p> <p class="">{{$target->updated_at}} </p>
                </div>
                <div class="col-sm-12 spacing">
                    <strong>Birth Registration No : </strong> <textarea class="textar" rows="1" class="col-8"  readonly>{{$target->id}}</textarea>
                </div>
                <div class="col-sm-12 spacing">
                    <p>Name : </p> <p class="stl">{{$target->fullname}}</p>
                </div>

                <div class="col-sm-9 spacing">
                    <p>Date of Birth : </p> <p class="stl">{{$target->bdate}} </p>
                </div>
                <div class="col-sm-3 spacing">
                    <p>Sex : </p> <p class="stl"> {{$target->gender}}</p>
                </div>
                <div class="col-sm-12 spacing">
                    <p>Place of Birth : </p> <p class="stl">{{$target->division.' '.$target->district.' '.$target->upazila}} </p>
                </div>
                <div class="col-sm-12 spacing">
                    <p>Father's Name : </p> <p class="stl">{{$target->father}}</p>
                </div>
                <div class="col-sm-12 spacing">
                    <p>Father's Nationality : </p> <p class="stl">{{$target->fnationality}}</p>
                </div>
                <div class="col-sm-12 spacing">
                    <p>Mother's Name : </p> <p class="stl">{{$target->mother}}</p>
                </div>
                <div class="col-sm-12 spacing">
                    <p>Mother's Nationality : </p> <p class="stl">{{$target->mantionality}} </p>
                </div>
                <div class="col-sm-4 spacing">
                    <p >Permanent Address : </p>
                </div>
                <div class="col-sm-8">
                    <p class="stl" style="padding-left: 0px; position: relative; right: 20px;">{{$target->peraddress }} </p>
                </div>

                <div class="col-sm-4 spacing" style="padding-top: 40px">
                    <p >Sign of Admin </p>
                </div>
                <div class="col-sm-4 spacing" style="padding-top: 40px">

                </div>
                <div class="col-sm-4 spacing" style="padding-top: 40px">
                    <p style="position: relative; left: 40px">Sign of Registrar </p>
                </div>

                <div class="col-sm-3 spacing">
                    <img src="{{asset('/')}}" alt="" width="100" height="60">
                </div>
                <div class="col-sm-6">

                </div>
                <div class="col-sm-3 spacing">
                    <img src="{{asset('/')}}" alt="" width="100" height="60">
                </div>
                <div class="d-print-none col-sm-12">
                    <button class="d-print-none btn btn-warning btn-block" onclick="window.print()">Print</button>
                </div>
            </div>
        </div>

    </div>

</div>





    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="{{asset('/')}}/js/script.js"> </script>





</body>

</html>




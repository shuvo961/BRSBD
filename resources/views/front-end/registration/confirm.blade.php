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

    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap-datepicker.min.css">



</head>
<body style=" background-image: linear-gradient(darkviolet, mediumvioletred);">

@include('front-end.includes.header')



<div class="container my-auto " align="center" style="padding-top: 80px">
    <div class="card col-sm-8 mt-lg-5 " style="border-radius: 25px; background-image: linear-gradient(#D3CCE3,#E9E4F0); height: 100%; ">
        <div class="card-body py-0 pt-3">
            <div class=""  align="center">
                <form class=""  method="post" action="{{route('success')}}">

                   @csrf

                    <div class="" >
                        <h5 class="fs-title">Selected Area</h5>

                    </div>


                    <div class="form-group">

                        <div class="row">
                            <div class="col-sm-4 ">
                                <input type="text" readonly  name="division"  class="form-control" value="{{$div->name}}">
                            </div>
                            <div class="col-sm-4 ">
                                <input type="text" readonly  name="district"  class="form-control" value="{{$dis->name}}">

                            </div>
                            <div class="col-sm-4">
                                <input type="text" readonly  name="upazila"  class="form-control" value="{{$upa->name}}">
                            </div>
                        </div>

                    </div>


                    <h5 class="fs-title">Personal Details</h5>
                    <div class="form-row ">
                        <div class="col">
                            <input type="text" readonly  name="fname"  class="form-control" value="{{$data->fname}}">
                        </div>
                        <div class="col">
                            <input type="text" readonly  name="lname"  class="form-control" value="{{$data->lname}}">

                        </div>
                    </div>





                    <div class="form-row pb-1">


                        <div class="col">
                            <input type="text" readonly  name="gender"  class="form-control" value="{{$data->gender}}">
                        </div>


                        <div class="col">
                            <input type="date" readonly  name="bdate"  class="form-control" value="{{$data->bdate}}">

                        </div>


                    </div>



                    <h5 class="fs-title ">Parents</h5>


                    <div class="form-row form-group">

                        <div class="col-sm-4">
                            <input type="text" readonly  name="father"  class="form-control" value="{{$data->father}}">

                        </div>

                        <div class="col-sm-4">
                            <input type="text-sm"  readonly class="form-control" name="fnationality"  value="{{$data->fnationality}}">
                        </div>
                        <div class="col-sm-4" >
                            <input type="number" readonly class="form-control" name="fnid" value="{{$data->fnid}}">
                        </div>

                    </div>



                    <div class="form-row form-group">

                        <div class="col-sm-4">
                            <input type="text" readonly  name="mother"  class="form-control" value="{{$data->mother}}">
                        </div>

                        <div class="col-sm-4" >
                            <input type="text"  readonly class="form-control" name="mnationality"  value="{{$data->mnationality}}">
                        </div>
                        <div  class="col-sm-4">
                            <input type="number" readonly class="form-control" name="mnid" value="{{$data->mnid}}">
                        </div>

                    </div>


                    <h5>Address </h5>

                    <div class="form-row form-group">

                        <div class="col">
                            <input type="text" name="presaddress" readonly class="form-control" value="{{$data->presaddress}}" >

                        </div>

                        <div class="col">
                            <input type="text" name="peraddress" readonly class="form-control" value="{{$data->peraddress}}">

                        </div>

                    </div>


                    <div class="form-group">
                        <a class="btn btn-danger" href="{{route('birth-reg')}}">Discard</a>
                        <button type="submit" name="confirm" class="btn action-button  btn-success"  >Confirm</button>
                    </div>



                </form>
            </div>

        </div>
    </div>

</div>




<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });


</script>

<script src="{{asset('/')}}/js/bootstrap-datepicker.min.js"> </script>

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="{{asset('/')}}/js/script.js"> </script>




</body>

</html>




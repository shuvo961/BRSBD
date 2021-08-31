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



<div class="container py-5 " align="center">
    <div class="card col-sm-8 " style="border-radius: 25px; background-image: linear-gradient(#D3CCE3,#E9E4F0); height: 100%;margin-top: 200px; ">
        <div class="card-body py-0 pt-3 ">
        <div class=""  align="center">
            <h1 class="text-success"> <?php echo "Successfully Submitted"; ?> </h1>
            <h5> <?php echo "Your Application id is : ".$id; ?> </h5>

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



<?php

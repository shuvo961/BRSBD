@extends('front-end.master')


@section('body')


    <section class="w3l-about-breadcrum">
        <div class="breadcrum-bg">
            <div class="container py-5">
                <p><a href="{{route('/')}}">Home</a> &nbsp; / &nbsp; Info </p>
                <h2 class="my-3">Birth Information </h2>
                <p>Cehck & Verify Birth Information</p>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4" id="about">
        <div id="content-with-photo4-block" class="py-5">
            <div class="container py-md-3">
                <div class="cwp4-two row">

                    <div class="cwp4-text col-lg-6">
                        <h3>Check Your Identety</h3>
                        <p>Get All Information at one place . <br>
                            An easy & effective way to verify birth information.
                        </p>
                        <ul class="cont-4">
                            <li><span class="mr-3 fa fa-long-arrow-right"></span>View Birth Information</li>
                            <li><span class="mr-3 fa fa-long-arrow-right"></span>Download Online Certificate </li>
                            <li><span class="mr-3 fa fa-long-arrow-right"></span>Verify Your Information</li>

                        </ul>
                        <a class="btn btn-secondary btn-theme3 mt-3 " href="{{route('contact')}}">Need Help!</a>
                    </div>
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5 py-2">

                        <div class="card">

                            <div class="card-body">
                                <h2 class="text-capitalize text-center alert-danger alert-heading mb-lg-2">{{Session::get('message')}}</h2>
                                <form name="mform"  id="mform" method="post" action="{{route('info-check')}}">
                                   @csrf
                                    <h4 id="vrf" align="center">Fill in your credentials</h4>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-12 col-form-label">Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="fullname" placeholder="Enter your full name here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-12 col-form-label">Fathers NID</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="fnid" placeholder="NID NO 0XXXXXXXXXX" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label >Select Birth Date</label>
                                            <input type="date" name="bdate" max="3000-12-31"
                                                   min="1900-01-01" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button name="btn" type="button" onclick="validateForm()" class="btn btn-theme2 btn-block">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">

        function validateForm() {


            var x = document.forms["mform"]["bdate"].value;
            if (x == "") {
                alert("Pleasse Select Date");
                return false;
            }
            else{
                document.getElementById("mform").submit();
            }

        }

    </script>





@endsection

@extends('front-end.master')

@section('body')

    <section class="w3l-contact-breadcrum">
        <div class="breadcrum-bg">
            <div class="container py-5">
                <p><a href="index.php">Home</a> &nbsp; / &nbsp; Status</p>
                <h2 class="my-3">Application Status</h2>

                <p>Check Status of your online Application</p>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="w3l-contacts-12" id="contact">
        <div class="contact-top pt-5">
            <div class="container py-md-3 mb-lg-5" align="center">

                <div class="col-sm-6 pb-3">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{route('check-status')}}">
                                @csrf
                                <div align="center">
                                    <div class="form-group ">
                                        <h3 class="text-capitalize text-danger alert-danger"> {{Session::get('message')}} </h3>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Enter You Application ID Below :">
                                        </div>
                                    </div>
                                    <div class="form-group ">

                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="id" placeholder="0XX-XXX-XX0" required>
                                        </div>
                                    </div>
                                    <button type="submit" name="btn" class="btn btn-theme2 mb-2">Check Status</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

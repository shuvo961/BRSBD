@extends('admin.master')

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Applicants Details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th scope="col">Applicant ID</th>
                            <td scope="col">{{$apl->id}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Full Name</th>
                            <td scope="col">{{$apl->fullname}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Date of Birth</th>
                            <td scope="col">{{$apl->bdate}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Father Name</th>
                            <td scope="col">{{$apl->father}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Father NID</th>
                            <td scope="col">{{$apl->fnid}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Father Nationality</th>
                            <td scope="col">{{$apl->fnationality}}</td>
                        </tr>

                        <tr>
                        <th scope="col">Mother Name</th>
                        <td scope="col">{{$apl->mother}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Mother NID</th>
                            <td scope="col">{{$apl->mnid}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Mother Nationality</th>
                            <td scope="col">{{$apl->mnationality}}</td>
                        </tr>



                        <tr>
                            <th scope="col">Present Address</th>
                            <td scope="col">{{$apl->presaddress}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Permanent Address</th>
                            <td scope="col">{{$apl->peraddress}}</td>
                        </tr>

                        <tr>
                        <th scope="col">Status</th>
                        <td scope="col">{{$apl->id==1 ? 'Approved' : 'Pending' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


@endsection

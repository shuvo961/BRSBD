@extends('admin.master')

@section('body')


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">New Applications - Pending</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Applicants Lists</h6>
                        <h5 class="m-0 font-weight-bold text-success">{{Session::get('message')}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Application ID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>


                                </tr>
                                </tfoot>
                                <tbody>

                               @php($i=1)
                               @foreach ($applicants as $app)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$app->fullname }}</td>
                                    <td>{{$app-> bdate}}</td>
                                    <td>{{$app-> id}}</td>
                                    <td>{{$app->status==1 ? 'Approved' : 'Pending'
                                       }}</td>
                                    <td>
                                        <a href="{{route('view-applicant',['id'=>$app->id])}}"><span><i class="fa fa-search" aria-hidden="true"></i></span> View |</a>
                                        <a href="{{route('approve-applicant',['id'=>$app->id])}}"> <p class="fa fa-thumbs-up">Approve</p> |</a>
                                        <a class="fa fa-window-close text-danger" href="{{route('decline-applicant',['id'=>$app->id])}}">Decline</a>
                                    </td>
                                </tr>

                               @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

@endsection

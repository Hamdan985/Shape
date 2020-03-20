@extends('trainers.trainer-template')

@section('content')
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box text-center">
                            <h3>Welcome {{Auth::user()->tname}}</h3>
                            <p>You are logged in.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Work Details</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Gym Name</th>
                                            <th>Salary</th>
                                            <th>Date of Joining</th>
                                            <th>Action</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$gym->gname}}</td>
                                            <td>{{$trainer->salary}}</td>
                                            <td>{{$trainer->doj}}</td>
                                            
                                            <td>
                                                <button title="Remove membership" type="submit" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </td>   
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
      
    </div>
    <!-- /#wrapper -->
@endsection
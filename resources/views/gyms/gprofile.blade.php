@extends('gyms.gym-template')

@section('content')
<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile Page</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                <img width="100%" alt="user" src="img/strong.png">
                                <div class="overlay-box">
                                    <div class="user-content">
                                    @php
                                        $gym = Auth::user();
                                    @endphp
                                        <h2 class="text-white">{{$gym->gname}}</h2>
                                        <h3 class="text-white">{{$gym->email}}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                    <h3><i class="fa fa-phone"></i> {{$gym->gphone}}</h3>
                                    <h3><i class="fa fa-globe"></i> {{$gym->gaddress}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form action="{{action('GymController@update',$gym->gid)}}" method="POST" class="form-horizontal form-material">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                    <input type="text" name="name" value="{{$gym->gname}}"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" value="{{$gym->email}}"
                                            class="form-control form-control-line" name="email"
                                            id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" value="{{$gym->gphone}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="address" class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address" value="{{$gym->gaddress}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" value="Update Profile" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
@endsection
@extends('gyms.gym-template')

@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Member Update</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Member</a></li>
                            <li class="active">Details</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                        <div class="white-box">
                            <form action="{{action('CustomerController@update',$customer->cid)}}" method="POST" class="form-horizontal form-material">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                    <input type="text" name="name" value="{{$customer->cname}}"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" value="{{$customer->email}}" class="form-control form-control-line" name="email"
                                            id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" value="{{$customer->cphone}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="col-sm-12">Gender</label>
                                    <div class="col-sm-12">
                                        <select name="gender" class="form-control form-control-line">
                                            <option value="{{$customer->gender}}">{{$customer->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address" value="{{$customer->caddress}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="doj" class="col-md-12">Date of Joining</label>
                                    <div class="col-md-12">
                                        <input type="date" name="doj" value="{{$customer->doj}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="balance" class="col-md-12">Balance</label>
                                        <div class="col-md-12">
                                            <input type="balance" name="balance" value="{{$customer->balance}}" class="form-control form-control-line"> 
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
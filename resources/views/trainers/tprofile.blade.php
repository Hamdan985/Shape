@extends('trainers.trainer-template')

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
                                        $trainer = Auth::user();
                                    @endphp
                                        <h2 class="text-white">{{$trainer->tname}}</h2>
                                        <h3 class="text-white">{{$trainer->email}}</h3>
                                    </div>
                                </div>
                            </div>
                            @php
                                use App\Gym;
                                $mygym = Gym::where('gid', '=', $trainer->gid)->first();                                  
                            @endphp
                            <div class="user-btm-box">
                                    <h3><i class="fa fa-phone"></i> {{$trainer->tphone}}</h3>
                                    <h3><i class="fa fa-globe"></i> {{$trainer->tcity}}</h3>
                                    @if ($mygym != NULL)
                                        <h3><i class="fa fa-link"></i> {{$mygym->gname}}</h3>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form action="{{action('TrainerController@update',$trainer->tid)}}" method="POST" class="form-horizontal form-material">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                    <input type="text" name="name" value="{{$trainer->tname}}"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" value="{{$trainer->email}}"
                                            class="form-control form-control-line" name="email"
                                            id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" value="{{$trainer->tphone}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="col-sm-12">Gender</label>
                                    <div class="col-sm-12">
                                        <select name="gender" class="form-control form-control-line"  >
                                            <option value="{{$trainer->gender}}">{{$trainer->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address" value="{{$trainer->taddress}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gym" class="col-sm-12">Gym Name</label>
                                    <div class="col-sm-12">
                                        <select name="gym" class="form-control form-control-line">
                                            

                                            @if ($mygym == NULL)
                                                <option value="">None of these</option>
                                            @else
                                                <option value="{{$mygym->gname}}">{{$mygym->gname}}</option>
                                            @endif

                                            @foreach($gyms as $gym)
                                                <option value="{{$gym->gname}}">{{$gym->gname}}</option>
                                            @endforeach
                                            <option value="None">None of these</option>                                                                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="doj" class="col-md-12">Date of Joining</label>
                                    <div class="col-md-12">
                                        <input type="date" name="doj" value="{{$trainer->doj}}" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pan" class="col-md-12">PAN No.</label>
                                    <div class="col-md-12">
                                        <input type="text" name="pan" value="{{$trainer->pan}}" class="form-control form-control-line"> 
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
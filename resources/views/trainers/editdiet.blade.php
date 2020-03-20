@extends('trainers.trainer-template')

@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Diet Update</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="/trainers">Dashboard</a></li>
                            <li class="active">Diet Plans</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                        <div class="white-box">
                            <form action="{{action('DietPlanController@update',$dietplan)}}" method="POST" class="form-horizontal form-material">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <h4><label for="name" class="col-md-12">{{$customer->cname}}</label></h4>                   
                                </div>

                                <div class="form-group">
                                    <label for="morning" class="col-md-12">Morning</label>
                                    <div class="col-md-12">
                                        <input type="text"  name="morning" value="{{$dietplan->morning}}" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="afternoon" class="col-md-12">Afternoon</label>
                                    <div class="col-md-12">
                                        <input type="text"  name="afternoon" value="{{$dietplan->afternoon}}" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="evening" class="col-md-12">Evening</label>
                                    <div class="col-md-12">
                                        <input type="text"  name="evening" value="{{$dietplan->evening}}" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="night" class="col-md-12">Night</label>
                                    <div class="col-md-12">
                                        <input type="text"  name="night" value="{{$dietplan->night}}" class="form-control form-control-line">
                                    </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" value="Update Diet" class="btn btn-primary">
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
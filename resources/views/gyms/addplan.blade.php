@extends('gyms.gym-template')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Membership</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="/gyms">Dashboard</a></li>
                        <li class="active">Add membership</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-2 col-xs-2"></div>
                <div class="col-md-8 col-xs-8">
                    <div class="white-box">

                        <form action="/admission" method="POST" class="form-horizontal form-material">
                            @csrf
                            
                            <div class="form-group" id="membership" >
                                <label for="cid" class="col-sm-12">Select Member</label>
                                <div class="col-sm-12">
                                    <select  class="form-control form-control-line" name="cid" required>
                                        <option value="">Select any one</option>
                                        @foreach ($customers as $c)
                                            <option value="{{$c->cid}}">{{$c->cname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="membership" >
                                <label for="type" class="col-sm-12">Membership Plan</label>
                                <div class="col-sm-12">
                                    <select  class="form-control form-control-line" name="type" required>
                                        <option value="">Select any one</option>
                                        @foreach ($memberships as $m)
                                                <option value="{{$m->mid}}">{{$m->type}} ({{$m->duration}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="membership" >
                                <label for="startdate" class="col-sm-12">Start Date</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" name="startdate" id="startdate" required>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" value="Add plan" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2"></div>

              
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
@endsection
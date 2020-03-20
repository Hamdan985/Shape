@extends('trainers.trainer-template')
@section('content')
<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" style="margin: 5px 0;">
                        {{-- <h4 class="page-title">Diet Plans</h4> --}}
                        <a href="/trainer/dietplan/create" class=" btn btn-primary btn-sm " style="color:white;">Create Diet Plan</a>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="/trainers">Dashboard</a></li>
                            <li class="active">Diet Plans</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Diet Plans</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Member Name</th>
                                            <th>Morning</th>
                                            <th>Afternoon</th>
                                            <th>Evening</th>
                                            <th>Night</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php use App\Customer; @endphp
                                        @foreach ($dietplans as $dp)
                                            <tr>
                                                @php
                                                    $customer = Customer::where('cid',$dp->cid)->first();    
                                                @endphp
                                                <td style="font-weight : bold;">{{$customer->cname}}</td>
                                                <td>{{$dp->morning}}</td>
                                                <td>{{$dp->afternoon}}</td>
                                                <td>{{$dp->evening}}</td>
                                                <td>{{$dp->night}}</td>
                                                <td>
                                                    <a title="Update Diet" href="{{action('DietPlanController@edit',$dp)}}"><i class="fa fa-edit edit" aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{action('DietPlanController@destroy',$dp)}}" method="POST" onsubmit="return confirm('Delete Diet Plan?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="Delete Diet" type="submit" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>                                      
                                            </tr>      
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
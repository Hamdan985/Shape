@extends('customers.customer-template')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">View Diet Plan</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Member</a></li>
                        <li class="active">Diet Plan</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Diet Plans</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <style>
                                        .table th{
                                            color:black;
                                        }
                                        .remove{
                                            font-size: 16px;
                                            color:red;
                                        }
                                    </style>
                                    <tr>
                                        <th>Trainer Name</th>
                                        <th>Morning</th>
                                        <th>Afternoon</th>
                                        <th>Evening</th>
                                        <th>Night</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php use App\Trainer; @endphp
                                    @foreach ($dietplans as $dp)
                                        <tr>
                                            @php
                                                $trainer = Trainer::where('tid',$dp->tid)->first();
                                            @endphp
                                            <td>{{$trainer->tname}}</td>
                                            <td>{{$dp->morning}}</td>
                                            <td>{{$dp->afternoon}}</td>
                                            <td>{{$dp->evening}}</td>
                                            <td>{{$dp->night}}</td>
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
@endsection
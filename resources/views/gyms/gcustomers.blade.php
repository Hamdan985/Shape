@extends('gyms.gym-template')
@section('content')
<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Members</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Members</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Members</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <style>
                                                .table th{
                                                    color:black;
                                                }
                                                .edit{
                                                    font-size: 20px;
                                                    color:#1b68e4;
                                                }
                                                .remove{
                                                    font-size: 20px;
                                                    /* color:red; */
                                                }
                                            </style>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Balance</th>
                                            <th>DOJ</th>
                                            {{-- <th>Personal Training</th>
                                            <th>Profile</th>
                                            <th>Remove</th> --}}
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($customers as $c)
                                            <tr>
                                                <td>@php echo ++$no @endphp</td>
                                                <td>{{$c->cname}}</td>
                                                <td>{{$c->cphone}}</td>
                                                <td>{{$c->balance}}</td>
                                                <td>{{$c->doj}}</td>
                                                <td>
                                                    <a href="" title="Personal Training" style="font-size:20px; text-align:center;"><i class="fa fa-gear fa-fw" aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a title="Profile" href="{{action('GymController@editCustomer',$c)}}"><i class="fa fa-edit edit" aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{action('CustomerController@destroy',$c)}}" method="POST" onsubmit="return confirm('Remove Member ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="Remove member" type="submit"><i class="fa fa-trash-o remove" aria-hidden="true"></i></button>
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
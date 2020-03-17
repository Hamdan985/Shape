@extends('customers.customer-template')

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
                            <h3>Welcome {{Auth::user()->cname}}</h3>
                            <p>You are logged in.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Membership Details</h3>
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
                                                    font-size: 16px;
                                                    color:red;
                                                }
                                            </style>
                                            <th>Gym Name</th>
                                            <th>Membership Type</th>
                                            <th>Duration</th>
                                            <th>Fees</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Balance</th>
                                            <th>Action</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($details != NULL)
    
                                            <tr>
                                                <td>{{$details['gym']->gname}}</td>
                                                <td>{{$details['mem']->type}}</td>
                                                <td>{{$details['mem']->duration}}</td>
                                                <td>{{$details['mem']->fees}}</td>
                                                <td>{{$details['adm']->startdate}}</td>
                                                <td>{{$details['adm']->enddate}}</td>
                                                <td>{{$details['mem']->fees}}</td>
                                                <td>
                                                    <form action="{{action('AdmissionController@destroy',$details['adm'])}}" method="POST" onsubmit="return confirm('Remove Membership ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="Remove membership" type="submit"><i class="fa fa-trash-o remove" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>   
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      
    </div>
    <!-- /#wrapper -->
@endsection
@extends('gyms.gym-template')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Membership Plan</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Gym</a></li>
                        <li class="active">Membership</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="white-box">
                        <form action="/membership" method="POST" class="form-horizontal form-material">
                            @csrf
                            <div class="form-group">
                                <label for="type" class="col-sm-12">Type</label>
                                <div class="col-sm-12">
                                    <select name="type" class="form-control form-control-line" required>
                                        <option value="">Select any one</option>                                            
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="duration" class="col-sm-12">Duration</label>
                                <div class="col-sm-12">
                                    <select name="duration" class="form-control form-control-line" required>
                                        <option value="">Select any one</option>                                            
                                        <option value="1 Month">1 Month</option>
                                        <option value="3 Months">3 Months</option>
                                        <option value="12 Months">12 Months</option>                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fees" class="col-md-12">Fees</label>
                                <div class="col-md-12">
                                    <input type="text" name="fees" value=""
                                        class="form-control form-control-line" required>
                                </div>
                            </div>
                                @php $gym = Auth::user() @endphp
                                <input type="hidden" name="gid" value={{$gym->gid}}>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" value="Add membership" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="white-box">
                        <h3 class="box-title">Membership Plans</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <style>
                                        .table th{
                                            color:black;
                                        }
                                        .remove{
                                            font-size: 15px;
                                            color:red;
                                        }
                                    </style>
                                    <tr>
                                        <th>No.</th>
                                        <th>Type</th>
                                        <th>Duration</th>
                                        <th>Fees</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 0; @endphp

                                   @foreach ($memberships as $m)
                                       @if ($m->gid == $gym->gid)    

                                            <tr>
                                                <td>@php echo ++$no @endphp</td>
                                                <td>{{$m->type}}</td>
                                                <td>{{$m->duration}}</td>
                                                <td>{{$m->fees}}</td>
                                                <td>
                                                    <form action="{{action('MembershipController@destroy',$m->mid)}}" method="POST" onsubmit="return confirm('Remove Membership Plan ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"><i class="fa fa-trash remove" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                       @endif
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
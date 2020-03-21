@extends('gyms.gym-template')

@section('content')
<!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Trainers</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="/gyms">Dashboard</a></li>
                        <li class="active">Trainers</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Trainers</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Salary</th>
                                        <th>DOJ</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 0; @endphp

                                    @foreach ($trainers as $t)
                                        <tr>
                                            <td>@php echo ++$no @endphp</td>
                                            <td>{{$t->tname}}</td>
                                            <td>{{$t->tphone}}</td>
                                            <td>{{$t->salary}}</td>
                                            <td>{{$t->doj}}</td>
                                            <td><a title="Profile" href="{{action('GymController@editTrainer',$t)}}"><i class="fa fa-edit edit" aria-hidden="true"></i></a></td>
                                            <td>
                                                <form action="{{action('TrainerController@destroy',$t)}}" method="POST" onsubmit="return confirm('Remove Trainer?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button title="Remove trainer" type="submit" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
@endsection
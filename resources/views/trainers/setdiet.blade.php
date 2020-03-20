@extends('trainers.trainer-template')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Set Diet Plan</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Gym</a></li>
                        <li class="active">Diet Plan</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-2 col-xs-2"></div>
                <div class="col-md-8 col-xs-8">
                    <div class="white-box">
                        
                        <form action="/trainer/dietplan" method="POST" class="form-horizontal form-material">
                            @csrf
                            <div class="form-group">
                                <label for="role" class="col-sm-12">Select Member</label>
                                <div class="col-sm-12">
                                    <select name="cid" class="form-control form-control-line" required>
                                        <option value="">Select any one</option>                                            
                                       @foreach ($customers as $c)
                                            <option value="{{$c->cid}}">{{$c->cname}}</option>
                                       @endforeach                                           
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="morning" class="col-sm-12">Morning</label>
                                <div class="col-md-12">
                                    <input type="text" name="morning" class="form-control form-control-line" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="afternoon" class="col-sm-12">Afternoon</label>
                                <div class="col-md-12">
                                    <input type="text" name="afternoon" class="form-control form-control-line" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="evening" class="col-sm-12">Evening</label>
                                <div class="col-md-12">
                                    <input type="text" name="evening" class="form-control form-control-line" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="night" class="col-sm-12">Night</label>
                                <div class="col-md-12">
                                    <input type="text" name="night" class="form-control form-control-line" required>
                                </div>
                            </div>

                                @php $trainer = Auth::user() @endphp
                                <input type="hidden" name="tid" value={{$trainer->tid}}>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" value="Set Diet Plan" class="btn btn-primary">
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
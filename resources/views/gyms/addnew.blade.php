@extends('gyms.gym-template')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Member/Trainer</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="/gyms">Dashboard</a></li>
                        <li class="active">Add new</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-2 col-xs-2"></div>
                <div class="col-md-8 col-xs-8">
                    <div class="white-box">
                        @if($errors->any())
                            <p class="alert alert-danger">{{$errors->first()}}</p>
                        @endif
                        
                        <form action="/registration" method="POST" class="form-horizontal form-material">
                            @csrf
                            <div class="form-group">
                                <label for="role" class="col-sm-12">New Member or Trainer</label>
                                <div class="col-sm-12">
                                    <select name="role" id="selectRole" class="form-control form-control-line" required>
                                        <option value="">Select any one</option>                                            
                                        <option value="Customer">Member</option>
                                        <option value="Trainer">Trainer</option>                                            
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control form-control-line" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-12">Email Id</label>
                                <div class="col-md-12">
                                    <input type="email" name="email" class="form-control form-control-line" placeholder="Email Id" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-12">Phone No.</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" class="form-control form-control-line" placeholder="Phone No." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-sm-12">City</label>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control form-control-line" placeholder="City" required>
                                </div>
                            </div>

                            <div class="form-group" id="membership" >
                                <label for="type" class="col-sm-12">Membership Plan</label>
                                <div class="col-sm-12">
                                    <select  class="form-control form-control-line" name="type">
                                        <option value="">Select any one</option>
                                        @foreach ($memberships as $m)
                                                <option value="{{$m->mid}}">{{$m->type}} ({{$m->duration}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            @php $gym = Auth::user() @endphp
                            <input type="hidden" name="gid" value={{$gym->gid}}>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" value="Add new" class="btn btn-primary">
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
    <style>
        #membership{
            display: none;
        }
    </style>
    <script>
        function showInput() {
            var selectRole = document.getElementById("selectRole");
            var selectedValue = selectRole.options[selectRole.selectedIndex].value;

            if(selectedValue == "Customer"){
                document.getElementById('membership').style.display = "inherit";
            }
            if(selectedValue == "Trainer"){
                document.getElementById('membership').style.display = "none";
            }
        }

    </script>
@endsection
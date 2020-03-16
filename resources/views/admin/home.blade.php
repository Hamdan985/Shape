@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{route('home')}}">Dashboard</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Super Admin!
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-4">
            <button onclick="active(this.value)" value="gyms" class="btn btn-primary btn-block">Gyms</button>
        </div>
        <div class="col-md-4">
            <button onclick="active(this.value)" value="customers" class="btn btn-success btn-block">Customers</button>
        </div>
        <div class="col-md-4">
            <button onclick="active(this.value)" value="trainers" class="btn btn-danger btn-block">Trainers</button>
        </div>
    </div>
    
    <div id="gyms-details">
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="row">Id</th>
                            <th scope="row">Gym Name</th>
                            <th scope="row">Phone No.</th>
                            <th scope="row">Email</th>
                            <th scope="row">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php  $no = 0;  @endphp
                                                           
                        @foreach ($gyms as $g)
                            <tr>
                                <th scope="col">@php echo ++$no @endphp</th>
                                <td>{{$g->gname}}</td>
                                <td>{{$g->gphone}}</td>
                                <td>{{$g->email}}</td>
                                <td><a href="{{action('HomeController@gymdetails',$g)}}" class="btn btn-primary btn-sm">Details</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="customers-details">
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="row">Id</th>
                            <th scope="row">Customer Name</th>
                            <th scope="row">Phone No.</th>
                            <th scope="row">Email</th>
                            <th scope="row">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php  $no = 0;  @endphp

                        @foreach ($customers as $c)
                            <tr>
                                <th scope="col">@php echo ++$no @endphp</th>
                                <td>{{$c->cname}}</td>
                                <td>{{$c->cphone}}</td>
                                <td>{{$c->email}}</td>
                                <td><a href="{{action('HomeController@customerdetails',$c)}}" class="btn btn-primary btn-sm">Details</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="trainers-details">
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="row">Id</th>
                            <th scope="row">Trainer Name</th>
                            <th scope="row">Phone No.</th>
                            <th scope="row">Email</th>
                            <th scope="row">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php  $no = 0;  @endphp

                        @foreach ($trainers as $t)
                            <tr>
                                <th scope="col">@php echo ++$no @endphp</th>
                                <td>{{$t->tname}}</td>
                                <td>{{$t->tphone}}</td>
                                <td>{{$t->email}}</td>
                                <td><a href="{{action('HomeController@trainerdetails',$t)}}" class="btn btn-primary btn-sm">Details</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function active(button) {
    if(button == "gyms"){
        document.getElementById('gyms-details').style.display = 'initial';
        document.getElementById('customers-details').style.display = 'none';
        document.getElementById('trainers-details').style.display = 'none';
    }
    else if(button == "customers"){
        document.getElementById('customers-details').style.display = 'initial';
        document.getElementById('gyms-details').style.display = 'none';
        document.getElementById('trainers-details').style.display = 'none';
    }
    else if(button == "trainers"){
        document.getElementById('trainers-details').style.display = 'initial';
        document.getElementById('gyms-details').style.display = 'none';
        document.getElementById('customers-details').style.display = 'none';
    }
}
</script>

@endsection

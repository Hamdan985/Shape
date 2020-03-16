@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{route('home')}}">Back to Dashboard</a></div>

                <div class="card-body details">
                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Gym Name
                        </div>
                        <div class="col-md-8">
                            {{$gym->gname}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Phone No.
                        </div>
                        <div class="col-md-8">
                            {{$gym->gphone}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Email Id
                        </div>
                        <div class="col-md-8">
                            {{$gym->email}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            City
                        </div>
                        <div class="col-md-8">
                            {{$gym->gcity}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Address
                        </div>
                        <div class="col-md-8">
                            {{$gym->gaddress}}
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Date of registration
                        </div>
                        <div class="col-md-8">
                            {{$gym->created_at}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            No. of Customers
                        </div>
                        <div class="col-md-8">
                            {{$customers->count()}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            No. of Trainers
                        </div>
                        <div class="col-md-8">
                            {{$trainers->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection

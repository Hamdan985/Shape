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
                            Customer Name
                        </div>
                        <div class="col-md-8">
                            {{$customer->cname}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Phone No.
                        </div>
                        <div class="col-md-8">
                            {{$customer->cphone}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Email Id
                        </div>
                        <div class="col-md-8">
                            {{$customer->email}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Gender
                        </div>
                        <div class="col-md-8">
                            {{$customer->gender}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            City
                        </div>
                        <div class="col-md-8">
                            {{$customer->ccity}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Address
                        </div>
                        <div class="col-md-8">
                            {{$customer->caddress}}
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Date of registration
                        </div>
                        <div class="col-md-8">
                            {{$customer->created_at}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Current Gym
                        </div>
                        <div class="col-md-8">
                            @php
                                use App\Gym;
                                $mygym = Gym::where('gid',$customer->gid)->first();                                  
                            @endphp

                            {{$mygym->gname}}
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
 
@endsection

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
                            Trainer Name
                        </div>
                        <div class="col-md-8">
                            {{$trainer->tname}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Phone No.
                        </div>
                        <div class="col-md-8">
                            {{$trainer->tphone}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Email Id
                        </div>
                        <div class="col-md-8">
                            {{$trainer->email}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Gender
                        </div>
                        <div class="col-md-8">
                            {{$trainer->gender}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            City
                        </div>
                        <div class="col-md-8">
                            {{$trainer->tcity}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Address
                        </div>
                        <div class="col-md-8">
                            {{$trainer->taddress}}
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Date of registration
                        </div>
                        <div class="col-md-8">
                            {{$trainer->created_at}}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4 details-label">
                            Current Gym
                        </div>
                        <div class="col-md-8">
                            @php
                                use App\Gym;
                                $mygym = Gym::where('gid',$trainer->gid)->first();                                  
                            @endphp
                            @if ($mygym)
                                {{$mygym->gname}}
                            @endif
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
 
@endsection

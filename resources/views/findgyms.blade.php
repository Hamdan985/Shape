@extends('layouts.template')

@section('content')
  <!-- Email header -->
  <div class="container-fluid head">
    <div class="row">
        <p>contactus.shape@gmail.com</p>
    </div>
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <a class="navbar-brand ml-sm-5" href="{{route('index')}}">Shape</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav" id="gym-nav">
        
        @if(Auth::guard('customer')->check())
        <li class="nav-item mr-sm-5"><a class="nav-link" href="/customers"><i class="far fa-address-card"></i> Profile</a></li>

        @elseif(Auth::guard('trainer')->check())
        <li class="nav-item mr-sm-5"><a class="nav-link" href="/trainers"><i class="far fa-address-card"></i> Profile</a></li>

        @elseif(Auth::guard('gym')->check())
        <li class="nav-item mr-sm-5"><a class="nav-link" href="/gyms"><i class="far fa-address-card"></i> Profile</a></li>

        @else
        <li class="nav-item mr-sm-5"><a class="nav-link" href="{{route('signin')}}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li class="nav-item mr-sm-5"><a class="nav-link" href="{{route('registration')}}"><i class="fas fa-users-cog"></i> Register</a></li>      
        @endif
        </ul>
    </div>
  </nav>

  <!-- Header  -->
  <div class="header container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="search-bar col-sm-6">
            <h2>Find gyms near you</h2>
            <form class="form-inline">
                <input type="search" placeholder="Location" aria-label="Search">
                <button class="btn btn-warning btn-lg" type="submit">Search</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div> 
  </div>

  <div class="container-fluid">
      <div class="row">
          @foreach ($gyms as $g)
            <div class="gym-details row">
                <div class="col-sm-2 gym-img text-center">
                    <img src="img/dumbbell.png" alt="gym">
                </div>
                <div class="col-sm-2">
                        <div class="gym-name">
                            {{$g->gname}}
                        </div>
                        <div class="gym-address">
                            <i class="fas fa-map-marker-alt"></i> {{$g->gaddress}}
                        </div>
                </div>
                <div class="col-sm-2">
                    <div class="gym-phone">
                            <i class="fas fa-phone-alt"></i> {{$g->gphone}}
                    </div>
                    <div class="gym-email">
                            <i class="far fa-envelope"></i> {{$g->email}}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="gym-fees">
                        Membership plans : 
                        @foreach ($memberships as $m)
                          @if ($m->gid == $g->gid)    
                            <br>{{$m->type}} - {{$m->fees}} /-
                          @endif
                        @endforeach
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <a href="" data-toggle="modal" data-target="#bookNowModal" class="gym-book btn btn-danger">Book Now</a>
                    <div class="gym-status">
                            <i class="far fa-clock"></i> <span class="text-success">OPEN</span>
                    </div>
                </div>
            </div>    
          @endforeach
      </div>
  </div>
  <div class="modal fade" id="bookNowModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Book your membership</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="">
                @csrf
                <div class="form-group">
                  <label for="type">Type</label>
                  <select class="form-control" name="type" id="type">
                    <option value="">Select any one</option>
                    <option value="Silver">Silver (1 Month)</option>
                    <option value="Gold">Gold (3 Months)</option>
                    <option value="Platinum">Platinum (12 Months)</option>
                  </select>
                </div>  
                <div class="form-group">
                  <label for="startdate">Start Date</label>
                  <input type="date"  class="form-control" name="startdate" id="startdate">
                </div>
                <input type="submit" value="Confirm Booking" class="btn btn-danger">
              </form>
          </div>
        </div>
      </div>
    </div>

  <footer>
    <p>&copy; 2019-2020 <span style="color:#1b68e4;">Shape</span>. All rights reserved.</p>
  </footer>
@endsection
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
    <a class="navbar-brand ml-sm-5" href="/">Shape</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav" id="index-nav">
        <li class="nav-item mr-sm-5"><a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a></li>
        <li class="nav-item mr-sm-5"><a class="nav-link" href="#services"><i class="fas fa-align-center"></i> Services</a></li>
        <li class="nav-item mr-sm-5"><a class="nav-link" href="/findgyms"><i class="fas fa-dumbbell"></i> Gyms</a></li>
        
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
      <div class="search-bar col-sm-6">
        <h2>Find gyms near you</h2>
        <form class="form-inline">
            <input type="search" placeholder="Location" aria-label="Search">
            <button class="btn btn-warning btn-lg" type="submit">Search</button>
        </form>
      </div>

      <div class="col-sm-6 getshape">
        <h2>Get the <span class="shape">Shape</span> membership <span style="font-size: 32px;">to be a Gym Owner, Customer or Trainer</span></h2>
      </div>
     
    </div> 
  </div>
  
  <!-- Why Shape -->
  <div class="intro">
    <h2>Why Shape?</h2>
    <p>Get access to gyms around you faster and easier. Here it is the most flexible way to get fit and bringing shape into your life. Search gyms near home, work, or wherever you are.</p>
  </div>

  <!-- Our Services -->
  <div class="services" id="services">
    <h2>Our Services</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <h3>Customers <img src="img/weight.png" alt="customer"></h3>
          <p>Workout anywhere, anytime</p>
          <p>Meal plans by professional trainers</p>
          <p>Online training lessons</p>
        </div>
        <div class="col-sm-4">
          <h3>Owners <img src="img/handshake.png" alt="owner"></h3>
          <p>Easily managed data and memberships</p>
          <p>Collaborating with partner gyms</p>
          <p>Advertising your organization</p>
        </div>
        <div class="col-sm-4">
          <h3>Trainers <img src="img/strong.png" alt="trainer"></h3>
          <p>Fitness coaches at gyms</p>
          <p>Passion for healthy life</p>
          <p>Online training lessons</p>
        </div>
      </div>
    </div>
    <a href="" data-toggle="modal" data-target="#servicesModal" class="btn btn-warning btn-lg">Explore serivces</a>
  </div>


  <!-- Cities -->
  <div class="cities">
    <h2>Gyms near you</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <img src="img/gym2.jpeg" alt="gyms">
          <h3>Nerul</h3>
        </div>

        <div class="col-sm-4">
          <img src="img/gym3.jpg" alt="gyms">
          <h3>Panvel</h3>
        </div>

        <div class="col-sm-4">
          <img src="img/gym4.jpg" alt="gyms">
          <h3>Vashi</h3>
        </div>
      </div>
    </div>
    <a href="/findgyms" class="btn btn-warning btn-lg mt-3">Explore Gyms</a>

  </div>

  <!-- Register today -->
  <div class="register">
    <div class="container-fluid">
      <div class="row" >
        <div class="col-sm-6" style="padding: 0;" >
          <img src="img/user.jpg" alt="user">
        </div>
        <div class="col-sm-6">
          <h3>Customer, Owner or Trainer</h3>
          <p>Sign up today and show your fitness lessons to all</p>
          <a href="/registration" class="btn btn-warning btn-lg">Register today</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Register Form Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New to <span style="color: #1b68e4;">Shape</span>? Register for free</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="">

                  <div class="row">
                    <div class="form-group col-sm">
                      <label for="fname">First Name</label>
                      <input class="form-control" type="text" name="fname" id="fname">
                    </div>
                    <div class="form-group col-sm">
                      <label for="lname">Last Name</label>
                      <input class="form-control"  type="text" name="lname" id="lname">
                    </div>
                  </div>  
      
                  <div class="row">
                    <div class="form-group col-sm">
                      <label for="mobile">Mobile</label>
                      <input class="form-control"  type="text" name="mobile" id="mobile">
                    </div>
                    <div class="form-group col-sm">
                      <label for="gender">Gender</label>
                      <select class="form-control" name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>  
      
                  <div class="row">
                    <div class="form-group col-sm">
                      <label for="city">City</label>
                      <input class="form-control" type="text" name="city" id="city">
                    </div>
                    <div class="form-group col-sm">
                      <label for="state">State</label>
                      <input class="form-control"  type="text" name="state" id="state">
                    </div>
                  </div>  
      
                  <div class="row">
                    <div class="form-group col-sm">
                      <label for="email">Email Id</label>
                      <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group col-sm">
                      <label for="user">Register as</label>
                      <select class="form-control" name="user" id="user">
                        <option value="customer">Customer</option>
                        <option value="owner">Owner</option>
                        <option value="trainer">Trainer</option>
                      </select>
                    </div>
                  </div>  
      
                  <input type="submit" value="Register" class="btn btn-lg btn-block btn-warning" id="btn">
                </form>
          </div>
        </div>
      </div>
    </div>



    <!-- Login Form Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="">

                  <div class="form-group">
                    <label for="userid">User Id</label>
                    <input class="form-control" type="text" name="userid" id="userid">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control"  type="password" name="password" id="password">
                  </div>
                <input type="submit" value="Login" class="btn btn-lg btn-block btn-warning" id="btn">
              </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Services Modal -->
    <div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Coming Soon</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <h4>All the <span class="shape">Shape</span> services will be listed soon.</h4>
          </div>
        </div>
      </div>
    </div>

  <footer>
    <p>&copy; 2019-2020 <span style="color:#1b68e4;">Shape</span>. All rights reserved.</p>
  </footer>
@endsection
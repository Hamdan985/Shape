@extends('layouts.template')

@section('content')
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand ml-sm-5" href="{{route('index')}}">Shape</a>
       
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <img class="form-img" src="img/register.jpg" alt="Register...">
                <h3 class="text-center">What type of user are you?</h3>                
                <h3 class="text-center">Get enrolled for free</h3>

            </div>
            <div class="col-sm-7 userform">
                <div class="userform">
                <h2 class="text-center">Register</h2>
                <form action="">
                    <div class="form-group row">
                        <label for="role" class="col-sm-1"><i class="fas fa-users-cog"></i></label>
                        <div class="col-sm-11">
                            <select class="form-control" name="role" id="role">
                                <option value="">Select any one</option>
                                <option value="Customer">Customer</option>
                                <option value="Owner">Gym Owner</option>
                                <option value="Trainer">Trainer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-1"><i class="fas fa-user"></i></label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-1"><i class="fas fa-phone-alt"></i></label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone No.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-1"><i class="fas fa-map-marked-alt"></i></label>
                        <div class="col-sm-11">
                            <input type="text"  class="form-control" name="address" id="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-1"><i class="fas fa-envelope"></i></label>
                        <div class="col-sm-11">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-1"><i class="fas fa-unlock-alt"></i></label>
                        <div class="col-sm-11">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-button">
                        <input type="submit" value="Register" class="btn btn-warning btn-lg">
                    </div>
                </form>
                
                </div>
                <div id="google" class="text-center">
                        Or login with <span><img src="img/google.png" alt="google"><img src="img/facebook.png" alt="facebook"></span>
                </div>
            </div>
        </div>
    </div>

@endsection
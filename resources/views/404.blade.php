@extends('layouts.template')

@section('content')
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand ml-sm-5" href="/">Shape</a>
       
    </nav>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-12 ">
                <img src="{{asset('img/404.gif')}}" alt="Error 404" style="height: 300px; width: 300px;">
                <h1>Sorry !!!</h1>
                <h3>We cannot find the page you are looking for.</h3>
                <h3>It seems you are a bit lost.</h3>
                <p><a href="/">Go back to homepage</a></p>

            </div>
         
        </div>
    </div>

@endsection
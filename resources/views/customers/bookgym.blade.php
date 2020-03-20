@extends('layouts.template')

@section('content')
  <!-- Email header -->
  <div class="container-fluid head">
    <div class="row">
        <a href="mailto:contactus.shape@gmail.com" target="_blank">contactus.shape@gmail.com</a>
    </div>
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <a class="navbar-brand ml-sm-5" href="/">Shape</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav" id="gym-nav">
        <li class="nav-item mr-sm-5"><a class="nav-link" href="/customers"><i class="far fa-address-card"></i> Profile</a></li>
    </ul>
    </div>
  </nav>


  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            @if ($error = $errors->first('membership'))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endif
            <div class="userform">
                <h3 class="text-center my-4" style="font-size:28px;">Book your membership</h3>

                <form action="/customer/admission" method="POST" onsubmit="return confirm('Confirm Booking?')">
                    @csrf
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type" id="type" required>
                            <option value="">Select any one</option>
                            @foreach ($memberships as $m)
                                @if ($m->gid == $gym->gid)    
                                    <option value="{{$m->mid}}">{{$m->type}} ({{$m->duration}})</option>
                                @endif
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="startdate">Start Date</label>
                        <input type="date" class="form-control" name="startdate" id="startdate" required>
                    </div>
                    @php $c = Auth::user() @endphp
                    <input type="hidden" name="cid" value={{$c->cid}}>

                    <div class="form-button">
                        <input type="submit" value="Confirm Booking" class="btn btn-danger">
                    </div>
                </form>
            </div>

          </div>
          <div class="col-sm-4"></div>
      </div>
  </div>
<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("startdate").setAttribute("min", today);
</script>

@endsection
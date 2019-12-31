@extends('customers.customer-template')

@section('content')
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box text-center">
                            <h3>Welcome {{Auth::user()->cname}}</h3>
                            <p>You are logged in.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
      
    </div>
    <!-- /#wrapper -->
@endsection
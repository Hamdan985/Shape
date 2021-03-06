@extends('gyms.gym-template')

@section('content')
    <div id="page-wrapper">
    <div class="container-fluid">
        
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/gyms">Dashboard</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box text-center">
                    <h3>Welcome {{Auth::user()->gname}}</h3>
                    <p>You are logged in.</p>
                </div>
            </div>
        </div>
        <div class="row">

            {{-- <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Members Registered</h3>
                    <ul class="list-inline two-part">
                        <li class="text-center"><span class="counter">{{$customers->count()}}</span></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="white-box  analytics-info">
                    <h3 class="box-title">No. of Members</h3>
                    <ul class="list-inline two-part">
                        <li class="text-center"><span class="counter">{{$customers->count()}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="white-box  analytics-info">
                    <h3 class="box-title">No. of Trainers</h3>
                    <ul class="list-inline two-part">
                        <li class="text-center"><span class="counter">{{$trainers->count()}}</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Amount Balance</h3>
                    <ul class="list-inline two-part">
                        <li class="text-center"><span class="counter">{{$amount}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Today's Admissions</h3>
                    <ul class="list-inline two-part">
                        <li class="text-center"><span class="counter">{{$todayAdmissions->count()}}</span></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Personal Training</h3>
                    <ul class="list-inline two-part">
                        <li class="text-center"><span class="counter">0</span></li>
                    </ul>
                </div>
            </div> --}}
        </div>

{{--       
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>March 2017</option>
                            <option>April 2017</option>
                            <option>May 2017</option>
                            <option>June 2017</option>
                            <option>July 2017</option>
                        </select>
                    </div>
                    <h3 class="box-title">Recent sales</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>STATUS</th>
                                    <th>DATE</th>
                                    <th>PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td>EXTENDED</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td>EXTENDED</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td>TAX</td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-$24</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="text-danger">-$14</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="txt-oflo">Helping Hands WP Theme</td>
                                    <td>MEMBER</td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->
{{--         
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Recent Comments</h3>
                    <div class="comment-center p-t-10">
                        <div class="comment-body">
                            <div class="user-img"> <img src="dashboard/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5><span class="time">10:20 AM   20  may 2016</span>
                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a>
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="user-img"> <img src="dashboard/plugins/images/users/sonu.jpg" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5><span class="time">10:20 AM   20  may 2016</span>
                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span>
                            </div>
                        </div>
                        <div class="comment-body b-none">
                            <div class="user-img"> <img src="dashboard/plugins/images/users/arijit.jpg" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Arijit singh</h5><span class="time">10:20 AM   20  may 2016</span>
                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CHAT LISTING
                            </div>
                            <div class="panel-body">
                                <ul class="chatonline">
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col --> --}}
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
  
    </div>
 
@endsection

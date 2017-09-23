
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Users
@endsection




@section('content')


<div class="pageheader">

    <h1>{{$user->username}}'s Profile</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>Admin</li>
            <li>Manage Users</li>
            <li class="active">{{$user->username}}'s Profile</li>
        </ol>
    </div>
</div>
<section id="main-content">
    <div class="row">
        <div class="col-md-6">
            <section class="panel animated fadeInUp">
                <div class="panel-body profile-wrapper">
                    <div class="col-md-3">
                        <div class="profile-pic text-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="img-circle">
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        <div class="profile-info">
                            <h1>{{$user->username}}</h1>
                            <span class="text-muted">UI Designer</span>
                            <br><br>
                            <address>
                                <strong>Full Name</strong>
                                <br>
                                {{$user->name}}
                            </address>
                            <address>
                                <strong>Email</strong>
                                <br>
                                {{$user->email}}
                            </address>
                            <address>
                                <strong>Phone Number</strong>
                                <br>
                                {{$user->phonenumber}}
                            </address>
                            <address>
                                <strong>Member Since</strong>
                                <br>
                                {{$user->created_at->toFormattedDateString()}}
                            </address>

                            
                            
                            {{-- <div class="connect">
                                <button type="button" class="btn btn-success btn-trans"><span class="fa fa-check"></span> Following</button>
                                <button type="button" class="btn btn-primary btn-trans"><span class="fa fa-comments"></span> Chat</button>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
                <br>
                <section class="panel timeline-post-to">
                    <div class="panel-body">
                        <form role="form">
                            <h3>Leave a comment</h3>
                            <br>
                            <textarea class="form-control" placeholder="Add a comment"></textarea>
                            <div class="row">
                                <div class="col-sm-6">
                                    {{-- <a class="btn btn-sm btn-default"><i class="fa fa-camera"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-video-camera"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-music"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-map-marker"></i></a> --}}
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button type="submit" class="btn btn-success">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </section>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default animated fadeInUp">
                <div class="panel-heading">
                    <h3 class="panel-title">User Management Section</h3>
                </div>
                <div class="panel-body">
                    <div class="tab-wrapper tab-primary">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home1" data-toggle="tab">Roles</a>
                            </li>
                            
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home1">
                                
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <label class="control-label">Role Management</label>
                                        </div>
                                            
                                        {{-- Check the checkboxes of roles that user has --}}
                                        <div class="col-sm-6 pull-right">
                                            @foreach ($roles as $role)
                                                <div class="radio">
                                                @foreach ($role_user as $ru)
                                                    @if($ru->name == $role->name)
                                                        <input class="icheck" checked="" type="checkbox" name="check1">
                                                        <label>{{$role->display_name}}</label>
                                                        </div>
                                                         <?php continue 2; ?>
                                                    @endif
                                                @endforeach
                                                <input class="icheck" type="checkbox" name="check1">
                                                <label>{{$role->display_name}}</label>
                                                </div>
                                            @endforeach
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update Roles</button>
                </div>
            </div>
        </div>


    </div>


    {{-- Comments Section --}}
    <div class="row">
        <div class="col-md-12">
            <section class="panel  timeline-post">
                <div class="panel-heading">
                    <h3 class="panel-title">Comments</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <div class="date">
                                <span>23</span>
                                <span class="small">Feb</span>
                            </div>
                            <h4>Lorem ipsum dolor sit</h4>
                            <p>
                                Tortor metus suscipit lectus lacinia mi. Duis quis ullamcorper, felis consequat ut felis sit, pellentesque sit nunc, porttitor a, neque enim metus sed dictum scelerisque. Ante ornare, ante nunc ac, et feugiat justo urna, pharetra velit convallis, sit magna odio in nunc sit.
                            </p>
                        </li>
                        
                        <li>
                            <div class="date">
                                <span>12</span>
                                <span class="small">Jan</span>
                            </div>
                            <h4>Lorem ipsum dolor!</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>

                        </li>
                        <li>
                            <div class="date">
                                <span>01</span>
                                <span class="small">Jan</span>
                            </div>
                            <h4>Vacation photos</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/vac-1.jpg" alt="" />
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/img/vac-2.jpg" alt="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/vac-3.jpg" alt="" />
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/img/vac-4.jpg" alt="" />
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="date">
                                <span>23</span>
                                <span class="small">Dec</span>
                            </div>
                            <h4>Lorem ipsum dolor!</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </li>
                        <li>
                            <div class="date">
                                <span>14</span>
                                <span class="small">Dec</span>
                            </div>
                            <h4>Lorem ipsum dolor!</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </li>
                    </ul>

                </div>
            </section>

        </div>

    </div>




@endsection
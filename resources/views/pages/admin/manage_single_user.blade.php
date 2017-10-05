
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Users
@endsection

{{-- CSS includes--}}
@section('header')
<!--Inputs CSS-->
<link rel="stylesheet" href="{{asset('plugins/icheck/css/all.css')}}">
@endsection



{{-- Content Start --}}
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
                            <h1>
                                {{$user->username}}
                                @foreach ($role_user as $ru)
                                    @if($ru->name == "superadministrator")
                                        <i class="icon-trophy"></i>
                                    @endif
                                @endforeach
                            </h1>

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
            @if(!in_array("superadministrator", $user->roles->pluck('name')->toArray()))
                <div class="panel-heading">
                    <h3 class="panel-title">User Management Section</h3>
                </div>
                <div class="panel-body">
                    <div class="tab-wrapper tab-primary">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home1" data-toggle="tab">Roles</a>
                            </li>
                            
                            
                        </ul>
                        <form action="{{route('admin.manage').'/'.$user->id}}" method="POST" >
                           
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}

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
                                                            <input class="icheck" checked="" type="checkbox" name="roles[]" value="{{$role->id}}">
                                                            <label>{{$role->display_name}}</label>
                                                            </div>
                                                             <?php continue 2; ?>
                                                        @endif
                                                    @endforeach
                                                    <input class="icheck" type="checkbox" name="roles[]" value="{{$role->id}}">
                                                    <label>{{$role->display_name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit" onsubmit="confirm('are you sure?');" class="btn btn-success">Update Roles</button>&nbsp;&nbsp;&nbsp;

                        @if ($errors->any())
                        @foreach($errors->all() as $error)
                            <span style="color: #e25d5d">{{$error}}</span>
                        @endforeach
                        @endif
                    </form>
                </div>

                @else
                {{-- Superadmin Section if wanted--}}
                {{-- <div class="panel-heading">
                    <h3 class="panel-title">User Management Section</h3>
                </div>
                <div class="panel-body">
                </div> --}}
                @endif

            </div>
        </div>


    </div>


    {{-- Comments Section --}}
    <div class="row">
        <div class="col-md-12">
            <section class="panel  timeline-post animated fadeInUp">
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


@section('footer')
<script src="{{asset('plugins/icheck/js/icheck.min.js')}}"></script>

<script>
$(document).ready(function() {
    app.customCheckbox();
});
</script>
@endsection



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
<section id="main-content" class="max-1500">
    <div class="row">
        <div class="col-lg-5">
            <section class="panel animated fadeInUp">
                <div class="panel-body profile-wrapper">
                    <div class="col-md-12">
                        <div class="profile-pic text-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="img-circle" style="max-width: 200px;">
                        </div>
                        <br>
                        <div class="profile-info text-center">
                            <h1>
                                {{$user->username}}
                                @foreach ($role_user as $ru)
                                    @if($ru->name == "superadministrator")
                                        <i class="icon-trophy"></i>
                                    @endif
                                @endforeach
                            </h1>

                            <span class="text-muted">Software Dev</span>
                            <br><hr>
                            <address>
                                <span class="pull-left"><strong>Full Name</strong></span>
                                <span class="pull-right">{{$user->name}}</span>
                            </address>
                            <br><hr>
                            <address>
                                <span class="pull-left"><strong>Email</strong></span>
                                <span class="pull-right">{{$user->email}}</span>
                            <br><hr>
                            </address>
                            <address>
                                <span class="pull-left"><strong>Phone Number</strong></span>
                                <span class="pull-right">{{$user->phonenumber}}</span>
                            <br><hr>
                            </address>
                            <address>
                                <span class="pull-left"><strong>Member Since</strong></span>
                                <span class="pull-right">{{$user->created_at->toFormattedDateString()}}</span>
                            <br><hr>
                            </address>

                            
                            
                           {{--  <div class="connect">
                                <button type="button" class="btn btn-success btn-trans"><span class="fa fa-check"></span> Following</button>
                                <button type="button" class="btn btn-primary btn-trans"><span class="fa fa-comments"></span> Chat</button>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
                <br>
                {{-- <section class="panel timeline-post-to">
                    <div class="panel-body">
                        <form role="form">
                            <h3>Leave a comment</h3>
                            <br>
                            <textarea class="form-control" placeholder="Add a comment"></textarea>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a class="btn btn-sm btn-default"><i class="fa fa-camera"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-video-camera"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-music"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-map-marker"></i></a>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button type="submit" class="btn btn-success">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section> --}}
            </section>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default animated fadeInUp">
            {{-- @if(!in_array("superadministrator", $user->roles->pluck('name')->toArray())) --}}
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
                            <label class="error">{{$error}}</label>
                        @endforeach
                        @endif

                    </form>
                </div>

                {{-- @else --}}
                {{-- Superadmin Section if wanted--}}
                {{-- <div class="panel-heading">
                    <h3 class="panel-title">User Management Section</h3>
                </div>
                <div class="panel-body">
                </div> --}}
                {{-- @endif --}}

            </div>
        </div>


    </div>





@endsection


@section('footer')
<script src="{{asset('plugins/icheck/js/icheck.min.js')}}"></script>

<script>
$(document).ready(function() {
    app.customCheckbox();
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green',
    });
});
</script>
@endsection


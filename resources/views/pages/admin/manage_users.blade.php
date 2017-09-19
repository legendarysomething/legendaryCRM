
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Users
@endsection




@section('content')

<div class="pageheader">
    <h1>Manage Users</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Admin</li>
            <li class="active">Manage Users</li>
        </ol>
    </div>
</div>
<section id="main-content ">
    <br>
    <div class="col-md-12">
        <div class="panel panel-default animated fadeInUp">
            <div class="panel-heading">
                <h3 class="panel-title">Members</h3>
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>Some Button</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>











</section>



@endsection
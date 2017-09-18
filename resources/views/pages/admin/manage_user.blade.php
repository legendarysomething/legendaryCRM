
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Users
@endsection




@section('content')

<div class="pageheader">
    <h1>Manage Users</h1>
    <p class="description">Welcome to Your Custom Dashboard {{Auth::user()->username}}</p>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>
<section id="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
			<div class="panel panel-default">
    			<div class="panel-body ng-binding">
    				You can quickly bootstrap your Web App project here.
   				 </div>
			</div>
		</div>
    </div>
</section>



@endsection
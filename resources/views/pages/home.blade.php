
@extends('_includes.dashboard.dashnav')

{{-- Page Header --}}
@section('pageheader')
Dashboard
@endsection
{{-- End Page Header --}}


{{--  Page Content --}}
@section('content')


<div class="pageheader">
    <h1>Dashboard</h1>
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
    				Welcome to the Home Page.
   				 </div>
			</div>
		</div>
    </div>
</section>



@endsection
{{-- End Page Content --}}

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
    <p>
    <button type="button" class="btn btn-success" onclick="showSuccess('We have lift off!')">Show Success Message</button>
    </p>
</section>





@endsection
{{-- End Page Content --}}



@section('footer')
 <!--Page Level JS for Demo-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
    <!--Page Level JS -->
    <script src="{{asset('plugins/messenger/js/messenger.min.js')}}"></script>
    <script src="{{asset('plugins/messenger/js/messenger-theme-future.js')}}"></script>
    <!--Page Level JS for Demo-->
    <script src="{{asset('plugins/messenger/js/demo/location-sel.js')}}"></script>
    <script src="{{asset('plugins/messenger/js/demo/theme-sel.js')}}"></script>
    <script src="{{asset('plugins/messenger/js/demo/demo.js')}}"></script>
    <script src="{{asset('plugins/messenger/js/demo/demo-messages.js')}}"></script>

@endsection


@section('header')

<!--Page Level CSS-->
<link rel="stylesheet" href="{{asset('plugins/messenger/css/messenger.css')}}">
<link rel="stylesheet" href="{{asset('plugins/messenger/css/messenger-theme-flat.css')}}">
<link rel="stylesheet" href="{{asset('plugins/messenger/css/location-sel.css')}}">


@endsection
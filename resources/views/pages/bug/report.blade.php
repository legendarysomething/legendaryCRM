
@extends('_includes.dashboard.dashnav')

{{-- Page Header --}}
@section('pageheader')
@lang('main.reportabug')
@endsection
{{-- End Page Header --}}

@section('header')
<!-- Editor-->
<link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5.css')}}">
<link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/css/bootstrap3-wysiwyg5-color.css')}}">

@endsection




{{--  Page Content --}}
@section('content')


<div class="pageheader">
    <h1>@lang('main.reportabug')</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">@lang('main.reportabug')</li>
        </ol>
    </div>
</div>



<section id="main-content" class="max-1500">
    <div class="row">       
        <div class="col-md-6">

			@if(session()->has('mail_success'))
			{{-- Report Sending Success Message --}}
        	<div class="panel panel-solid-success animated fadeInUp">
                <div class="panel-heading">
                    <h3 class="panel-title">Submission Success - Thank you for your report</h3>
                </div>
            </div>
			@endif

            <div class="panel panel-default animated fadeInUp">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('main.reportabug')</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <textarea class="textarea form-control" rows="10" cols="80" name="submission" placeholder="Enter text ..." style="width: 100%; height: 506px; {{$errors->has('submission') ? 'border-color: #e25d5d;' : ''}}"></textarea>
                        <br>


                        <button type="submit" id="submit_work" class="btn btn-success">Submit Report</button>
                        &nbsp;&nbsp;&nbsp;
                        @if ($errors->any()) 
                        <span><label class="error">{{$errors->first('submission')}}</label></span> 
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection





@section('footer')

<!--Page Level JS-->
<script src="{{asset('plugins/bootstrap-wysihtml5/js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('plugins/bootstrap-wysihtml5/js/bootstrap3-wysihtml5.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<script>

$(document).ready(function() {
    $('.textarea').wysihtml5();

});

</script>



@endsection
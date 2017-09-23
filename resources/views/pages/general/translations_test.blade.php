
@extends('_includes.dashboard.dashnav')

{{-- Page Header --}}
@section('pageheader')
Home
@endsection
{{-- End Page Header --}}

@section('header')
<!-- Editor-->
<link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5.css')}}">
<link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5-color.css')}}">
@endsection




{{--  Page Content --}}
@section('content')


<div class="pageheader">
    <h1>Translations Test</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Translations Test</li>
        </ol>
    </div>
</div>
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">bootstrap wysihtml5</h3>
                </div>
                <div class="panel-body">
                    <textarea class="textarea form-control" rows="10" cols="80" placeholder="Enter text ..." style="width: 100%; height: 200px"></textarea>
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

    CKEDITOR.replace('editor1');
});


</script>



@endsection
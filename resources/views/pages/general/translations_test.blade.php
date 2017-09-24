
@extends('_includes.dashboard.dashnav')

{{-- Page Header --}}
@section('pageheader')
Translations Test
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
    <h1>Translations Test</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Translations Test</li>
        </ol>
    </div>
</div>



{{-- TODO: modularize --}}

{{-- Test 1 Module --}}
@include('pages.general.translations_test.test1_module')





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
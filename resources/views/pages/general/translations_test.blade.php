
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
<section id="main-content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default animated fadeInUp">
                <div class="panel-heading">
                    <h3 class="panel-title">Instructions</h3>
                </div>
                <div class="panel-body">
                    <h2>@lang('translationstest.tt_1')</h2>
                    <br>
                    <ol>
                        <li>@lang('translationstest.tt_2')</li><br>
                        <li>@lang('translationstest.tt_3')</li><br>
                        <li>@lang('translationstest.tt_4')</li><br>
                        <li>@lang('translationstest.tt_5')</li><br>
                    </ol>
                    
                    <h2>@lang('translationstest.tt_6')</h2>
                    <br>
                    <ul>
                        <li>@lang('translationstest.tt_7')</li><br>
                        <li>@lang('translationstest.tt_8')</li><br>
                        <li>@lang('translationstest.tt_9')</li><br>
                    </ul>
                    <hr><br>
                    <h3>@lang('translationstest.tt_10')</h3><br>
                    {{-- Buttons to download test content --}}
                    <a href="{{ asset('downloads/translations_test/TestMaterial.pdf') }}" style="color: white;" download="" class="btn btn-success">@lang('translationstest.dl_1')</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ asset('downloads/translations_test/SampleTranslation.pdf') }}" style="color: white;" download="" class="btn btn-success">@lang('translationstest.dl_2')</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default animated fadeInUp">
                <div class="panel-heading">
                    <h3 class="panel-title">Submission Attempt</h3>
                </div>
                <div class="panel-body">
                    <textarea class="textarea form-control" rows="10" cols="80" placeholder="Enter text ..." style="width: 100%; height: 506px"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success">Submit Work</button>
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
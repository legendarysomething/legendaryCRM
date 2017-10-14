
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


<section id="main-content" class="max-1500">
    {{-- Display Based on Stage & Progress --}}
    @if($test_status->status == 1)
    	@include('pages.translations_test.translations_test_submitted')
    @else
    	@include('pages.translations_test.translations_test_'.$test_status->test_stage)
    @endif
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


    // Manage submissions Alert Box
    $('#submit_work').click(function(e){
        swal({
            title: 'Submission Confirmation',
            text: "Make sure you double check your work, you only have one submission attempt",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2ECBC3',
            cancelButtonColor: '#E25E5E',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            buttonsStyling: true
        }).then(function () {
            document.getElementById('test_submission_form').submit();
        });
    });

});

</script>


@endsection

@extends('_includes.dashboard.dashnav')

{{-- Page Header --}}
@section('pageheader')
Applicant Info
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
    <h1>Applicant Info</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Admin</li>
            <li class="active">Manage Applicant</li>
            <li class="active">Applicant Info</li>
        </ol>
    </div>
</div>


<section id="main-content" class="max-1500 animated fadeInUp">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Submissions</h3>
                </div>
                <div class="panel-body">
                    @if($submissions->first())
                        <div class="tab-wrapper tab-primary">
                            <ul class="nav nav-tabs">
                                @foreach($submissions as $key => $submission)
                                    @if($key == 0)
                                        <li class="active"><a href="#tab_{{$key}}" data-toggle="tab">Test {{$submission->test_num}}</a></li>
                                    @else
                                        <li><a href="#tab_{{$key}}" data-toggle="tab">Test {{$submission->test_num}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($submissions as $key=> $submission)
                                    @if($key == 0)
                                        <div class="tab-pane active" id="tab_{{$key}}">
                                            {!!$submission->body!!}
                                        </div>
                                    @else
                                        <div class="tab-pane" id="tab_{{$key}}">
                                            {!!$submission->body!!}
                                        </div>
                                    @endif

                                @endforeach
                            </div>
                        </div>
                    @else
                        <h3>No submissions found for {{$user->username}}</h3>
                    @endif
                </div>
            </div>

            

        </div>
        <div class="col-lg-6">
            {{--<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Applicant Management</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal form-border">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Status
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control">
                                    <option value="">Default select</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-center btn btn-success">
                                <span class="fa fa-pencil"></span>&nbsp;&nbsp;
                                Update Applicant Status
                            </div>
                        </div>

                    </form>
                </div>
            </div> --}}
                
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Applicant Info / Management</h3>
                </div>
                <div class="panel-body">
                    <div class="profile-info text-center">
                        <address>
                            <span class="pull-left"><strong>Full Name</strong></span>
                            <span class="pull-right">{{ucwords($user->name)}}</span>
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
                            <span class="pull-left"><strong>Last Updated</strong></span>
                            <span class="pull-right">{{$status->updated_at->toFormattedDateString()}}</span>
                        <br><hr>
                        </address>

                        <form class="form-horizontal form-border">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Status
                                </label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option value="">Pending Grading</option>
                                        <option value="">Pass Test 1</option>
                                        <option value="">Fail Test 1</option>
                                        <option value="">Pass Test 2</option>
                                        <option value="">Fail Test 2</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <div class="text-center btn btn-success" id="update_applicant_status">
                                    <span class="fa fa-pencil"></span>&nbsp;&nbsp;
                                    Update Applicant Status
                                </div>

                                <div class="text-center btn btn-danger" id="reset_applicant_status">
                                    <span class="fa fa-undo"></span>&nbsp;&nbsp;
                                    Reset Applicant Test
                                </div>
                            </div>

                        </form>

                        
                        {{-- <div class="connect">
                            <button type="button" onclick="javascript:window.location.href='{{route('admin.manage').'/'.$user->id}}'" class="btn btn-success"><span class="fa fa-user"></span> Manage User</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        
        {{-- Comments Section --}}
        @include('pages.comments.comments')

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


    // Manage submissions Alert Box
    $('#update_applicant_status').click(function(e){
        swal({
            title: 'Status Change Confirmation',
            text: 'Are you sure you want to change the status of this applicant?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#2ECBC3',
            cancelButtonColor: '#E25E5E',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            buttonsStyling: true
        }).then(function () {
            // document.getElementById('test_submission_form').submit();
        });
    });


     $('#reset_applicant_status').click(function(e){
        swal({
            title: 'Reset Applicant Test',
            text: 'Are you sure you want to reset this applicants status? All current submissions will be removed',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2ECBC3',
            cancelButtonColor: '#E25E5E',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            buttonsStyling: true
        }).then(function () {
            // document.getElementById('test_submission_form').submit();
        });
    });

});

</script>


@endsection
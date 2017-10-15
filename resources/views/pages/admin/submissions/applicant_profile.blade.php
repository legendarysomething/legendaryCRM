
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
    <div class="col-md-6">
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
                                    <li class="active"><a href="#{{$key}}" data-toggle="tab">Test {{$submission->test_num}}</a></li>
                                @else
                                    <li><a href="#{{$key}}" data-toggle="tab">Test {{$submission->test_num}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($submissions as $key=> $submission)
                                @if($key == 0)
                                    <div class="tab-pane active" id="{{$key}}">
                                        {!!$submission->body!!}
                                    </div>
                                @else
                                    <div class="tab-pane" id="{{$key}}">
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
    <div class="col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Applicant Info</h3>
            </div>
            <div class="panel-body">
                <div class="profile-info text-center">
                    <address>
                        <span class="pull-left"><strong>Full Name</strong></span>
                        <span class="pull-right">{{$user->name}}</span>
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
                        <span class="pull-left"><strong>Member Since</strong></span>
                        <span class="pull-right">{{$user->created_at->toFormattedDateString()}}</span>
                    <br><hr>
                    </address>
                    <address>
                        <span class="pull-left"><strong>Last Updated</strong></span>
                        <span class="pull-right">{{$status->updated_at->toFormattedDateString()}}</span>
                    <br><hr>
                    </address>

                    
                    <div class="connect">
                        <button type="button" onclick="javascript:window.location.href='{{route('admin.manage').'/'.$user->id}}'" class="btn btn-success btn-trans"><span class="fa fa-user"></span> Manage User</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Applicant Management</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6 align-bottom">
                        <span><h4>Single button dropdowns</h4></span>
                    </div>
                    
                    <div class="col-sm-6 text-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                
                

            </div>
        </div>
            
       

        <section class="panel timeline-post-to">
            <div class="panel-body">
                <form role="form">
                    <h3>Comments</h3>
                    <br>
                    <textarea class="form-control" placeholder="Add a comment"></textarea>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <span class="btn btn-success">Post</span>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="panel  timeline-post">
            <div class="panel-body">
                <ul>
                    <li>
                        <div class="date">
                            <span>23</span>
                            <span class="small">Feb</span>
                        </div>
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>
                            Tortor metus suscipit lectus lacinia mi. Duis quis ullamcorper, felis consequat ut felis sit, pellentesque sit nunc, porttitor a, neque enim metus sed dictum scelerisque. Ante ornare, ante nunc ac, et feugiat justo urna, pharetra velit convallis, sit magna odio in nunc sit.
                        </p>
                    </li>
                    <li>
                        <div class="date">
                            <span>12</span>
                            <span class="small">Jan</span>
                        </div>
                        <h4>Lorem ipsum dolor!</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>

                    </li>
                </ul>
            </div>
        </section>




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
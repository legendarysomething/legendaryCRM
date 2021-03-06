
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Submissions
@endsection


@section('header')
<!-- iCheck-->
<link rel="stylesheet" href="{{asset('plugins/icheck/css/all.css')}}">
@endsection



@section('content')

<div class="pageheader">
    <h1>Manage Submissions</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Admin</li>
            <li class="active">Manage Submissions</li>
        </ol>
    </div>
</div>

<section id="main-content" class="animated fadeInUp">
    <!--mail wrapper start-->
    <div class="row">
        <div class="col-lg-3 col-sm-12" id="compose-wrapper">
            <div class="panel">
                <aside class="panel-body">
                    {{-- <button class="btn btn-default btn-block">Manage Labels</button> --}}
                    <span><h3>Filters</h3></span>
                    <ul class="nav nav-pills nav-stacked compose-nav">
                        <li>
                            <a href="#"> <i class="fa fa-bookmark warning-color"></i>&nbsp;&nbsp; 
                                All Pending Applicants
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-bookmark primary-color"></i>&nbsp;&nbsp; 
                                Under Consideration
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-bookmark success-color"></i>&nbsp;&nbsp; 
                                Passed
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-bookmark danger-color"></i>&nbsp;&nbsp; 
                                Failed
                            </a>
                        </li>
                        
                        
                        
                    </ul>
                </aside>
            </div>

            
        </div>
        <div class="col-lg-9 col-sm-12" id="inbox-wrapper">

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Applicants</h3>
                        
                    </div>
                    <div class="panel-body table-responsive">
                        <table id="manage-submissions" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Submitter</th>
                                    <th>Test Stage</th>
                                    <th>Test Status</th>
                                    <th>Comments</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->test_status->test_stage}}</td>
                                    <td>Pending Grade</td>
                                    <td>{{count($user->comments)}}</td>
                                    <td><a href="{{route('admin.test_submissions').'/'. $user->id}}" class="btn btn-success btn-block" style="color: #fff;">Manage</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

        </div>
        
    </div>
    </div>
    <!--mail wrapper end-->
</section>







@endsection






@section('footer')
<!--Page Leve JS -->
<script src="{{asset('plugins/dataTables/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/dataTables/js/dataTables.bootstrap.js')}}"></script>
<script>
$(document).ready(function() {
    $('#manage-submissions').dataTable();
});

</script>

@endsection
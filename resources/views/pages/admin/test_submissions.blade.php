
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
        <div class="col-md-3 col-sm-12" id="compose-wrapper">
            <div class="panel">
                <aside class="panel-body">
                    {{-- <button class="btn btn-default btn-block">Manage Labels</button> --}}
                    <span><h3>Filters</h3></span>
                    <ul class="nav nav-pills nav-stacked compose-nav">
                        <li>
                            <a href="#"> <i class="fa fa-bookmark warning-color"></i>&nbsp;&nbsp; 
                                Test 1 Pending
                                <span class="label label-warning label-circle pull-right inbox-notification">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-bookmark primary-color"></i>&nbsp;&nbsp; 
                                Test 2 Pending
                                <span class="label label-primary label-circle pull-right inbox-notification">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-bookmark danger-color"></i>&nbsp;&nbsp; 
                                Failed
                                <span class="label label-danger label-circle pull-right inbox-notification">3</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#"> <i class="fa fa-bookmark success-color"></i>&nbsp;&nbsp; 
                                Passed
                                <span class="label label-success label-circle pull-right inbox-notification">2</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </aside>
            </div>

            
        </div>
        <div class="col-md-9 col-sm-12" id="inbox-wrapper">

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Test 1</h3>
                        
                    </div>
                    <div class="panel-body table-responsive">
                        <table id="manage-submissions" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Submiter</th>
                                    <th>Test</th>
                                    <th>Test Status</th>
                                    <th>Comments</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sam@hotmail.com</td>
                                    <td>1</td>
                                    <td>Pending Grade</td>
                                    <td>1 &nbsp;&nbsp;&nbsp;<span class="label label-danger">New!</span></td>
                                    <td><span class="btn btn-success btn-block">View</span></td>
                                </tr>
                                <tr>
                                    <td>larry@gmail.com</td>
                                    <td>1</td>
                                    <td>Pending Grade</td>
                                    <td>3</td>
                                    <td><span class="btn btn-success btn-block">View</span></td>
                                </tr>
                                <tr>
                                    <td>barry@killme.com</td>
                                    <td>1</td>
                                    <td>Pending Grade</td>
                                    <td>4 &nbsp;&nbsp;&nbsp;<span class="label label-danger">New!</span></td>
                                    <td><span class="btn btn-success btn-block">View</span></td>
                                </tr>

                                
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
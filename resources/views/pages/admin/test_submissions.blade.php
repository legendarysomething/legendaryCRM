
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Submissions
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
<section id="main-content ">
<br>
<div class="container-fluid">
    <div class="row">
        



    </div>
</div>










</section>


@endsection





@section('footer')
<!--Page Leve JS -->
<script src="{{asset('plugins/dataTables/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/dataTables/js/dataTables.bootstrap.js')}}"></script>
<script>
$(document).ready(function() {
    // $('#user-management').dataTable();
});

</script>

@endsection
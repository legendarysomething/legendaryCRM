
@extends('_includes.dashboard.dashnav')


{{-- Page Header --}}
@section('pageheader')
Manage Users
@endsection




@section('content')

<div class="pageheader">
    <h1>Manage Users</h1>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Admin</li>
            <li class="active">Manage Users</li>
        </ol>
    </div>
</div>
<section id="main-content ">
    <br>
    <div class="col-md-12">
        <div class="panel panel-default animated fadeInUp">
            <div class="panel-heading">
                <h3 class="panel-title">Active Members</h3>
            </div>
            <div class="panel-body table-responsive">
                <table id="user-management" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Email</th>
                            <th>Role(s)</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        <?php $out = array() ?>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                            @foreach($user->roles as $role)
                                <?php array_push($out, ucfirst($role->name)); ?>
                            @endforeach
                                {{implode(', ', $out)}}
                            </td>
                            <td>
                                <a href="{{route('admin.manage').'/'.$user->id}}" class="btn btn-success" style="color: #fff;">Edit User</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
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
    $('#user-management').dataTable();
});

</script>

@endsection
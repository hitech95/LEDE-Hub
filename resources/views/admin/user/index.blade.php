@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <h1>Users</h1>
    <p class="lead">In this page you can browse and modify the users</p>

    <hr>
    <p>Add a new user: <a href="{{ url('admin/users/create') }}" class="btn btn-success">Add</a></p>
    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-inverse">
            <tr>
                <td class="col-md-2 pull-md-none">Nickname</td>
                <td class="col-md-4 pull-md-none">Email</td>
                <td class="col-md-4 pull-md-none">Permission</td>
                <td class="col-md-2 pull-md-none">Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->nickname }}</td>
                    <td>{{ $user->email }}</td>
                    <td></td>
                    <td>
                        {!! Form::open(['url' => 'admin/users/' . $user->id, 'method' => 'DELETE', 'class' => 'form-inline form-delete']) !!}
                        <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" class="btn btn-warning">Edit</a>
                        {!! Form::submit('Remove', ['class' => 'btn btn-danger form-control']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade modal-delete-dialog" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Delete</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Delete the item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger btn-delete">Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
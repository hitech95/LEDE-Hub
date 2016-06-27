@extends('layouts.admin')

@section('title', 'Staff')

@section('content')
    <h1>Staff</h1>
    <p class="lead">In this page you can browse and modify all the staff</p>

    <hr>
    <p>Add a new staff member: <a href="{{ url('admin/staff/create') }}" class="btn btn-success">Add</a></p>
    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-inverse">
            <tr>
                <td class="col-md-3 pull-md-none">Nickname</td>
                <td class="col-md-7 pull-md-none">Full Name</td>
                <td class="col-md-2 pull-md-none">Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($staff as $member)
                <tr>
                    <td>{{ $member->nickname }}</td>
                    <td>{{ $member->full_name }}</td>
                    <td>
                        {!! Form::open(['url' => 'admin/staff/' . $member->id, 'method' => 'DELETE', 'class' => 'form-inline form-delete']) !!}
                        <a href="{{ url('/admin/staff/' . $member->id . '/edit') }}" class="btn btn-warning">Edit</a>
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
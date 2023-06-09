@extends('admin.layouts.master')

@section('page')
    Users Details
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">User Detail</h4>
                </div>
                <div class="content table-responsive table-full-width">
				{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <th>Emil</th>
                            <td>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <th>Sttus</th>
                            <td>{{ $user->status }}</td>
                        </tr>

                        <tr>
                            <th>Registered At</th>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>

                        <tr>
                            <th>Photo</th>
                            <td><img src="{{ URL::to('/') }}/photos/{{ $user->email }}.png" alt="" class="img-thumbnail" style="width: 150px;"></td>
                        </tr>


                        <tr>
                            <th>&nbsp;</th>
							<td>
@if ($user->status == 'Active')
        <button type="submit" class="btn btn-primary">Inactivate this user</button>
@endif
@if ($user->status == 'Inactive')
        <button type="submit" class="btn btn-primary">Activate this user</button>
@endif

                            </td>
                        </tr>


                        </tbody>

                    </table>
{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
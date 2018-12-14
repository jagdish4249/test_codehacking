@extends('layouts.admin')

@section('content')
<h1>Users</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>role</th>
          <th>status</th>
          <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($users)

          @foreach($users as $user)
              <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role->name}}</td>

                  <td>
                      {{($user->is_active==1)?'active':'inactive'}}
                  </td>
                  <td>{{$user->created_at->diffForHumans()}}</td>
                  <td>{{$user->updated_at->diffForHumans()}}</td>
              </tr>
              @endforeach
          @endif
    </tbody>
</table>

    @stop



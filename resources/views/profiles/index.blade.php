@extends('layouts.app')

@section('content')

    <a href="/profiles/create" class="btn btn-success">Add User</a>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Home Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{$profile->last_name}} {{$profile->first_name}} {{$profile->middle_name}}</td>
                <td>{{$profile->contact}}</td>
                <td>{{$profile->gender}}</td>
                <td>{{$profile->birthday}}</td>
                <td>{{$profile->home_address}}</td>
                <td>
                    <a href="{{route('profiles.edit', $profile->id)}}" class="btn btn-warning">Edit</a>
                    <form method="post" action="/profiles/{{$profile->id}}" style="display: inline;" >
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@yield('footer')
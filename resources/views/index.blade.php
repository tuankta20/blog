@extends('layout')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        @foreach($blogs as $blog)
            <tbody>
            <tr>
                <th scope="row">{{$blog->id}}</th>
                <td>{{$blog->name}}</td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection

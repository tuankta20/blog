@extends('layout')

@section('content')
    <form action="{{route('blog.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

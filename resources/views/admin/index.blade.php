@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Admin page</h2>
                </div>
            </div>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"><a href="{{route('create')}}"><button type="button" class="btn btn-primary">New Course</button></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td scope="row">{{$course->id}}</td>
                    <td><h3>{{$course->name}}</h3></td>
                    <td>
                    <a href="{{route('show', $course->id)}}">Show</a>
                    <a href="{{route('destroy', $course->id)}}">delete</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
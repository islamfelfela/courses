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
                    <div class="row">
                    <div class="col-md-6"><h2>Courses</h2></div>
                    <div class="col-md-6"><h2><a href="">My Courses</a></h2></div>
                    </div>  
                </div>
            </div>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td scope="row">{{$course->id}}</td>
                    <td><h3>{{$course->name}}</h3></td>
                    <td>
                    <form action="{{route('courses.enroll', $course->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('POST')
                        @if (Auth::user()->isAdmin)
                        @else
                        <button type="submit" class="btn btn-success">Enroll</button>
                        @endif
                    </form>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
            </table>

            </div>
        </div>
    </div>
</div>
@endsection

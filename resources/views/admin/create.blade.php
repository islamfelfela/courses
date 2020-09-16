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

                    <h2>Create New Course</h2>
                </div>
            </div>

            <form action="{{route('store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enere Course Name">
            </div>
            <button type="Create" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
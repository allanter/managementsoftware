@extends('layouts.app')

<!-- removed the html tags and etc after adding layouts and app.blade.
    Now able to work w/o html tags for shorter cleaner codes -->

@section('content')
        <div class="jumbotron text-center">
        <h1>Welcome to the Class Management Software</h1>
        <p>This is an application for a school to manage its classes, teachers and students.</p>
    </div>

            <form>
                 <div class="form-group col-md-6 mb-3 ">
                 <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">E.g. @moe.edu.sg</small>
                </div>

            <div class="form-group col-md-6 mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"  placeholder="Password">
                </div>

                <a class="btn btn-primary float-center" href="/login" role="button">Login</a>
                <a class="btn btn-success float-center" href="/registration" role="button">Register</a>
            </form>

@endsection
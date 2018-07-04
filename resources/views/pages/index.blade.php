@extends('layouts.app')

<!-- removed the html tags and etc after adding layouts and app.blade.
    Now able to work w/o html tags for shorter cleaner codes -->

@section('content')
        <div class="jumbotron text-center">
        <h1>Welcome to the Class Management Software</h1>
        <p>This is a basic application for a school to manage its classes, teachers and students.</p>
    </div>

        @if (isset(Auth::user()->email))

            <script>window.location="/login";</script>
        @endif

        @if ($message = Session::get('error'))

        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>

        <!-- setup conditional loop -->
        @if(count($errors) > 0)
        <!-- check for errors, if > 0 block access -->
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <!-- check login details from PagesController -->
            <form method="post" action="{{ url('/checklogin')}}">

                <!-- to handle multiple exceptions -->
                {{ csrf_field()}}
                
                <!-- if there are login errors, show them here -->
                @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                @endif

                <p>{{ $errors->first('email') }}</p>
                <p>{{ $errors->first('password') }}</p>

                <div class="form-group col-md-6 mb-3 ">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">E.g. @moe.edu.sg</small>
                </div>

                <div class="form-group col-md-6 mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"  placeholder="Password">
                </div>
                
                <a class="btn btn-primary float-center" href="/login" value="login" role="button">Login</a>
                <a class="btn btn-success float-center" href="/registration" role="button">Register</a>
            </form>
   
@endsection

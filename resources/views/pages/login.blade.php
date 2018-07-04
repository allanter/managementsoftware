@extends('layouts.app')

@section('content')
        <h1>You are now Logged In</h1>
        <p>Login page</p>

        @if(isset(Auth::user()->email))
        <!-- this condition will check this method login method-->

                <div class="alert alert-danger success-block">
                        <strong>Welcome {{ Auth::user()->email }}</strong>
                </div>


        @endif
@endsection
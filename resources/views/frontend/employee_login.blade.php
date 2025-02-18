@extends('layouts.auth')

@section('page_title', 'LOGIN')

@section('content')

    <section class="login">
        <div class="container">
            <div class="employee_section">
                <h2>Employee Login</h2>
                <form action="">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <a class="forgot_password" href="{{ route('forget_password') }}"><small>Forgot your password
                            ?</small></a>
                    <button>LOGIN</button>
                    <p>Don't have an account? <a href="{{ route('employee_registration') }}">Register Now</a></p>
                </form>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.auth')

@section('page_title', 'Registration')

@section('content')

    <section class="login">
        <div class="container">
            <div class="employee_section">
                <h2>Employee Registration</h2>
                <form action="">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button>Register</button>
                    <p>Already have an account? <a href="{{ route('employee_login') }}">Login</a></p>
                </form>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.auth')

@section('page_title', 'Registration')

@section('content')

    <section class="login">
        <div class="container">
            <div class="employer_section">
                <h2>Employer Registration</h2>
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
                    <p>Already have an account? <a href="{{ route('employer_login') }}">Login Now</a></p>
                </form>
            </div>

        </div>
    @endsection

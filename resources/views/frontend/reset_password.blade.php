@extends('layouts.auth')

@section('page_title', 'Reset Password')

@section('content')

    <section class="login">
        <div class="container">
            <div class="employee_section">
                <h2>Create New Password</h2>
                <form action="">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button>LOGIN</button>
                </form>
            </div>
        </div>
    </section>

@endsection

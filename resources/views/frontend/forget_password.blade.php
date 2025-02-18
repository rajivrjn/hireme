@extends('layouts.auth')

@section('page_title', 'Forget Password')

@section('content')

    <section class="login">
        <div class="container">
            <div class="employer_section">
                <h2>Forget Password, No worry. Enter your email and reset your password.</h2>
                <form action="">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <button>Reset</button>
                </form>
            </div>
        </div>
    </section>

@endsection

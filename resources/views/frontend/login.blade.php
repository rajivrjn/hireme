@extends('layouts.auth')

@section('page_title', 'LOGIN')

@section('content')

    <section class="login">
        <div class="container">
            <div class="employee_section_form">
                <a href="{{ route('employee_login') }}">Employee</a>
            </div>
            <div class="employer_section_form">
                <a href="{{ route('employer_login') }}">Employer</a>
            </div>
        </div>
    </section>

@endsection

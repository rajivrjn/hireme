@extends('layouts.app')

@section('page_title', 'Companies')

@section('content')

    <section class="companies">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">Companies</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>Companies</span></p>
            </div>
            <div class="wrapper">
                <ul>
                    @for ($i = 0; $i <= 15; $i++)
                        <li>
                            <a href="{{ route('single_company', 'test') }}" class="card">
                                <div class="card_body">
                                    <img src="{{ Vite::asset('resources/images/company_logo.png') }}" alt="">
                                    <h3>Company Name</h3>
                                    <p><span>5 jobs</span></p>
                                </div>
                            </a>

                        </li>
                    @endfor

                </ul>
            </div>

        </div>
    </section>

@endsection

@extends('layouts.app')

@section('page_title', 'Job Categories')

@section('content')

    <section class="categories">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">Jobs Categories</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>Categories</span></p>
            </div>
            <div class="wrapper">
                <ul>
                    @for ($i = 0; $i <= 15; $i++)
                        <li>
                            <a href="">lorem</a>
                        </li>
                    @endfor

                </ul>
            </div>

        </div>
    </section>

@endsection

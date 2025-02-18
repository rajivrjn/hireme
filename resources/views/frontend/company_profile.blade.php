@extends('layouts.app')

@section('page_title', 'Company Name')

@section('content')

    <section class="company">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">Company Name</h2>
                <p><a href="{{ route('home') }}">Home</a> > <a href="">Companies</a> > <span>Company Name</span></p>
            </div>
            <div class="wrapper">
                <div class="card company_profile">
                    <div class="company_body">
                        <div class="company_logo">
                            <img src="{{ Vite::asset('resources/images/company_logo.png') }}" alt="">
                        </div>
                        <div class="company_description">
                            <h2>Company Name</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex delectus, reprehenderit
                                consectetur
                                incidunt excepturi ipsam. Minima error eveniet praesentium dolor esse. Ratione nemo ut
                                officia
                                qui totam dolorum, cupiditate, fuga voluptatem unde deleniti delectus ipsam enim accusamus
                                necessitatibus accusantium aut similique doloribus, eius sapiente sed facere itaque?
                                Consequatur, enim neque.</p>
                        </div>
                    </div>
                </div>
                <div class="company-jobs">
                    @for ($i = 0; $i <= 5; $i++)
                        @include('components/card-component')
                    @endfor

                </div>



            </div>

        </div>
    </section>

@endsection

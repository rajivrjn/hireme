@extends('layouts.app')

@section('page_title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
@endsection

@section('content')
    <section class="hero_section">
        <div class="container">
            <h1 class="hero_title">Helping you find your dream job.</h1>
            <h2>YOU APPLY - WE PLACE</h2>
            <form class="search_box">
                <div class="hero_form_container">
                    <div class="input_group">
                        <input type="text" name="keywords" id="keywords" placeholder="keywords like frontend developer">
                    </div>
                    <div class="select_group">
                        <select name="job_title" id="job_title" class="select">
                            <option value="">Select Job Title</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="select_group">
                        <select name="category" id="category" class="select">
                            <option value="">Select Sector</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="select_group">
                        <select name="qualification" id="qualification" class="select">
                            <option value="">Select Qualification Level</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="select_group">
                        <select name="region" id="region" class="select">
                            <option value="">Select City</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <button type="submit">Search</button>
                </div>
                <p class="job_availability">Total job available: <span id="result"></span></p>
            </form>
        </div>
    </section>
    <section class="featured_agency">
        <div class="container">
            <h1 class="section_title">Featured Agency</h1>
            <div class="swiper featured-swiper">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i <= 15; $i++)
                        <div class="swiper-slide">
                            <a href="{{ route('single_company', 'test') }}" class="card">
                                <div class="card_body">
                                    <img src="{{ Vite::asset('resources/images/company_logo.png') }}" alt="">
                                </div>

                            </a>
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="adverts">
        <div class="container">
            <div class="swiper adverts-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400?text=Ads+1+goes+here" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400?text=Ads+2+goes+here" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400?text=Ads+3+goes+here" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400?text=Ads+4+goes+here" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="recent_job">
        <div class="container">
            <h1 class="section_title">Recent Jobs</h1>
            <div class="swiper recent-swiper">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i <= 5; $i++)
                        <div class="swiper-slide">
                            @include('components/card-component')
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="advice">
        <div class="container">
            <h1 class="section_title">Career Guidance</h1>
            <div class="swiper advice-swiper">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i <= 5; $i++)
                        <div class="swiper-slide">
                            @include('components/blog-component')
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
    <script src=" {{ asset('/js/swiper.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".featured-swiper", {
            loop: true,
            spaceBetween: 40,
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 5,
                },
            },
        });
        var swiper = new Swiper(".recent-swiper, .advice-swiper", {
            loop: true,
            spaceBetween: 40,
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },

                1024: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                },
            },
        });
        var swiper = new Swiper(".adverts-swiper", {
            loop: true,
            spaceBetween: 40,
            slidesPerView: 1,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

@endsection

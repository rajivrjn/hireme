@extends('layouts.app')

@section('page_title', 'Career Advice')



@section('content')

    <section class="career_advice">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">Career Advice</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>Career Advice</span></p>
            </div>
            <div class="wrapper">
                <div class="list-info">
                    <p>Showing 1 of 10 items</p>
                    <form id="sorting_form" method="GET" action="">
                        <label for="sort">Sort</label>
                        <select class="select" name="sort" id="sort" onchange="this.form.submit()">
                            <option value="desc">Newest </option>
                            <option value="asc">Oldest </option>
                        </select>
                    </form>
                </div>

                <div class="main_container">
                    <a href="" class="card">
                        <div class="card_header">
                            <div class="card_image">
                                <img src="{{ Vite::asset('resources/images/blog.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <h2>How to apply for a job?</h2>
                        </div>
                        <div class="card_footer">
                            <p>Updated On: 01 Jan 2025</p>
                        </div>
                    </a>
                    <a href="" class="card">
                        <div class="card_header">
                            <div class="card_image">
                                <img src="{{ Vite::asset('resources/images/blog.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <h2>How to apply for a job?</h2>
                        </div>
                        <div class="card_footer">
                            <p>Updated On: 01 Jan 2025</p>
                        </div>
                    </a>
                    <a href="" class="card">
                        <div class="card_header">
                            <div class="card_image">
                                <img src="{{ Vite::asset('resources/images/blog.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <h2>How to apply for a job?</h2>
                        </div>
                        <div class="card_footer">
                            <p>Updated On: 01 Jan 2025</p>
                        </div>
                    </a>
                    <a href="" class="card">
                        <div class="card_header">
                            <div class="card_image">
                                <img src="{{ Vite::asset('resources/images/blog.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <h2>How to apply for a job?</h2>
                        </div>
                        <div class="card_footer">
                            <p>Updated On: 01 Jan 2025</p>
                        </div>
                    </a>
                </div>

                <div class="pagination">
                    {{-- @if ($paginator->hasPages()) --}}
                    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                        {{-- Previous Page Link --}}
                        {{-- @if ($paginator->onFirstPage()) --}}
                        {{-- <span class="btn cursor-not-allowed">{{ __('messages.prev') }}</span> --}}
                        {{-- @else --}}
                        <a href="" class="btn">Previous</a>
                        {{-- @endif --}}

                        {{-- Pagination Elements --}}
                        {{-- @foreach ($elements as $element) --}}
                        {{-- Array Of Links --}}
                        {{-- @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage()) --}}
                        <span class="btn btn-active">1</span>
                        {{-- @else --}}
                        <a href="" class="btn ">2</a>
                        {{-- @endif
                                    @endforeach
                                @endif
                            @endforeach --}}

                        {{-- Next Page Link --}}
                        {{-- @if ($paginator->hasMorePages()) --}}
                        <a href="" class="btn">Next</a>
                        {{-- @else --}}
                        {{-- <span class="btn cursor-not-allowed">{{ __('messages.next') }}</span> --}}
                        {{-- @endif --}}
                    </nav>
                    {{-- @endif --}}

                </div>
            </div>


        </div>
    </section>

@endsection

@extends('layouts.app')

@section('page_title', 'Jobs')



@section('content')

    <section class="grid_list">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">Jobs</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>Jobs</span></p>
            </div>
            <div class="wrapper">
                <div class="aside">
                    <h2>Filter</h2>
                    <button type="button" id="filter">Filter</button>
                    <form id="filter_form" action="">
                        <div class="input-group">
                            <label for="keywords">Keywords</label>
                            <input type="text" name="keywords" id="keywords">
                        </div>
                        <div class="select-group">
                            <label for="job_title">Job Title</label>
                            <select type="text" name="job_title" id="job_title" class="select">
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <label for="category">Sector</label>
                            <select type="text" name="category" id="category" class="select">
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <label for="qualification">Qualification</label>
                            <select type="text" name="qualification" id="qualification" class="select">
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <label for="region">City</label>
                            <select type="text" name="region" id="region" class="select">
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="main_container">
                    <div class="list-info">

                        <p>Showing 1 of 10 items</p>

                        <form id="sorting_form" method="GET" action="">
                            <label for="sort">Sort</label>
                            <select class="select" name="sort" id="sort" onchange="this.form.submit()">
                                <option value="desc">Newest </option>
                                <option value="asc">Oldest </option>
                                <option value="desc">Featured </option>
                            </select>
                        </form>
                    </div>
                    @for ($i = 0; $i <= 5; $i++)
                        <div class="swiper-slide">
                            @include('components/card-component')
                        </div>
                    @endfor
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


        </div>
    </section>

@endsection

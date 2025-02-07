@extends('layouts.app')

@section('page_title', 'FAQ')



@section('content')

    <section class="faq">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">FAQ</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>FAQ</span></p>
            </div>

            <div class="wrapper">
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
                <div class="collapsible">
                    <div class="question">
                        <h1>How can i add a job post</h1>
                        <div class="expanded">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="answer">
                        <p>Register, fill all your company details and choose the subscription page and start posting.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
@section('scripts')

    <script>
        $('.collapsible').click(function() {
            if ($(this).hasClass('open')) {
                $(this).removeClass('open');
            } else {
                if ($('.collapsible').hasClass('open')) {
                    $('.collapsible').removeClass('open')
                }
                $(this).addClass('open');
            }
        });
    </script>
@endsection

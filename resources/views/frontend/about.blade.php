@extends('layouts.app')

@section('page_title', 'About Us')



@section('content')

    <section class="about">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">About Us</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>About Us</span></p>
            </div>

            <div class="wrapper">
                <div class="summary">
                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo">
                    </div>
                    <h2 class="sub_title">Who we are?</h2>
                    <p>Hireme.mu is under an inclusive ownership of TARGETPLUS LTD. It began out of the desire to contribute
                        to this community of unemployment in Mauritius. </p>

                    <p>Our main vision is to locate the right person for
                        the right job and helping towards decreasing the unemployment rate in Mauritius. Hireme.mu targets
                        specifically skilled workers with clients, saving businesses time and money, while providing for its
                        employees with honesty and honor.</p>

                    <p>This requires a high level of communication. It means asking
                        open-ended questions and listening, not talking. This means knowing the local markets so Hireme.mu
                        can really serve each client and employee, not just "sell" them our Service Hireme.mu will be a
                        qualitative service to both businesses and individuals of Mauritius.</p>
                </div>
                <div class="vision">
                    <h2 class="sub_title">Vision</h2>
                    <p>The long-term vision includes a number of offices throughout the country and other neighboring
                        countries
                        such as Rodrigues, Reunion Island, and other African countries. The proprietor sees the challenge in
                        this vision, not in the growth itself, but in training and encouraging all Hireme.mu personnel to
                        treat
                        each client and employee with the same care and with the same level of communication and commitment.
                    </p>
                    <p>Our
                        vision is to become the leading recruitment company in the African Region.</p>
                </div>
                <div class="mission">
                    <h2 class="sub_title">Mission</h2>
                    <p>Hireme.mu mission is to contribute to the community by filling a need for specialized, professionals,
                        contingent workers. The company will provide workers with a safe and independent environment. It
                        will also provide businesses with a high-caliber of employee available for project or permanent
                        work. Hireme.mu listens to individual needs and customizes personnel solutions for both businesses
                        and Job Seekers</p>
                    <br>
                    <h2 class="sub_title">HIREME.MU for each customer: </h2>
                    <ul>
                        <li>Recruiting (reference checking) </li>
                        <li>Skills evaluation (preliminary interviewing) </li>
                        <li>Screening</li>
                        <li>Appraisals</li>
                        <li>Follow up leads Innovate with time</li>
                        <li>Practical approach to demands and supply on the job market</li>
                        <li>Prioritise candidates and employers</li>
                        <li>Showing integrity, trust in our work</li>
                        <li>Improve the life of Jobseekers and Businesses</li>
                    </ul>

                    <p>Hireme.mu acts as YOUR virtual Human Resource Department assuring that there is open communication
                        between the employer and employee, and assisting with any troubleshooting or problem solving that
                        may be needed.</p>
                    <p>Through connections in a variety of areas, Hireme.mu is able to locate qualified workers not only
                        through advertising, but through a channel of networking agencies. This past year has shown that
                        qualified, willing workers are certainly available as we currently have qualified people willing and
                        able to work.</p>
                </div>

                <div class="customer_need">
                    <h2 class="sub_title">Customer need/problem</h2>
                    <p> Employment of Mauritians is estimated at 528,200 at the first quarter of 2016 compared to 529,100 at
                        the first quarter of 2015 and 545,600 at the fourth quarter of 2015. The number of unemployed
                        persons stood at 43,500 at the first quarter 2016 compared to 50,300 at the first quarter of 2015
                        and 46,600 at the fourth quarter of 2015. Unemployment rate for the year 2016 is projected at 7.7%.
                        Mauritius is a developing country and its literacy rate is decreasing at an increasing rate.
                        Therefore, with major development in the country including foreign direct investments from big
                        economies such as France, India, UK, Germany, China, it is likely that the country will demand more
                        and more human resources. Moreover, the impact of having a increase in the literacy rate relates to
                        more and more people trying to find a job at an increasing rate. On the other hand, companies due to
                        fast moving economy, have to time to locate and recruit the right candidate for their company. </p>
                    <p>This is where Hireme.mu comes into action by giving them the right candidate for the right job and
                        minimizing the company expenditures in the recruitment process or in losing time and money if they
                        recruited the wrong candidate by themselves.</p>
                    <p>Business clients will benefit the tailor-made advertising and recruitment done for them according to
                        their specifications and requirements. This will help them in saving a lot of money and time in the
                        recruitment process. They can either choose the candidates for the portal access given to them of
                        can refer the process to the company.</p>
                    <p>Job Seekers will be able to register themselves on the Hireme.mu job portal as job seekers and locate
                        all advertised jobs through the company. The website will be tailor made as it will let the
                        candidate be able to choose his own field of work which will make his job search easier.</p>
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

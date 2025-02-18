@extends('layouts.app')

@section('page_title', 'Freelance web developer')

@section('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
@endsection

@section('content')

    <section class="single_job">
        <div class="container">
            <div class="breadcrumb">
                <p><a href="{{ route('home') }}">Home</a> > <a href="">Category</a> > <span>Job Name</span></p>
                <div class="job_title">
                    <h2 class="page_title">Freelance Web Developer </h2>
                    <small>By <a href=''>Company Name</a></small>
                </div>

            </div>
            <div class="wrapper">
                <div class="main-information">
                    <div class="block_card">
                        <h2 class="block_title">Overview</h2>
                        <div class="grid">
                            <div class="single_item">
                                <div class="icon">
                                    <span class="material-symbols-outlined">
                                        calendar_month
                                    </span>
                                </div>
                                <div class="info">
                                    <p>Date Created:</p>
                                    <span>01 Feb 2025</span>
                                </div>
                            </div>
                            <div class="single_item">
                                <div class="icon">
                                    <span class="material-symbols-outlined">
                                        calendar_month
                                    </span>
                                </div>
                                <div class="info">
                                    <p>Date Expired:</p>
                                    <span>01 Feb 2025</span>
                                </div>
                            </div>
                            <div class="single_item">
                                <div class="icon">
                                    <span class="material-symbols-outlined">
                                        distance
                                    </span>
                                </div>
                                <div class="info">
                                    <p>Location:</p>
                                    <span>Grand Bay</span>
                                </div>
                            </div>
                            <div class="single_item">
                                <div class="icon">
                                    <span class="material-symbols-outlined">
                                        group_add
                                    </span>
                                </div>
                                <div class="info">
                                    <p>Experiences Level:</p>
                                    <span>Entry Level</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block_card description">
                        <h2 class="block_title">Description</h2>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quam atque sit, alias laudantium
                            in cum sint, debitis praesentium enim doloribus? Explicabo, eligendi minus. Eaque voluptates
                            soluta doloremque consequatur distinctio aliquid, nihil incidunt veniam nemo esse? In, fuga
                            molestias eos tenetur nam esse sint. Ab odio sunt ipsa minima modi at alias dolore? Veniam sed
                            molestias non aut quidem repudiandae omnis? Ut architecto neque itaque iusto! Pariatur aperiam
                            facere, fugiat quisquam dolorem eaque assumenda quod dolores possimus est perspiciatis nostrum
                            culpa tenetur fugit rem et tempora inventore minima ea! Dignissimos voluptate fuga quia
                            reprehenderit architecto ab, provident molestiae in possimus!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quam atque sit, alias laudantium
                            in cum sint, debitis praesentium enim doloribus? Explicabo, eligendi minus. Eaque voluptates
                            soluta doloremque consequatur distinctio aliquid, nihil incidunt veniam nemo esse? In, fuga
                            molestias eos tenetur nam esse sint. Ab odio sunt ipsa minima modi at alias dolore? Veniam sed
                            molestias non aut quidem repudiandae omnis? Ut architecto neque itaque iusto! Pariatur aperiam
                            facere, fugiat quisquam dolorem eaque assumenda quod dolores possimus est perspiciatis nostrum
                            culpa tenetur fugit rem et tempora inventore minima ea! Dignissimos voluptate fuga quia
                            reprehenderit architecto ab, provident molestiae in possimus!</p>

                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis velit amet doloremque
                                delectus facilis natus aliquam dolores, aut commodi minus! Tempore sed voluptatibus ducimus
                                blanditiis expedita ratione ab unde maiores?</li>
                            <li>Cupiditate aperiam eum dignissimos quo distinctio voluptatum explicabo minus ducimus ipsa
                                architecto. Praesentium libero fugit voluptatibus ipsa earum veritatis perspiciatis sunt
                                modi doloribus repudiandae, sapiente culpa nesciunt, eaque, pariatur in!</li>
                            <li>Provident doloremque ullam laboriosam modi quibusdam molestiae? Ducimus corrupti at
                                accusantium ab ut amet? Similique sapiente officia nisi facilis culpa consequatur iure
                                tempora iste veritatis, suscipit, reprehenderit animi itaque minus?</li>
                            <li>Minima hic dicta laborum incidunt consequatur illo magni quis, dignissimos, iure aliquid
                                praesentium harum pariatur autem qui nobis, veniam officia reiciendis. Sapiente ex soluta
                                aspernatur beatae laudantium atque ipsa fugiat.</li>
                            <li>Iste molestiae rerum placeat tempora enim aperiam sapiente numquam iure. Distinctio, debitis
                                ab! Reiciendis itaque praesentium ad, ipsam vel aliquid exercitationem, natus quas
                                repudiandae qui debitis distinctio minus minima officia?</li>
                        </ul>
                    </div>
                </div>
                <div class="company_info">
                    <div class="block_card">
                        <span class="material-symbols-outlined">
                            thumb_up
                        </span>
                        <h2 class="apply">Interested in this job</h2>
                        <button class="btn_link">Apply Now</button>
                    </div>
                    <div class="block_card">
                        <div class="company_image">
                            <img src="{{ Vite::asset('resources/images/company_logo.png') }}" alt="">
                        </div>
                        <h2>Company Name</h2>
                        <p><span id="total_job">24</span> jobs</p>

                        <a href="" class="btn_link">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

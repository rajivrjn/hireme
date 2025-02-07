@extends('layouts.app')

@section('page_title', 'Contact')



@section('content')

    <section class="contact">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="page_title">Contact</h2>
                <p><a href="{{ route('home') }}">Home</a> > <span>Contact</span></p>
            </div>

            <div class="wrapper">
                <div class="contact-information">
                    <h2>Let's get in touch</h2>
                    <div class="contact-information-wrapper">
                        <ul>
                            <li>
                                <p><span class="label">Address:</span> Royal Road, Fond du sac</p>
                            </li>
                            <li>
                                <p><span class="label">Phone:</span> 57614047</p>
                            </li>
                            <li>
                                <p><span class="label">Email:</span> Hello@rajivrjn.com</p>
                            </li>
                            <li>
                                <p><span class="label">Hours:</span> 08hrs - 17hrs </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="" id="contact_form">
                    <div class="input-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="input-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="8"></textarea>
                    </div>
                    <button>Send</button>

                </form>
            </div>

        </div>
    </section>

@endsection

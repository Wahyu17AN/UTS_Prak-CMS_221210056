@extends('layouts.public.app')

@section('content')
<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            @if ($title_contact)
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                    <i class="{{ $title_contact->title_logo}}"></i>
                </div>
                <h1 class="fw-bolder">{{ $title_contact->title_1}}</h1>
                <p class="lead fw-normal text-muted mb-0">{{ $title_contact->title_2}}</p>
            </div>
            @else
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">Message</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            @endif
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    @if(session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: '{{ session("success") }}',
                                    timer: 3000,
                                    showConfirmButton: false
                                });
                            });
                        </script>
                    @endif

                    @if(session('error'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: '{{ session("error") }}',
                                    timer: 3000,
                                    showConfirmButton: false
                                });
                            });
                        </script>
                    @endif

                    <!-- Contact Form -->
                    @if ($title_contact)
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">{{ $title_contact->title_3}}</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">{{ $title_contact->title_4}}</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone_number" name="phone_number" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone_number">{{ $title_contact->title_5}}</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="guest_message" name="guest_message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="guest_message">{{ $title_contact->title_6}}</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">{{ $title_contact->title_7}}</button>
                        </div>
                    </form>
                    @else
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone_number" name="phone_number" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone_number">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="guest_message" name="guest_message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="guest_message">Message</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

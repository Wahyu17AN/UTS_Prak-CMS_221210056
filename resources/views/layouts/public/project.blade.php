@extends('layouts.public.app')

@section('content')

            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        @if($content)
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $content->title_1 }}</span></h1>
                        @else
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                        @endif
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            @foreach ($projects as $pj)
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">{{ $pj->title_project}}</h2>
                                            <p>{{ $pj->project_description }}</p>
                                        </div>
                                        <img class="img-fluid" src="/images/project/{{ $pj->image }}" alt="..." />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        @if($content)
                        <h2 class="display-4 fw-bolder mb-4">{{ $content->title_2 }}</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route ('contact_public') }}">{{$content->title_3 }}</a>
                        @else
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route ('contact_public') }}">Contact me</a>
                        @endif

                    </div>
                </div>
            </section>

        @endsection

@extends('layouts.public.app')

@section('content')
   <!-- Page Content-->
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            @if(!is_null($content))
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $content->title_1 }}</span></h1>
            @else
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Profile</span></h1>
            @endif
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    @if(!is_null($content))
                    <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">{{ $content->title_2 }}</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary px-4 py-3" href="/document/{{ $content->file_Document}}">
                            <div class="d-inline-block {{ $content->title_logo }} me-2"></div>
                            {{ $content->title_6 }}
                        </a>
                    </div>
                    @else
                    <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary px-4 py-3" href="#!">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Profile
                        </a>
                    </div>
                    @endif
                    <!-- Loop through experiences -->
                        @foreach($experiences as $experience)
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-4">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">{{ $experience->starting_year }} - {{ $experience->year_ends }}</div>
                                                <div class="small fw-bolder">{{ $experience->field }}</div>
                                                <div class="small text-muted">{{ $experience->company }}</div>
                                                <div class="small text-muted">{{ $experience->address }}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>{{ $experience->description }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                <!-- Loop through Education Section-->
                <section>
                    @if(!is_null($content))
                        <h2 class="text-secondary fw-bolder mb-4">{{ $content->title_3 }}</h2>
                    @else
                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    @endif

                    <!-- Education Card 1-->
                    @foreach($education as $education)
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">{{ $education->starting_year }} - {{ $education->year_ends }}</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">{{ $education->school }}</div>
                                            <div class="small text-muted">{{ $education->location }}</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">{{ $education->graduation_status }}</div>
                                        </div>
                                        <div class="small text-muted">{{ $education->major }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>{{ $education->description}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>

                <!-- Divider-->
                <div class="pb-5"></div>

                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    @if(!is_null($content))
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">{{ $content->title_4 }}</span></h3>
                                    @else
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                    @endif
                                </div>

                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    @foreach($skills as $skl)
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $skl->skills}}</div></div>
                                    @endforeach
                                </div>

                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    @if(!is_null($content))
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">{{ $content->title_5 }}</span></h3>
                                    @else
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                    @endif
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    @foreach($languages as $lng)
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $lng->languages }}</div></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

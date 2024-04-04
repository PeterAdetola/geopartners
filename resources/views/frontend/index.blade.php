@extends('frontend.main_master')
@section('main')

@php
$about = App\Models\AboutSummary::all();
$services = App\Models\Service::orderBy('order')->limit(3)->get();
$projects = App\Models\Project::orderBy('created_at')->get();
@endphp

        <!-- Add slider here -->

        <!-- Content -->
            <!-- --------------------------------------------- -->
            <!-- About -->
            <section class="about section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                            <h2 class="section-title">About <span>Us</span></h2>

            @foreach($about as $about)
                            <p>{!! $about->summary !!}</p>
            @endforeach
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <div class="about-img">
                                <div class="img"> <img src="{{ url($about->image) }}" class="img-fluid" alt=""> </div>
                                <div class="about-img-2 about-buro">{{ $about->caption }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->
        @if(count($services) > 0)
            <section class="services section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Our <span>Services</span></h2>
                        </div>
                    </div>
                    <div class="row">
            @php
            $i = 1
            @endphp
            @foreach($services as $service)
                        <div class="col-md-4">                            
                            <div class="item">
                            @if($service->details)
                                <a href="{{ route('service_detailed.page', $service->id) }}"> <img src="{{ url($service->image) }}" alt="">
                                    <h5>{{ $service->name }}</h5>
                                    <div class="line"></div>
                                    <p>{{ $service->summary }}</p>
                                    <div class="numb">0{{ $i++ }}</div>
                                </a>
                            @else
                                    <img src="{{ url($service->image) }}" alt="">
                                    <h5>{{ $service->name }}</h5>
                                    <div class="line"></div>
                                    <p>{{ $service->summary }}</p>
                                    <div class="numb">0{{ $i++ }}</div>
                            @endif
                            </div>
                        </div>
            @endforeach
                    </div>
                </div>
            </section>
            @endif

            <!-- Projects -->
        @if(count($projects) > 0)
            <section class="projects section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Our <span>Projects</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
            @foreach($projects as $project)
            @php
            $link = route('project_detailed.page', $project->id);
            @endphp
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ url($project->image) }}" alt="{{ $project->name }}"> </div>
                                    <div class="con">
                                        <h6><a href="{{ ($project->details)? $link : '#!' }}">{{ $project->category }}</a></h6>
                                        <h5><a href="{{ ($project->details)? $link : '#!' }}">{{ $project->name }}</a></h5>
                                        <div class="line"></div>
                                        <a href="{{ ($project->details)? $link : '#!' }}"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <!-- --------------------------------------------- -->

            <!-- Footer Here -->

    @endsection


           
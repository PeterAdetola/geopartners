@extends('frontend.main_master')
@section('main')

@php
$about = App\Models\AboutSummary::all();
$members = App\Models\TeamMember::all();
@endphp

            <!-- About -->


            <section class="about section-padding2">
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

            <!-- Team -->
            <section class="team section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Our <span>Team</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 owl-carousel owl-theme">

            @foreach($members as $member)
                            <div class="item">
                                <div class="img"> <a href="team-details.html"><img src="{{ url($member->image) }}" alt=""></a> </div>
                                <div class="info">
                                    <h6>{{ $member->name }}</h6>
                                    <p>{{ $member->role }}</p>
                                    <div class="social valign">
                                        <div class="full-width">  
                                        	<a href="{{ $member->linked_in }}"><i class="ti-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            @endforeach
                        </div>
                    </div>
                </div>
            </section>

    @endsection
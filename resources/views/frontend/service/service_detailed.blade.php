@extends('frontend.main_master')
@section('main')

@php
$route = Route::current()->getName();
$parameterValue = Route::current()->parameter('id');
$link = '';
@endphp 
            <!-- Header Banner -->
            <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="img/banner.jpg"></section>
            <!-- Services Page -->
            <section class="section-padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title2">{{ $service->name }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p>{!! $service->details !!}</p>
    @if ($serviceImages->count() > 0) 
                            <div class="row mb-30">
      @foreach ($serviceImages as $serviceImage)
                                <div class="col-md-6 gallery-item">
                                    <a href="{{ url($serviceImage->image) }}" title="{{ $service->name }}" class="img-zoom">
                                        <div class="gallery-box">
                                            <div class="gallery-img"> <img src="{{ url($serviceImage->image) }}" class="img-fluid mx-auto d-block" alt="{{ $service->name }}"> </div>
                                        </div>
                                    </a>
                                </div>
      @endforeach
                            </div>
    @endif
                        </div>
                        <div class="col-md-4 sidebar-side">
                            <aside class="sidebar blog-sidebar">
                                <div class="sidebar-widget services">
    @if ($services->count() > 0) 
                                    <div class="widget-inner">
                                        <div class="sidebar-title">
                                            <h4>All Services</h4>
                                        </div>
                                        <ul>
      @foreach ($services as $service)
    @if ($service->details)

                                            <li class="{{ $route === 'service_detailed.page' && $parameterValue == $service->id ? 'active' : '' }}"><a href="{{ route('service_detailed.page', $service->id) }}">{{ $service->name }}</a></li>
    @else
                                            <li>{{ $service->name }}</li>
    @endif                                            
      @endforeach
                                        </ul>
                                    </div>
    @endif
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>







@endsection
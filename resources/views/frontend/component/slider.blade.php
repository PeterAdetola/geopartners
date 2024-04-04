
@php
$slides = App\Models\HeroSection::all()->sortBy('order');
@endphp
        <!-- Slider -->
        <header class="header slider-fade">
            <div class="owl-carousel owl-theme">
                <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            @foreach($slides as $slide)
                <div class="text-end item bg-img" data-overlay-dark="3" data-background="{{ url($slide->image) }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 offset-md-5">
                                    <div class="o-hidden">
                                        <h1>{{ $slide->heading }}</h1>
                                        <p>{{ $slide->sub_heading }}
                                        </p>
                                        <div class="butn-light mt-30 mb-30"><a href="{{route('contact.page')}}"><span>Contact us</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <!-- Corner -->
            <div class="hero-corner"></div>
            <div class="hero-corner3"></div>
        </header>
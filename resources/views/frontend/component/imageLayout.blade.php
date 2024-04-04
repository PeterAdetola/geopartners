@php

    $numImages = count($projectImages);
@endphp
@if($numImages === 1)
    <div class="row mb-30">
        @foreach($projectImages as $projectImage)
        <div class="col-md-12 gallery-item">
            <a href="{{ $projectImage->image }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ $projectImage->image }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        @endforeach
        
    </div>
@elseif($numImages === 2)
    <div class="row mb-30">
        @foreach($projectImages as $projectImage)        
        <div class="col-md-6 gallery-item">
            <a href="{{ $projectImage->image }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ $projectImage->image }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        @endforeach        
    </div>


@elseif($numImages === 3)

    <div class="row mb-30">
        @foreach($projectImages as $projectImage) 
        <div class="col-md-6 gallery-item">
            <a href="{{ $projectImage->image[0] }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ $projectImage->image[0] }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ $projectImage->image[1] }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ $projectImage->image[1] }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-12 gallery-item">
            <a href="{{ $projectImage->image[2] }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ $projectImage->image[2] }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
    </div>

@elseif($numImages === 4)

    <div class="row mb-30">
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/1.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/1.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/3.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/3.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/3.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
    </div>

@else

    <div class="row mb-30">
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/1.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/1.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/3.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/3.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 gallery-item">
            <a href="{{ asset('frontend/assets/img/services/3.jpg') }}" title="Interior Design" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img"> <img src="{{ asset('frontend/assets/img/services/3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                </div><h5><a href="armada-center.html"><span> {{$numImages - 3}} more</span></a></h5>
            </a>
        </div>
    </div>

@endif
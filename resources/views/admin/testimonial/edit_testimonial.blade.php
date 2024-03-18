
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'Edit Testimonial';
@endphp


@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/jquery.nestable/nestable.css') }}">
@endsection

 <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-black-grey"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ $pageTitle }}</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Admin Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    <a href="{{ route('view.testimonials') }}">View Testimonials</a>
                  </li>
                  <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                </ol>
              </div>

<!-- Somethings removed here -->

            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
<div class="row"> 
  <div class="col s12 m12 l8">


<div id="edit{{ $testimonial->id }}" class="card mb-10" style="padding:1em;">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Testimonial</h6>

      <div class="progress collection mb-2">
        <div id="preloader{{ $testimonial->id }}" class="indeterminate" style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.testimonial') }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $testimonial->id }}">
            @csrf

            <div class="row">
              <div class="col s12 m12 l4">
            <div class="collection" style="padding: 10px;">
                @if($testimonial->image)
                  <input name="image" type="file" data-default-file="{{ url($testimonial->image) }}" id="input-file-now-custom-2" class="dropify" data-height='150' /> <br>
                  <a href="#delete-img-modal" class="modal-trigger lime-text text-accent-1">
                  <i class="material-icons small-ico-bg red-text mb-2">delete</i>
                </a> 
                @else
                  <div class="initial-avatar big-avatar mt-3">{{ $testimonial->initials }}</div> <br>
                  <a class="modal-trigger lime-text text-accent-1" href="#add-img-modal">
                  <i class="material-icons small-ico-bg red-text mb-2">add</i>
                </a> 
                @endif 

                </div>
              </div>


              <div class="col s12 m8">
                <div class="row">

                  <div class="col s12 input-field">
                    <input id="name" name="name" value="{{ $testimonial->name }}" type="text" class="validate" 
                      data-error=".errorTxt3" />
                    <label for="name">Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <input id="role" name="role" value="{{ $testimonial->role }}" type="text" class="validate" 
                      data-error=".errorTxt3" />
                    <label for="role">Role</label>
                    @error('role')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" class="materialize-textarea" >{{ $testimonial->content }}</textarea>
                    @error('content')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>   

                </div>
              </div>
            </div>

            <div class="card-action">  
                <button  id="updateTestimonialBtn{{ $testimonial->id }}" type="submit" class="modal-action waves-effect waves-red btn-large right">Update</button>
                <a href="#delete{{ $testimonial->id }}" class="modal-trigger btn-floating red lime-text text-accent-1">
                <i class="material-icons white-text mb-2">delete</i>
              </a>
            </div>   
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
</div>
  </div>



    @include('admin.testimonial.modals.delete-testimonial-modal')
    @include('admin.testimonial.modals.delete-img-modal')
    @include('admin.testimonial.modals.add-img-modal')

</div>
<!-- users view ends -->
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->


  <script type="text/javascript"> 
      // Preloader Script

      document.getElementById("updateTestimonialBtn{{$testimonial->id}}").addEventListener("click", function() {
        var preloader = document.getElementById("preloader{{$testimonial->id}}");
        preloader.style.display = "block";
      });  
      
      document.getElementById("deleteTestimonialBtn{{$testimonial->id}}").addEventListener("click", function() {
        var preloader = document.getElementById("preloader2{{$testimonial->id}}");
        preloader.style.display = "block";
      });
      
  $(document).ready(()=>{
      $('#image').change(function(){
        const file = this.files[0];
        // console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#showImage').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });

</script>


@endsection
@section('scripts')
    <script src="{{ asset('backend/assets/vendors/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/form-file-uploads.js') }}"></script> 
    <!-- <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> -->
    <!-- <script src="{{ asset('backend/assets/js/scripts/extra-components-nestable.js') }}"></script>  -->
@endsection
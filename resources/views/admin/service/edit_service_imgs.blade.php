
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'Edit Images for '.$service->name;
@endphp

@section('headScript')
<script src="{{ asset('backend/assets/vendors/sortable/sortable.js') }}"></script>
@endsection

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
                  <li class="breadcrumb-item"><a href="{{ route('view.services') }}">View Services</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('edit.service', $service->id) }}">Edit Service</a>
                  </li>
                  <li class="breadcrumb-item active">Edit Service Image</li>
                </ol>
              </div>

            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
<div class="row">
  @php($i = 1)
  @if (count($serviceImages) > 0)
  @foreach($serviceImages as $serviceImage) 

    <div class="col s12 m6 l4">
          <input type="hidden" name="order[]" value="{{ $serviceImage->id }}">      

          <div class="card" style="
              background-image: url('{{ url($serviceImage->image) }}');
              background-size: cover;
              background-position: center;
        " >
            <div class="card-content white-text" style="height: 10em;">
            </div>
            <div class="card-action">
              <a href="#edit{{ $serviceImage->id }}" class="modal-trigger lime-text text-accent-1">
                <i class="material-icons small-ico-bg grey-text mb-2">edit</i>
              </a>
              <a id="delete" href="{{ route('delete.service_img', $serviceImage->id) }}" class="modal-trigger lime-text text-accent-1">
                <i class="material-icons small-ico-bg red-text mb-2">delete</i>
              </a>
              <!-- <i class="right material-icons grey-text mt-1 mb-0">drag_handle</i> -->
            </div>
          </div>
    </div>
    @include('admin.service.modals.edit-imgs-modal')
    {{--@include('admin.hero.modals.delete-serviceImage-modal')--}}
    @endforeach

    @endif
      




</div>

    @include('admin.service.modals.add-image-modal')
<!-- users view ends -->
          </div>
          <!-- <div class="content-overlay"></div> -->
          <div style="bottom: 50px; right: 19px;" class=" fixed-action-btn direction-top"><a href="#add-image-modal" class="modal-trigger btn-floating btn-large gradient-45deg-black-grey gradient-shadow"><i class="material-icons">add</i></a>
  </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->


<script>
  // Simple list
Sortable.create(simpleList, {
  animation: 150 
});
</script>

  <script>

    document.getElementById("addImageBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add-image-preloader");
      preloader.style.display = "block";
    });
  </script>

  <script type="text/javascript">      
      
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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <!-- <script src="{{ asset('backend/assets/js/scripts/extra-components-nestable.js') }}"></script>  -->
@endsection

@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'View Hero Slides';
@endphp

@section('headScript')
<!-- <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script> -->
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
                  <li class="breadcrumb-item active">{{ $pageTitle }}
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6"><a class="modal-trigger mb-2 btn-floating btn-flat waves-effect waves-light breadcrumbs-btn right" href="#sort-slide-modal" ><i class="material-icons hide-on-med-and-up">print</i><i class="material-icons right">list</i></a>
              </div>
    @include('admin.hero.modals.sort-slide-modal')

            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
<div class="row">
  @php($i = 1)
  @foreach($slides as $slide) 

 <div class="col s12 m6 l4">
      

          <div class="card" style="
              background-image: url('{{ url($slide->image) }}');
              background-size: cover;
              background-position: center;
        " >
            <div class="card-content white-text" style="height: 10em;">
              <span class="card-title">{{ $slide->heading }}</span>
              <p>
               {{ $slide->sub_heading }}
              </p>
            </div>
            <div class="card-action center">
              <a href="#edit{{ $slide->id }}" class="modal-trigger lime-text text-accent-1">
                <i class="material-icons small-ico-bg grey-text mb-2">edit</i>
              </a>
              <a id="delete" href="#!" class="lime-text text-accent-1">
                <i class="material-icons small-ico-bg grey-text mb-2">delete</i>
              </a>
            </div>
          </div>
    </div>
    @include('admin.hero.modals.edit-slide-modal')

    @endforeach

@if (count($slides) < 4)
  <div style="bottom: 50px; right: 19px;" class=" fixed-action-btn direction-top"><a href="#create-slide-modal" class="modal-trigger btn-floating btn-large gradient-45deg-black-grey gradient-shadow"><i class="material-icons">add</i></a>
  </div>
@endif

    @include('admin.hero.modals.create-slide-modal')

</div>
<!-- users view ends -->
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->



  <script>

    document.getElementById("createSlideBtn").addEventListener("click", function() {
      var preloader = document.getElementById("create-slide-preloader");
      preloader.style.display = "block";
    });


    document.getElementById("saveOrderButton").addEventListener("click", function() {
      var preloader = document.getElementById("sort-slide-preloader");
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
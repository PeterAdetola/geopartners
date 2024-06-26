
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'View Projects';
@endphp

@section('headScript')
<!-- <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script> -->
<!-- <script src="{{ asset('backend/assets/vendors/sortable/sortable.js') }}"></script> -->
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/cards-basic.css') }}">
@endsection
    <style>
      .embossed{
        text-shadow: 2px 2px 2px white;
      }
      .border{
        border: 1px #fafafa solid;
      }
      .collection{
        background-color: #fafafa;
      }
    </style>

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

<!-- Somethings removed here -->

            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
<div id="image-card" class="row"> 
  <div class="col s12 m12 l12">
    <!-- <form method="POST" action="{{ route('sort.project') }}"> -->
            @csrf
  <ul id="simpleList">

  @if (count($projects) > 0)
  @foreach($projects as $project) 
    <li class="col s12 m6 l4">
    <input type="hidden" name="order[]" value="{{ $project->id }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ url($project->image) }}" alt="{{ $project->name }}" />
        </div>
        <div class="card-content pt-1 pb-1">
          <h6 class="card-title truncate">{{ $project->name }}</h6>
          <p class="truncate">{{ $project->category }}</p>
        </div>
        <div class="card-action">
            <a href="{{ route('edit.project', $project->id ) }}" class="lime-text text-accent-1">
              <i class="material-icons small-ico-bg grey-text mb-0">edit</i>
            </a>
              <!-- <i class="right material-icons grey-text mt-1 mb-0">drag_handle</i> -->
        </div>
      </div>
    </li>

    @endforeach
    @else
      

    <!-- <li class="hoverable col s12 m6 l3"> -->
      <div class="col s12 m6 l4">
      <div class="card">

        <div class="card-image">
          <img src="{{ url('backend/assets/images/gallery/flat-bg.jpg') }}" alt="No Project Yet" /> 
          <span class="card-title grey-text">No Entry Yet</span>
        </div>
        <div class="card-content pt-1 pb-1">
          <h6 class="card-title truncate">Project Name</h6>
          <p class="truncate">ProjectCategory</p>
        </div>
        <div class="card-action">
            <a href="#!" class="lime-text text-accent-1">
              <i class="material-icons small-ico-bg grey-text mb-0">info</i>
            </a>
        </div>
      </div>
      </div>
    <!-- </li> -->
    @endif
         </ul>
      <div class="progress collection border">
        <div id="sort-project-preloader" class="indeterminate" style="display:none; 
        border:2px #fafafa solid"></div>
      </div>

@if (count($projects) > 1)
    <!-- <button type="submit" id="saveOrderButton" class="waves-effect chip btn-flat right mb-10">&nbsp;&nbsp;Save Order<i class="material-icons right">check</i>&nbsp;&nbsp;</button> -->
@endif
       <!-- </form> -->
      </div>


<script>
  // Simple list
Sortable.create(simpleList, {
  animation: 150 
});
</script>

  <div style="bottom: 50px; right: 19px;" class=" fixed-action-btn direction-top"><a href="{{ route('create.project') }}" class="btn-floating btn-large gradient-45deg-black-grey gradient-shadow"><i class="material-icons">add</i></a>
  </div>

   {{--@include('admin.project.modals.create-project-modal')--}}

</div>
<!-- users view ends -->
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->



  <script>

    document.getElementById("saveOrderButton").addEventListener("click", function() {
      var preloader = document.getElementById("sort-project-preloader");
      preloader.style.display = "block";
    });
    
    document.getElementById("createProjectBtn").addEventListener("click", function() {
      var preloader = document.getElementById("create-project-preloader");
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
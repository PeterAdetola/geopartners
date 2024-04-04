
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'View Testimonials';
@endphp

@section('headScript')
<script src="{{ asset('backend/assets/vendors/sortable/sortable.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
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
<div class="row"> 
  <div class="col s12 m12 l8">
    <form method="POST" action="{{ route('sort.testimonial') }}">
            @csrf
         <ul id="simpleList" class="collapsible">
  @if (count($testimonials) > 0)
  @foreach($testimonials as $testimonial) 
            <li class="hoverable">
          <input type="hidden" name="order[]" value="{{ $testimonial->id }}">
               <div class="collapsible-header center" tabindex="0">
          @if($testimonial->image)
                <div class="left"><img height="60" width="60" src="{{ url($testimonial->image) }}" /></div>
          @else
                <div class="initial-avatar">{{ $testimonial->initials }}</div>
          @endif
                <div class=" ml-10">
                  <h6 class="row left font-weight-700 grey-text">
                        {{ $testimonial->name }}
                  </h6><br>
                  <p class="row grey-text">{{ $testimonial->role }}</p>
                </div>
                <div class="right mt-3" style="margin-left: auto;"><i class="material-icons">drag_handle</i></div>
                </div>
               <div class="collapsible-body">
              <span>{{ $testimonial->content }}</span>
                <div class="divider mb-2 mt-2"></div>
                  <div>
                    <a href="{{ route('edit.testimonial', $testimonial->id ) }}" class="lime-text text-accent-1">
                      <i class="material-icons small-ico-bg grey-text mb-0">edit</i>
                    </a>
                  </div>
              </div>
            </li>
    {{--@include('admin.testimonial.modals.edit-testimonial-modal')--}}

    @endforeach
    @else
      <li>
         <div class="collapsible-header row pb-1" style="">
                <div class="left"><img height="50" width="50" src="{{ url('backend/assets/images/favicon/pacmediac_logo.png') }}" /></div>
          <h6 class="right font-weight-700 grey-text ml-10 mt-3">
                No testimonial yet
          </h6>
        </div>
         <div class="collapsible-body">
            <span>To create testimonial, click the plus at the bottom right corner of the page, provide the required details to create a testimonial</span>
          <div class="divider mb-2 mt-2"></div>
          <div>
            <a href="#!" class="lime-text text-accent-1">
              <i class="material-icons small-ico-bg grey-text mb-0">priority_high</i>
            </a>
          </div>
        </div>
      </li>
    @endif
         </ul>
      <div class="progress collection border mt-5">
        <div id="sort-testimonial-preloader" class="indeterminate"  style="display:none; 
        border:2px #fafafa solid"></div>
      </div>

@if (count($testimonials) > 1)
    <button type="submit" id="saveOrderButton" class="waves-effect chip btn-flat right mb-10">&nbsp;&nbsp;Save Order<i class="material-icons right">check</i>&nbsp;&nbsp;</button>
@endif
       </form>
      </div>


<script>
  // Simple list
Sortable.create(simpleList, {
  animation: 150 
});
</script>


  <div style="bottom: 50px; right: 19px;" class=" fixed-action-btn direction-top"><a href="#create-testimonial-modal" class="modal-trigger btn-floating btn-large gradient-45deg-black-grey gradient-shadow"><i class="material-icons">add</i></a>
  </div>

    @include('admin.testimonial.modals.create-testimonial-modal')

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
      var preloader = document.getElementById("sort-testimonial-preloader");
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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <!-- <script src="{{ asset('backend/assets/js/scripts/extra-components-nestable.js') }}"></script>  -->
@endsection
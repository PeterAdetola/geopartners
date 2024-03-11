
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'Edit Member';
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
                    <a href="{{ route('view.members') }}">View Members</a>
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


<div id="edit{{ $member->id }}" class="card mb-10" style="padding:1em;">
      <h6 class="card-title ml-2">Edit Member</h6>

      <div class="progress collection mb-2">
        <div id="preloader{{ $member->id }}" class="indeterminate" style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
       <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.member') }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $member->id }}">
            @csrf

            <div class="row">
              <div class="col s12 m12 l5 mt-3">
                  <input name="image" type="file" data-default-file="{{ url($member->image) }}" id="input-file-now-custom-2" class="dropify" data-height='250' />  
                  @error('image')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror   
              </div>


              <div class="col s12 m7 mt-2">
                <div class="row">

                  <div class="col s12 input-field mt-1">
                    <input id="name" name="name" type="text" value="{{ $member->name }}" class="validate" data-error=".errorTxt3" />
                    <label for="name">Full Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field mt-1">
                    <input id="role" name="role" type="text" value="{{ $member->role }}" class="validate" data-error=".errorTxt2" />
                    <label for="role">Role/Office</label>
                    @error('role')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>   

                  <div class="col s12 input-field mt-1">
                    <input id="qualificatn" name="qualificatn" type="text" value="{{ $member->qualificatn }}" class="validate" data-error=".errorTxt2" />
                    <label for="role">Qualification</label>
                    @error('qualificatn')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div> 

                  <div class="col s12 input-field mt-1">
                    <input id="linked_in" name="linked_in" type="text" value="{{ $member->linked_in }}" class="validate" data-error=".errorTxt2" />
                    <label for="linked_in">LinkedIn</label>
                    @error('linked_in')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div> 
              
              <!-- <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn-large" onclick="ShowPreloader()">
                  Save Entry</button>
                <a href="{{ route('view.slides') }}" class="btn-large btn-flat modal-close">Cancel</a>
              </div>   -->     

                </div>  
              </div>
            </div>
              <div class="card-action col s12 mt-2">   
                <button  id="updateMemberBtn{{$member->id}}" type="submit" class="modal-action waves-effect waves-red btn-large right mt-2">Update</button>
                <a href="#delete{{ $member->id }}" class="modal-trigger btn-floating red lime-text text-accent-1 mt-3">
                <i class="material-icons white-text mb-2">delete</i>
              </a>
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
</div>
  </div>



    @include('admin.team.modals.delete-member-modal')

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

      document.getElementById("updateMemberBtn{{$member->id}}").addEventListener("click", function() {
        var preloader = document.getElementById("preloader{{ $member->id }}");
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

@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'Edit Client';
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
                    <a href="{{ route('view.clients') }}">View Clients</a>
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


<div id="edit{{ $client->id }}" class="card mb-10" style="padding:1em;">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Client</h6>

      <div class="progress collection mb-2">
        <div id="preloader{{ $client->id }}" class="indeterminate" style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.client') }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $client->id }}">
            @csrf

            <div class="row">
              <div class="col s12 m12 l4 mb-2">
                  <input name="image" type="file" data-default-file="{{ url($client->image) }}" id="input-file-now-custom-2" class="dropify" data-height='150' />  
              @error('image')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror   
              </div>


              <div class="col s12 m8">
                <div class="row">

                  <div class="col s12 input-field">
                    <input id="name" name="name" value="{{ $client->name }}" type="text" class="validate" 
                      data-error=".errorTxt3" />
                    <label for="name">Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>


                </div>
              </div>
            </div>

            <div class="card-action">  
                <button  id="updateClientBtn{{ $client->id }}" type="submit" class="modal-action waves-effect waves-red btn-large right">Update</button>
                <a href="#delete{{ $client->id }}" class="modal-trigger btn-floating red lime-text text-accent-1">
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



    @include('admin.client.modals.delete-client-modal')

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

      document.getElementById("updateClientBtn{{$client->id}}").addEventListener("click", function() {
        var preloader = document.getElementById("preloader{{$client->id}}");
        preloader.style.display = "block";
      });  
      
      document.getElementById("deleteClientBtn{{$client->id}}").addEventListener("click", function() {
        var preloader = document.getElementById("preloader2{{$client->id}}");
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
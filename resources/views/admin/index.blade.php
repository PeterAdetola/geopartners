 @extends('admin.admin_master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/jquery.nestable/nestable.css') }}">
    <style>
      .embossed{
        text-shadow: 2px 2px 2px white;
      }
      .border{
        border: 1px #c5cae9 solid;
      }
    </style>
@endsection
 @section('admin')
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-black-grey"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row" style="margin-top: -1.7em;">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Welcome Admin!</span></h5>
                <p>Right here every aspect of the website can be edited. Explore...</p>
                <!-- <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Pages</a>
                  </li>
                  <li class="breadcrumb-item active">Blank Page
                  </li>
                </ol> -->
              </div><!-- 
              <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-only">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">

  <!--media slider-->
  <div class="row">
    <div class="col s12">
      <div id="media-slider" class="card">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Hero Images</h4>
              </div>
            </div>
            <div id="view-media-slider">
              <div class="row">
                <div class="col s12">
                  <div class="slider">
                    <ul class="slides">
                      @php
                      $slides = getSlides();
                      @endphp
                      @if (count($slides) > 0)
                      @foreach($slides as $slide)
                      <li>
                        <img src="{{ url($slide->image) }}" alt="{{ $slide->image }}">
                        <!-- random image -->
                        <div class="caption right-align">
                          <h3 class="white-text">{{ $slide->heading }}</h3>
                          <h5 class="light grey-text text-lighten-3">{{ $slide->sub_heading }}</h5>
                        </div>
                      </li>
                      @endforeach
                      @else                      
                      <li>
                        <img src="{{ ('backend/assets/images/gallery/flat-bg.jpg') }}" alt="{{ ('backend/assets/images/gallery/flat-bg.jpg') }}">
                        <!-- random image -->
                        <div class="caption right-align">
                          <h3 class="grey-text">No image in the gallery yet</h3>
                          <h5 class="light grey-text text-lighten-1">Upload image to the gallery with the 'Edit hero' button below</h5>
                        </div>
                      </li>
                      @endif
                    </ul>
                  </div>
                </div>
                <div class="row col s12">
                  <!-- <a class="waves-effect btn-large right"><i class="material-icons left">keyboard_arrow_right</i>edit hero section</a> -->

            <a  href="{{  route('view.slides')}}" class="waves-effect waves-light btn-large right"><i class="material-icons right mt-10" style="font-size: 0.8em;">keyboard_arrow_right</i>Edit hero</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



      <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">About us</h4>
              </div>
            </div>
            <div class="divider"></div>


    @php
    $aboutSum = getAboutSummary();
    @endphp
    @foreach($aboutSum as $aboutSum)
    <div class="row mt-1">
      <div class="col s12 m6 mt-1">
        <p>{!! $aboutSum->summary !!}</p>
<a href="#about-summary-modal" class="modal-trigger btn-large mt-2">Edit Summary</a>
      </div>
      <div class="col s12 m6">
        <!-- <div class="card blue-grey darken-4 bg-image-1" style="height: 20em;"> -->
          <div class="card blue-grey darken-4" style="
              background-image: url({{ url($aboutSum->image) }});
              background-size: cover;
              background-position: center;
              height: 20em;
        " >
          <div class="card-content white-text">
            <span class="card-title font-weight-400 mt-10">{{ $aboutSum->caption }}</span>
            <div class="border-non mt-5">
              <a href="#about-sum_img-modal"  class="modal-trigger waves-effect waves-light btn red box-shadow" style="margin-top: 7em;">
                edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    @include('admin.about.about_summary.modals.about_summary-modal')
    @include('admin.about.about_summary.modals.about_sumImg-modal')
    </div>
</div>

<div class="divider mt-3" style="margin-bottom: -2em;"></div>
<h4 class="small-heading">
  <span class="embossed grey-text" style="background-color: #fafafa">Other Sections &nbsp;&nbsp;</span>
</h4>

    @php
    $services = getServices();
    $members = getMembers();
    $projects = getProjects();
    $testimonials = getTestimonials();
    @endphp
    <div class="row">      
      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons grey-text mb-5">highlight</i>
            <h4 class="m-0"><b>{{ count($services) }}</b></h4>
            <p>{{ (count($services) > 1)? 'Services' : 'Service' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.services') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons grey-text mb-5">business_center</i>
            <h4 class="m-0"><b>{{ count($projects) }}</b></h4>
            <p>{{ (count($projects) > 1)? 'Projects' : 'Project' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.projects') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
          </div>
        </div>
      </div>

        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons grey-text mb-5">people</i>
              <h4 class="m-0"><b>{{ count($members) }}</b></h4>
              <p>{{ (count($members) > 1)? 'Team Members' : 'Team Member' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.members') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
            </div>
          </div>
        </div>
      
        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons grey-text mb-5">message</i>
              <h4 class="m-0"><b>{{ count($testimonials) }}</b></h4>
              <p>{{ (count($testimonials) > 1)? 'Testimonials' : 'Testimonial' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.testimonials') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
            </div>
          </div>
        </div>
      
        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons grey-text mb-5">group_work</i>
              <h4 class="m-0"><b>10</b></h4>
              <p>Partners</p>
            <p class="mt-3">
              <a href="#!" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
            </div>
          </div>
        </div>

    </div>


<!-- <p class="right"><span style="background-color: whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp; <a href="#!" class="btn-large"><i class="material-icons right" style="font-size: 0.8em;">keyboard_arrow_right</i>Edit Services</a> </span></p>
<div class="divider mt-3" style=""></div> -->
<div class="divider mt-2" style="margin-bottom: -2em;"></div>
<h4 class="small-heading">
  <span class="embossed grey-text" style="background-color: #fafafa">Contact Section &nbsp;&nbsp;</span>
</h4>


  <!-- users view card details start -->
  <div class="card mb-5">
    <div class="card-content">
      <div class="row indigo lighten-5 border-radius-4 mb-2 pt-1 pb-1">
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; Phone &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 2em 4em; margin-top: -1em; z-index: 0;">
          <h6 class="m-0"><span>125</span></h6>
        </div>
        </div>
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; Email &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 2em 4em; margin-top: -1em; z-index: 0;">
          <h6 class=" m-0"><span>125</span></h6>
        </div>
        </div>
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; Address &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 1em 2em; margin-top: -1em; z-index: 0;">
          <p class="m-0">7, Captain Oba street, Off Akinloju Rd. Ikeja Lagos</p>
        </div>
        </div>
        <div class="right mr-2">
              <a href="#!" class="red-text"><i class="material-icons vertical-align-middle dark-small-ico-bg">arrow_forward</i></a>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <h6 class="mb-2 mt-2"><i class="material-icons">link</i> Social Links</h6>
          <table class="striped">
            <tbody>
              <tr>
                <td>Twitter:</td>
                <td><a href="#">https://www.twitter.com/</a></td>
              </tr>
              <tr>
                <td>Facebook:</td>
                <td><a href="#">https://www.facebook.com/</a></td>
              </tr>
              <tr>
                <td>Instagram:</td>
                <td><a href="#">https://www.instagram.com/</a></td>
              </tr>
            </tbody>
          </table>
        <div class="right mt-2">
              <a href="#!" class="red-text"><i class="material-icons vertical-align-middle dark-small-ico-bg">arrow_forward</i></a>
        </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>


    </div>
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <script src="{{ asset('backend/assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code lists',
    height: 250,
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code '
  });  
</script>

    <script type="text/javascript">

    document.getElementById("saveAboutTextBtn").addEventListener("click", function() {
      var preloader = document.getElementById("about-text-preloader");
      preloader.style.display = "block";
    });

    document.getElementById("updateImageBtn").addEventListener("click", function() {
      var preloader = document.getElementById("about-sumImg-preloader");
      preloader.style.display = "block";
    });
      // Preloader Script
      // function ShowPreloader() {
      //   document.getElementById('preloader').style.display = "block";
      //   document.getElementById('preloader2').style.display = "block";
      //   document.getElementById('preloader3').style.display = "block";
      //   // document.getElementById('preloader4').style.display = "block";
      // }   
      
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
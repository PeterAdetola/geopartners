 @extends('admin.admin_master')
 @section('admin')
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-black-grey"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Welcome Admin, where do we go from here?</span></h5><br>
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
                      <li>
                        <img src="{{ asset('backend/assets/images/gallery/33.png') }}" alt="img-3">
                        <!-- random image -->
                        <div class="caption right-align">
                          <h3 class="white-text">Right Aligned Caption</h3>
                          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                      </li>
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

  
    <div class="row mt-1">
      <div class="col s12 m6 mt-1">
        <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.

Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p><p>

Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen. Viverra tristique jusio the ivite dianne onen nivami acsestion.</p>
<a href="#!" class="btn-large mt-2">Edit Summary</a>
      </div>
      <div class="col s12 m6">
        <div class="card blue-grey darken-4 bg-image-1" style="height: 20em;">
          <div class="card-content white-text">
            <span class="card-title font-weight-400 mt-10">Macbook Pro</span>
            <div class="border-non mt-5">
              <a class="waves-effect waves-light btn red box-shadow" style="margin-top: 7em;">
                edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="divider mt-3" style="margin-bottom: -2em;"></div>
<h4 class="small-heading"><span style="background-color: whitesmoke;">Services &nbsp;&nbsp;</span></h4>

    <div class="row">      
      <div class="col s12 m6 l4 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons amber-text small-ico-bg mb-5">check</i>
            <h4 class="m-0"><b>21.5k</b></h4>
            <p>Total Views</p>
            <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              119.71%</p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons amber-text small-ico-bg mb-5">check</i>
            <h4 class="m-0"><b>21.5k</b></h4>
            <p>Total Views</p>
            <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              119.71%</p>
          </div>
        </div>
      </div>

      <div>    
        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons amber-text small-ico-bg mb-5">check</i>
              <h4 class="m-0"><b>21.5k</b></h4>
              <p>Total Views</p>
              <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                119.71%</p>
            </div>
          </div>
        </div>
      </div>

    </div>


<p class="right"><span style="background-color: whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp; <a href="#!" class="btn-large"><i class="material-icons right" style="font-size: 0.8em;">keyboard_arrow_right</i>Edit Services</a> </span></p>
<div class="divider mt-3" style=""></div>

    </div>
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <script type="text/javascript">
      // Preloader Script
      function ShowPreloader() {
        document.getElementById('preloader').style.display = "block";
        document.getElementById('preloader2').style.display = "block";
        document.getElementById('preloader3').style.display = "block";
        // document.getElementById('preloader4').style.display = "block";
      }
    </script>
  @endsection
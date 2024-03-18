
<!-- Start Modal -->
<div id="delete-img-modal" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Delete Image</h6>

      <div class="progress collection">
        <div id="deleting-image" class="indeterminate"  style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s6" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('delete.testimonial_img', $testimonial->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="col s10 mt-1">
                  <img src="{{ url($testimonial->image) }}" height="250" />     
              </div>


            </div>
              <div class="divider mt-1 mb-2"></div>   
                <button  id="deleteImageBtn{{ $testimonial->id }}" type="submit" class="modal-action waves-effect waves-green btn-large">delete image</button>
                <a href="javascript:void(0)" class="btn-large btn-flat modal-close">Cancel</a>
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
  </div>
</div>
<script type="text/javascript"> 
      // Preloader Script
document.getElementById("deleteImageBtn{{$testimonial->id}}").addEventListener("click", function() {
  var preloader = document.getElementById("deleting-image");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->
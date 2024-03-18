
<!-- Start Modal -->
<div id="add-img-modal" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add Image</h6>

      <div class="progress collection">
        <div id="adding-image" class="indeterminate"  style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('add.testimonial_img', $testimonial->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="col s5 mt-1">
                  <input name="image" type="file" id="input-file-now-custom-2" class="dropify" data-height='250' required />     
              </div>


            </div>
              <div class="divider mt-1 mb-2"></div>   
                <button  id="addImageBtn{{ $testimonial->id }}" type="submit" class="modal-action waves-effect waves-green btn-large">add image</button>
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
document.getElementById("addImageBtn{{$testimonial->id}}").addEventListener("click", function() {
  var preloader = document.getElementById("adding-image");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->
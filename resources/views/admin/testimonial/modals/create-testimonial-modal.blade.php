
<!-- Start Modal -->
<div id="create-testimonial-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add Testimonial</h6>

      <div class="progress collection">
        <div id="create-testimonial-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.testimonial') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="col s12 m12 l4 mb-2">
                  <input name="image" type="file" id="input-file-now-custom-2" class="dropify" data-height='150' />  
              @error('image')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror   
              </div>


              <div class="col s12 m7">
                <div class="row">

                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate" 
                      data-error=".errorTxt3" required />
                    <label for="name">Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <input id="role" name="role" type="text" class="validate" 
                      data-error=".errorTxt3" required />
                    <label for="role">Role</label>
                    @error('role')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <label for="content">Content</label>
                    <textarea id="icon_prefix2" name="content" class="materialize-textarea" required></textarea>
                    @error('short_title')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>   
              
              <!-- <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn-large" onclick="ShowPreloader()">
                  Save Entry</button>
                <a href="{{ route('view.slides') }}" class="btn-large btn-flat modal-close">Cancel</a>
              </div>   -->  
              <div class="col s12 mt-7">   
                <button  id="createTestimonialBtn" type="submit" class="modal-action waves-effect waves-green btn-large">Create Testimonial</button>
                <a href="javascript:void(0)" class="btn-large btn-flat modal-close">Cancel</a>
              </div>     

                </div>
              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
  </div>
</div>
<script>
  
    document.getElementById("createTestimonialBtn").addEventListener("click", function() {
      var preloader = document.getElementById("create-testimonial-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->
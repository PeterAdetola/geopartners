
<!-- Start Modal -->
<div id="delete{{ $testimonial->id }}" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Delete Testimonial?</h6>

      <div class="progress collection mb-2">
        <div id="preloader2{{ $testimonial->id }}" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('delete.testimonial', $testimonial->id ) }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $testimonial->id }}">
            @csrf

            <div class="row">
              <div class="col s12 m12 l4 mb-2">
                @if($testimonial->image)
                  <input name="image" type="file" data-default-file="{{ url($testimonial->image) }}" id="input-file-now-custom-2" class="dropify" data-height='150' />
                @else
                <div class="initial-avatar big-avatar">{{ $testimonial->initials }}</div>
                @endif    
              </div>


              <div class="col s12 m8">
                <div class="row">

                  <div class="col s12 input-field">
                    <input id="name" name="name" value="{{ $testimonial->name }}" type="text" class="validate" 
                      data-error=".errorTxt3" />
                    <label for="name">Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <label for="summary">Content</label>
                    <textarea id="summary" name="summary" class="materialize-textarea" >{{ $testimonial->content }}</textarea>
                    @error('content')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>   
              
              <!-- <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn-large" onclick="ShowPreloader()">
                  Save Entry</button>
                <a href="{{ route('view.slides') }}" class="btn-large btn-flat modal-close">Cancel</a>
              </div>   -->

              <div class="col s12 mt-7">   
                <button  id="deleteTestimonialBtn{{ $testimonial->id }}" type="submit" class="modal-action waves-effect red waves-red btn-large">Yes, Delete!</button>
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
<script type="text/javascript"> 
      // Preloader Script
document.getElementById("deleteTestimonialBtn{{$testimonial->id}}").addEventListener("click", function() {
  var preloader = document.getElementById("preloader{{$testimonial->id}}");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->
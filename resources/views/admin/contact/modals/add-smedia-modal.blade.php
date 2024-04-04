
<!-- Start Modal -->
<div id="add-smedia-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add Social Media</h6>
      <div class="divider mb-2"></div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('save.social_media') }}">
            @csrf
     <div class="input-field col s12">
      <select name="name">
        <option value="" disabled selected>Choose social media</option>
        <option value="LinkedIn">LinkedIn</option>
        <option value="Instagram">Instagram</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
      </select>
      <label>Social Media</label>
    </div>

    <div class="col s12 input-field">
      <input id="link" name="link" type="text" class="validate" 
        data-error=".errorTxt3" required />
      <label for="link">URL</label>
      @error('heading')
      <small class="errorTxt3 red-text">{{ $message }}*</small>
      @enderror
    </div>

      <!-- </div> -->

      <div class="progress collection">
        <div id="add-contact-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      <div class="row">
        <button  id="addContactBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>
<!-- /End Modal -->
<script>
  
    document.getElementById("addContactBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add-contact-preloader");
      preloader.style.display = "block";
    });
</script>

<!-- Start Modal -->
<div id="add-contact-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add Contact</h6>
      <div class="divider mb-2"></div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('save.contact') }}">
            @csrf

    <div class="row">
      <div class="input-field col s12">
        <h6 class="card-title">Phone</label>
        <textarea name="phone" id="myeditorinstance" ></textarea>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <h6 class="card-title">Email</label>
        <textarea name="email" id="myeditorinstance" ></textarea>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <h6 class="card-title">Address</label>
        <textarea name="address" id="myeditorinstance" ></textarea>
      </div>
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
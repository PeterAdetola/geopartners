
<!-- Start Modal -->
<div id="edit-contact-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Contact</h6>

      
      <div class="divider mb-2"></div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('update.contact') }}">
      <input type="hidden" name="id" value="{{ $contact->id }}" />
            @csrf

    <div class="row">
      <div class="input-field col s12">
        <textarea name="phone"  id="myeditorinstanceII" class="materialize-textarea" >{{ $contact->phone }}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col s12 input-field">      
          <textarea name="email"  id="myeditorinstanceII">{{ $contact->email }}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="address"  id="myeditorinstanceII" class="materialize-textarea" >{{ $contact->address }}</textarea>
      </div>
    </div>
      <!-- </div> -->

      <div class="progress collection">
        <div id="edit-contact-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      <div class="row">
          <a id="delete" href="{{ route('delete.contact', $contact->id ) }}" class="btn-floating red lime-text text-accent-1">
          <i class="material-icons white-text mb-2">delete</i>
        </a>
        <button  id="editContactBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>
<!-- /End Modal -->
<script>
  
    document.getElementById("editContactBtn").addEventListener("click", function() {
      var preloader = document.getElementById("edit-contact-preloader");
      preloader.style.display = "block";
    });
</script>
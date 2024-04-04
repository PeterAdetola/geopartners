
<!-- Start Modal -->
<div id="edit-smedia-modal{{ $smedia->id }}" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit {{ $smedia->name }} URL</h6>
      <div class="divider mb-2"></div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('update.social_media') }}">
            @csrf
        <div class="col s12" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #fafafa; 
            z-index: 1;
            ">&nbsp; Social media &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 2em 4em; margin-top: -1em; z-index: 0;">
          <h6 class=" m-0"><span>{{ $smedia->name }}</span></h6>
        </div>
        </div>

    <div class="col s12 input-field">
      <input id="link" name="link" type="text" class="validate" 
        data-error=".errorTxt3" value="{{ $smedia->link }}" />
      <label for="link">URL</label>
      @error('heading')
      <small class="errorTxt3 red-text">{{ $message }}*</small>
      @enderror
    </div>

      <!-- </div> -->

      <div class="progress collection">
        <div id="edit-smedia-preloader{{ $smedia->id }}" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      <div class="row">
          <a id="delete" href="{{ route('delete.social_media', $smedia->id ) }}" class="btn-floating red lime-text text-accent-1">
          <i class="material-icons white-text mb-2">delete</i>
        </a>
        <button  id="editSmediaBtn{{ $smedia->id }}" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>
<!-- /End Modal -->
<script>
  
    document.getElementById("editSmediaBtn{{ $smedia->id }}").addEventListener("click", function() {
      var preloader = document.getElementById("edit-smedia-preloader{{ $smedia->id }}");
      preloader.style.display = "block";
    });

</script>
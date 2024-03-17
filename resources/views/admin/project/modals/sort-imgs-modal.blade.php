
<!-- Start Modal -->
<div id="sort-imgs-modal" class="modal" style="padding:0.1em; min-height: 100%;">
    <div class="modal-content">
    <form method="POST" action="{{ route('sort.project_imgs') }}">
            @csrf
      <h6 class="card-title ml-2" style="display:inline-block;">Re-arrange Image</h6>
        <button  id="saveOrderButton" type="submit" class="btn right mb-2">Save</button>

      <div class="progress collection">
        <div id="sort-imgs-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <ul id="simpleList" class="collapsible">
        @foreach($projectImages as $projectImage) 
         <li class="hoverable">
          <input type="hidden" name="order[]" value="{{ $projectImage->id }}">
          <div class="collapsible-header" style="padding: 5px">
              <img width="65px" height="55px" src="{{ url($projectImage->image) }}" class="ml-5" />
              <i class="material-icons right mt-3" style="margin-left: auto;">drag_handle</i>
          </div>
         </li>
         @endforeach
      </ul>
      <!-- </div> -->
      <!-- <div class="divider mb-2"></div>
      <div class="row">
      </div> -->
    </form>
  </div>
</div>
<!-- /End Modal -->
<script>
        // Simple list
      Sortable.create(simpleList, {
        animation: 150 
      });


      document.getElementById("saveOrderButton").addEventListener("click", function() {
        var preloader = document.getElementById("sort-imgs-preloader");
        preloader.style.display = "block";
      });

</script>
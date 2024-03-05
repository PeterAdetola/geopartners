
<!-- Start Modal -->
<div id="sort-slide-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Re-arrange Slide</h6>

      <div class="progress collection">
        <div id="sort-slide-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('sort.slide') }}">
            @csrf
      <ul id="simpleList" class="collapsible">
        @foreach($slides as $slide) 
         <li id="slide-{{ $slide->id }}">
          <input type="hidden" name="order[]" value="{{ $slide->id }}">
          <div class="collapsible-header slide-item" style="padding: 5px">
              <img width="50px" height="50px" src="{{ url($slide->thumbnail) }}" class="circle ml-5" />
              <span class="right card-title ml-10 mt-2">{{ $slide->heading }}</span>
          </div>
         </li>
         @endforeach
      </ul>
      <!-- </div> -->
      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="saveOrderButton" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>
<!-- /End Modal -->
<script>
  // Simple list
Sortable.create(simpleList, {
  animation: 150 
});
</script>
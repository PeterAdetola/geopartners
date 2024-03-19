
<!-- Start Modal -->
<div id="delete{{ $client->id }}" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Delete Client?</h6>

      <div class="progress collection mb-2">
        <div id="preloader2{{ $client->id }}" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('delete.client', $client->id ) }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $client->id }}">
            @csrf

            <div class="row">
              <div class="col s12 m12 l4 mb-2">
                  <img src="{{ url($client->image) }}" height='150' />  
              @error('image')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror   
              </div>


              <div class="col s12 m8">
                <div class="row">
                  <div class="col s12">
                    <h6 class="card-title">{{ $client->name }}</h6> 
                  </div>

                  <p class="col s12 collection red-text" style="padding: 2em;">
                    Deleting this entry is irreversible. Proceed with caution!
                  </p>    
              
              <!-- <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn-large" onclick="ShowPreloader()">
                  Save Entry</button>
                <a href="{{ route('view.slides') }}" class="btn-large btn-flat modal-close">Cancel</a>
              </div>   -->

              <div class="col s12 mt-7">   
                <button  id="deleteClientBtn{{ $client->id }}" type="submit" class="modal-action waves-effect red waves-red btn-large">Yes, Delete!</button>
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
document.getElementById("deleteClientBtn{{$client->id}}").addEventListener("click", function() {
  var preloader = document.getElementById("preloader{{$client->id}}");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->
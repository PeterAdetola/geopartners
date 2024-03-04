
<!-- Start Modal -->
<div id="sort-slide-modal" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Sort Slide</h6>

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


// $('#saveOrderButton').on('click', function() {
//     var slideOrder = $('.slide-item').map(function() {
//         return $(this).data('slide-id');
//     }).get();

//     $.post('/sort/slide', { slideOrder: slideOrder }, function(response) {
//         // Handle success or error response
//         if (response.success) {
//             alert('Slide order saved successfully!');
//         } else {
//             alert('Failed to save slide order.');
//         }
//     });
// });
</script>
    
<script>
  
  // Add event listener for "saveOrderButton" click
  // document.getElementById('saveOrderButton').addEventListener('click', saveOrder);

//   function saveOrder() {
//   const orderData = {};
//   const listItems = document.getElementById('simpleList').querySelectorAll('li');

//   // Loop through list items and collect order data
//   for (let i = 0; i < listItems.length; i++) {
//     const slideId = listItems[i].id.split('-')[1];
//     orderData[slideId] = i + 1; // Adjust indexing as needed
//   }

//   // Send AJAX request
//   $.ajax({
//     url: '{{ route('sort.slide') }}',
//     method: 'POST',
//     data: { 
//       order: orderData,
//        _token: csrfToken
//        },
//     success: function(response) {
//       // Handle success response (e.g., close modal, show success message)
//       console.log(response.message);
//       $('#sort-slide-modal').modal('hide');
//     },
//     error: function(error) {
//       // Handle error (e.g., display error message)
//       console.error(error);
//     }
//   });
// }

</script>
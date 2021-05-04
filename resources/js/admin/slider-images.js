const classes = {
	wrapper_s: ".slider-images-wrapper",
	addBtn_s: ".slider-images-add",
	removeBtn_s: ".slider-images-remove",
	row_s: ".slider-images-row"
};
const htmlTemplate_s = `
	<div class="row slider-images-row"
		 style="width: 100%; margin: 32px auto 0;">
		 <div class="col-8">
			  <input type="file" name="slider_images[]" />
		 </div>
		 <div class="col-4">
			  <button class="btn btn-danger slider-images-remove ">Remove</button> 
		 </div>
	</div>`;

$(document).on("click", classes.addBtn_s, function(e) {
	e.preventDefault();
	$(classes.wrapper_s).append(htmlTemplate_s);
});

$(document).on("click", classes.removeBtn_s, function(e) {
	e.preventDefault();

	  if ($(this).hasClass("ajax")) {
		 S.ajaxSetup({
			  headers: {
					"X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content")
			  }
		 });

		 let route   = $(this).data("route");
		 let $btn    = $(this);

		 $.ajax({
			  url: route,
			  type: "DELETE",
			  dataType: "json",
			  success: function(data) {
					let parent =  $btn.parents(classes.row_s);
					parent.html(data.message);
				
					setTimeout(function(parent) {
					  parent.remove();
					}, 2000, parent);
			  },
			  error: function(data) {
					console.log("Error:", data);
			  }
		 });
	} else {
		 let parent = $(this).parents(classes.row_s);
		 if (parent) {
			  parent.remove();
		 }
	}
});

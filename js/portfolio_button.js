jQuery(function($) {
	var dialog = `<div id="insert_portfolio" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	    <div class="modal-dialog"> 
	        <div class="modal-content"> 
	            <div class="modal-header"> 
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
	                INSERT PORTFOLIO 
	            </div> 
	            <div class="modal-body">
	            	<label>Select Portofolio</label>
	            	<select id="portfolio_id" name="portfolio_id" class="form-control">
	            	</select>
	            </div>
	            <div class="modal-footer">
	            	<button type="button" id="insert_portfolio_button" class="btn btn-primary"><i class=""></i> Insert</button>
	            </div> 
	        </div> 
	    </div> 
	</div>`;

	$('body').append(dialog);
	$('#add-portfolio_button').bind("click", function() {
		$('#insert_portfolio').modal('show');
		jQuery('#portfolio_id').html('');
		$.ajax({
			url: $(this).data('read'),
			data: {},
            type: "POST",
            dataType: "json",
            success: function(data) {
            	if (typeof data.error === 'undefined') {
            		jQuery.each(data, function(index, el) {
            			jQuery('#portfolio_id').append('<option value="'+el.id+'">'+el.name+'</option>');
            		});
            		
            	}
            }
		});
	});
	
	$('#insert_portfolio_button').bind("click", function() {
        wp.media.editor.insert('[wp_corlate_portfolio id=' + $('#portfolio_id').val() + ']');
        $('#insert_portfolio').modal('hide');
	});
});
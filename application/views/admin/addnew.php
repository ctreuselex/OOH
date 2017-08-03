<style type="text/css">
    .btn-addnew {
        display: inline-block;
        float: right;

        background: mediumspringgreen;
        color: white;
        font-size: 14px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 5px; 
        border: 0; 
        margin-top: 15px; }

    .tbl-title {
        text-transform: uppercase; }
    .tbl-inp {
    	margin-bottom: 10px; }
</style>

<div class="col-xs-12">
    <div class="col-xs-12"><h2 class="tbl-title"><b><?php echo $tabSelect ?></b> | Add New</h2></div>

    <form>
	    <div class="col-md-6">
	    	<br>
	    	<label class="col-sm-4 tbl-lbl">Location: </label>
	    		<input id="addName" class="tbl-inp col-sm-8" type="text">
	    	<label class="col-sm-4 tbl-lbl">Budget: </label>
	    		<input id="addBudget" class="tbl-inp col-sm-8" type="number">
	    	<label class="col-sm-4 tbl-lbl">Location Image: </label>
	    		<input id="addImage" class="tbl-inp col-sm-8" type="file" accept="image/x-png,image/gif,image/jpeg" onchange="readUrl(this)" />
    		<div class="clearfix"></div>
    		<div id="addImageDiv" style="background-color: grey; width: 100%; height: 250px;"></div>
    		<input class="btn-addnew" type="submit" value="Confirm">
	    </div>
    </form>
</div>

<script type="text/javascript">
	function readUrl(input){
		var input = this;
		var url = $(this).val();
		var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
		if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))  {
		    var reader = new FileReader();

		    reader.onload = function (e) {
		       $('#addImageDiv').css('background-image', e.target.result);
		    }
		    reader.readAsDataURL(input.files[0]);
		} else {
			$('#addImageDiv').css('background-image', '/assets/no_preview.png');
		}
		console.log("asdd");
	}
</script>
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
                    <div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
                    <div class="col-sm-10">
						<input type="text" class="form-control" name="category">
					</div>
                </div>
				<div class="row form-group">
                    <div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cover:</label>
					</div>
                    <div class="col-sm-10">
						<input type="text" class="form-control" name="cover">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="title">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lang:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lang">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Author:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="author">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Year:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="year">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
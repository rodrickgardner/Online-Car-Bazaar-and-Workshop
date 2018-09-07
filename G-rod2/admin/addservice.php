<?php
	//require_once('auth.php');
?>
<link  href="febe/facebox.css" rel="stylesheet" type="text/css" />

<div class="form-add">

<div class="row">
				
					<div class="span5">					
							<form method="post"  action="saveservice.php" enctype="multipart/form-data">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Service Type</label>
									<div class="controls">
										<input type="text" name="Sservice" placeholder="Enter your text" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Service cost</label>
									<div class="controls">
										<input type="text" name="Scost" placeholder="Enter your text" id="text" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Service ID</label>
									<div class="controls">
										<input type="text" name="Sid" placeholder="Enter your text" id="text" class="input-xlarge">
									</div>
								</div>			
										                            
								
								<div class="actions"><input tabindex="9" name="saveservice" class="btn btn-inverse large" type="submit" value="Add Service"></div>
							</fieldset>
						</form>					
					</div>				
				</div>

	</div>

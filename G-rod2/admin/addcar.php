<?php
	//require_once('auth.php');
?>
<link  href="febe/facebox.css" rel="stylesheet" type="text/css" />

<div class="form-add">

<div class="row">
				
					<div class="span2">					
							<form method="post"  action="savecar.php" enctype="multipart/form-data">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Car name</label>
									<div class="controls">
										<input type="text" name="Cname" placeholder="Enter your text" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Car Condition</label>
									<div class="controls">
										<input type="text" name="Ccondition" placeholder="Enter your text" id="text" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Description</label>
									<div class="controls">
										<input type="text" name="Cdescription" placeholder="Enter your text" id="text" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Car Color</label>
									<div class="controls">
										<input type="text" name="Ccolor" placeholder="Enter your text" id="text" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Car size</label>
									<div class="controls">
										<input type="text" name="Csize" placeholder="Enter your text" id="text" class="input-xlarge">
									</div>
								</div>
								
									
					</div>
					<div class="span3">					
						
						
								<div class="control-group">
									<label class="control-label">Availability</label>
									<div class="controls">
										<input type="text" name="Cnumber" placeholder="Enter the number" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Car Cost:</label>
									<div class="controls">
										<input type="text" name="Ccost" placeholder="Enter your text" class="input-xsmall">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Car Code:</label>
									<div class="controls">
										<input type="text" name="Ccode" placeholder="Enter your text" class="input-xsmall">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Brand:</label>
									<div class="controls">
										<input type="text" name="Cbrand" placeholder="Enter your text" class="input-xsmall">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">IMAGE:</label>
									
									
								<div class="controls">
								<input type="file" name="image" class="font"> 
								
								</div>
																
								</div>							                            
								
								<div class="actions"><input tabindex="9" name="save" class="btn btn-inverse large" type="submit" value="Save Car"></div>
							</fieldset>
						</form>					
					</div>				
				</div>

	</div>

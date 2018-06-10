<?php echo form_open_multipart('Property/insertProperty');?>
	<div class="col-md-12">
	<div class="form-group" style="margin-top: 100px;">
	    <label for="propertyType"><b>Property Type </b></label>
	    <select class="form-control" id="propertyType" name="propertyType" style="width: 710px;	" required>
	      <option>Land</option>
	      <option>Houses</option>
	      <option>Apartments</option>
	      <option>Portions and Rooms</option>
	      <option>Holiday and Short-Term Rental</option>
	      <option>Commercial Property </option>
	      <option>Other</option>
	    </select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1"><b>District</b></label>
	    <select class="form-control" id="district" name="district" style="width: 710px;	" required>
	      <option>Ampara</option>
	      <option>Anuradhapura</option>
	      <option>Badulla</option>
	      <option>Batticaloa</option>
	      <option>Colombo</option>
	      <option>Galle</option>
	      <option>Gampaha</option>
	      <option>Hambantota</option>
	      <option>Jaffna</option>
	      <option>Kaluthara</option>
	      <option>Kandy</option>
	      <option>Kegalle</option>
	      <option>Kilinochchi</option>
	      <option>Kurunegala</option>
	      <option>Mannar</option>
	      <option>Matale</option>
	      <option>Matara</option>
	      <option>Moneragala</option>
	      <option>Mullaitivu</option>
	      <option>Nuwara Eliya</option>
	      <option>Polonnaruwa</option>
	      <option>Puttalam</option>
	      <option>Ratnapura</option>
	      <option>Trincomalee</option>
	      <option>Vavuniya</option>
	    </select>
  </div>

   <div class="form-group">
	    <label for="addressLi"><b> Address Line 1</b></label>
	    <input type="text" class="form-control" id="addressL1" name="addressL1" placeholder="Address Line 1" style="width: 700px;" required>
    </div>

     <div class="form-group">
	    <label for="addressL2"><b>Address Line 2 </b></label>
	    <input type="text" class="form-control" id="addressL2" name="addressL2" placeholder="Address Line 2" style="width: 700px;" required>
    </div>

     <div class="form-group">
	    <label for="city"> <b>City </b> </label>
	    <input type="text" class="form-control" id="city" name="city" placeholder="City" style="width: 700px;" required>
    </div>
    <div class="form-group">
	    <label for="revenue"><b>Expected Revenue(Rs/year)</b></label>
	    <input type="number	" class="form-control" id="revenue" name="revenue" placeholder="Revenue" style="width: 700px;" required>
    </div>

     <div class="form-group col-10">
	    <label for="Description"><b>Small Discription </b></label>
	    <textarea class="form-control" id="description" rows="3" name="description" placeholder="description" style="width: 700px;" required></textarea>
	</div>

	<div class="form-group col-10">
	    <label for="exampleInputFile"><b>Upload an Image</b></label>
	    <input type="file" class="form-control-file" id="imageName" name="imageName" aria-describedby="fileHelp" style="width: 700px;" required>
    </div>
    <p> </p>
    <div class="form-group col-10">
    	<button type="submit" class="btn btn-primary" style="width=100px;">Add Property</button>
    </div>
</div>
</form>
<div class="col-md-1">

</div>
<div class="col-md-8">
<h2> REVIEW</h2>

<table class="table table-bordered" style="margin-top:50px;">
<tbody> 
<?php foreach($PROPERTY as $value) { ?>		
<tr>
	<th class="col-md-4"> Property Type</th>
	<td><?=$value->propertyType;?></td>
</tr>
<tr>
	<th> District</th>
	<td> <?=$value->district;?></td>
</tr>
<tr>
	<th> Address Line 1</th>
	<td><?=$value->addressLine1;?> </td>
</tr>
<tr>
	<th> Address Line 2</th>
	<td> <?=$value->addressLine2;?></td>
</tr>
<tr>
	<th> City</th>
	<td> <?=$value->city;?></td>
</tr>
<tr>
	<th> Revenue</th>
	<td><?=$value->revenue;?></td>
</tr>
<tr>
	<th> Description</th>
	<td> <?=$value->description;?></td>
</tr>
<tr>
	<th> Date Submitted</th>
	<td><?=$value->Date;?></td>
</tr>
<tr>
	<th> User Name</th>
	<td> <?=$value->Users_username;?> </td>
</tr>
<p>
<img alt="" height="400px;" width="500px;" src="<?php echo base_url(); ?>uploads/<?=$value->imgName;?>"> </p>

</tbody>
</table>
<a href="<?php echo site_url('Property/approveProperty/'.$value->idproperty);?>" type="button" class="btn btn-success">Approve</a>	
<a href="<?php echo site_url('Property/deleteSubmittedPosts/'.$value->idproperty);?>" type="button" class="btn btn-danger">Delete</a>
<a href="<?php echo site_url('Property/loadAllPendingPosts');?>" type="button" class="btn btn-danger">Ignore</a>
<?php } ?>
<p> </p>
<p> </p>
<p> </p>
</div>
<div class="col-md-1">

</div>
</div>
</body>
</html>
<div class="container">
  <?php
      if($PPROPERTIES == null){ ?>
        <h3>No any Pending posts </h3>
     <?php } ?>
     <?php 
     if($PPROPERTIES != null) { ?>
      <h2 style="margin-top:125px;">PENDING POST </h2>
    <table class="table table-striped" style="margin-top:10px;">
    <thead>
      <tr>
        <th>Property Type</th>
        <th>District</th>
        <th>AddressLine 1</th>
        <th>AddressLine 2</th>
        <th>City</th>
        <th>Revenue Expecting</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($PPROPERTIES as $value1) {?>
        <tr><td><?=$value1->propertyType;?></td>
        <td><?=$value1->district;?></td>
        <td><?=$value1->addressLine1;?></td>
        <td><?=$value1->addressLine2;?></td>
        <td><?=$value1->city;?></td>
        <td><?=$value1->revenue;?></td>
        
        </tr>
        <?php }?> 
      </tbody>
      <?php
        $success_msg= $this->session->flashdata('success_msg');
      if($success_msg){
      ?>
        <div class="alert alert-success">
        <strong>Success!</strong> Successfully Deleted the Post
        </div>
       <?php
          }
        ?>
      <?php
      $success_msg2= $this->session->flashdata('success_msg2');
      if($success_msg2){
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Your post has been added to the pending list
        </div>
        <?php
      }
      ?>
    </table>
    <?php } ?>
    <?php 
      if($PROPERTIES == null){ ?>
        <h3>You have not submitted any post yet </h3>
      <?php } ?>
    <?php
      if($PROPERTIES != null) { ?>    
    <h2 style="margin-top:40px;">POST YOU HAVE SUCCESFULLY PUBLISHED</h2>
    <table class="table table-striped" style="margin-top:10px;">
    <thead>
      <tr>
        <th>Property Type</th>
        <th>District</th>
        <th>AddressLine 1</th>
        <th>AddressLine 2</th>
        <th>City</th>
        <th>Revenue Expecting</th>
        <th>Date Uploaded </th>
        <th>Dalete</th>
      
      </tr>
    </thead>
    <tbody>
      <?php foreach($PROPERTIES as $value) {?>
      	<tr><td><?=$value->propertyType;?></td>
      	<td><?=$value->district;?></td>
      	<td><?=$value->addressLine1;?></td>
      	<td><?=$value->addressLine2;?></td>
      	<td><?=$value->city;?></td>
      	<td><?=$value->revenue;?></td>
      	<td><?=$value->Date;?></td> 
      	<td><a href="<?php echo site_url('Property/deleteProperty/'.$value->idproperty);?>" type="button" class="btn btn-danger btn-xs">Delete</a></td>
        </tr>
      	<?php }?>	
      </tbody>
  </table>
    
    <?php 
    } ?>    

</div>
<style type="text/css">
  #s4{
    background-color: rgb(140, 138, 164)
  }
  #p1{
    font-weight: bold;
  }
  #h1{
    font-weight: bold;
  }
  #i1{
    border-style:solid;
    border-width:5px;
    border-color:rgb(177, 170, 176);
  }
</style>
<div class="container-fluid">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row-fluid">
    <div class="span4">

    </div>
    <div class="span4">

    </div>
    <div class="span4">
      <?php echo form_open('Districtview/showhouses'); ?>
      <div class="form-group">
    	    <label for="exampleInputEmail1">Search By District</label>
    	    <select class="form-control" id="district" name="district">
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
      <input type="submit"  class="btn btn-primary" name="submit" value="Search">
      <?php echo form_close(); ?>

    </div>

  </div>
  <?php if($this->session->flashdata('success8')){?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success8'); ?>
      </div>
    <?php } ?>
  <?php if (isset($result)){?>
  <h1 id="h1">Houses</h1>


  <?php foreach($result as $key){ ?>
  <div class="row-fluid">


  <div class="span4">

    <img src="<?php echo base_url(); ?>uploads/<?php echo $key['imgName']; ?>" align="middle" id="i1">
    <br>
    <br>
    <p>
      <?php echo form_open('Houses/viewhouse'); ?>
      <input type="hidden" value="<?php echo $key['idproperty']; ?>" class="form-control"   name = "id1"  >
      <input type="submit"  class="btn btn-primary" name="submit" value="Read more">
      <?php echo form_close(); ?>
    </p>

  </div>
  <br>

  <div class="span4">
    <div class="" id="p1">
      <p><?php echo $key['description']; ?></p>
      <br>
      <p>District:-<?php echo $key['district']; ?></p>

    </div>


  </div>

  <br>
  <div class="span4" >

  </div>

  </div>
  <?php } ?>
  <?php } ?>
















</div>

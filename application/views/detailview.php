<style media="screen">
#i{border-style:solid;
    border-width:5px;
    border-color:redrgb(198, 146, 153);}

</style>
<div class="row-fluid front-content">
  <div class="span12">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </div>
  <div class="span12">
    <div class="row-fluid">


        <div class="span6">

          <b> Image </b>
          <br>
          <img id="i" src="../../uploads/<?php echo $res['imgName']; ?>">


        </div>

        <div class="span6">


        <b>District</b>
        <p><?php echo $res['district']; ?></p>
        <br>
        <b>City</b>
        <p><?php echo $res['city']; ?></p>
        <br>
        <b>Revenue</b>
        <p><?php echo $res['revenue']; ?>Rs<br>Per Year</p>
        <br>
        <b>Uploaded Date</b>
        <p><?php echo $res['Date']; ?></p>
        <br>
        <b>Contact Number</b>
        <p><?php echo $res['telephone']; ?></p>
        </div>


    </div><!-- end row-fluid -->
  </div>
  <div class="span6">
    <b class="bold" > Address </b>

    <p><?php echo $res['addressLine1']; ?><br><?php echo $res['addressLine2']; ?></p>

    <br>
    <br>
  </div>


  <div class="span6">
    <b class="bold" > Description </b>

    <p><?php echo $res['description']; ?></p>

  </div> <!-- end span12 -->
</div>

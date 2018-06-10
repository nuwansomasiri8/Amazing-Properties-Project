<div class="col-md-1">


</div>
<div id="outer" class="col-md-8">
    <?php foreach($APROPERTIES as $value) { ?>
    <div class="row">
    <div id="inner" class="col-md-10">
        <div class="col-md-5">
            <img alt="" src="<?php echo base_url(); ?>uploads/<?=$value->imgName;?>" height="200px;" width="250px;">
        </div>
        <div class="col-md-5">
            <div class="type"><?=$value->propertyType;?> <br/> </div>
            <div class="city"> <?=$value->city;?> <br/> </div>
            <div class="description"><?=$value->description;?>  </div>
            <div class="date"> <?=$value->Date;?> <br/> </div>
            <div class="time"><?=$value->curTime;?> <br/></div>
            <div> <a href="<?php echo site_url('Property/loadPropertyForMoreInfo/'.$value->idproperty);?>"> View More Details</a> </div>

        </div>
    </div>
        </div>
    <?php } ?>
    <?php
        echo $this->pagination->create_links();
    ?>

</div>
<div class="col-md-1">



</div>
</div>
</body>
</html>

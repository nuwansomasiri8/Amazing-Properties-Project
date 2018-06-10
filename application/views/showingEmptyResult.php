<div class="col-md-1">


</div>
<div class="col-md-10">
    <?php
    $msg= $this->session->flashdata('no_result');
    if($msg){
        ?>
        <div class="alert alert-warning">
            <strong>No result found !</strong>
        </div>
        <?php
    }
    ?>
</div>

<div class="col-md-1">


</div>

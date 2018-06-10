<div class="row-fluid slide">
				<div class="span12">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="<?php echo base_url(); ?>resources/images/gy.jpg">
								<div class="carousel-caption">
									
								</div>
							</div>
							<div class="item">
								<img alt="" src="<?php echo base_url(); ?>resources/images/slider.jpg">
								<div class="carousel-caption">
								
								</div>
							</div>
							<div class="item">
								<img alt="" src="<?php echo base_url(); ?>resources/images/slider1.jpg">
								<div class="carousel-caption">
									
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
					</div>
				</div>
			</div><!-- end slide -->
			
			<div class="row-fluid front-content">
				<div class="span12">
					<div class="row-fluid">
						<h1><b>Latest Ads</b></h1>
						<?php echo form_open('Detailview/viewmore'); ?>
						<div class="span4">
							<?php if (isset($land)){ ?>
								<h3>Lands</h3>
								<img src="<?php echo base_url(); ?>uploads/<?php echo $land['imgName']; ?>">
								<div class="" id="div4">
									<p><?php echo $land['description']; ?></p>
								</div>

								<input type="hidden" value="<?php echo $land['idproperty']; ?>" class="form-control"   name = "id1"  >
								<input type="submit"  class="btn btn-primary" name="submit1" value="Read more">
							<?php } ?>
						</div>

						<div class="span4">
							<?php if ($house){ ?>
								<h3>Houses</h3>
								<img src="<?php echo base_url(); ?>uploads/<?php echo $house['imgName']; ?>">
								<div class="" id="div4">
									<p><?php echo $house['description']; ?></p>
								</div>

								<input type="hidden" value="<?php echo $house['idproperty']; ?>" class="form-control"   name = "id2"  >
								<input type="submit"  class="btn btn-primary" name="submit2" value="Read more">
							<?php } ?>
						</div>

						<div class="span4">
							<?php if ($com){ ?>
								<h3>Commercial Properties</h3>
								<img src="<?php echo base_url(); ?>uploads/<?php echo $com['imgName']; ?>">
								<div class="" id="div4">
									<p><?php echo $com['description']; ?></p>
								</div>

								<input type="hidden" value="<?php echo $com['idproperty']; ?>" class="form-control"   name = "id3"  >
								<input type="submit"  class="btn btn-primary" name="submit3" value="Read more">
							<?php } ?>
						</div>
						<?php echo form_close(); ?>
					</div><!-- end row-fluid -->
				</div><!-- end span12 -->	
			</div><!-- end front-content -->
	<!-- 	</div>	
	</div>end wrapper -->
	


<!DOCTYPE HTML>
<html lang="en-us" xmlns="http://www.w3.org/1999/html">
<head>
  <title>Preperty Management pvt ltd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>resources/css/admin.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/admin.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="#">Prime Propery Management</a>
            </div>
        <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="#">Home </a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="<?php echo site_url('Users/userLogout')?>" > Logout </a></li>
            <li><a href=""> You are logged in as:</a></li>
            <li><a href=""> <?php
                $uname = $this->session->userdata('userName'); 
                echo $uname
                ?> </a></li>
       
      </ul>
    </div><!--/.nav-collapse -->
</div>
        </div>

   <div class="row">
            <div class="col-md-12" style="background-color:#616161;padding:10px;">
                <div class="input-group" id="adv-search">
                   <!-- <form method="get" action="<?php /*echo base_url();*/?>index.php/Property/searchPropertiesFromKeyword">-->
                    <input type="text" class="form-control" placeholder="Search for Properties" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Property/searchProperties">
                                        <div class="form-group">
                                            <label for="filter">Search by</label>
                                            <select class="form-control" name="advance-search">
                                                <option selected>All Properties</option>
                                                <option>Land</option>
                                                <option>Houses</option>
                                                <option>Apartments</option>
                                                <option>Portions and Rooms</option>
                                                <option>Holiday and Short-Term Rental</option>
                                                <option>Commercial Property</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="contain">Author</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label for="contain">Contains the words</label>
                                            <input class="form-control" type="text" />
                                        </div>-->
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--/.navbar -->

<div class="row">
    <div class="col-md-2">
        <ul class="nav flex-column" style="margin-top: 50px;">
            <li class="nav-item"><a class="nav-link active" href="<?php echo site_url('Property/loadAllApprovedPosts')?>"> All Posts</a> </li>
          <li class="nav-item"><a class="nav-link active" href="<?php echo site_url('Property/loadAllPendingPosts')?>">Pending Posts</a></li>

        </ul>
    </div>
    







  
  
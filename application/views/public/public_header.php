<!DOCTYPE html>
<html>
    <head>
        <title>Article List</title>
        
        <?= link_tag('assets/css/bootstrap.min.css')?>
    </head>
    <body>
        <nav class="navbar navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="#">Article</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php echo form_open('/user/search',['class'=>'navbar-form navbar-left','role'=>'search']) ?>
                    <!--<form class="navbar-form navbar-left" role="search">-->
                        <div class="form-group">
                            <input type="text" name="query" class="form-control" placeholder="Search">
                        </div>
                    
                        <button type="submit" class="btn btn-default">Submit</button>
                        
                    <?php echo form_close(); ?>
                   <?php  echo form_error('query',"<p class='navbar-text text-danger'>","</p>");?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('/login');?>">Admin LogIn</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
    </body>


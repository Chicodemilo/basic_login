<!DOCTYPE html>
<html lang="en" >
<head>
    <title>
      PHP main_name here
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico">
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <script type="text/javascript" src="<?php echo base_url();?>javascript/apartment_javascript.js"></script>
    <link href="<?php echo base_url();?>css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>javascript/jquery-ui-1.10.4.custom.js"></script>
   
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/apartment_main.css">
    <script>
        // google analytics
    </script>


</head>
<body>
    <script type="text/javascript">
   
    </script>
    

    <header>
        
        <h1>PHP main_name here</h1>
        <p class="small1">PHP slogan here</p>
        
    </header>

    
    <div id="nav_bar">
        <table style="font-size: .9em;  font-weight: bold;">
    
            <tr><td >Hello, <?php 
                $test = $this->session->userdata('first_name');
                echo $test;
                ?>
            </td></tr>
            <tr><td><a href='<?php echo base_url(); ?>login/logout' style="font-size: .9em; ">LOGOUT</a></td></tr>
            
    
        </table>

    </div>
    

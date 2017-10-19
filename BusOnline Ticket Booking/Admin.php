<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css" media="all">
        <title></title>
    </head>
    <body>
        <!--main cointainer starts here-->
        <div class="main_wrapper">
            
             <!--header starts here-->
            <div class="header_wrapper">
                
                <a href="index.php"> <img id="logo" src="logo.png"></a>
            </div>
              <!--header ends here-->
            
              <!--menubar starts here-->
             <div class="menubar">
                 <ul id="menu">
                     <li><a href="index.php">HOME</a></li>
                     <li><a href="all_adds.php">ALL ADDS</a></li
                     <li><?php
                     if(loggedin()){
                         echo '<a href="#">MY ADDS</a>';
                         echo '<a href="insertadd.php">INSERT ADDS</a>';
                         echo 'LOGGED IN AS ';
                         echo getuserfield('UserName');
                         echo '<a href="logout.php">LOGOUT</a> ';
                     }
                     else { 
                         echo '<a href="login.inc.php">LOGIN</a>';
                         echo '<a href="register.php">SIGNUP</a>';
                         
                     } 
                     ?></li>
                     <li><a href="#">CONTUCT US</a></li>
                     <li><a class="current" href="AdminLogin.php">ADMIN</a></li>
                     
                 </ul>
                 <!--search bar starts here-->
                 <div id="searchbox" >
                     <form method="get" action="result.php" enctype="multipart/from-data">
                         <input id="sbox" type="text" name="user_query" placeholder="search for rent">
                         <input id="sbut" type="submit" name="search" value="Search">
                     </form>
                     
                 </div>
                 <!--search bar ends here-->
                    
                </div>
              <!--menubar ends here-->
              
            
              <!--content wrapper starts here-->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title">Property Type</div>
                    <ul id="property">
                        <?php
                     getPropertyType();
                        ?>
                    </ul>
                    
                    
                    <div id="sidebar_title">Location</div>
                    <ul id="property">
                        <?php
                        getPropertyLocation();
                        ?>
                    </ul>
                    
                    <div id="sidebar_title">Bed Rooms</div>
                    <ul id="property">
                        <?php
                        getBedrooms();
                        ?>
                    </ul>
                    
                    
                </div>

            
                <div id="content_area">
                    
                  <div id="product_box">
                       <?php
                       $query="SELECT * FROM adds";
    
    $run_add=  mysql_query($query);
    while ($row_add=  mysql_fetch_array($run_add)){
        $add_id=$row_add['add_id'];
        $add_propertytype=$row_add['add_propertytype'];
        $add_location=$row_add['add_location'];
        $add_bedroom=$row_add['add_bedroom'];
        $add_title=$row_add['add_title'];
        $add_flatsize=$row_add['add_flatsize'];
        $add_rent=$row_add['add_rent'];
        $add_image=$row_add['add_image'];
        $add_PhoneNumber=$row_add['user_PhoneNumber'];
        
        echo "
        <div id='divcontent'>
        <h2>$add_title</h2>
       <a href='details.php?add_id=$add_id'><img src='$add_image' width='340' height='230'/></a>
            <p>RENT: <b>$add_rent</b> Taka</p>
                <a href='DeleteAdd.php?add_id=$add_id'><button id='sbut'>DELETE</button></a>
        </div>
        ";
    }

                       ?>
                  </div>
                    
                </div>
                
            </div>
              <!--content wrapper ends here-->
            
           
            
            <div id="footer">this is footer</div>
            
            
            
        </div>
         <!--main cointainer ends here-->
        <?php
        // put your code here
        ?>
    </body>
</html>

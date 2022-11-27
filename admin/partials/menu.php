<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>V Event Admin</title>

        <link rel="stylesheet" href="../cs/adminSty.css">
    </head>
    
    <body>
        
        
        
        <div class="navbar">
		 <style>
		 .navbar {
			 
			 overflow: hidden;
			 background-color: #333;
			 position: sticky; 
			 position: -webkit-sticky;
			 top: 0;
			 font-family: Ariel;
		 }
		 
		 .navbar a { 
		 float:left; 
		 display: block;
		 color: #ff0066;
		 text-align: center;
		 padding: 20px 40px;
		 text-decoration: none;
		 }
		 .navbar a.right {
			 float:right;
		 }
		 .navbar a:hover { 
		 background-color: #ddd;
		 color: #00cc66;
		 }
		 .navbar a.active { 
		 background-color: #666;
		 color: #ccff33;
		 }
		 </style>
		 
		 		 <a  href="manage-event.php">Event</a>
								                         <a href="manage-admin.php">Manage Admin</a>
								                         <a href="logout.php">LogOut</a>



		 
		 
		 </div>
		 
		 <div class="about-section">
		 <h1>V EVENT</h1>
		 <h3>Online Event Booking</h3>
		 </div>
	</body>
	</html>
		  
        
        
       
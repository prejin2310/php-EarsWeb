<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Candy Template</title>
<meta name="keywords" content="blue candy template, free html css website, blue menu bar, dark gray background" />
<meta name="description" content="Blue Candy is a free CSS Template from templatemo.com that can be used for any purpose." />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include('link.php');
session_start();
?>
<div id="templatemo_main_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	
		<div id="site_title">
            <a href="#" target="_parent"><img src="images/ears.png" width="301" /></a>
        </div> <!-- end of site_title -->
        
        <div id="header_right">
        
        	<div id="twitter">
            	<a href="#">Follow us on Twitter</a>
            </div>
            
            <div class="cleaner"></div>
            
            <h1>&nbsp;</h1>
          <p>&nbsp;</p>
        </div>
        
    	<div class="cleaner"></div>
        
    </div>
    
    <div id="templatemo_menu">
   	  <?php
				
				include('menu.php');
				?>
    </div> <!-- end of templatemo_menu -->
    
    <div id="content_wrapper">
    	
        <div id="content_left">
        
        	<div class="content_box">
				<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
				<table width="600" border="0" align="center">
				  <tr>
                                      <td><h2><a href="reg.php">User Register</a></h2></td>
				    <td><h2><a href="rep.php">Case Report</a></h2></td>
				    <td><h2><a href="monitor.php">Monitor Case</a></h2></td>
                                    <!--
				    <td><h2><a href="doctor.php">User Register</a></h2></td>
				    <td><h2><a href="pat.php">Case Report</a></h2></td>
				    <td><h2><a href="staff.php">Monitor Case</a></h2></td>-->
			      </tr>
				 
			  </table>
				
	            <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <div class="cleaner"></div>
            </div>
        </div>
    	
        <?php
		include('side.php');
		?>
    	<div class="cleaner"></div>
    </div>
    
    <div id="templatemo_footer">
      <div class="cleaner"></div>
    </div> <!-- end of footer -->
    
    <div id="templatemo_copyright">
    
         <?php
		include('footer.php');
		?>
    </div>
    
    <div class="cleaner"></div>
</div>
</div>
</body>
</html>
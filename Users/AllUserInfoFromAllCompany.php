
<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Forever 26</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/icon.min.css" />

  <link rel="stylesheet" href="../css/style.css">

</head>

<body>

  <!-- Page Contents -->
  <div class="pusher">
      <!-- ui vertical masthead center aligned segment indexbackground -->
      <div style="background-color: #E91E63;" class="ui inverted vertical masthead center aligned segment indexbackground">

        <div class="ui container">
          <div class="ui large secondary inverted pointing menu">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <a class="item" href="../../index.html">Home</a>
            <a class="active item" href="../../About/About.html">About</a>
            <a class="item" href="../../Products/Products.html">Products</a>
            <a class="item" href="../../News/News.html">News</a>
            <a class="item" href="../../Contacts/Contacts.php">Contacts</a>
            <a class="item" href="../../Users/Users.php">Users</a> 
            <div class="right item">
             <a class="ui inverted button" href="../../Login/login.php">Log In </a>
           </div>
         </div>
       </div>


      <!-- Displey table of data -->
      <div  class="ui inverted doubling stackable grid container" style="background-color: #E91E63;">
        <div class="sixteen wide column">
         <div class="ui vertical masthead segment">
          <div class="ui basic segment">
           <div class="ui stackable column grid">
            <div class="one wide column"></div>
            <div class="fourteen wide column">
<!-- Users from My acount -->
<br>
<br>
			<h2 class="ui  inverted horizontal divider header">
			  <i class="users icon"></i>
			  Users Of Forever 26
			</h2>
				
				<div class="ui inverted left aligned header">Name: Shweta Kothari
                <br>
                SJSU ID: 011 824 605
                <br>
                Website:<a href="http://persimmonspie.com"> http://persimmonspie.com</a> 

				</div>
				

 				<?php
 				     extract($_POST);
				      $db = mysqli_connect('localhost','shwetakothari','Preyas26jan','Forever 26')
				      or die('Error connecting to MySQL server.');
   				      $query = "SELECT * FROM Users WHERE 1 ;";
				      $result = mysqli_query($db, $query) or die('Error querying database.');
 				      
     			 ?>

              <div class="ui celled   table">
              <table class="ui celled table">
                <thead>
                  <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>HomeAddress</th>
                    <th>HomePhone</th>
                    <th>CellPhone</th>
                  </tr>
                </thead>
			  
                <?php
                while($row = $result->fetch_array())
                {
                  echo "<tbody>
                  <tr>
                    <td>" . $row['FirstName'] . "</td>
                    <td>" . $row['LastName'] . "</td>
                    <td>" . $row['Email'] . "</td>
                    <td>" . $row['HomeAddress'] . "</td>
                    <td>" . $row['HomePhone'] . "</td>
                    <td>" . $row['CellPhone'] . "</td>
                  </tr>
                </tbody>";
              }
              mysqli_close($db);
              ?>    
            </table>  
</div>
<!-- Users by Suchita  -->


<br>
<br>
			<h2 class="ui  inverted horizontal divider header">
			  <i class="users icon"></i>
			  Users Of E BookStore
			</h2>
			
				<div class="ui inverted left aligned header">Name: Suchita Mudholkar
                <br>
                SJSU ID: xxx xxx xxxx
                <br>
                Website:<a href="http://suchitam.x10host.com"> http://suchitam.x10host.com</a> 

				</div>
			
             <?php
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, 'http://suchitam.x10host.com/users.php');
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               $content = curl_exec($ch);
               curl_close($ch);
               preg_match('#<table[^>]*>(.+?)</table>#is', $content, $matches);
              ?>
              <div class="ui  celled table">
            		<table class="table table-striped">
            		    <?php echo $matches[1];?>
            		</table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Footer -->

  <div style="background-color: #E91E63" class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item" href="Contacts.php" >Contact Us</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>


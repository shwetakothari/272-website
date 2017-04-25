<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Forever 26</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/icon.min.css" />

      <link rel="stylesheet" href="../../style.css" />

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

    <br>
    <br>

       <div class="ui two column centered grid">
            <div class="four column centered row">

            <br>
            <br><br>

               <div class="column"><img src="../images/9.jpeg" alt="Darphin Oil"  height="100%" width="100%"></div>
               <div class="column">
                  <h3 class = "ui yellow header">Fashion dress</h1>
                  <p style="color: grey; font-size:110%">
                     <?php
               if(! isset( $_COOKIE["counter"] ) )
                {
                  $counter=0;
                  setcookie("counter",$counter);
                  echo "the counter was not set  </br>";
                }
               if(! isset( $_COOKIE["product"] ) )
                {
                  $a  = array(9);
                  $product = serialize($a);
                  setcookie("product",$product);
                  echo "the product was not set  </br>";
                }
               else
                {
                  echo "the product is set in the coockie </br>";
                  $array = unserialize($_COOKIE["product"]);
                  $counter = $_COOKIE["counter"];
                  if ($counter == 4) 
                   {
                    array_shift($array);
                    $array[$counter] = 9;
                   }
                  else
                   {
                    $counter = $counter +1;
                    $array[$counter] = 9;// the product number clicked 
                   }
                  setcookie("counter",$counter);
                  $product = serialize($array );
                  setcookie("product",$product);
                }


                // for mostly viewed products.

                if(! isset( $_COOKIE["mcounter"] ) )
                {
                  $mcounter = array(prod9=>1, );
                  print_r($mcounter);
                  $marray = serialize($mcounter);
                  echo $marray;
                  setcookie("mcounter",$marray);
                  echo "the mcounter was not set  </br>";
                  print_r($_COOKIE['mcounter']);
                  $array = unserialize($_COOKIE["mcounter"]);

                  
  print_r($array);
                }
                else
                {
                  echo "the mcounter is set in the coockie </br>";
                  $array = unserialize($_COOKIE["mcounter"]);
                  print_r($array);
                  $array['prod9'] = $array['prod9'] + 1;
                  $mcounter = serialize($array );
                  setcookie("mcounter",$mcounter);

                }
          ?>
                  <h3 class= "ui yellow header">$135</h3>
                  </p>
                  <div class="ui large yellow basic animated button" tabindex="0">
                     <div class="visible content">
                        <i class="star icon"></i>
                     </div>
                     <div class="hidden content">Favorite</div>
                  </div>
                  <div class="ui large yellow basic animated button" tabindex="0">
                     <div class="visible content">
                        <i class="shop icon"></i>
                     </div>
                     <div class="hidden content">Add To Cart</div>
                  </div>
               </div>
            </div>
          
            </div>
         </div>
  </div>

  


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
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

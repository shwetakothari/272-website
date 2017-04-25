<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Forever 26</title>

      <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/icon.min.css" />

</head>

<body>

<!-- Page Contents -->
<div class="pusher">
<!-- ui vertical masthead center aligned segment indexbackground -->
  <div style="background-color: #E91E63;" class="ui inverted vertical masthead center aligned segment indexbackground">
<!-- HEADER -->
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
      <?php
            
            $array = unserialize($_COOKIE["product"]);
                  
                  $a = $array[0];
            
            ?>
    
    

     <div class="ui doubling stackable grid container"  >
            <div class="sixteen wide column" align="left" >
               <div class="ui inverted basic segment" style="background-color: #E91E63;">
                  <h1>Dresses</h1>
               </div>
            </div>
            
            <div class="three wide column" align="left" style="background-color: #E91E63;">
               <div class="ui vertical menu inverted" style="background-color: #E91E63;">
               <br>
               
                <div class="item" style="font-size: 150%">
                     <div class="header">Cookies</div>
                     <div class="menu">
                        <a class="item" href = "pfive.php">Last visited Items</a>
                        <a class="item" href = "mfive.php">Most visited items</a>
                     </div>
                </div>
                     
  
               <br>
               
                 
                  
              
               </div>
            </div>
            
            <div class="thirteen wide column">
               <div class="ui four doubling cards">
                                    <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?= "../images/".$array[4].".jpeg" ?>">
                     </div>
                     <div class="content">
                       
                        <div class="description">
                           <a href="<?= "../../Products/dresses/".$array[4].".php" ?>" > <?= "Product -".$array[4]  ?> </a>
                        </div>
                     </div>
                     <div class="ui two  massive bottom attached buttons">
                       <div class="ui yellow basic button">
                           <i class="star  yellow icon"></i>
                        </div>
                        <div class="ui pink basic button">
                           <i class="shopping bag pink icon"></i>
                        </div>
                     </div>
                  </div>
                                   
                                 
                                 
                                
                                  
                                    <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?= "../images/".$array[3].".jpeg" ?>">
                     </div>
                     <div class="content">
                        
                        <div class="description">
                           <a href="./dresses/7.php"><?= "Product -".$array[3]  ?></a>
                        </div>
                     </div>
                     <div class="ui two bottom attached buttons">
                       <div class="ui two  massive bottom attached buttons">
                       <div class="ui yellow basic button">
                           <i class="star  yellow icon"></i>
                        </div>
                        <div class="ui pink basic button">
                           <i class="shopping bag pink icon"></i>
                        </div>
                     </div>
                  </div>
                  </div>
                               


                                    <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?= "../images/".$array[2].".jpeg" ?>">
                     </div>
                     <div class="content">
                       
                        <div class="description">
                           <a href="./dresses/8.php"><?= "Product -".$array[2]  ?></a>
                        </div>
                     </div>
                     <div class="ui two bottom attached buttons">
                       <div class="ui teal basic button">
                           <i class="star icon"></i>
                        
                        </div>
                        <div class="ui violet basic button">
                           <i class="shopping bag icon icon"></i>
                           <a style="decoration:no decoration; color:white" href="skincarelist/evelomCream.php"></a>
                        </div>
                     </div>
                  </div>
                                    <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?= "../images/".$array[1].".jpeg" ?>">9.jpeg">
                     </div>
                     <div class="content">
                        
                        <div class="description">
                           <a href="./dresses/9.php"><?= "Product -".$array[1]  ?></a>
                        </div>
                     </div>
                    <div class="ui two  massive bottom attached buttons">
                       <div class="ui yellow basic button">
                           <i class="star  yellow icon"></i>
                        </div>
                        <div class="ui pink basic button">
                           <i class="shopping bag pink icon"></i>
                        </div>
                     </div>
                  </div>
                                           <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?= "../images/".$array[0].".jpeg" ?>">10.jpeg">
                     </div>
                     <div class="content">
                        
                        <div class="description">
                           <a href="./dresses/10.php"><?= "Product -".$array[0]  ?></a>
                        </div>
                     </div>
                    <div class="ui two  massive bottom attached buttons">
                       <div class="ui yellow basic button">
                           <i class="star  yellow icon"></i>
                        </div>
                        <div class="ui pink basic button">
                           <i class="shopping bag pink icon"></i>
                        </div>
                     </div>
                  </div>
            
                  
                  
                                 </div>
              
            </div>
         </div>
     
                     <script>
                        var rate_star;
                        var rate_comment;
                        var product_id;
                        product_id = "10003";
                        $( "#rate_submit" ).click(function() {
                          $( "#setRate" ).css("display", "none");
                          $( "#setRateThanks" ).css("display", "block");
                          rate_comment = $("#rate_input").val();
                          $.post("http://ritaccc.com/final-project/setRate.php", {rate_star: rate_star, rate_comment:rate_comment, product_id:product_id}, function(result){
                          });
                        });
                        
                        
                         $("#rateYo").rateYo({
                        starWidth: "40px",
                        fullStar: true
                         });
                        
                         $("#rateYo").rateYo()
                        .on("rateyo.set", function (e, data) {
                        rate_star = data.rating;
                         });
                     </script>
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

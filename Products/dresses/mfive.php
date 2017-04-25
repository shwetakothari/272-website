<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Forever 26</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/icon.min.css" />

      <link rel="stylesheet" href="../../style.css" />

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
          $ay = unserialize($_COOKIE["mcounter"]);

           arsort($ay);

          $b = array_keys($ay);
         

         
// first product
              switch ($b[0]) {
                    case "prod1":
                                  $i1 =1;
                                  break;
                    case "prod2":
                                  $i1 =2;
                                  break;
                    case 'prod3':
                                  $i1 =3;
                                  break;
                    case "prod4":
                                  $i1 =4;
                                  break;
                    case 'prod5':
                                  $i1 =5;
                                  break;
                     case "prod6":
                                  $i1 =6;
                                  break;
                    case "prod7":
                                  $i1 =7;
                                  break;
                    case 'prod8':
                                  $i1 =8;
                                  break;
                    case "prod9":
                                  $i1 =9;
                                  break;
                    case 'prod10':
                                  $i1 =10;
                                  break;

                    default:
                           $i = 0;
   
                            }
// second product
              switch ($b[1]) {
                    case "prod1":
                                  $i2 =1;
                                  break;
                    case "prod2":
                                  $i2 =2;
                                  break;
                    case 'prod3':
                                  $i2 =3;
                                  break;
                    case "prod4":
                                  $i2 =4;
                                  break;
                    case 'prod5':
                                  $i2 =5;
                                  break;
                     case "prod6":
                                  $i2 =6;
                                  break;
                    case "prod7":
                                  $i2 =7;
                                  break;
                    case 'prod8':
                                  $i2 =8;
                                  break;
                    case "prod9":
                                  $i2 =9;
                                  break;
                    case 'prod10':
                                  $i2 =10;
                                  break;              

                    default:
                           $i = 0;
   
                            }
// third product
              switch ($b[2]) {
                    case "prod1":
                                  $i3 =1;
                                  break;
                    case "prod2":
                                  $i3 =2;
                                  break;
                    case 'prod3':
                                  $i3 =3;
                                  break;
                    case "prod4":
                                  $i3 =4;
                                  break;
                    case 'prod5':
                                  $i3 =5;
                                  break;
                     case "prod6":
                                  $i3 =6;
                                  break;
                    case "prod7":
                                  $i3 =7;
                                  break;
                    case 'prod8':
                                  $i3 =8;
                                  break;
                    case "prod9":
                                  $i3=9;
                                  break;
                    case 'prod10':
                                  $i3 =10;
                                  break;              

                    default:
                           $i = 0;
   
                            }
// fourth product
              switch ($b[3]) {
                    case "prod1":
                                  $i4 =1;
                                  break;
                    case "prod2":
                                  $i4 =2;
                                  break;
                    case 'prod3':
                                  $i4 =3;
                                  break;
                    case "prod4":
                                  $i4 =4;
                                  break;
                    case 'prod5':
                                  $i4 =5;
                                  break;
                     case "prod6":
                                  $i4 =6;
                                  break;
                    case "prod7":
                                  $i4 =7;
                                  break;
                    case 'prod8':
                                  $i4 =8;
                                  break;
                    case "prod9":
                                  $i4 =9;
                                  break;
                    case 'prod10':
                                  $i4 =10;
                                  break;              

                    default:
                           $i = 0;
   
                            }
// fifth product
              switch ($b[4]) {
                    case "prod1":
                                  $i5 =1;
                                  break;
                    case "prod2":
                                  $i5 =2;
                                  break;
                    case 'prod3':
                                  $i5 =3;
                                  break;
                    case "prod4":
                                  $i5 =4;
                                  break;
                    case 'prod5':
                                  $i5 =5;
                                  break;
                     case "prod6":
                                  $i5 =6;
                                  break;
                    case "prod7":
                                  $i5 =7;
                                  break;
                    case 'prod8':
                                  $i5 =8;
                                  break;
                    case "prod9":
                                  $i5 =9;
                                  break;
                    case 'prod10':
                                  $i5 =10;
                                  break;             

                    default:
                           $i = 0;
   
                            }

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
                        <img src="<?= "../images/".$i1.".jpeg" ?>">
                     </div>
                     <div class="content">
                       
                        <div class="description">
                           <a href="<?= "../../Products/dresses/".$i1.".php" ?>" > <?= "Product -".$i1  ?> </a>
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
                        <img src="<?= "../images/".$i2.".jpeg" ?>">
                     </div>
                     <div class="content">
                        
                        <div class="description">
                           <a href="<?= "../../Products/dresses/".$i2.".php" ?>"><?= "Product -".$i2  ?></a>
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
                        <img src="<?= "../images/".$i3.".jpeg" ?>">
                     </div>
                     <div class="content">
                       
                        <div class="description">
                           <a href="<?= "../../Products/dresses/".$i3.".php" ?>"><?= "Product -".$i3  ?></a>
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
                        <img src="<?= "../images/".$i4.".jpeg" ?>">
                     </div>
                     <div class="content">
                        
                        <div class="description">
                           <a href="<?= "../../Products/dresses/".$i4.".php" ?>"><?= "Product -".$i4  ?></a>
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
                        <img src="<?= "../images/".$i5.".jpeg" ?>">
                     </div>
                     <div class="content">
                        
                        <div class="description">
                           <a href="<?= "../../Products/dresses/".$i5.".php" ?>"><?= "Product -".$i5  ?></a>
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

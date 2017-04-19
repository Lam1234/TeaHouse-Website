<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  
  <link rel="shortcut icon" href="favicon.ico" >
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCgRoRnyozvwO052s17F51kGRx1qyPt-04"></script
 

  </head>
  

  <body id="myPage">
       <div class="text-center" id="wrapper">
         <div >
         <?php echo $header?>
         
         </div>
        
		 
        
        <div>
        	<?php echo $navigation?>
        
        </div>
         <?php echo $carousel2; ?>
        <div >
        	<?php echo $collapsibles; ?>
        
        </div>
        
        <div >
        	<?php echo $specialevent; ?>
        
        </div>
        
        
        
        <div id="content_area">
        	<?php echo $content; ?>
        </div>
         
         
         <div >
         <?php echo $googlemap; ?>
           
         </div>
       
       <div>
         <?php echo $footer?>
       
       </div>
       
       
        
       </div>
       

       <script>
    $(".btn-modal").click(function(){

        <?php 
        if(isset($_SESSION['username'])){
        ?>	 
        	//echo '<a href="test1.php"> loginorreg('.$_SESSION['username'].')</a>';
        	//alert("tttt");
        	 
        	//$content= $_SESSION['username'];
        	$("#myModal").modal('show').css({
               
                "margin-top": "60px"
                
            });
        	
        <?php 
        }
        
        else{
        	?>
        	//$content = 'Welcome into <a href="../Management.php">Management Center </a> !';
       
       
        	alert("Please login");
        	window.location.href="./user_reg/loginorreg.php";
       <?php  	
        }
        
        
        ?>
       
    });
   


</script>
   <script src="GoogleMap.js"> </script>
   <script src="JS/SpecialEvent.js"></script>
   <script src="JS/Collapsible.js"></script>
   <script>

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });

</script>
   
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 9000);
}
</script>


   
 </body>
 </html>
  

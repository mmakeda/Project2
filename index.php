<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pita Pushers Order</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="wrapper">


<!--------------------Header---------------------->
<header>
    <section class="secOne">
        
        
    </section>
</header>


<!---------------------------Main------------------------->
<section class="secTwo">
<?php 

include('item.php');


?>


    <h2>Pita Pushers Online Ordering</h2>
        <h4>Order online and pick up at the truck!</h4>
        <?php
               
        ?>
        <form action="">
            <h3>Place your Order</h3>
            <input type="radio" name="item" value="sandwich" > Falafel<br>
            <input type="radio" name="item" value="pita" > Pita<br>
            <input type="radio" name="item" value="fries" > Fries <br><br>
            <button class="submit" type="submit" name="submit" value="add">Add to cart</button>
         
        </form>
        
     <?php echo 'You chose:' . $_POST['item'];?>
        <br>
        <br>
        <br>
        
      <tr>      
        <td>
                    How Many?																						
        </td>
            <br>

        <td>
   
         </td>
      </tr>
        
<hr>
        
        <form action="">
            <h3>Side Order</h3>
            
            <input type="checkbox" name="side" value="fries" > Harra Frites<br>
            <input type="checkbox" name="side" value="hummus" > Hummus<br>
            <input type="checkbox" name="side" value="beets" > Shamandar Bi Tahini<br>
               
            <input type="checkbox" name="side" value="" > <br>
            <input type="checkbox" name="side" value="" > <br>
            <input type="checkbox" name="side" value="" > <br>
            
            <br>
            
            <button class="submit" type="submit" name="submit" value="add">Add to cart</button>
        </form>
        
        

</section>
    
    
        
        
<section class="secThree">
    <p><b>
	Order Detail
    </b></p>
</section>


    


<!-----Footer-------------------->
<footer>
    <section class="secFour">
        
        
    </section>
</footer>

    </div>
</body>
</html>

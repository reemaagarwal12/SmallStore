<?php 

$user = 'root'; 
$password = '';  
$database = 'management';  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 

if ($mysqli->connect_error) { 
    die('Connect Error (' .  $mysqli->connect_errno . ') '.  $mysqli->connect_error); 
} 

$sql = "SELECT * FROM inventory"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
<div align="right">
<div id="google_translate_element"></div>
<span><script type="text/javascript">
//<![CDATA[
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
//]]>
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</script></span></div>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Inventory Management</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&Cinzel">

<div class="header">
<h1> INVENTORY </h1>
</div>
    <style>
      *{
    margin: 0;
  }
.header{
  width: 100%;
  padding: -20px;
  background-color: #BC9B8D;
  color:white;
}
.header h1{
  text-align: center;
  color: white;
  text-decoration: none;
  font-size: 48px;
  letter-spacing: 2px;
  font-weight: 600;
  padding: 25px;
}
body{
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    background-image:url("https://images.unsplash.com/photo-1583175142872-c31e3ee80a8c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");
}     
tr{
  font-size: 20px;
  font-weight: bold;
}
th{
  color:white;
  background-color: #5E5754;
}
    



     
    </style> 
</head> 

<div class="container">           
  <table class="table table-striped">
    
        
            <tr> 
                <th>Products</th> 
                <th>Quantity(unit/kg)</th> 
                <th>Price(unit/kg)</th> 
            
            </tr> 
            <?php    
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr>  
                <td><?php echo $rows['Products'];?></td> 
                <td><?php echo $rows['Quantity(unit/kg)'];?></td> 
                <td><?php echo $rows['Price(unit/kg)'];?></td> 
    
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 


</html> 
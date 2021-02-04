<?php
require('database.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $product =$_REQUEST['product'];
    $quan = $_REQUEST['quan'];
    $price = $_REQUEST['price'];
    $ins_query="insert into inventory
    (`Products`,`Quantity(unit/kg)`,`Price(unit/kg)`)values
    ('$product','$quan','$price')";
    mysqli_query($conn,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&Cinzel">
<style>
    body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    width: 100%;
    height: 100%;
    margin-top: 25px;
    background: url("https://images.pexels.com/photos/3473569/pexels-photo-3473569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940.jpg") no-repeat 50% 50%;
    top: 0;
    display: table;
    background-size: cover;
}
.content h1{
    font-family: 'Raleway', sans-serif;
    color: #f9f3f4;
    font-size: 200%;
    text-shadow: 0 0 300px #000;
}
.content{
    max-width: 500px;
    margin: auto;
    text-align: center;

}
.form{
    text-align: center;
    color: #f9f3f4;
}
a{
    text-decoration: none;
    color: white;
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    font-size: 20px;
}
.content .a span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  form{
    text-align: center;
    font-size: 25px;
    font-family:'Raleway', sans-serif;
  }
  
  button{
    border-radius: 7px;
    color: #000;
    text-decoration: none;
    font-family: 'Raleway', sans-serif;
    font-size: 20px;
    border: 3px solid;
    padding: 10px 16px;
    font-weight: bold;
    display: inline-block;
    margin-right: 25px;
    margin-top: 25px;
    transition: all 0.5s;
    cursor: pointer;
    }
   input {
   width: 300px;
   height: 25px;
   padding-bottom: 15px;
   border-radius: 15px;
   }
   ::placeholder{
       font-size: 20px;
       text-align: center;
       font-family: 'Raleway', sans-serif;
   }
    
    </style>

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
</head>
<body>
       
<div class="form">
    <div class="a">
 <a href="welcome.html">Back to home</a>
| <a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
</div>
<div class="content">
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input type="text" name="product" placeholder="Enter Product" required /><br><br>
<input type="number" name="quan" placeholder="Enter Quantity" required /><br><br>
<input type="number" name="price" placeholder="Enter Price" required /><br><br>
<button name="submit" id="submit" type="submit" value="Submit">Submit</button>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>

</body>
</html>
<?php 
session_start();
include('header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']); 
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name']."".$user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['username'] = $user[0]['username'];		
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<title>LOGIN </title>

<script src="js/invoice.js"></script>
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
    background: url("https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
    top: 0;
    display: table;
    background-size: cover;
}
.content h1{
    font-family: 'Raleway', sans-serif;
    color: #f9f3f4;
    font-size: 250%;
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
   width: 200px;
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

</head>
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
<div class="form">
<b><a href="welcome.html">Back to home</a> </b>
</div>
		<div class="content">
		<h1>Invoice User Login</h1>	
		<br>	
		<form method="post" action="">
			<div class="form-group">
			<?php if ($loginError ) { ?>
				<div class="alert alert-warning"><?php echo $loginError; ?></div>
			<?php } ?>
			</div>
		
				<input name="email" id="email" type="text" class="form-control" placeholder="Username" autofocus="" required>
				<br>
				
				<input type="password" class="form-control" name="pwd" placeholder="Password" required>
				<br>
				<button name="submit" id="submit" type="submit" value="Submit">Login</button>
			</div>
		</form>
		<br>
				
	</div>		
</div>		
</div>

<?php include('footer.php');?>
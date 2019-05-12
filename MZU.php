<!DOCTYPE html>
<html>
<head>
	<title>MZU - Personal Website</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	

<style>
	body {
		margin:25px;
		background-image: linear-gradient(to right, #35524a , #32de8a);		
		font-family: 'Josefin Sans', sans-serif;
}
html {
  scroll-behavior: smooth;
}
.jumbotron{
	background-image: linear-gradient(to right, white, #779cab);	
}
/*sticky navbar*/
 .affix {
    top: 0;
    width: 100%;
    z-index: 999;
  }
	

	div.polaroid {
  		width: 100%;
  		height:300px;
  		background-color: #32de8a;
  		box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.4), 0 20px 40px 0 rgba(0, 0, 0, 0.38);
	}
	#headerTitle{
			font-family: 'Josefin Sans', sans-serif;
			padding: 50px;
			float: left;
			font-size: 28px;
		}

		.zaki{
			  width: 50%;
			  float:left;
		}

			.navbar {
  			list-style-type: none;
  			margin: 0;
  			padding: 0;
  			overflow: hidden;
  			color: #779cab;
  			font-family: 'Lato', sans-serif;
  			background-color: #627c85;
  			position: sticky;
			}
		.navbar li {	
  			float: left;
			}
		.navbar li a {
  			display: block;
  			color: white;
  			text-align: center;
  			padding: 14px 16px;
  			text-decoration: none;
			}
		.navbar li a:hover {
  			background-color: #32de8a;
			}


input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
  background-color: #779cab;
}

.footer-section {
				background: #40424a;
				padding: 20px 0;
				color: white;
}

/*Animations*/

	.socialicons:hover{
			position: absolute;
			animation-name: clockwise;
  			animation-duration: 1s;
  			animation-iteration-count: 1;
		}
		@keyframes clockwise {
  			from {transform: rotate(0deg);}
  			to {transform: rotate(360deg);}

}
</style>

<script>
$(document).ready(function(){
  $(".jumbotron").hover(function(){
    $(this).css("box-shadow", "0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.19)");
    }, function(){
    $(this).css("box-shadow", "0 0 0 0 rgba(0, 0, 0, 0), 0 0 0 0 rgba(0, 0, 0, 0)");
});


});
</script>

</head>
<body>
    <div class="navbar" data-spy="affix">

	<ul class="navbar">
  <li><a class="active">Achievements and Personal Statement</a></li>
  <li><a href="#edu">Education</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#exp">Experience</a></li>
  <li><a href="#skills">Skills</a></li>
  <li><a href="#social">Social Media</a></li>
  <li><a href="#feedback">Feedback form</a></li>
</ul>

</div>



	<div class="container">
 		 <div class="jumbotron">
 		 		 <img class="img-rounded" src="https://scontent.fisb7-1.fna.fbcdn.net/v/t1.0-1/p320x320/37399809_2226875523995303_3897869076671758336_n.jpg?_nc_cat=108&_nc_ht=scontent.fisb7-1.fna&oh=47c30fa908a609a8964bfbc12a7f3268&oe=5CF9BCC0" alt="Mypic" style=" width:200px; height:210px; float: right;">
 		 		<h1>Muhammad</h1> 
 		 		<h1>Zakiullah</h1> 		
 		 		<h1>Usman</h1> 
    		  				 
    			 <p>A content writer seeking to explore new venues.</p>
  			</div> 
		</div>

		<div class="container" id="edu">
 		 <div class="jumbotron">
    			<h1>Education</h1> 
    			<div class="row">
  					  <div class="col-sm-4"><span class="glyphicon glyphicon-star" style="font-size:25px;"></span><h2>O levels (2015)</h2></div>
  					  <div class="col-sm-4"><span class="glyphicon glyphicon-star" style="font-size:25px;"></span><h2>A levels (2017)</h2></div>
  					  <div class="col-sm-4"><span class="glyphicon glyphicon-star-empty" style="font-size:25px;"></span><h2>Computer Science (2021)</h2></div>
				</div>   

  			</div>
   		</div>

   		<div class="container" id="contact">
 		 <div class="jumbotron">
    			<h1>Contact</h1> 
    			<div class="row">
  					  <div class="col-sm-4"><span class="glyphicon glyphicon-earphone" style="font-size:25px;"></span><p>+91 322 540 9438</p></div>
  					  <div class="col-sm-4"><span class="glyphicon glyphicon-envelope" style="font-size:25px;"></span><p>musmanzaki@gmail.com</p></div>
  					  <div class="col-sm-4"><span class="glyphicon glyphicon-home" style="font-size:25px;"></span><p>House # 101, Street 6, Islamabad</p></div>
				</div>   

  			</div>
   		</div>

   		<div class="container" id="exp">
 		 <div class="jumbotron">
    			<h1>Experience as Content Writer</h1> 
    			<div class="row">
  					  <div class="col-sm-4"><a href="xormeta.com"><img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/37255725_208667243309691_4729168359113883648_n.jpg?_nc_cat=107&_nc_ht=scontent.fisb5-1.fna&oh=2b3b8675e8c848a9db1042d0ffe70a6f&oe=5D29294C" style="width: 100px; height: 100px;"><p>Xormeta</a>, 2018 - Present</p></div>
  					  <div class="col-sm-4"><a href="techjuice.com"><img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/10592983_594131070691420_3155861452196162152_n.png?_nc_cat=1&_nc_ht=scontent.fisb5-1.fna&oh=f4c026c493fe0b1233248c503e4d316a&oe=5D2C2850"style="width: 100px; height: 100px;"><p>Techjuice</a>, 2019 - Present</p></div>
  					   <div class="col-sm-4"><a href="techacker.com"><img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/57589776_414849955739311_8167958839761567744_n.jpg?_nc_cat=106&_nc_ht=scontent.fisb5-1.fna&oh=73ae882dce50518fdc149c925b4221d9&oe=5D65A482"style="width: 100px; height: 100px;"><p>TecHacker</a>, 2019 - Present</p></div>
				</div>   

  			</div>
   		</div>


   			<div class="container" id="skills">
 		 <div class="jumbotron">
    			<h1>Skills</h1> 
    			<div class="row">
  					  <div class="col-sm-4"><h2>C/C++</h2></div>
  					  <div class="col-sm-4"><h2>JAVA</h2></div>
  					  <div class="col-sm-4"><h2>HTML/CSS</h2></div>
				</div>   

				<div class="row">
  					  <div class="col-sm-4">
  					  	<div class="progress">
  						<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70"
  							aria-valuemin="0" aria-valuemax="100" style="width:70%">
    						<span class="sr-only">70% Complete</span>
  						</div></div>
  					</div>
					<div class="col-sm-4"> <div class="progress">
  						<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
  							aria-valuemin="0" aria-valuemax="100" style="width:40%">
    						<span class="sr-only">40% Complete</span>
  						</div></div></div>

  					<div class="col-sm-4"> <div class="progress">
  						<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50"
  							aria-valuemin="0" aria-valuemax="100" style="width:50%">
    						<span class="sr-only">50% Complete</span>
  						</div></div></div>
 					 
  					 
				</div> 

  			</div>
   		</div>

   			<div class="container" id="social">
 		 <div class="jumbotron">
    			<h1>Social Media</h1> 
    			<div class="row">
  					  <div class="col-sm-2"><a href="https://www.facebook.com/bzerqer"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2235/1024/facebook-256.png"style="width: 50px; height: 50px;" class="socialicons"></a></div>
  					  <div class="col-sm-2"><a href="https://www.linkedin.com/in/muhammad-zakiullah-usman/"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2235/1024/linkedin-256.png"style="width: 50px; height: 50px;" class="socialicons"></a></div>
  					  <div class="col-sm-2"><a href=""><img src="https://cdn2.iconfinder.com/data/icons/social-media-2235/1024/twitter-256.png"style="width: 50px; height: 50px;" class="socialicons"></a></div>
				</div>   

  			</div>
   		</div>

    			<!--FEEDBACK FORM-->

   		<div class="container" id="feedback">
 		 <div class="jumbotron">
    			<h1>Feedback</h1> 

<form>

  <h3>Name:  <input type="text" name="name" placeholder="write your name"><br/> </h3>  
   <h3>Comments: <input type="text" name="comment" placeholder="write some comments"><br/> </h3>
  
   <h3>Email Address: <input type="text" name="email"  placeholder="insert your email"><br/></h3>
   <h3>Things you liked:</h3>
   <input type="radio" value="choice1">Site design
   <input type="radio" name="choice1" value="Links">Links
   <input type="radio" name="choice1" value="Ease of use">Ease of use   
   <input type="radio" name="choice1" value="Images">Images
   <input type="radio" name="choice1" value="Source code">Source code<br/>
   
    <h3>How did you find this site?</h3>
   <input type="radio" value="choice2">Search engine
   <input type="radio" name="choice2" value="Links from another site">Links from another site
   <input type="radio" name="choice2" value="Deitel.com website">Deitel.com website   
   <input type="radio" name="choice2" value="Reference in a book">Reference in a book
   <input type="radio" name="choice2" value="Other">Other<br/>
   
   
<h3>Rate the site (1-10):
<select name="rating">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></h3> 
  
   <button name="submit" value="submit" type="submit">Submit</button>
   <input type="reset" value="Clear your entries">
  
</form>
  <!--PHP for storing form feedback!-->
<?php 
  if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $comment = $_GET['comment'];
    $rate = $_GET['rating'];

    $fh = fopen("feedback.txt", "a");
    fwrite($fh, $name);
    fwrite($fh, ",");
    fwrite($fh, $email);
    fwrite($fh, ",");
    fwrite($fh, $comment);
    fwrite($fh, ",");
    fwrite($fh, $rate);
    fwrite($fh, PHP_EOL);
    fclose($fh);
  }
?>
    			  

  			</div>
   		</div>

	
<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Muhammad Zakiullah Usman | All rights reserved 

</div>
		</div>
	</footer>


</body>
</html>
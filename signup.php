

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&Sans&display=swap">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	 <header>	
          
         <nav>	
           <div class="content">	
                <div class="nav-bar">	
                    <div class="logo">	
                          <img src="./images/dronelogin.png" alt="">
                    </div>
                    <div class="menu">	
                       <ul>	
                        <li><a href="index.php">	Home</a></li>
                       <li><a href="">	About </a></li>
                       <li><a href="">	Services</a></li>
                       <li><a href="">	Buy</a></li>
                       <div class="login" style="padding-left: 100px;">
                       	 <li><a href="login.php" class="btn btn-success">	Login</a></li>
                       	</div>
                       	<div class="login" style="padding-left: 20px;">
                        <li><a href="signup.php" class="btn btn-success" >	Signup</a></li>
                       </div>
                       </ul>
                    </div>

                    
                </div>
                	<div class="wrapper fadeInDown">
						  <div id="formContent">
						    <!-- Tabs Titles -->
                              
						    <!-- Icon -->
						    <div class="fadeIn first">
						      <img src="./images/icon.png" id="icon" alt="User Icon" />
						    </div>

						    <!-- Login Form -->

						    <form>
						      <input type="text" id="email/username" class="fadeIn second" name="email" placeholder="Email/Username">
						      <input type="text" id="password" class="fadeIn third" name="pw" placeholder="Password">
						       <input type="text" id="Cpassword" class="fadeIn third" name="Cpw" placeholder="Confirme-password">

						      <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
						    </form>

						    <!-- Remind Passowrd -->
						    <div id="formFooter">
						      <a class="underlineHover" href="login.php">Already Registered?Log in</a>
						    </div>
     
			  </div>
				</div>
           </div>
         </nav>
    </header>

    
</body>

<style>

       
       
		.wrapper {
		  display: flex;
		  align-items: center;
		  flex-direction: column; 
		  justify-content: center;
		  width: 100%;
		  min-height: 100px;
		  padding: 20px;
		  padding-top: 
		}

		#formContent {
		  -webkit-border-radius: 10px 10px 10px 10px;
		  border-radius: 10px 10px 10px 10px;
		  background: #fff;
		  padding: 30px;
		  width: 90%;
		  max-width: 450px;
		  position: relative;
		  padding: 0px;
		  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
		  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
		  text-align: center;
		}

		#formFooter {
		  background-color: #f6f6f6;
		  border-top: 1px solid #dce8f1;
		  padding: 25px;
		  text-align: center;
		  -webkit-border-radius: 0 0 10px 10px;
		  border-radius: 0 0 10px 10px;
		}



		/* TABS */

		h2.inactive {
		  color: #cccccc;
		}

		h2.active {
		  color: #0d0d0d;
		  border-bottom: 2px solid #5fbae9;
		}



		/* FORM TYPOGRAPHY*/

		input[type=button], input[type=submit], input[type=reset]  {
		  background-color: #56baed;
		  border: none;
		  color: white;
		  padding: 15px 80px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  text-transform: uppercase;
		  font-size: 13px;
		  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
		  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
		  -webkit-border-radius: 5px 5px 5px 5px;
		  border-radius: 5px 5px 5px 5px;
		  margin: 5px 20px 40px 20px;
		  -webkit-transition: all 0.3s ease-in-out;
		  -moz-transition: all 0.3s ease-in-out;
		  -ms-transition: all 0.3s ease-in-out;
		  -o-transition: all 0.3s ease-in-out;
		  transition: all 0.3s ease-in-out;
		}

		input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
		  background-color: #39ace7;
		}

		input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
		  -moz-transform: scale(0.95);
		  -webkit-transform: scale(0.95);
		  -o-transform: scale(0.95);
		  -ms-transform: scale(0.95);
		  transform: scale(0.95);
		}

		input[type=text] {
		  background-color: #f6f6f6;
		  border: none;
		  color: #0d0d0d;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 5px;
		  width: 85%;
		  border: 2px solid #f6f6f6;
		  -webkit-transition: all 0.5s ease-in-out;
		  -moz-transition: all 0.5s ease-in-out;
		  -ms-transition: all 0.5s ease-in-out;
		  -o-transition: all 0.5s ease-in-out;
		  transition: all 0.5s ease-in-out;
		  -webkit-border-radius: 5px 5px 5px 5px;
		  border-radius: 5px 5px 5px 5px;
		}

		input[type=text]:focus {
		  background-color: #fff;
		  border-bottom: 2px solid #5fbae9;
		}

		input[type=text]:placeholder {
		  color: #cccccc;
		}



		/* ANIMATIONS */

		/* Simple CSS3 Fade-in-down Animation */
		.fadeInDown {
		  -webkit-animation-name: fadeInDown;
		  animation-name: fadeInDown;
		  -webkit-animation-duration: 1s;
		  animation-duration: 1s;
		  -webkit-animation-fill-mode: both;
		  animation-fill-mode: both;
		}

		@-webkit-keyframes fadeInDown {
		  0% {
		    opacity: 0;
		    -webkit-transform: translate3d(0, -100%, 0);
		    transform: translate3d(0, -100%, 0);
		  }
		  100% {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}

		@keyframes fadeInDown {
		  0% {
		    opacity: 0;
		    -webkit-transform: translate3d(0, -100%, 0);
		    transform: translate3d(0, -100%, 0);
		  }
		  100% {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}

		/* Simple CSS3 Fade-in Animation */
		@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
		@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
		@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

		.fadeIn {
		  opacity:0;
		  -webkit-animation:fadeIn ease-in 1;
		  -moz-animation:fadeIn ease-in 1;
		  animation:fadeIn ease-in 1;

		  -webkit-animation-fill-mode:forwards;
		  -moz-animation-fill-mode:forwards;
		  animation-fill-mode:forwards;

		  -webkit-animation-duration:1s;
		  -moz-animation-duration:1s;
		  animation-duration:1s;
		}

		.fadeIn.first {
		  -webkit-animation-delay: 0.4s;
		  -moz-animation-delay: 0.4s;
		  animation-delay: 0.4s;
		}

		.fadeIn.second {
		  -webkit-animation-delay: 0.6s;
		  -moz-animation-delay: 0.6s;
		  animation-delay: 0.6s;
		}

		.fadeIn.third {
		  -webkit-animation-delay: 0.8s;
		  -moz-animation-delay: 0.8s;
		  animation-delay: 0.8s;
		}

		.fadeIn.fourth {
		  -webkit-animation-delay: 1s;
		  -moz-animation-delay: 1s;
		  animation-delay: 1s;
		}

		/* Simple CSS3 Fade-in Animation */
		.underlineHover:after {
		  display: block;
		  left: 0;
		  bottom: -10px;
		  width: 0;
		  height: 2px;
		  background-color: #56baed;
		  content: "";
		  transition: width 0.2s;
		}

		.underlineHover:hover {
		  color: #0d0d0d;
		}

		.underlineHover:hover:after{
		  width: 100%;
		}



		/* OTHERS */

		*:focus {
		    outline: none;
		} 

		#icon {
		  width:10%;
		}
      .class1{
      	
      	
     background-image: url(./images/back.jpg);
           background-size: cover;
           background-repeat: repeat ,no-repeat;
           background-position: center; 
      }

		body{ 
		
		font-family: 'Roboto', sans-serif;
		 background-repeat: no-repeat, repeat;
 
  height: 500px;
  width: 100%;
   background-position: center;
   background-size: cover;



	}
       
      
	.content{
		width: 100%;
		height: 650px;
		padding-bottom: : 0px;
		background-image: url(./images/back.jpg);
           background-size: cover;
           background-repeat: repeat ,no-repeat;
           background-position: center; 
        

		
	}
	.nav-bar{
            width: 100%;
            display: flex;
            justify-content: right;
            padding-top: 20px;
	}
	  .logo{
	  	width: 40%;
	  }
	  .logo img{
	  	width: 50%;
	  	padding-top: 10px;
	  	padding-left:30px;
	  }

	  .menu{
	  	width: 100%;
	  	 padding-left: 10%;
	  	 
	  }
	  ul{
	  	display: flex;
	  	width: 40%;
	  	list-style: none;
	  	padding-top: 30px;
	  }

	  ul li{

	  display: block;
            position: relative;
            float: left;
            text-decoration: none;
        }
	 ul li a{
	  	display: flex;
	  	color: #808080;
	    text-decoration: none;
         padding:10px 40px;
         margin: right;
          border-radius: 10px 10px / 10px 10px;

	  }
       a{
       	 
  transition: background-color .5s;
       }
	 a:hover {
 color: white;
 transition: all 1.0s;
background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 4%, rgba(118,85,194,1) 20%, rgba(210,69,98,1) 95%);
  
}
</style>
</html>
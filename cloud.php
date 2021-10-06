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

</head>
<body>
	
  <header>	
          
         <nav>	
           <div class="content">	
                <div class="nav-bar">	
                    <div class="logo">	
                          <img src="./images/dron.png" alt="">
                    </div>
                    <div class="menu">	
                       <ul>	
                       <li><a href="index.php">	Home</a></li>
                       <li><a href="cloud.php">	Cloud </a></li>
                       <li><a href="enterprise.php">	Enterprise</a></li>
                       <li><a href="buy.php">	Buy</a></li>
                       <div class="login" style="padding-left: 100px;">
                       	 <li><a href="login.php" class="btn btn-success">	Login</a></li>
                       	</div>
                       	<div class="login" style="padding-left: 20px;">
                        <li><a href="signup.php" class="btn btn-success" >	Signup</a></li>
                       </div>
                       </ul>
                    </div>
                    
                </div>
           </div>
         </nav>
    </header>
  

         
      <section class="contain">
      	<div class="left">
      		<div class="logo1">
      			<img src="./images/dev.jpg" alt="">
      		</div>
      		<div class="text">
      			<h1>Hello,
				Welcome to Drone.</h1>
				<p>You will be redirected to your source control management system to authenticate.</p>
				<button id="btn" class="btn-success">Continue</button>
      		</div>
      	</div>
      		<div class="cont">
		      	<div class="imb-box">
		      		<img src="./images/dronejs1.jpg" alt="">
		      		<div class="img-wrap">
		         		<img src="./images/dronejs.jpg" >
		         	</div>
		      	</div>
		      	
    		</div>
      </section>

    
</body>


<style>

       
       img:hover {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shake 0.5s;

  /* When the animation is finished, start again */
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
    .imb-box{
    position: relative;
 		width: 100%;
 		margin: auto;
 		line-height: 0px;
 		overflow: hidden;
      

 	}
 	.imb-box img {
 		width: 100%;
 		height: 90vh;
 	}
 	.img-wrap{
 		position: absolute;
 		left: 0;
 		top:0;
 		overflow: hidden;

 	}
        .cont{
        	width: 60%;
        	height: 90vh;
        	display: flex;
           align-items: center;
           justify-content: center;
           background: #f3fbff;
        }
      .text p{
      	padding-top: 30px;
         	text-align: center;
         }
         .text h1{
         	text-align: center;
         }
      .text{
           padding-top: 40px;
           padding-left: 30px;
           font-size: 20px;
      }
        .logo1 img{
        	width: 50%;
        	height: 200px;
        		background-position: center;
           	background-size: cover;
           	background-repeat: repeat no-repeat;
        }

      .logo1 {
      	padding-top: 20px;
      	width: 100%;
      	height: 200px;
      	
      	justify-content: center;
      	align-items: center;
      	text-align: center;
      }

      .left{
      	width: 60%;
      	height: 90vh;
      	
      	justify-content: center;
      	align-items: center;

      }
      

      .dr{
      	width: 60%;
      	height: 90vh;
      	position: relative;
      	overflow: hidden;
      }
      .dr img{
      	width: 100%;
      	height: 90vh;
      }

         
       .contain{
       	width: 100%;
       	height: 90vh;
       
       	display: flex;
       }

		body{ 
		
		font-family: 'Roboto', sans-serif;
		 background-repeat: no-repeat, repeat;
		  	background-image: url(./images/cloud.jpg);
       	background-size: cover;
       	background-position: center;
       	 background-repeat: no-repeat, repeat;
           
  height: 100vh;
  width: 100%;
   background-position: center;
   background-size: cover;



	}
       
      
	.content{
		width: 100%;
		height: 20vh;
		
		
	}
	.nav-bar{
            width: 100%;
            display: flex;
            justify-content: right;
            padding-top: 20px;
	}
	  .logo{
	  	width: 30%;
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

  
}
</style>

<script>


	var ImgBox = document.querySelector(".imb-box");
	var imgWrap = document.querySelector(".img-wrap");

       var leftSpace = ImgBox.offsetLeft;

	ImgBox.onmousemove = function(e){
		 var boxWidth = (e.pageX - leftSpace) + "px";
		 imgWrap.style.width= boxWidth;
	}
</script>
</html>
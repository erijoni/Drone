<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>
	
	<div class="container">
		
         <div class="imb-box">
         	<img src="./images/dronejs1.jpg" width="100%">

         	<div class="img-wrap">
         		<img src="./images/dronejs.jpg" >
         	</div>
         </div>

	</div>
</body>

<style type="text/css">
	*{
		margin: 0;
		padding:0;
	}
	.container{
           width: 100%;
           height: 100vh;
           display: flex;
           align-items: center;
           justify-content: center;
           background: #f3fbff;
        
 	}
 	.imb-box{
    position: relative;
 		width: 50%;
 		margin: auto;
 		line-height: 0px;
 		overflow: hidden;


 	}
 	.img-wrap{
 		position: absolute;
 		left: 0;
 		top:0;
 		overflow: hidden;

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
<style type="text/css">
	.top-fix {
		width: 100%;
	    position: relative;
	    float: left;
	    margin-bottom: 53px;
	    top: 100%;
	    z-index: 1111111;
	}
	.bg-topfix {
		width: 100%;
		float: left;
		height: 50px;

	}
	.css3gradient{
	 background-color:#B04E9B;
	 filter:progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr=#B04E9B, endColorstr=#0057b0);
	 background-image:-moz-linear-gradient(left, #B04E9B 17%, #0057b0 79%);
	 background-image:-webkit-linear-gradient(left, #B04E9B 17%, #0057b0 79%);
	 background-image:-ms-linear-gradient(left, #B04E9B 17%, #0057b0 79%);
	 background-image:linear-gradient(left, #B04E9B 17%, #0057b0 79%);
	 background-image:-o-linear-gradient(left, #B04E9B 17%, #0057b0 79%);
	 background-image:-webkit-gradient(linear, left bottom, right bottom, color-stop(17%,#B04E9B), color-stop(79%,#0057b0));}
	.inner-topfix {
		position: absolute;
		left: 0;
		width: 100%;
		padding: 2% 0;

	}
	.call-top {
		width: 14%;
		float: left;
	}
	.call-top img {
		height: 34px;
		border-radius: 0px;
	}
	.menu-top {
		width: 10%;
		float: left;
	}
	.in-phone {

	    -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
	    -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
	    -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
	    -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
	    animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
	    -webkit-transform-origin: 50% 50%;
	    -moz-transform-origin: 50% 50%;
	    -ms-transform-origin: 50% 50%;
	    -o-transform-origin: 50% 50%;
	    transform-origin: 50% 50%;
	}

	@-moz-keyframes coccoc-alo-circle-img-anim {
	    0% {
	        transform: rotate(0) scale(1) skew(1deg)
	    }
	    10% {
	        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
	    }
	    20% {
	        -moz-transform: rotate(25deg) scale(1) skew(1deg)
	    }
	    30% {
	        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
	    }
	    40% {
	        -moz-transform: rotate(25deg) scale(1) skew(1deg)
	    }
	    50% {
	        -moz-transform: rotate(0) scale(1) skew(1deg)
	    }
	    100% {
	        -moz-transform: rotate(0) scale(1) skew(1deg)
	    }
	}

	@-webkit-keyframes coccoc-alo-circle-img-anim {
	    0% {
	        -webkit-transform: rotate(0) scale(1) skew(1deg)
	    }
	    10% {
	        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
	    }
	    20% {
	        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
	    }
	    30% {
	        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
	    }
	    40% {
	        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
	    }
	    50% {
	        -webkit-transform: rotate(0) scale(1) skew(1deg)
	    }
	    100% {
	        -webkit-transform: rotate(0) scale(1) skew(1deg)
	    }
	}

	@-o-keyframes coccoc-alo-circle-img-anim {
	    0% {
	        -o-transform: rotate(0) scale(1) skew(1deg)
	    }
	    10% {
	        -o-transform: rotate(-25deg) scale(1) skew(1deg)
	    }
	    20% {
	        -o-transform: rotate(25deg) scale(1) skew(1deg)
	    }
	    30% {
	        -o-transform: rotate(-25deg) scale(1) skew(1deg)
	    }
	    40% {
	        -o-transform: rotate(25deg) scale(1) skew(1deg)
	    }
	    50% {
	        -o-transform: rotate(0) scale(1) skew(1deg)
	    }
	    100% {
	        -o-transform: rotate(0) scale(1) skew(1deg)
	    }
	}

	.fix-scroll {
	    position: fixed !important;
	    width: 100% !important;
	    top: 0 !important;
	    z-index: 10000000;
	    transform: scale(0);
	}
	.scroll {
	    transform: scale(1);
	    animation: scroll 0.5s;
	}
	.call-top {
		position: relative;
	}
	.inner-topfix {
		background: #0057b0;
	}
	.form-top {
		width: 86%;
		float: left;
		padding-left: 2%;
		box-sizing: border-box;
	}
	.form-top input {
		width: 100%;
		padding: 3% 3%;
	    box-sizing: border-box;
	    border: none;
	    height: 34px;
	    border-radius: 5px 0px 0px 5px;
		
	}
	.btn-tf {
		background: #ffc309;
	    height: 34px;
	    line-height: 34px;
	    text-align: center;
	    color: white;
	    font-weight: bold;
	}
</style>
<div class="top-fix">
	
	<div class="inner-topfix">
		
		<div  id="nav" style="margin-left: 2%;" class="menu-top">
			<img style="width: 39px;box-sizing: border-box;height: 35px;" src="modules_m/top-fix/img/menu.png">
		</div>
		
		<div class="form-top" id="top-form" method="POST" >
			<img style="box-sizing: border-box;height: 35px;width: 100%;" src="modules_m/top-fix/img/phonegiff.gif">
		</div>
		
	</div>
</div>

<!DOCTYPE html>
<html>
	<head>
		<link href="https://reqno.ir/wp-content/themes/sorapp_theme/Img/Logo.png" rel="ico">
		<title>Reqno proxy</title>
		<meta name="version" content="<?=$version;?>">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	</head>
	<body>

	<!--Url bar start-->
	<div style="heigth:50px;">

		
		<?php if(isset($error_msg)){ ?>
		
		<div id="error">
			<p><?php echo strip_tags($error_msg); ?></p>
		</div>
		
		<?php } ?>
		
		<div id="frm">
		
			<form action="index.php" method="post" style="display:flex;">
				<input name="url" type="text" id="url_box" autocomplete="off" placeholder="Enter your url address" />
				<input type="submit" value="Go" id="go_btn"/>
			</form>
			
			<script type="text/javascript">
				document.getElementsByName("url")[0].focus();
			</script>
			
		
		</div>
		
	</div>
	<!--Url bar end-->

	<!--Ads website-->
	<div id="ads_area">
		<iframe src="https://www.reqno.ir" title="Reqno website"></iframe>
	</div>
	<!--Ads end-->

	<!--Style start-->
	<style>
		
		#ads_area
		{
			height:calc(100vh - 75px);
		}

		#ads_area>iframe
		{
			border:none;
			outline:none;
			width:100%;
			height:100%;
		}

		#url_box
		{
			background:#EEE;
			outline:none;
			border:none;
			border-radius:16px;
			width:100%;
			margin:8px;
			text-align:center;
			font-size:14px;
		}

		#go_btn
		{
			width :50px;
			height:40px;
			outline:none;
			border:none;
			border-radius:16px;
			color:#FFF;
			cursor:pointer;
			background:#0277bd;
			margin:8px;
		}

	</style>
	<!--Style end-->

	</body>
</html>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>

<script>
var url_text_selected = false;

function smart_select(ele){

	ele.onblur = function(){
		url_text_selected = false;
	};
	
	ele.onclick = function(){
		if(url_text_selected == false){
			this.focus();
			this.select();
			url_text_selected = true;
		}
	};
}
</script>

<!--Topurl bar start-->
<div id="top_form">

	<div style="width:100%; margin:0 auto;">
	
		<form method="post" action="index.php" target="_top" style="display:flex;">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off" placeholder="Enter your url address" id="url_box">
			<input type="hidden" name="form" value="1">
			<input type="submit" value="Go" id="go_btn">
			<button type="button" onclick="HideBtnClick(this)" id="hide_btn">hide</button>
		</form>
		
	</div>
	
</div>
<!--Topurl bar end-->

<!--Display when hide start-->
<div id="display_hide_url_bar" onclick="DisplayBtnClick(this)">
	<i class="fi fi-br-angle-down"></i>
</div>
<!--Display when hide end-->

<!--script start-->
<script type="text/javascript">

	//focus on url bar
	smart_select(document.getElementsByName("url")[0]);


	//get on click on hide button
	function HideBtnClick(e)
	{
		var top_form=window.document.getElementById("top_form");
		var display_hide_url_bar=window.document.getElementById("display_hide_url_bar");

		top_form.style.display="none";
		display_hide_url_bar.style.display="flex";
	}

	//get on click on display url bar btn
	function DisplayBtnClick(e)
	{
		var top_form=window.document.getElementById("top_form");
		var display_hide_url_bar=window.document.getElementById("display_hide_url_bar");

		top_form.style.display="block";
		display_hide_url_bar.style.display="none";
	}

</script>
<!--script end-->

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

		#go_btn,#hide_btn
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

		#display_hide_url_bar
		{
			width:30px;
			height:30px;
			position:absolute;
			left:0px;
			top:0px;
			display:none;
			justify-content:center;
			align-items: center;
			cursor:pointer;
		}

	</style>
	<!--Style end-->
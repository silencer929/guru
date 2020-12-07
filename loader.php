<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!----------------------loader style----------->
	<style type="text/css">
		body{
			height: 100vh;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #dde;
		}
		.loader{
			text-align: center;
			background-color: lightblue;
			border-radius: 100px;
			border-top:  8px solid red;
			border-bottom: 8px solid black;
		}
		.loader ::before, .loader ::after{
			content: "---";
		}
		.loader span{
			line-height: 200px;
		}
	</style>
	<!----------------------end ofloader style----------->
</head>
<body>
	<div class="loader" style="height: 200px; width: 200px;">
		<span class="loading">loading</span>
	</div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>AgrupecVentas</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
	.btn-wsp{
	position:fixed;
	width:60px;
	height:60px;
	bottom:30px;
	right:30px;
	background:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	font-size:35px;
	box-shadow: 0px 1px 10px rgba(0,0,0,0.3);
	z-index:100;
	transition: all 300ms ease;
	}
	.btn-wsp:hover {
	text-decoration: none;
	color: #25d366;
	background-color:#fff;
	}
	.icono{
	margin-top:14px;
	margin-left:3px;
	}
	@media only screen and (min-width:320px) and (max-width:768px){
	.btn-wsp{
	width:63px;
	height:63px;
		}
	}
</style>
</head>
<body>
<a href="https://api.whatsapp.com/send?phone=931863427" class="btn-wsp" target="_blank">
<i class="fa fa-whatsapp icono"></i>
</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 调用时间插件</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/add.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Placeholder -->
	<script src="js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/bootstrap-datetimepicker.zh-CN.js"></script>
	<script src="js/moment-with-locales.js"></script>
</head>
<body>
	
	<input class="form_datetime form-control" type="text" value="2018-01-01" size="16" style="float: left; width: 200px; height: 40px;">
	
	<script type="text/javascript">
		 $(".form_datetime").datetimepicker({
		 format: "yyyy-mm-dd",
		 autoclose: true,
		 todayBtn: true,
		 todayHighlight: true,
		 showMeridian: true,
		 pickerPosition: "bottom-right",
		 language: 'zh-CN',//中文，需要引用zh-CN.js包
		 startView: 2,//月视图
		 minView: 2//日期时间选择器所能够提供的最精确的时间选择视图
		 }); 
</script> 
</body>
</html>
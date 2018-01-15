<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>销售部下单</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/add.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- jQuery -->
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
	<body class="templatemo-bg-image-2">	
		<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-contact-form-1" role="form" action="adds.php" method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">销售部下单页面</h1>
						<!-- <p>This contact form is provided by <a href="#">templatemo</a> that can be used for your websites. Credit goes to <a rel="nofollow" href="#">Unsplash</a> for the background image.</p> -->
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		         
		            <label for="name" class="control-label">合同编号 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-cogs"></i>
		            	<input type="text" name="htbh" class="form-control" id="name" placeholder="合同编号">
		            </div>		                   		  </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">工程编号 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-folder"></i>
		            	<input type="text" name="gcbh" class="form-control" id="name" placeholder="工程编号">
		            </div>		                        
		          </div>              
		        </div>
				<div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">用户单位 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-bank"></i>
		            	<input type="text" name="userunit" class="form-control" id="name" placeholder="用户单位">
		            </div>		                        
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">项目名称 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-cog"></i>
		            	<input type="text" name="titel" class="form-control" id="name" placeholder="项目名称">
		            </div>		                        
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-6">		
		            <label for="name" class="control-label">电梯型号 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-sort"></i>
		            	<input type="text" name="dtxh" class="form-control" id="name" placeholder="电梯型号">
		            </div>		                        
		          </div> 
		          <div class="col-md-6">		
		            <label for="name" class="control-label">产品规格 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-sliders"></i>
		            	<input type="text" name="cpgg" class="form-control" id="name" placeholder="产品规格">
		            </div>		                        
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-6">		
		            <label for="name" class="control-label">联系人 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" name="customer" class="form-control" id="name" placeholder="姓名">
		            </div>		                        
		          </div> 
		          <div class="col-md-6">		
		            <label for="name" class="control-label">电话号码 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-phone"></i>
		            	<input type="text" name="iphone" class="form-control" id="name" placeholder="电话号码">
		            </div>		                        
		          </div>              
		        </div>
				
				<div class="form-group">
		          <div class="col-md-12">
		            <label for="datas" class="control-label">预计发货日期*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-link"></i>
		            	<input type="text" name="datas" class="form_datetime form-control" id="datas" placeholder="2018-1-1" style=" color: red;">
		            </div>
		          </div>
		        </div>

		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="website" class="control-label">发货地址</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-link"></i>
		            	<input type="text" name="conter" class="form-control" id="website" placeholder="发货地址">
		            </div>
		          </div>
		        </div>
		        
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="message" class="control-label">备注*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-pencil-square-o"></i>
		            	<textarea rows="8" cols="50" class="form-control" id="message" placeholder="添加备注" name="remark"></textarea>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" name="sub" value="下单" class="btn btn-success pull-right">
		          </div>
		        </div>		    	
		      </form>
		      		

		</div>
	</div>

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



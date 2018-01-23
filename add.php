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
		          <div class="col-md-12">		
		            <label for="name" class="control-label">联系人/电话 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" name="customer" class="form-control" id="name" placeholder="姓名">
		            </div>		                        
		          </div> 
		          <!-- <div class="col-md-6">		
		                      <label for="name" class="control-label">电话号码 *</label>
		                      <div class="templatemo-input-icon-container">
		                      	<i class="fa fa-phone"></i>
		                      	<input type="text" name="iphone" class="form-control" id="name" placeholder="电话号码">
		                      </div>		                        
		                    </div>     -->          
		        </div>
				
				<div class="form-group">
		          <div class="col-md-6">
		            <label for="datas" class="control-label">预发货日期*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-calendar-o"></i>
		            	<input type="text" name="datas" class="form_datetime form-control" id="datas" placeholder="2018-1-1" style=" color: red;">
		            </div>
		          </div>
		          <div class="col-md-6">
		            <label for="sdatas" class="control-label">实发货日期*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-calendar"></i>
		            	<input type="text" name="sdatas" class="form_datetime form-control" id="sdatas" placeholder="2018-1-1" style=" color: yellow;">
		            </div>
		          </div>
		        </div>

		        <div class="form-group">
		          <div class="col-md-6">
		            <label for="website" class="control-label">发货地址</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-link"></i>
		            	<input type="text" name="conter" class="form-control" id="website" placeholder="发货地址">
		            </div>
		          </div>
		           <div class="col-md-6">
		            <label for="area" class="control-label">区域*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-globe"></i>
		            	<select class="form-control" name="area" style="height:45px">
		            		<option value="">--请选择省份--</option>
		            		<option value="北京" name="bj">北京</option>
							<option value="浙江" name="zj">浙江</option>
							<option value="上海" name="sh">上海</option>
							<option value="江苏" name="js">江苏</option>
							<option value="山东" name="sd">山东</option>
							<option value="江西">江西</option>
							<option value="河南">河南</option>
							<option value="河北">河北</option>
							<option value="湖南">湖南</option>
							<option value="湖北">湖北</option>
							<option value="广东">广东</option>
							<option value="福建">福建</option>
							<option value="天津">天津</option>
							<option value="安徽">安徽</option>
							<option value="重庆">重庆</option>
							<option value="山西">山西</option>
							<option value="辽宁">辽宁</option>
							<option value="吉林">吉林</option>
							<option value="黑龙江">黑龙江</option>
							<option value="海南">海南</option>
							<option value="四川">四川</option>
							<option value="贵州">贵州</option>
							<option value="云南">云南</option>
							<option value="陕西">陕西</option>
							<option value="甘肃">甘肃</option>
							<option value="青海">青海</option>
							<option value="台湾">台湾</option>
							<option value="内蒙古">内蒙古</option>
							<option value="西藏">西藏</option>
							<option value="新疆">新疆</option>
							<option value="香港">香港</option>
							<option value="澳门">澳门</option>
							<option value="国外">国外</option>
		            	</select>
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



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>销售部-编辑</title>
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
<?php
 include ("conn.php");//引入连接数据库
 	echo "编辑页面";
 	if(!empty($_GET['edit'])){
 		$sql="select * from xwxsb where `id`='".$_GET['edit']."'";
 		//echo $sql;
 		$query=mysqli_query($conn,$sql);
 		$rs=mysqli_fetch_array($query);

 		//print_r($rs);
 	}

	if(!empty($_POST['sub'])){
	 	$htbh=$_POST['htbh'];//合同编号
	 	$gcbh=$_POST['gcbh'];//工程编号
	 	$userunit=$_POST['userunit'];//用户单位
	 	$titel=$_POST['titel'];//项目名称
	 	$dtxh=$_POST['dtxh'];//电梯型号
	 	$cpgg=$_POST['cpgg'];//产品规格
	 	$customer=$_POST['customer'];//联系人
	 	//$iphone=$_POST['iphone'];//电话
	 	//$date=$_POST['date'];//下单日期
	 	$conter=$_POST['conter'];//发货地址
	 	$datas=$_POST['datas'];//预计发货日期
	 	$sdatas=$_POST['sdatas'];//实发货日期
	 	$area=$_POST['area'];//区域
	 	$remark=$_POST['remark'];//备注
	 	$hid=$_POST['hid'];//添加一个隐藏的
	    $sql="update `xwxsb` set `htbh`='$htbh',`gcbh`='$gcbh',`userunit`='$userunit',`titel`='$titel',`dtxh`='$dtxh',`cpgg`='$cpgg',`customer`='$customer',`conter`='$conter',`datas`='$datas',`sdatas`='$sdatas',`area`='$area',`remark`='$remark' where id='$hid' limit 1";
	    //echo "<h2>111111111111111</h2>";
	    //echo $sql;
	    mysqli_query($conn,$sql);
	    mysqli_close($conn);
	    //echo"修改成功！";
	    echo "<script>alert('修改成功')</script>";
	    echo "<script>location.href='index.php'</script>";

	 }
?>
</head>
	<body class="templatemo-bg-image-2">	
		<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-contact-form-1" role="form" action="edits.php" method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">销售部修改页面
						</h1>
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		         
		            <label for="name" class="control-label">合同编号 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-cogs"></i>
		            	<input type="text" name="htbh" class="form-control" id="name" value="<?php echo $rs['htbh']?>">
		            	<input type="hidden" name="hid" value="<?php echo $rs['id']?>">
		            </div>		                   		  </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">工程编号 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-folder"></i>
		            	<input type="text" name="gcbh" class="form-control" id="name" value="<?php echo $rs['gcbh']?>">
		            </div>		                        
		          </div>              
		        </div>
				<div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">用户单位 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-bank"></i>
		            	<input type="text" name="userunit" class="form-control" id="name" value="<?php echo $rs['userunit']?>">
		            </div>		                        
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">项目名称 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-cog"></i>
		            	<input type="text" name="titel" class="form-control" id="name" value="<?php echo $rs['titel']?>">
		            </div>		                        
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-6">		
		            <label for="name" class="control-label">电梯型号 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-sort"></i>
		            	<input type="text" name="dtxh" class="form-control" id="name" value="<?php echo $rs['dtxh']?>">
		            </div>		                        
		          </div> 
		          <div class="col-md-6">		
		            <label for="name" class="control-label">产品规格 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-sliders"></i>
		            	<input type="text" name="cpgg" class="form-control" id="name" value="<?php echo $rs['cpgg']?>">
		            </div>		                        
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		
		            <label for="name" class="control-label">联系人 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" name="customer" class="form-control" id="name" value="<?php echo $rs['customer']?>">
		            </div>		                        
		          </div> 
		                      
		        </div>

				<div class="form-group">
		          <div class="col-md-6">
		            <label for="datas" class="control-label">预发货日期*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-calendar-o"></i>
		            	<input type="text" name="datas" class="form_datetime form-control" value="<?php echo $rs['datas']?>" id="datas" placeholder="2018-1-1" style=" color: red;">
		            </div>
		          </div>
		          <div class="col-md-6">
		            <label for="sdatas" class="control-label">实发货日期*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-calendar"></i>
		            	<input type="text" name="sdatas" class="form_datetime form-control" id="sdatas" placeholder="2018-1-1" value="<?php echo $rs['sdatas']?>" style=" color: yellow;">
		            </div>
		          </div>
		        </div>

		        <div class="form-group">
		          <div class="col-md-6">
		            <label for="website" class="control-label">发货地址</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-link"></i>
		            	<input type="text" name="conter" class="form-control" id="website" value="<?php echo $rs['conter']?>">
		            </div>
		          </div>
		          <div class="col-md-6">
		            <label for="area" class="control-label">区域*</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-globe"></i>
		            	<select class="form-control" name="area" style="height:45px">
		            		<option value="<?php echo $rs['area']?>">--请选择省份--</option>
		            		<option value="北京">北京</option>
							<option value="浙江">浙江</option>
							<option value="上海">上海</option>
							<option value="江苏">江苏</option>
							<option value="山东">山东</option>
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
		            	<textarea rows="8" cols="50" class="form-control" id="message" value="<?php echo $rs['remark']?>" name="remark"></textarea>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" name="sub" value="修改" class="btn btn-success pull-right">
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
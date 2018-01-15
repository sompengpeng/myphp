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
 		//echo $rs;
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
	 	$iphone=$_POST['iphone'];//电话
	 	//$date=$_POST['date'];//下单日期
	 	$conter=$_POST['conter'];//发货地址
	 	$datas=$_POST['datas'];//预计发货日期
	 	$remark=$_POST['remark'];//备注
	 	$hid=$_POST['hid'];//添加一个隐藏的
	    $sql="update `xwxsb` set `htbh`='$htbh',`gcbh`='$gcbh',`userunit`='$userunit',`titel`='$titel',`dtxh`='$dtxh',`cpgg`='$cpgg',`customer`='$customer',`iphone`='$iphone',`conter`='$conter',`datas`='$datas',`remark`='$remark' where id='$hid' limit 1";
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
		          <div class="col-md-6">		
		            <label for="name" class="control-label">联系人 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" name="customer" class="form-control" id="name" value="<?php echo $rs['customer']?>">
		            </div>		                        
		          </div> 
		          <div class="col-md-6">		
		            <label for="name" class="control-label">电话号码 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-phone"></i>
		            	<input type="text" name="iphone" class="form-control" id="name" value="<?php echo $rs['iphone']?>">
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
		            	<input type="text" name="conter" class="form-control" id="website" value="<?php echo $rs['conter']?>">
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
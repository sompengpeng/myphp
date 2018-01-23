<?php
 include ("conn.php");//引入连接数据库
 	//echo "string";
 	if(empty($_POST['htbh'])){
 		echo "<script>alert('请输入正确的合同编号')</script>";
 		echo "<script>location.href='add.php'</script>";
 	}else{
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
	 	$area=$_POST['area'];
	 	//echo "下拉列表：";
	 	//echo $area;
	 	$datas=$_POST['datas'];//预计发货日期
	 	$sdatas=$_POST['sdatas'];//实发货日期
	 	$remark=$_POST['remark'];//备注
	     $sql="INSERT INTO `xwxsb`(`id`, `htbh`, `gcbh`, `userunit`,`titel`,`dtxh`,`cpgg`,`customer`,`date`,`conter`,`area`,`datas`,`sdatas`,`remark`) VALUES (null,'$htbh','$gcbh','$userunit','$titel','$dtxh','$cpgg','$customer',now(),'$conter','$area','$datas','sdatas','$remark')";
	    mysqli_query($conn,$sql);
	    mysqli_close($conn);
	    echo "插入成功";
	    echo "<script>alert('插入数据成功')</script>";
	    echo "<script>location.href='index.php'</script>";
	 }
 	}
	 
?>
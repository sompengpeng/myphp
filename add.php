<?php
 include ("conn.php");//引入连接数据库
 
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
	 	$remark=$_POST['remark'];//备注
	     $sql="INSERT INTO `xwxsb`(`id`, `htbh`, `gcbh`, `userunit`,`titel`,`dtxh`,`cpgg`,`customer`,`iphone`,`date`,`conter`,`remark`) VALUES (null,'$htbh','$gcbh','$userunit','$titel','$dtxh','$cpgg','$customer','$iphone',now(),'$conter','$remark')";
	    mysqli_query($conn,$sql);
	    mysqli_close($conn);
	    echo "插入成功";
	    echo "<script>alert('插入数据成功')</script>";
	    echo "<script>location.href='index.php'</script>";

	 }
?>
<form action="add.php" method="post">
	合同编号：<input type="text" name="htbh"><br>
	工程编号：<input type="text" name="gcbh"><br>
	用户单位：<input type="text" name="userunit"><br>
	项目名称：<input type="text" name="titel"><br>
	电梯型号：<input type="text" name="dtxh"><br>
	产品规格：<input type="text" name="cpgg"><br>
	  联系人：<input type="text" name="customer"><br>
	    电话：<input type="text" name="iphone"><br>
	发货地址: <input type="text" name="conter"><br>
		备注: <textarea rows="5" cols="50" name="remark"></textarea><br>







<!-- 
	内容<textarea rows="5" cols="50" name="con"></textarea><br> -->
	<input type="submit" name="sub" value="添加">

</form>
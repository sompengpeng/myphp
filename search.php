<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>销售部下单</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
</head>
	<body>	
	<div class="jumbotron">
			<div class="container">
				<hgroup>
				 <h1>西威销售部下单系统</h1>
				 <h4>西威电梯江苏有限公司-行政部制作</h4>
				</hgroup>
			</div>
	</div>
<div id="information">
   <div class="container">
   		<div class="row">
   			<div class="col-md-12">
				<table class="table table-bordered">
					<form action="search.php" method='POST'>
						<div class="row">
						  <div class="col-lg-4 list">
							<p style="color: red">查询<?php echo $_POST['inputsearch']?>列表：</p>
						  </div>
						  <div class="col-lg-8 home">
							 <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
						  </div>
						</div>
					</form>
					<br>
				<thead>
					<tr class="headth">
						<td>序号</td>
							<td>合同编号</td>
							<td>工程编号</td>
							<td>用户单位</td>
							<td>项目名称</td>
							<td>电梯型号</td>
							<td>产品规格</td>
							<td>联系人/电话</td>
							
							<td>下单日期</td>
							<td>发货地址</td>
							<td>预计发货日期</td>
							<td>备注信息</td>
							<td>修改/删除</td>
					</tr>
				</thead>
				 <tbody>
				 	<?php
				 	// Turn off all error reporting;关闭所有的错误 
					error_reporting(0); 
				 	include ("conn.php");//引入连接数据库
				 	if(!empty($_POST[''])){
				 		echo "<script>location.href='error.php'</script>为空的情况！";
				 	}else{
				 		echo "不能为空！";
				 	}
				  	if(!empty($_POST['inputsearch'])){
				  		$rs=$_POST['inputsearch'];	
				  	    $sql="select * from `xwxsb` where `gcbh` like '%{$rs}%'";
					}else if(!empty($_POST['searuse'])){
						$rs=$_POST['searuse'];
						$sql="select * from `xwxsb` where `userunit` like '%{$rs}%'";	
						echo $sql;
					}else if(!empty($_POST['titels'])){
						$rs=$_POST['titels'];
						$sql="select * from `xwxsb` where `titel` like '%{$rs}%'";
						echo "sql:";
						echo $sql;
					}else{
						echo "查询失败，请联系管理员";
					}
				  	$query=mysqli_query($conn,$sql);
				  	
				  	//echo "rs的值为";
				    //echo $rs;
				  	//$rs=mysqli_fetch_array($query);
				  	while($rs=mysqli_fetch_assoc($query)){
				  	?>
	  	 			<tr>
				 		<td><?php echo $rs['id']?></td>
						<td><?php echo $rs['htbh']?></td>
						<td><?php echo $rs['gcbh']?></td>
						<td><?php echo $rs['userunit']?></td>
						<td><?php echo $rs['titel']?></td>
						<td><?php echo $rs['dtxh']?></td>
						<td><?php echo $rs['cpgg']?></td>
						<td><?php echo $rs['customer']?></td>
						
						<td><?php echo $rs['date']?></td>
						<td><?php echo $rs['conter']?></td>
						<td><?php echo $rs['datas']?></td>
						<td><?php echo $rs['remark']?></td>
				 	<td><a class='tooltip-test' data-toggle='tooltip' title='修改' href="edits.php?edit=<?php echo $rs['id']?>"><span class="glyphicon glyphicon-pencil pencil"></span></a> &nbsp;|&nbsp;<a  class='tooltip-test' data-toggle='tooltip' title='删除' href='del.php?del={$v['id']}' onclick='return confirmAct();'><span class="glyphicon glyphicon-remove remove"></span></a>
				 	</td>			 	
				  	</tr>
				  	<?php }
				  	//关闭数据库
						$conn->close();
				  	?>
				  </tbody>
				</table>
			</div>
   		</div>
   </div>	
</div> 
</body>
	<script type="text/javascript">
		function confirmAct(){
				if(confirm('确定要删除吗？')){
					return true;
				}
					return false;
			}
	</script>
</html>


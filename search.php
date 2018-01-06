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
							<p>查询<?php echo $_POST['inputsearch']?>列表：</p>
						  </div>
						  <div class="col-lg-8 home">
							 <span class="glyphicon glyphicon-home"></span>
						  </div>
						</div>
					</form>
					<br>
				<thead>
					<tr class="headth">
						<td>序号</td>
						<td>标题</td>
						<td>时间</td>
						<td>内容</td>
						<td>操作</td>
					</tr>
				</thead>
				 <tbody>
				 	<?php
				 	include ("conn.php");//引入连接数据库
				  	if(!empty($_POST['inputsearch'])){
				  		$rs=$_POST['inputsearch'];	
				  	$sql="select * from `xwxzb` where `title`='$rs'";
					}
				    
				  	$query=mysqli_query($conn,$sql);
				  	$rs=mysqli_fetch_array($query);
				  	//echo "rs的值为";
				  
				  	//$rs=mysqli_fetch_array($query);
				  	?>
	  	 			<tr>
				 	<td><?php echo $rs['id']?></td>
				 	<td><?php echo $rs['title']?></td>
				 	<td><?php echo $rs['dates']?></td>
				 	<td><?php echo $rs['contents']?></td>
				 	<td><span class="glyphicon glyphicon-pencil pencil">修改</span> &nbsp;|&nbsp;<span class="glyphicon glyphicon-remove remove"><a href="del.php?del=<?php echo $rs['id']?>">删除</a></span>
				 	</td>			 	
				  	</tr>
				</table>
			</div>
   		</div>
   </div>	
</div> 

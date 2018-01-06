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
							<div class="col-lg-2 list">
								<p>下单列表：</p>
							</div>
							<div class="col-lg-4 add">
								<a href="add.php"><h4><span class="glyphicon glyphicon-edit"></span></h4></a>
							</div>
							<div class="col-lg-2 number">
								<p>工程编号：</p>
							</div>
						
						<div class="col-lg-4">
			                <div class="input-group">
			                    <input type="text" name="inputsearch" class="form-control" placeholder="请输入工程编号">
			                    <span class="input-group-btn">
			                    <button class="btn btn-primary" name="submit" type="button" style="margin-right:10px">查询</button>
			                    </span>
			                </div><!-- /input-group -->
            			</div><!-- /.col-lg-6 -->
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
					 	$sql="select * from `xwxzb` order by id desc";
					 	$query=mysqli_query($conn,$sql);
					 	//$rs=mysqli_fetch_array($query);
					 	while($rs=mysqli_fetch_array($query)){
					 	?>
					 	<tr>
						<td><?php echo $rs['id']?></td>
						<td><?php echo $rs['title']?></td>
						<td><?php echo $rs['dates']?></td>
						<td><?php echo $rs['contents']?></td>
						<td><span class="glyphicon glyphicon-pencil pencil">修改</span> &nbsp;|&nbsp;<span class="glyphicon glyphicon-remove remove"><a href="del.php?del=<?php echo $rs['id']?>">删除</a></span></td>
						</tr>
						<?php  
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
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

	</body>
</html>


	
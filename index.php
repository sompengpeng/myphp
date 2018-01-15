<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>销售部下单</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
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
			                    <button class="btn btn-primary" name="sub" type="button" style="margin-right:10px">查询</button>
			                    </span>
			                </div><!-- /input-group -->
            			</div><!-- /.col-lg-6 -->
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
							<td>联系人</td>
							<td>电话号码</td>
							<td>下单日期</td>
							<td>发货地址</td>
							<td>预计发货日期</td>
							<td>备注信息</td>
							<td>修改/删除</td>
						</tr>
					</thead>
					<tbody>
						<?php
						//include ("conn.php");//引入连接数据库
						include "./mysql.php";
						include "./page.php";//导入分页代码
					//连接数据库
						$conn=new Mysql();
						//
						$pageSize=8;        //每页显示的记录数
						$sql="select * from `xwxsb` order by id desc";
						//echo $sql;
						$totalRows=$conn->getResultNum($sql);   //总记录数
						$totalPage=ceil($totalRows/$pageSize);  //总页数
						$page=isset($_REQUEST['page'])?(int)$_REQUEST['page']:1;//当前页数
						if($page<1||$page==null||!is_numeric($page)){
						    $page=1;
						}
						if($page>=$totalPage)$page=$totalPage;
						$offset=($page-1)*$pageSize;

						$sql="select * from `xwxsb` order by id desc limit {$offset},{$pageSize} ";
						echo $sql;
						$result=$conn->sql($sql);
						
					 	foreach ($result as $k=>$v){
					 		echo "<tr><td>{$v['id']}</td>";
			    			echo "<td>{$v['htbh']}</td>";
			   			    echo "<td>{$v['gcbh']}</td>";
			   			    echo "<td>{$v['userunit']}</td>";
			   			    echo "<td>{$v['titel']}</td>";
			   			    echo "<td>{$v['dtxh']}</td>";
			   			    echo "<td>{$v['cpgg']}</td>";
			   			    echo "<td>{$v['customer']}</td>";
			   			    echo "<td>{$v['iphone']}</td>";
			   			    echo "<td>{$v['date']}</td>";
			   			    echo "<td>{$v['conter']}</td>";
			   			    echo "<td>{$v['datas']}</td>";
			   			    echo "<td>{$v['remark']}</td>";
			   			    echo "<td><span class='glyphicon glyphicon-pencil pencil'><a href='edits.php?edit={$v['id']}'>修改</a></span>|<span class='glyphicon glyphicon-remove remove'><a href='del.php?del={$v['id']}' onclick='return confirmAct();'>删除</a></span></td>";
						}
					//echo showPage($page,$totalPage);
					//关闭数据库
					$conn->close();
					?>
					 	
					</tbody>
				</table>
				<div style="text-align: right; font-size: 16px;">
					<?php echo showPage($page,$totalPage);?>
				</div>
			</div>
		</div>
	</div>
</div>
	<!--执行删除操作-->
		<script type="text/javascript">
			function confirmAct(){
				if(confirm('确定要删除吗？')){
					return true;
				}
					return false;
			}
		</script>
</body>
</html>


	
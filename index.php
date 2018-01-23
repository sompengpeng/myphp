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
			<div>
				<table class="table table-bordered">
					<form action="search.php" method='POST'>
						<div class="row">
							<div class="col-lg-1 list">
									<span class="glyphicon glyphicon-list">LIST
									</span>
								
							</div>
							<div class="col-lg-1 add">
								<a href="add.php"><h4><span class="glyphicon glyphicon-edit"></span></h4></a>
							</div>
							<!--用户单位查询-->
							<div class="col-lg-3 searuse">
								<div class="col-md-12">
									<span class="glyphicon glyphicon-user"> 用户单位查询
									</span>
								</div>	
								<div class="col-md-12"><input class="form-control" type="text" placeholder="请输入用户单位"  name="searuse" value=""/></div>
								
							</div>
							<!--用户单位查询-->
							
							<!--项目名称-->
							<div class="col-lg-3 titels">
								<div class="col-md-12">
									<span class="glyphicon glyphicon-leaf">  项目名称</span>
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control"  placeholder="请输入项目名称" name="titels" value=""/>
								</div>	
							</div>
							<!--项目名称-->
							<!--工程编号-->
							<div class="col-lg-3">
				                <div class="col-md-12">
				                	<span class="glyphicon glyphicon-wrench">  工程编号
				                	</span>
				                </div>
				                <div class="col-md-12">
				                	<input type="text" name="inputsearch" class="form-control" placeholder="请输入工程编号" value=""/>
				                </div>
				            </div><!-- /.col-lg-3 -->
			                <!--工程编号-->
			                <!--提交按钮-->
			                <div class="col-lg-1">
			                	<div class="col-md-12">
			                		<span class="glyphicon glyphicon-screenshot"></span>
			                	</div>
			                	<div class="col-md-12">    		
			                		<input  class="btn btn-primary btn-sm " type="submit" name="搜索"/>
			                	</div>
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
							<td>发货地址</td>
							<td>下单日期</td>
							<td>预发货日期</td>
							<td>实发货日期</td>
							<td>区域</td>
							<td>备注信息</td>
							<td>修改/删除</td>
						</tr>
					</thead>
					<tbody>
						
						<?php
						// Turn off all error reporting;关闭所有的错误 
						error_reporting(0); 
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
						//echo $sql;
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
			   			    echo "<td>{$v['conter']}</td>";
			   			    echo "<td>{$v['date']}</td>";
			   			    echo "<td>{$v['datas']}</td>";
			   			    echo "<td>{$v['sdatas']}</td>";
			   			    echo "<td>{$v['area']}</td>";
			   			    echo "<td>{$v['remark']}</td>";
			   			    echo "<td><a class='tooltip-test' data-toggle='tooltip' title='修改' href='edits.php?edit={$v['id']}'><span class='glyphicon glyphicon-pencil pencil'></span></a>|<a class='tooltip-test' data-toggle='tooltip' title='删除' href='del.php?del={$v['id']}' onclick='return confirmAct();'><span class='glyphicon glyphicon-remove remove'></span></a></td>";
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


	
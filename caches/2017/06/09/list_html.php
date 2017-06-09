


<!DOCTYPE html>
<html>
<head>
	<title>帖子</title>
	
	<link rel="stylesheet" type="text/css" href="../../public/css/base.css"> 
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="../../public/css/index.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/list.css">
</head>
<body>
	<div id="container">
		<?php display('header.html',compact('pid','breadcrumb')) ;?>	
			<!-- 主体部分开始 -->
			<div class="list" style="overflow: hidden;">
<!-- 左侧导航栏 -->
	<div class="list_nav">
		<div class="list_n_h page-header"><h3>版块导航</h3></div>
		<!-- 开始遍历 -->
		<?php foreach($data as $key => $value):?>

		<ul class="nav nav-pills nav-stacked list_n_m">
		
			<li role="presentation" class="active"><a href="/index.php?cid=<?=$value[0]['parentid'];?>"><?=$key;?></a></li>
			<?php foreach($value as $k => $v):?>
			<li role="presentation"><a href="/helper/compiler/list.php?cid=<?=$v['cid'];?>"><?=$v['classname'];?></a></li>
			<?php endforeach;?>
			<!-- <li role="presentation"><a href="#">开源产品</a></li>
			<li role="presentation"><a href="#">进阶讨论</a></li>
			<li role="presentation"><a href="#">进阶讨论</a></li>
			<li role="presentation"><a href="#">进阶讨论</a></li> -->
		</ul>
		<?php endforeach;?>
		<!-- 结束遍历 -->
		
		<div class="clr" style="clear: both"></div>
		<div style="clear:both"></div>

	</div>
	<!-- 导航栏结束 -->
	 <!-- 右侧开始 -->
	<div class="list_r">
	 	<!-- 右侧上部开始 -->
		<div class="list_r_h">
			<p><?=$bmdata['cidname'];?> 今日：<?=$bmdata['listToday'];?><span class="pipe">|</span>主题：<?=$bmdata['detailsNum'];?></p>
			<p>版主：<?php foreach($bmdata['bmName'] as $key => $value):?>
				<?=$value;?>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php endforeach;?>
			</p>
		</div>
		<div>
			<a href="<?=$publish;?>?cid=<?=$_GET['cid'];?>"><button type="button" class="btn btn-default btn-lg">发帖<span class="glyphicon glyphicon-chevron-down down"></span></button></a>
			<button type="button" class="btn btn-default btn-lg">返回</button>
		</div>
		<div class="clr" style="clear:both"></div>
			 	<!-- 右侧上部结束 -->

	 	<!-- 右侧下部开始 -->
		<div class="panel panel-default list_r_b">
			<table class="table list_table">
			<!-- 表头 -->

				<tr><th class="l_t">筛选：全部<span class="pipe">|</span>精华</th><th class="l_t">作者</th><th class="l_t">回复/查看</th><th class="l_t">最后发表</th></tr>
				<tr></tr>
				<!-- 主体 -->
				<?php if($details == null):?>
					<!-- <tr><td class="l_t"></td><td class="l_t"></td><td class="l_t"></td><td class="l_t"></td></tr> -->
				<?php else: ?>

				<?php foreach($details as $key => $value):?>
				<tr><td class="l_t"><a href="/helper/compiler/details.php?tid=<?=$value['id'];?>"><?=$value['title'];?></a></td><td class="l_t"><?=$value['username'];?></td><td class="l_t"><?=$value['replycount'];?>/<?=$value['hits'];?></td><td class="l_t"></td></tr>
				<?php endforeach;?><?php endif;?>
				<!-- <tr><td class="l_t">asdf</td><td class="l_t">asdf</td><td class="l_t">asdf</td><td class="l_t">asdf</td></tr>
				<tr><td class="l_t">asdf</td><td class="l_t">asdf</td><td class="l_t">asdf</td><td class="l_t">asdf</td></tr>
				<tr><td class="l_t">asdf</td><td class="l_t">asdf</td><td class="l_t">asdf</td><td class="l_t">asdf</td></tr> -->
			</table>
		<div class="clr" style="clear: both"></div>
		
		</div>
		<div>
			<a href="<?=$publish;?>"><button type="button" class="btn btn-default btn-lg">发帖<span class="glyphicon glyphicon-chevron-down down"></span></button></a>
			<button type="button" class="btn btn-default btn-lg">返回</button>
	 	<!-- 右侧下部结束 -->
	 <!-- 右侧结束 -->
		</div>

</div>

			<!-- 主体部分结束 -->
	
		
	</div>
	<?php display('footer.html') ;?>
	</div>
</body>
</html>


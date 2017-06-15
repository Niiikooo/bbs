<!DOCTYPE html>
<html>
<head>
	<title>首页 - <?=$site['siteName'];?></title>
	<meta charset="utf-8" >
	
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="../../public/css/base.css"> 
	<link rel="stylesheet" type="text/css" href="../../public/css/index.css">
	<!-- <link rel="stylesheet" type="text/css" href="../../public/css/list.css"> -->
	
	
</head>
<body>         
	<div id="container">
		<div id="header">
			<div class="header_top">
				<ul class="header_ul">
					<li><a href="#">设为首页</a></li>
					<li><a href="#">收藏本站</a></li>
				</ul>
			</div>
			<div class="header_down">
				<a href="/index.php"><img src="/public/img/logo.jpg" alt="logo"></a>
				<!-- 未登录模块 -->
				<div class="header_right visitor" style="">
				<form action="<?=$login;?>" method="post">
				<ul>
					<li><label for="username">用户名</label></li>
					<li><input type="text" name="username" style="" id="username" class="form-control"></li>
					<li><input type="radio" id="autoLogin"  class="check"><label for="autoLogin">自动登录</label></li>
					<div class="clr"></div>
					<li style="" class="input_pass"><label for="password" >密码</label></li>
					<li><input type="password" name="password" id="password" style="" class="form-control"></li>
					<li><button type="submit" class="btn btn-xs" style="width:60px">登录</button></li>
				</ul>
				</form>
				<div class="header_right_r">
					<div><a href="/helper/compiler/findpwd.php">找回密码</a></div>
					<div><a href="/helper/compiler/reg.php">立即注册</a></div>
				</div>
				</div>
				<!-- 结束 -->
		
				<!-- 已登录模块开始 -->
				<div class="header_right_admin">
				<a href="/helper/compiler/home.php"><img src="<?=$_SESSION['picture'];?>" style="float: right"></a>
				<ul class="admin_l" style="float:right">
					<li style="width: 200px;text-align:right;margin-left:145px"><?=$_SESSION['username'];?><span class="pipe">|</span></li>
					<li><a href="checkdaily.php?uid=<?=$_SESSION['uid'];?>"><button>签到</button></a><span class="pipe">|</span></li>
					<li><a href="/helper/compiler/home.php">我的</a><span class="pipe">|</span></li>

					<li><a href="/helper/compiler/logout.php">退出</a></li>

					<div class="clr"></div>
				<ul class="admin_r">
				<?php if($_SESSION['power'] == -1):?>
					<li><a href="/admin/adminIndex.php">管理中心</a><span class="pipe">|</span></li>
				<?php endif;?>
					<li>积分：<?=$_SESSION['rewardscore'];?>&nbsp;距离下一等级还差：<?php $left = $_SESSION['rewardscore']%20;
					if ($left == 0){
						$left = 20;
					}
					echo $left;?>
					<li>用户等级：<?=$_SESSION['level'];?><span class="pipe">|</span></li>
					<span class="pipe">|</span></li>
					<li>用户组：<?=$_SESSION['group'];?></li>
					</ul>
				</ul>
				<div class="" style="float: right;">
					
				</div>
				</div>
				<!-- 已登录模块结束 -->
				
				<div class="clr"></div>
			</div>
		</div>
		<div class="clr"></div>
		<div id="search">
			<div class="search_top">
				<ul class="">
				<a href="?cid=0"><li class="search_sy">首页</li></a>
					<li class="dn"></li>
				<?php foreach($pid as $key => $value):?>
					
					<a href="?cid=<?=$key;?>"><li class="search_js"><?=$value;?></li></a>
					<li class="dn"></li>
					<!-- <a href="#"><li class="search_cx">程序人生</li></a> -->
				<?php endforeach;?>
				</ul>
			</div>
			<div class="search_down">
				
					<form action="/helper/compiler/search.php" method="post">
						<a href="#"><div class="glass"></div></a>
						<div class="glass_search"><input type="text" name="search" class="search_input"></div>
						<div class="sh">
							<button type="submit">搜索</button>
						</div>
						<ul style="" class="search_ul">
							<li>热搜：</li>
							<li><a href="#">活动</a></li>
							<li><a href="#">交友</a></li>
							<li><a href="#">教程</a></li><div class="clr"></div>
						</ul>
						<div class="clr"></div>
					</form>
					<div class="path ">
						<ol class="breadcrumb" >
						<li class="home"></li>
						<!-- <ul class="path_a"> -->
						<li><a href="#">论坛</a></li>

							
						<!-- </ul> -->
						</ol>
<!-- 						<div class="clr"></div>
 -->						<ul class="chart">
							<li></li>
							<li>帖子：<?=$_SESSION['tNum'];?><span class="pipe">|</span></li>
							<li>会员：<?=$_SESSION['uNum'];?><span class="pipe">|</span></li>
							<li>欢迎新会员：<?=$_SESSION['newUser'];?></li>
						</ul>
						<div class="clr"></div>
					</div>
				
			</div>
		</div>
		<div class="clr"></div>
		<div id="main">
			<!-- 主体分块 大板块开始 -->
			<!-- 添加循环语句 -->
			<div class="main">
			<?php foreach($data as $key => $value):?>
	
			<div class="main-mod">
				<div class="navnav"><span><a href="#"><?=$key;?></a></span></div>
				<div class="clr"></div>
				<!-- 一个小版块 -->
				<?php if($value):?>
				<?php foreach($value as $k => $v):?>
				
				<div class="main-mod-main">
					<div class="mod-left">
						<a href="/helper/compiler/list.php?cid=<?=$v['cid'];?>"><img src="<?php echo TPL_IMG ;?>forum.gif" alt=""></a>
						<p><a href="/helper/compiler/list.php?cid=<?=$v['cid'];?>"><?=$v['classname'];?></a><br/>
											
						<?php $new = bm($link,$v['cid']) ;?>
						版主：
						<?php foreach($new['bmName'] as $a => $b):?>
						<?=$b;?>
						<?php endforeach;?></p>
						

					</div>
					<?php $time = addtime($new['newTitle']['addtime']) ;?>
					<!-- 每个小版块总帖子数 -->
					<div class="mod-right">
						<div class="r1"><p><?=$new['detailsNum'];?></p></div>
						<div class="r2"><p><a href="#"><?=$new['newTitle']['title'];?></a><br /><?=$time;?> 
						<!-- 遍历作者信息开始 -->
						<?php foreach($new['newTitle']['authorid'] as $kN => $vN):?>
						<?=$vN;?>
						<?php endforeach;?>
						<!-- 遍历作者信息结束 --></p></div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
					<div class="sigline"></div>
				</div>
				
				<div class="clr"></div>
				<?php endforeach;?>
				<?php endif;?>
				<!-- 小版块完 -->
				
				
				

			</div>
			<?php endforeach;?>
			</div>
			<!-- end of main-mod 大板块 -->
			<!-- 第二个板块开始 -->
			
				<!-- 一个小版块 -->
				
			<!-- 第二个板块结束 -->

			<!-- 底部版块 -->
			<div class="main_bottom">
				<div class="mod-left bottom_left">
					<a href="#"><img src="<?php echo TPL_IMG ;?>logo_88_31.gif" alt=""></a>
					<p><a href="#">官方论坛</a><br/>提供最新 Discuz! 产品新闻、软件下载与技术交流</p>
				</div>
				<div class="clr"></div>
				<div class="sigline"></div>
				<div class="b_ul">
					<ul>
						<li><a href="#">百度</a></li>
						<li><a href="#">漫游平台</a></li>
						<li><a href="#">YESWAN</a></li>
						<li><a href="#">我的领地</a></li>
					</ul>
				</div>
			</div>

		</div>
		<div id="footer">
			<div class="f_l">
				<p>Powered by <span><a href="/index.php"><?=$site['webName'];?></a></span> V2<br />© 2017 <a href="/index.php"><?=$site['webName'];?> Inc.</a></p>
			</div>
			<div class="f_r">
				<p><a href="#">&nbsp;&nbsp;&nbsp;<?=$site['info'];?></a>|<a href="/index.php"><?=$site['webName'];?></a><br/>Time Now Is: <?php echo date('m-d H:i',time()) ;?></p>
			</div>
		</div>






	</div>



</body>
</html>
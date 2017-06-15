<!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<meta charset="utf-8">
		<meta charset="utf-8">
		<title><?=$title;?></title>
		<link rel="stylesheet" type="text/css" href="/public/css/adminIndex.css">
		<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
</head>
<body>
	<div class="top">
			<div class="top-left">
				<div class="top-left-top"><b>Discuz!</b></div>
				<div class="top-left-bottom"><a href="">Control panel</a></div>
			</div>
			<div class="center">
					<a href="/admin/adminIndex.php">站点信息</a>
					<a href="/admin/userManage.php">用户管理</a>
					<a href="/admin/categoryMan.php">板块管理</a>
					<a href="/admin/detailsManage.php">帖子管理</a>
				
			</div>
			<div class="right">
				<div class="right-top">欢迎 <b>admin</b> 后台管理</div>
				<div class="right-bottom">
					<span><a href="logout.php">【退出】</a></span>
					&nbsp;&nbsp;
					<a href="../index.php" target="blank">首页</a>
				</div>
			</div>
	</div>
		<div class="bottom">
			<div class="bottom-left">
				<div><a href="user.php">用户管理</a></div>
				<div><a>禁用IP</a></div>
			</div>
			<div class="bottom-right">
			      <td><h4><b><a href="user.php">用户管理</a></b><span></span></h4>
			      <br><br>
				   <div class="bs-example" data-example-id="simple-form-inline">



				    <form class="form-inline" action="/admin/member_verify.php" method="post">
						<h4><b>基本信息</b></h4><br>

						<input type="hidden" name="id" value="">	

						
				      <div class="form-group">
				        <label for="exampleInputName2">用户名&nbsp;&nbsp;</label>
				        <input type="text" class="form-control" name="username" value="<?=$userdata['username'];?>">
				      </div><br>
				      <div class="hh" style="height: 20px;"></div>


				      <div class="form-group">
				        <label>密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				        <input type="password" class="form-control" name="password" placeholder="如需修改密码请填写">

				        <input type="hidden" name="rawPassword" value="">
				      </div><br>
				      <div class="hh" style="height: 20px;"></div>


				      <div class="form-group">
				        <label>邮&nbsp;&nbsp;&nbsp;箱&nbsp;&nbsp;</label>
				        <input type="email" class="form-control" name="email" value="<?=$userdata['email'];?>" >
				      </div><br>
				      <div class="hh" style="height: 20px;"></div>

						<input type="hidden" value="<?=$_GET['uid'];?>" name="uid">
				       <div class="form-group">
				        <label for="exampleInputName2">IP地址&nbsp;&nbsp;</label>
				        <input type="text"  disabled class="form-control" name="ip" value="<?php echo long2ip($userdata['regip']) ;?>">
				      </div><br>
				      <div class="hh" style="height: 20px;"></div>

				      头像：<img src="<?=$userdata['picture'];?>" style="height: 200px;width: 200px;"><br><br>
				      <div class="hh" style="height: 20px;"></div>
					

					<br>
				   <b>用户状态：&nbsp;&nbsp;</b><div class="radio">
							  <label>
							    <input type="radio" name="status" value="-1" 
								<?php if($userdata['allowlogin']!=-1):?>checked<?php endif;?>	
							    >锁定&nbsp;&nbsp;
							    <input type="radio" name="status" value="1" <?php if($userdata['allowlogin']==-1):?>checked<?php endif;?>>解锁
							  </label>
							</div>
							<br>
							<div class="hh" style="height: 20px;"></div>

					<b>用户权限：&nbsp;&nbsp;</b><div class="radio">
							  <label>
							    <input type="radio" name="power" value="0" <?php if($userdata['power'] >-1):?>checked<?php endif;?>
							    >用户&nbsp;&nbsp;
							    <input type="radio" name="power" value="-1" <?php if($userdata['power'] == -1):?>checked<?php endif;?>>管理员
							  </label>
							</div>
							<br>
							<div class="hh" style="height: 20px;"></div>


					  <b>清除安全提问：</b>
					  		<div class="radio">
							  <label>
							    <input type="radio" name="ques" value="2" >清除
							    <input type="radio" name="ques" value="1" >恢复
							  </label>
							</div>
							<div class="hh" style="height: 20px;"></div>
							<br>


					<div class="form-group">
				        <label>积&nbsp;&nbsp;&nbsp;分</label>
				        <input type="text" class="form-control" name="integray" value="<?=$userdata['rewardscore'];?>" >
				      </div><br>
				      <div class="hh" style="height: 20px;"></div>


				     <b>个性签名：</b> <textarea class="form-control" name="qianming" rows="3" value="<?=$userdata['autograph'];?>"></textarea>	


						
				     <h4><b>用户栏目</b></h4><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <div class="form-group">
				        <label for="exampleInputName2">真实姓名</label>
				        <input type="text" class="form-control" name="name" value="<?=$userdata['realname'];?>">
				      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				  		<div class="radio">
					  		<b>修改性别:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <label>
							    <input type="radio" name="sex" value="0" <?php if($userdata['sex'] == 0):?>checked<?php endif;?>>女&nbsp;&nbsp;&nbsp;
							    <input type="radio" name="sex" value="1" <?php if($userdata['sex'] == 1):?>checked<?php endif;?> >男
							  </label>
						</div><br><br>
			
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
						<b>出生年月日：</b>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select class="form-control" name="year">
							<option value="<?php echo date('Y',$userdata['birthday']) ;?>"><?php echo date('Y',$userdata['birthday']) ;?>
								
							</option>
							<?php for($i = 1970; $i < 2017; $i++):?> 
								  <option value="<?=$i;?>">
								  <?=$i;?>
								  </option>
							<?php endfor;?>	  
							</select>
							&nbsp;&nbsp;&nbsp;
							<select class="form-control" name="month">
							<option value="<?php echo date('m',$userdata['birthday']) ;?>">
								<?php echo $userdata['birthday']== null ? '请填写月份' : date('m',$userdata['birthday']) ;?>
							</option>
							<?php for($i = 1; $i <= 12; $i++):?> 
								  <option value="<?=$i;?>">
								  <?=$i;?>
								  </option>
							<?php endfor;?>	  
							</select>
							&nbsp;&nbsp;&nbsp;
							<select class="form-control" name="day">
							<option value="<?php echo date('d',$userdata['birthday']) ;?>"">
								<?php echo $userdata['birthday']== null ? '请填写日份' : date('d',$userdata['birthday']) ;?>
							</option>
							<?php for($i = 1; $i <= 31; $i++):?> 
								  <option value="<?=$i;?>">
								  <?=$i;?>
								  </option>
							<?php endfor;?>	  
							</select>
							<br>
							<div class="hh" style="height: 20px;"></div>
						
						

						<div class="hh" style="height: 20px;"></div>

						<button type="submit" class="btn btn-default">点击提交</button>
				    </form>
				  </div>
			</div>
		</div>

	</body>
</html>

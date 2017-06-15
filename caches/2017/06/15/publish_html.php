<!DOCTYPE html>
<html>
<head>
	<title>发帖</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="/public/css/base.css"> 
	<link rel="stylesheet" type="text/css" href="/public/css/index.css">
	<script type="text/javascript" src="/public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/public/ueditor/ueditor.all.js"></script>
</head>
<body>
 <!-- 加载编辑器的容器 -->
	<div id="container">
		<?php display('header.html',compact('pid','breadcrumb')) ;?>
		<div id="main">
		<form action="/helper/compiler/publish_verify.php?cid=<?=$_GET['cid'];?>" method="post">
			<div class="editor_title">
				标题：<input type="text" class="form-control" name="title">
			</div>
			<div class="editor_fa"">
    		
	    		<script id="editor" name="content" type="text/plain">
	   			</script>
	   			<script type="text/javascript">
	   	    	var ue = UE.getEditor('editor');
	   			</script><div class="clr"></div>
	   			<div class="clr"></div>
	   			
   			
   			</div>
		
   		
   			<button type="submit" class="btn btn-default">提交</button>&nbsp;&nbsp;&nbsp;验证码：<input type="text" name="qd" class="form-control" style="width: 65px;display: inline-block;">&nbsp;&nbsp;&nbsp;<img src="/helper/function/code.php" alt="验证码">&nbsp;&nbsp;看不清？换一个&nbsp;&nbsp;
   			售价：&nbsp;&nbsp;<input type="text" name="price" value="2" class="form-control price">金币

   		</form>
   		<div class="clr" style="clear:both"></div>
		</div>
    	<?php display('footer.html') ;?>
	</div>
	
</body>
</html>
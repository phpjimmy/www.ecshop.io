<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ECShop_mobile</title>
</head>

<body>

<p align='left'>
用户登录<br/>
--------------<br/>
<?php if ($this->_var['login_faild'] == 1): ?>
用户名或密码错误,请重新输入<br/>
<?php endif; ?>
<form action="user.php?act=do_login" method="post">
用户名:<input type='text' name='username'/><br/>
密码:<input type='password' name='pwd'/><br/>
<input name="登录" type="submit" value="登录" />
</form>
<br/>
<a href='index.php'>返回首页</a>
<?php echo $this->_var['footer']; ?>
</p>
</body>
</html>
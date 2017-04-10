<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
   <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
  
  <title><?php echo $this->_var['page_title']; ?></title>
	
    
    <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>/css/bootstrap.min.css"  type="text/css">
	
	
    <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>/css/style.css">
	
	
	
    <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>/font-awesome/css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>/fonts/font-slider.css" type="text/css">
	
	
	<script src="<?php echo $this->_var['ecs_css_root']; ?>/js/jquery-2.1.1.js"></script>
	
	  	 
    <script src="<?php echo $this->_var['ecs_css_root']; ?>/js/bootstrap.min.js"></script>
	<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
    
	
    
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   
	
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					
				</div>
				<div class="col-xs-6">
					<ul class="top-link">
						<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> 用户中心</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<header class="container">
		<div class="row">
			<div class="col-md-4">
                            <div id="logo"><a href="index.php" name="top"><img src="themes/php4/images/logo.png" /></a></div>
			</div>
			<div class="col-md-4">
				<form class="form-search">  
					<input type="text" class="input-medium search-query">  
					<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>  
				</form>
			</div>
			<div class="col-md-4">
				<div id="cart"><a class="btn btn-1" href="flow.php"><span class="glyphicon glyphicon-shopping-cart"></span>CART : <?php 
$k = array (
  'name' => 'cart_info1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> ITEM</a></div>
			</div>
		</div>
	</header>
	
    <nav id="menu" class="navbar">
		<div class="container">
			<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
			   <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			</div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav">
                                         <li><a href="index.php">首页</a></li>

                                         <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                                         <li><a href="<?php echo $this->_var['nav']['url']; ?>"><?php echo $this->_var['nav']['name']; ?></a></li>
                                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                        </div>
		</div>
    </nav>
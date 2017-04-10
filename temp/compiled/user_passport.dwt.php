<?php echo $this->fetch('library/page_header.lbi'); ?>




<div id="page-content" class="single-page">
       <div class="container">
           
                <div class="row">
                        <div class="col-lg-12">
                                <ul class="breadcrumb">
                                        <li><a href="index.html">首页</a></li>
                                        <li><a href="account.html">用户中心</a></li>
                                </ul>
                        </div>
                </div>
           
                <div class="row">
                    <div class="col-md-6">
                            <div class="heading"><h2>会员登录</h2></div>
                            <form name="formLogin" action="user.php" method="post" >
                                    <div class="form-group">
                                            <input type="text" class="form-control" placeholder="输入用户名" name="username" id="username" required>
                                    </div>
                                    <div class="form-group">
                                            <input type="password" class="form-control" placeholder="输入密码" name="password" id="password" required>
                                    </div>
                                     <input type="hidden" name="act" value="act_login" />
                                     <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                     <button type="submit" class="btn btn-1" name="login" id="login">登录</button>
                                    <a href="#">忘记密码?</a>
                            </form>
                    </div>
                    
                    <div class="col-md-6">
                            <div class="heading"><h2>会员注册</h2></div>
                            <form action="user.php" method="post" name="formUser">
                                    <div class="form-group">
                                            <input type="text" class="form-control" placeholder="输入用户名" name="username" id="username" required />
                                    </div>
                                    <div class="form-group">
                                            <input type="text" class="form-control" placeholder="输入邮箱" name="email" id="email" required />
                                    </div>
                                   
                                    <div class="form-group">
                                            <input type="password" class="form-control" placeholder="输入密码" name="password" id="password1" required />
                                    </div>
                                    <div class="form-group">
                                            <input type="password" class="form-control" placeholder="确认密码" name="confirm_password" id="confirm_password" required />
                                    </div>
                                    <div class="form-group">
                                            <input name="agreement" id="agree" type="checkbox" value="1" checked="checked"/> <?php echo $this->_var['lang']['agreement']; ?>
                                    </div>
                                     <input name="act" type="hidden" value="act_register" />
                                     <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                    <button type="submit" name="Submit" value="" class="btn btn-1">注册</button>
                            </form>
                    </div>
               </div>
           
           
       </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
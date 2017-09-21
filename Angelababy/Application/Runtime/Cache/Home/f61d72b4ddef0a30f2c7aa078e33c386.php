<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>haha</title>
  <link rel="shortcut icon" href="/Angelababy/Public/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/Angelababy/Public/css/meitu_register.css" />
 </head>
 <body>
  <div class="target"><span style="white-space: pre-line;font-size:20px;"><!-- - Click or Hover - --></span></div>
  <canvas id="cvs"></canvas>
  <!-- header -->
  <div id="header">
    <div>
      <div class="img lf">
        <a href="login.html" target="_blank">
         <img src="/Angelababy/Public/images/logo.png" class="lf">
        </a>
      </div>
      <div class="header_right rt">
				<ul>
					<li class="login">
						<a href="/code/Angelababy/index.php/Home/login/login.html">登录</a>&nbsp; |&nbsp;
            <a href="/code/Angelababy/index.php/Home/register/register.html">注册</a>
					</li>
				</ul>
			</div>
    </div>
  </div>
  <!-- section -->
  <div id="section">
    <div class="biaodan">
      <p>
        <span>手机注册</span>
      </p>
      <div class="lf">
        <form id="form-register">
          <div class="biaodan_middle">
            <ul>
              <li>
                手机号码&nbsp;&nbsp; 
								<input type="text" maxlength="11" id="uname" name="u" placeholder="手机号码">
                &nbsp;
								<span>*11位手机号码</span>
								<b></b>
              </li>
              <li>
                验证码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" placeholder=" 验证码" class="short" maxlength="6" id="code">&nbsp;&nbsp;
                <!-- <button class="phone" id="code" name="code">获取验证码</button> -->
                <canvas id="canvas" width="100" height="32" ></canvas>
                <b></b>
              </li>
              <li>
                设置密码&nbsp;&nbsp; <input type="password" maxlength="12" id="upwd" name="upwd" placeholder="请输入密码">
                &nbsp;<span>*6~12个字母数字组合</span>
                <b></b>
              </li>
              <li>
                重复密码&nbsp;&nbsp; <input type="password" maxlength="12" id="upwd1" name="upwd1" placeholder="请再次入密码">
                &nbsp;<span>请再次输入密码</span>
                <b></b>
              </li>
              <li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" id="agree">
                <label for="agree">阅读并接受<a href="#">《美图帐号服务条款》</a></label>
              </li>
              <li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="注册" class="zhuce" id="btn">
              </li>
            </ul>
          </div>
        </form>
      </div>
      <div class="lf">
        <p>
          &nbsp;&nbsp;在美图其他产品上注册过?请<a href="#login.html">直接登录</a><br><br>
          &nbsp;&nbsp;或使用其他方式登录<br>
          <img src="/Angelababy/Public/images/icon_thirdparty.png">
        </p>
      </div>
    </div>
  </div>
  <div id="footer">
      ©2016 Meitu, Inc. 美图公司版权所有 闽B2-20040192
  </div>
  <div class="zhe">
    <div></div>
    <div>
      <h2></h2>
      <button>确定</button>
    </div>
  </div>
  <script src="/Angelababy/Public/js/jquery-1.11.3.js"></script>
  <script src="/Angelababy/Public/js/register.js"></script>
 </body>
</html>
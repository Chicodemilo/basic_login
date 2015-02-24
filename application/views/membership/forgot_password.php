<div id='wrapper'>
    <div id="login_form">
		<h2>Password Reset</h2>
		<p>Enter the email address associated with your account and we'll send you a link to reset your password.</p>
		<?php 
			echo form_open('login/email_password');
			$opts = 'placeholder="Enter Your Email Address", type="email"';
			echo form_input('email', '', $opts);
			echo form_submit('submit', 'Send');
			// $opts = 'style="display:inline; font-weight:bold;"';
			// echo anchor('login/signup', 'Create Account', $opts);
		 ?>
		 
	 </div>
</div>
<?php require_once dirname(__FILE__) . '/header.php'; ?>

<div class="row-fluid app_container">
    <form name="newUser" action="new_user.php">
    	<div class="row">
    		<div class="span2" id="J-labels">
    			<div>Email: </div>
    			<div>Password: </div>
    			<div>Confirm Pass: </div>
    		</div>
    		<div class="span10 SU-boxes">
		    	<input type="text" name="email"><br>
		    	<input type="password" name="password"><br>
		    	<input type="password" name="confirm"><br>
		    	<input type="submit" class="btn-large btn-primary" value="Sign Up" id="SU-sub">
		    </div>
    </form>
</div>
<script src="assets/passwordMatch.js"></script>
<?php require_once dirname(__FILE__) . '/footer.php'; ?>

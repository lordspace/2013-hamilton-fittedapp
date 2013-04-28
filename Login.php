<?php require_once dirname(__FILE__) . '/header.php'; ?>

<div class="row-fluid app_container">
    <form name="newUser">
    	<div class="row">
    		<div class="span2" id="J-labels">
    			<div>Email: </div>
    			<div>Password: </div>
    		</div>
    		<div class="span10">
		    	<input type="text" name="email"><br>
		    	<input type="password" name="password"><br>
		    	<input type="submit" class="btn-large btn-primary" value="Login">
		    </div>
    </form>
</div>
<?php require_once dirname(__FILE__) . '/footer.php'; ?>

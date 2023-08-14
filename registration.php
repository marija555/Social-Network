<?php include "inc/header.php"; ?>
<div><?php validate_user_registration();?></div>


<form method = "post" class ="text-center">
    <div>
        <label for="first_name">First Name: </label>
        <input type = "text" required name = "first_name" placeholder="Enter your first name..."/>
	</div>
    <div>
        <label for ="last_name">Last Name: </label>
	    <input type = "text" required name = "last_name" placeholder="Enter your last name..."/> 
	</div>
    <div>
	    <label for="username">Username: </label>
	    <input type = "text" required name = "username" placeholder="Enter your username..."/> 
    </div>
    <div>
        <label for="email">Email: </label>
	    <input type = "email" required name = "email" placeholder="Enter your email..."/> 
	</div>
    <div>
        <label for="password">Password: </label><br>
	    <input type = "password" required name = "password" placeholder="Enter your password..."/><br>
	    <input type = "password" required name = "password_two" placeholder="Reenter password.."/> <br>
    </div>
	 <button class="btn btn-success"> Submit</button>
</form>


<?php include "inc/footer.php"; ?>
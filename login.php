<?php include "inc/header.php";?>

	<div> 
        <?php display_message();
        validate_user_login();?>
    </div>
                                                                                                                           
                                                                                                                      
<form method = "post" class ="text-center">                                                                           
    <div>                                                                                                          
        <label for="email">Email: </label> <br>                                                                      
	    <input type = "email" required name = "email" placeholder="Enter your email..."/>                           
	</div>                                                                                                            
    <div><br>                                                                                                            
        <label for="password">Password: </label><br>                                                                  
	    <input type = "password" required name = "password" placeholder="Enter your password..."/><br>                
    </div>                                                                                                                 
	 <button class="btn btn-success"> Login</button>                                                                 
</form>                                                                                                               
                                                                                                                      
<?php include "inc/footer.php"?>
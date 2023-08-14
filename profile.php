<?php
include('inc/header.php');
user_restrictions();
?>

    <div>
        <?php display_message(); ?>
    </div>

<div class="text-center"><?php
    $user = get_user();
    echo "<img class='profile-image' src='" . $user['profile_image'] . "'>";
    
    user_profile_image_upload();
    
    ?>
                                                                                                                             
    <form method = "post" enctype="multipart/form-data" class ="text-center">
        Select image to upload:<br>
        <input type="file" name="profile_image_file"/><br>
         <input type="submit" value="Upload Image" name="submit"/>                
    </form>  
</div>
<?php
include('inc/footer.php');
?>
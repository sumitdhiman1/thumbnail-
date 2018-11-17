<?php
    session_start();

    if(isset($_POST['submit'])) {
        if(!empty($_POST['radio']))
            $_SESSION['radio'] = $_POST['radio'];
    }
	if(isset($_POST['submit'])) {
        if(!empty($_POST['checkbox']))
            $_SESSION['checkbox'] = $_POST['checkbox'];
    }
 if(isset($_SESSION['radio']))

    
?>



<?php

if(isset($_POST['submit'])){
 $name = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$state = $_POST['state'];
$city = $_POST['city'];

$gender = isset($_POST['radio']);











$lol='';

if(isset($_POST['checkbox'])){
	$lol='';
	$lol=$_POST['checkbox'];
}else{
	
}
$checkbox = $lol;


if(is_array($checkbox)){
	$b= implode(",",$checkbox);
}
else{
	$b= $checkbox;
}
function Upload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width='', $thumb_height=''){

    //folder path setup
    $target_path = $target_folder;
	
    $thumb_path = $thumb_folder;
    
    //file name setup
    $image = explode(".",$_FILES['image']['name']);
	


    $fileName=$image[0];

    $fileExt=$image[1];

    $newfile= time() ."_thumb" . "." . $fileExt;
	echo $newfile.'<br>';
	$newfile1= time() ."_thumb1" . "." . $fileExt;
	echo $newfile1.'<br>';
	
    $newfile2= time() ."_thumb2" . "." . $fileExt;
	echo $newfile2.'<br>';
	$newfile3= time() ."_thumb3" . "." . $fileExt;
	echo $newfile3.'<br>';
	$newfile4= time() ."_thumb4" . "." . $fileExt;
	echo $newfile4.'<br><br>';
    $image_count = count($image);
    $file_ext = $image[$image_count-1];
	
    
    //upload image path
    $upload_image = $target_path.$newfile;
	
    
    //upload image
    if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image))
    {
        //thumbnail creation
        if($thumb == TRUE)
        {
            $thumbnail = $thumb_path.$newfile;
			echo $thumbnail. '<br>';
			  $thumbnail1 = $thumb_path.$newfile1;
               echo $thumbnail1.'<br>';
			  $thumbnail2 = $thumb_path.$newfile2;
			    echo $thumbnail2. '<br>';
			  $thumbnail3 = $thumb_path.$newfile3;
               echo $thumbnail3.'<br>';
			   $thumbnail4 = $thumb_path.$newfile4;
               echo $thumbnail4.'<br><br>';
            list($width,$height) =  getimagesize($upload_image);
            $thumb_create = imagecreatetruecolor($thumb_width = '50' ,$thumb_height = '50');
			
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
				
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
			

            imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width ,$thumb_height ,$width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail,100);
            }
			$thumb_create = imagecreatetruecolor($thumb_width = '100'  ,$thumb_height = '100');
			
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
					
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
			
		imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width ,$thumb_height ,$width,$height);
		
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail1,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail1,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail1,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail1,100);
            }
			$thumb_create = imagecreatetruecolor($thumb_width = '150' ,$thumb_height = '150');
		
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
					
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
						imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width ,$thumb_height,$width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail2,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail2,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail2,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail2,100);
            }
			$thumb_create = imagecreatetruecolor($thumb_width = '200'  ,$thumb_height = '200');
		
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
				
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
						imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width ,$thumb_height,$width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail3,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail3,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail3,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail3,100);
            }
						$thumb_create = imagecreatetruecolor($thumb_width = '250' ,$thumb_height = '250');
			
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
				
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;

                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                    break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
						imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width ,$thumb_height,$width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail4,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail4,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumbnail4,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumbnail4,100);
            }
			

        }

        
    }
    
}






//$image = pathinfo($_FILES['image']['name']);
$img_tmp =($_FILES['image']['tmp_name']);

$image = $_FILES["image"]["name"];

$array = explode('.', $image);


$fileName=$array[0];

$fileExt=$array[1];

$newfile= time() . "." . $fileExt;


if(empty($name)){
	$msg= "please enter firstname";
}

else if(empty($last)){
	$msg1= "please enter lastname";
}
else if(empty($email)){
	$msg2= "please enter email";
}
else if(empty($password)){
	$msg3= "please enter your password";
}
else if(empty($cpassword)){
 $msg4= "please re enter your password";
}
else if(empty($state)){
	$msg5= "please select your state";
	
}
else if(empty($city)){
	$msg6= "please select your city";
}
else if(empty($gender)){
	$msg7= "please select your gender";
}
else if(empty($checkbox)){
	$msg8= "please select your hobbies";
}
else if(empty($image)){
	$msg9= "please browse your image";
}


}

 ?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
       <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <h2>Sign UP</h2>
            <div class="row">
                <div class="col-md-4"><div class="txt">First Name:</div></div>
                <div class="col-md-8">
                    <div class="form-group">
    
                            <input type="text" class="form-control" name="first" placeholder="First Name" value="<?php echo isset($_POST['first']) ? $_POST['first'] : '' ?>">
							<p style="color:red;"><?php 
                                 if(isset($msg)){
									 echo $msg;
								 }

							?></p>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2 "><div class="txt">Last Name:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="text" class="form-control" name="last" placeholder="Last Name" value="<?php echo isset($_POST['last']) ? $_POST['last'] : '' ?>" >
														<p style="color:red;"><?php 
                                 if(isset($msg1)){
									 echo $msg1;
								 }
								 else if($email !=""){
									 echo "";
								 }

							?></p>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Email:</div></div>
                <div class="col-md-8 col-xs-10 ">
                    <div class="form-group">
    
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
							<p style="color:red;"><?php 
                                 if(isset($msg2)){
									 echo $msg2;
								 }

							?></p>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Password:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
							<p style="color:red;"><?php 
                                 if(isset($msg3)){
									 echo $msg3;
								 }

							?></p>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Confirm Password:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="password" class="form-control" name="cpassword" placeholder="Enter your password again" value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : '' ?>">
							<p style="color:red;"><?php 
                                 if(isset($msg4)){
									 echo $msg4;
								 }

							?></p>
                    </div>
                </div>
                
            </div>
            
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">State:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                           <select class="form-control" name="state"  >
						     <option value="0">Select your state</option>
                             <option value="Haryana"
                              <?php if($_POST) {if($_POST['state']=='Haryana') echo 'selected="selected"';} ?> 

							 >Haryana</option>
                             <option value="Karnatka" <?php if($_POST) {if($_POST['state']=='Karnatka') echo 'selected="selected"';} ?> >karnatka</option>
                             <option value="Gujrat" <?php if($_POST) {if($_POST['state']=='Gujrat') echo 'selected="selected"';} ?> >Gujrat</option>
                             <option value="Madya pradesh" <?php if($_POST) {if($_POST['state']=='Madya pradesh') echo 'selected="selected"';} ?> >Madya pradesh</option>
                            </select>
							<p style="color:red;"><?php 
                                 if(isset($msg5)){
									 echo $msg5;
								 }


							?></p>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">city:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                           <select class="form-control" name="city"> 
						        <option value="0">Select your city</option>
                             <option value="Ambala" <?php if($_POST) {if($_POST['city']=='Ambala') echo 'selected="selected"';} ?> >Ambala</option>
                             <option value="chandigarh" <?php if($_POST) {if($_POST['city']=='chandigarh') echo 'selected="selected"';} ?> >chandigarh</option>
                             <option value="Barara" <?php if($_POST) {if($_POST['city']=='Barara') echo 'selected="selected"';} ?> >Barara</option>
                             <option value="mullana" <?php if($_POST) {if($_POST['city']=='mullana') echo 'selected="selected"';} ?> >mullana</option>
                            </select>
							<p style="color:red;"><?php 
                                 if(isset($msg6)){
									 echo $msg6;
								 }

							?></p>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Gender:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                        <input type="radio"   name="radio" class="gen" value="Male"
						<?php if (isset($_POST['radio']) && $_POST['radio']=="Male") echo "checked";?>
						>Male <input type="radio"  class="gen" value="Female" name="radio"
						 <?php if (isset($_POST['radio']) && $_POST['radio']=="Female") echo "checked";?>
						>Female
                    </div>
					        <p style="color:red;"><?php 
                                 if(isset($msg7)){
									 echo $msg7;
								 }

							?></p>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Interested:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                        <input type="checkbox" name="checkbox[]"  class="gen" value="Cricket"
                         <?php if(isset($_POST['checkbox'])) {if(in_array("Cricket",$_POST['checkbox'])) echo "checked='checked'";} ?>
						>Cricket
						<input type="checkbox" name="checkbox[]" class="gen" value="Hockey"
						<?php if(isset($_POST['checkbox'])) {if(in_array("Hockey",$_POST['checkbox'])) echo "checked='checked'";} ?>

						>
						Hockey<input type="checkbox" name="checkbox[]" class="gen" value="football"
						 <?php if(isset($_POST['checkbox'])) {if(in_array("football",$_POST['checkbox'])) echo "checked='checked'";} ?>
						>Football
						
						<input type="checkbox" name="checkbox[]" class="gen" value="chess"
						 <?php if(isset($_POST['checkbox'])) {if(in_array("chess",$_POST['checkbox'])) echo "checked='checked'";} ?>
						
						>Chess
                    </div
										 <p style="color:red;">
					                          <?php

					
                                                 if(isset($msg8)){
									             echo $msg8;
								                    }

							                 ?></p>
                </div>
                
            </div> 
			
			<div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Image:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="file" class="form-control" name="image" placeholder="browse your image" value="<?php echo isset($_POST['image']) ? $_POST['image'] : '' ?>" >
							<p style="color:red;">
					                          <?php

					
                                                 if(isset($msg9)){
									             echo $msg9;
								                    }

							                 ?></p>
							
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                        <input type="submit" value="submit" name="submit" class="btn btn-primary">
                    </div>
                </div>
                
            </div>
            
        </div>
        </form>
		


<?php 




if(isset($_POST['submit'])){
	
	if(!empty($name) && !empty($last) && !empty($email) && !empty($password) && !empty($cpassword) && !empty($state) && !empty($city) && !empty($checkbox) && !empty($gender)   && !empty($image) ){
		
    
    $upload_img = Upload('image','uploads/','',TRUE,'uploads/thumbs/');
    

    //full path of the thumbnail image
    $thumb_src = 'uploads/thumbs/'.$upload_img;
   
    


echo "<h1>Your First name is:".$name."<br> </h1>";
echo "<h1>Your Last name is:".$last."<br> </h1>";
echo "<h1>Your email is:".$email."<br> </h1>";
echo "<h1>Your password is:".$password."<br> </h1>";
echo "<h1>Your confirm password is:".$cpassword."<br> </h1>";
echo "<h1>Your State name is:".$state."<br> </h1>";
echo "<h1>Your city name is:".$city."<br> </h1>";
echo "<h1>Your gender is:".$_POST['radio']."<br> </h1>";
echo "<h1>Your  Hobbies is:".$b."<br> </h1>";

	}
}

 ?>

 		
	
    </body>
</html>
</html>
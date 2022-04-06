


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TASK-TOW </title>
</head>
<body>
   
<body>

<div class="container">
 

    <form   action="<?php echo $_SERVER['PHP_SELF'];?>"   method="POST">

        <div>
            <label for="text-input">Name</label>
            <input type="text"   name="name"  id="text-input"  placeholder="your Name">
        </div>  


        <div >
            <label for="valid-Email">Email address</label>
            <input type="email" name = "email" id="valid-Email1"  placeholder="your email">
        </div>

        <div >
            <label for="pass">New Password</label>
            <input type="password" name="password"   id="pass" placeholder="write strong Password">
        </div>

        <div >
            <label for="address-input"> address </label>
            <input type="text"  name="address"  id="address-input"  placeholder=" your address">
        </div>

        <div >
            <label for="linkedin-url"> linkedin account </label>
            <input type="url"   name="linkedin-account"  id="linkedin-url"  placeholder=" linkedin account">
        </div>



        <button type="submit" >Submit</button>
    </form>
</div>


</body>
</html>


<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_REQUEST['password'];
$address = $_REQUEST ['address'];
$linkedin_acc = $_POST['linkedin-account'];

$errors= [];

if (empty($name) || !is_string($name)) {
$errors['NAME'] = "required";

}

if (empty($email) || strchr($email , "@")) {
    $errors['NAME'] = "required";
    
    }
    

 if (empty($password) || strlen($password) < 6) {
        $errors['password'] = "required";
        
        }
        
if (empty($address) || strlen($address) <= 10) {
            // $errors['address'] = "required";
            $errors['address'] = "required";
            
            }

if (empty($linkedin_acc) || strchr($linkedin_acc , "linkedin.com")) {
                $errors['linkedin-account'] = "required";
                
                }


if(count($errors) > 0 ){

     foreach($errors as $key => $value){
          echo '* '.$key.' : '.$value.'<br>';  
                    }
            
                 }else{
                     echo 'Valid Data';
                 } 

            

}







?>




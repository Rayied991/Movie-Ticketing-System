<?php
$invalid_email="";
$invalid_newpass="";
$invalid_confirm="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

    if(empty($_REQUEST['pass_user_name'])){
        $invalid_email="Please enter your email";
    }

    if(empty($_REQUEST['pass_new_pass'])){
        $invalid_newpass="*Insert new password";
    }
    else if(!empty($_REQUEST['pass_new_pass']) && strlen($_REQUEST['pass_new_pass'])<8){
        $invalid_newpass="*Password must be atleast 8 characters";
    }

    if(empty($_REQUEST['pass_confirm'])){
        $invalid_confirm="*Confirm your password";
    }
    else if(!empty($_REQUEST['pass_confirm']) && $_REQUEST['pass_new_pass']!=$_REQUEST['pass_confirm']){
        $invalid_confirm="*Password does not match";
    }
    
      
//change password from data.json
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if($_REQUEST['pass_user_name'] && $_REQUEST['pass_new_pass'] && $_REQUEST['pass_confirm'])
  {
   
      $user_email = $_REQUEST['pass_user_name'];
      $new_pass = $_REQUEST['pass_new_pass'];
      $confirm_pass = $_REQUEST['pass_confirm'];
      $data = json_decode(file_get_contents('../user_data/reg_user_data.json'), true);

      foreach ($data as $key => $value) {
        if($value['email'] == $user_email){
          if(($new_pass == $confirm_pass) && (strlen($new_pass)>=8)){
            $data[$key]['set_pass'] = $new_pass;
            
            //fetching remaining data
            $remaining_data=file_get_contents("../user_data/reg_user_data.json");
            $fetch_data=json_decode($remaining_data);
            $fetch_data[]=$data;

            file_put_contents('../user_data/reg_user_data.json', json_encode($data,JSON_PRETTY_PRINT));
            echo "Password changed successfully";
          }
          else{
            echo "Password not saved";
          }
        }
      }
      }
      else{
        echo "Please fill all the fields";
      }
      
}
    }

?>
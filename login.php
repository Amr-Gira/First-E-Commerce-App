<form method=post action=''>
     <div class='mb-3'>
        <input type='text' name=username placeholder='Enter Your User Name' class='form-control'>
     </div> 
     <div class='mb-3'>
        <input type='password' name=pass placeholder='Enter Your Password' class='form-control'>
     </div>     
     <div class='mb-3'>
           <button class='btn btn-info'>LogIn</button>
    </div>   
</form>
<?php 
   if($_SERVER['REQUEST_METHOD']=='POST'){
          $user_name=$_POST['username'];
          $password=$_POST['pass'];

          if($user_name=='admin' && $password=='123456'){
                      
            echo '<div class="smsg alert alert-success">You Are Loged In Successfully</div>';

          }else{
            echo '<div class="ermsg alert alert-danger">User Name Or Password Wrong </div>';
          }
       

   }


?>
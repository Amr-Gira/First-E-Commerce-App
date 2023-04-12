    <form method=post  action='' enctype="multipart/form-data">
     <div class='mb-3'>  
        <label>Your Full Name</label><input type=text name=full_name class='form-control'>
     </div>  
     <div class='mb-3'>
         <label>Birth Date</label><input type=date name=bdate class='form-control'>
      </div>
     <div class='mb-3'>  
         <label>Your Email</label><input type=email name=email class='form-control'>
     </div>  
     <div class='mb-3'>  
        <label>Your Gender :</label>
            <div><label>Male</label><input type=radio name=gender  value=male class="form-check-input"></div>
            <div><label>female</label><input type=radio name=gender  value=female class="form-check-input"></div>
     </div>   
     <div class='mb-3'>
          <select name=country class="form-select">
                <option value=20>Egypt</option>
                <option >saudi arbia</option>
                <option selected>kawuit</option>
           </select>

</div>
<div >
      <label>certificates</label>
         <label> HTML</label><input type=checkbox name=cert[] value=html >
         <label> CSS</label><input type=checkbox name=cert[] value=css >
         <label> JavaScript</label><input type=checkbox name=cert[] value=javascript >
         <label> Bootstrap</label><input type=checkbox name=cert[] value=bootstrap >

</div>
<div >
   <label>About You</label>
       <textarea name='about' ></textarea>
</div>
<div >

    <label>Your photo</label><input type=file name=photo class='form-control'>

</div>
<button class='btn btn-info'>Register</button>

</form>
</section>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $certs=$_POST['cert'];
      $photo_name=$_FILES['photo']['name'];// file orginal name 
      $photo_tmp=$_FILES['photo']['tmp_name'];// tmp path
      $ext=pathinfo($photo_name,PATHINFO_EXTENSION); //get file extension
/*
    $ext_ar=explode('.',$photo_name);
    $c=count($ext_ar)-1;
      $ext= $ext_ar[$c];
      */

      $new_name=time().'.'.$ext;
      $path='upload/'.$new_name;// upload path
      if($ext!='jpg'&& $ext!='png' && $ext!='webp' && $ext!='jpeg' && $ext!='gif' ){
           echo "File Upload Error: NOT IMAGE ";
      }else{
            move_uploaded_file($photo_tmp, $path);
      }
    foreach($certs AS $cert ){
         echo $cert.'<br />';
    }
}
?>
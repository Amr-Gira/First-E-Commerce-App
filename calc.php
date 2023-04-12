
<form method=post action='process'>
    <div class='mb-3'>
      <input type=number name='no1' placeholder='Enter First Number ' class='form-control'>
    </div>
    <div class='mb-3'>
      <input type=number name='no2' placeholder='Enter second Number '  class='form-control'>
</div>
<button class='btn btn-success'>+</button>

</form>
<?php
if(isset($_GET['res'])){
    echo '<h5> Result: '.$_GET['res'].'</h5>';

}


/*if($_SERVER['REQUEST_METHOD']=='POST'){
    $num1=$_POST['no1'];
    $num2=$_POST['no2'];

    $result=$num1+$num2;

    echo '<h5> Result: '.$result.'</h5>';
}*/
  

?>
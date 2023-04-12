<?php require('./header.php')?>
             


<section class='container'>   

<?php 
if(isset($_GET['page'])){
      $page=$_GET['page'];
      include($page);
}else{ 
include('./home.php');
}



?>
</section>


<footer>
   <div class="footer1">
    <nav >
        <ul>
            <li>
                home
            </li>
            <li>
               About
            </li>
            <li>
                Products
            </li>
            <li>
                Contact
            </li>
            </ul>
    </nav>
    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        </body>












</html>

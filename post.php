
<?php
include('header.php');
?>
<style>
    .post_footer{
        display: flex;
        justify-content: space-between;
        padding:5px;
        background:#c2c2c2;
    }
    .post{
        background:#faf7f7;
        border-radius:5px;
        margin:2px;
    }
    .post p{
        
    }
    
</style>
    <!-- ---------Main Navbar End ----------- -->
    
<div class="container">
    <div class="row">
         <h3 style="padding:5px;"> Resent Post: 
         
        </h3> <?php
         $post_sql = mysqli_query($conn,"SELECT * FROM `post` ORDER BY id DESC");
         
         while( $row = mysqli_fetch_assoc($post_sql)){
         ?>
         <div class="col-md-4 post">
             <label> <b><?php echo $row['post_title']; ?></b> </label>
             <p> <?php echo $row['post_desc']; ?> </p>
             <img src="admin/post_photo/<?php echo $row['photo']; ?>" width="100%" height="250px" >
             <div class="post_footer"> <span> <b>Post By </b> <?php echo $row['admin_name']; ?></span>  <span> <b><i class="fa fa-clock-o" style=""></i> </b> 
             <span>
                 <?php
                 $post_time = $row['time'];
                 $post_time = new DateTime($post_time);

$atime = $post_time -> diff( new DateTime);
 $year = $atime->y;
 $month = $atime->m;
 $day = $atime->d;
 $hour = $atime->h;
 $min = $atime->i;
 $second = $atime->s;
 
  if($year>0){
      $somoy = "Year";
      $songkha = $year;
      
  }else{
      if($month>0){
      $somoy = "Month";
      $songkha = $month;
  }else{
      if($day>0){
          $somoy = "Day";
          $songkha = $day;
          
      }else{
        if($hour>0){
          $somoy = "Hour";
           $songkha = $hour;
          
      }else{
          
         if($min>0){
          $somoy = "Min";
          $songkha = $min;
          
      }else{
          if($second>0){
          $somoy = "Second";
          $songkha = $second;
          
      } 
      }  
      }  
          
      }
      
  }
  }
 
 if($songkha>1){
     $plrel = "s";
 }else{
     $plrel = "";
 }
 
 echo $songkha;
 echo $somoy.$plrel;

                 ?>
             </span>
             ago </span> </div>
             
         </div>
         <?php
         }
         ?>
         
    </div>
    
</div>


  <?php
include('footer.php');
?>
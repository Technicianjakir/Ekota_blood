

<?php
include('header.php');

$sql_c = mysqli_query($conn,"SELECT * FROM `team`");

?>
<style>
     .flex-container{
      

      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      

    }
    .flex-container .member-item{
      height:350px;
      width: 250px;
      background-color: rgb(216, 231, 231);
      box-shadow:2px 2px 2px 2px rgb(44, 43, 43);
      text-align: center;
      margin: 10px;
    }
    .flex-container .member-item img{
      width: 100%;
      height: 70%;
      border-radius: 50%;
      border:7px solid rgb(13, 10, 233);
      background-color: rgb(11, 199, 247);
    }
    .flex-container .member-item h4{
       font-style: bold;
       font-weight: 600;
      
       color:rgb(9, 64, 116);
       margin-top: 10px;
      
     
    }
    .flex-container .member-item .phone{
      margin-top: -10px;
     
    }
</style>

    <!-- ---------Main Navbar End ----------- -->
    
        <div class="container">
            <div class="row">
                 <h1 style="text-align:center;" >
                     Our Team Member
                 </h1>
                 <div class="flex-container">
      
      <?php
     while($row_c = mysqli_fetch_assoc($sql_c)){
      ?>
      
        <div class="member-item">
        <img src="admin/commitee_photo/<?php echo $row_c['photo']; ?>" alt="">
         <h4 style="font-size:17px;" > 
         
       <?php echo $row_c['name']; ?>
         </h4>
         <h5 style="margin-bottom:0px;" >
             
             <?php echo $row_c['title']; ?>
       
             </h5>
         
         <span  class="phone"> 
         
         
      
         </span>

       </div>
       <?php }?>
       </div>
                
            </div>
        </div>

  <?php
include('footer.php');
?>
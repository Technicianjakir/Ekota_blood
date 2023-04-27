<?php
include('header.php');

?>
    <!-- ---------Main Navbar End ----------- -->
    
        <div class="container">
            <div class="row">
                 <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="true" >
        <div class="carousel-inner">
            <?php
           $sql =  mysqli_query($conn,"SELECT * FROM `banner`");
          
          $i=0;
               while( $row = mysqli_fetch_assoc($sql)){
             
            ?>
            <div class="carousel-item <?php if($i==0){echo "active";}?>">  <img src="ekota_photo/<?php echo $row['photo'];?>" class="d-block w-100" alt="">
            
              <div class="carousel-caption">
              <h3> <?php echo $row['title'];?></h3>
                 
              </div>
            </div>
            
           <?php
           $i++;
           }?>
            <!--
            <div class="carousel-item"><img src="ekota_photo/1 (1).jpeg" class="d-block w-100"  alt="">
                <div class="carousel-caption">
                <h1> Untitle </h1>
                    
                </div>
            </div>
            <div class="carousel-item">        <img src="ekota_photo/1 (3).jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                <h1> Untitle </h1>
                  
                </div>
            </div>
            -->
                
        </div> 
        <button  class="carousel-control-prev" type="button"  data-bs-target="#slider"
          data-bs-slide="prev" >
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button  class="carousel-control-next" type="button"  data-bs-target="#slider"
          data-bs-slide="next" >
            <span class="carousel-control-next-icon"></span>
        </button>
        <div class="carousel-indicators">
            <?php
           $sql =  mysqli_query($conn,"SELECT * FROM `banner`");
          
          $i=0;
               while( $row = mysqli_fetch_assoc($sql)){
             
            ?>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="<?php echo $i;?>" class="active" >
                
            </button>
            
            <?php
            $i++;
            }?>
           
        </div>
    </div>
            </div>
        </div>

  <?php
include('footer.php');
?>
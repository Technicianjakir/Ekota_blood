<?php
include('header.php');

if(isset($_POST['br_sent'])){
    
    $d_name = $_POST['d_name'];
    $d_phone = $_POST['d_phone'];
    $f_link = $_POST['f_link'];
    $b_group = $_POST['b_group'];
    $blood_status = $_POST['blood_status'];
    $b_date = $_POST['b_date'];
    $b_d_l_date = $_POST['b_d_l_date'];
    $pre_dis = $_POST['pre_dis'];
    $city = $_POST['city'];
    $p_zone = $_POST['p_zone'];
    $tota_donation_donate_time = $_POST['tota_donation_donate_time'];
    $gender = $_POST['gender'];
   
    
//   

     $photo_loc= $_FILES['photo']['tmp_name'];
     $a= $_FILES['photo']['name'];

   $photo_name_input= explode('.',$_FILES['photo']['name']);
      
   $photo_last_name=end($photo_name_input);
   $photo_full_name = $d_phone.'.'.$photo_last_name;
   $photo_upload = "user_donors_photo/".$photo_full_name;
   
   
    
    
   
//   
  
    $sql = mysqli_query($conn,"SELECT * FROM `user_donors` WHERE `d_phone`='$d_phone'");
   $d_count =  mysqli_num_rows($sql);
   if($d_count==0){
       
   
    
  $suc = mysqli_query($conn,"INSERT INTO `user_donors`(`d_name`, `d_phone`, `f_link`, `b_group`, `b_status`, `birth_date`, `b_d_l_date`, `pre_dis`, `city`, `p_zone`, `tota_donation_donate_time`, `gender`, `photo`) VALUES ('$d_name','$d_phone','$f_link','$b_group','$blood_status','$b_date','$b_d_l_date','$pre_dis','$city','$p_zone','$tota_donation_donate_time','$gender','$photo_full_name')");
  

  if($suc){
      

     move_uploaded_file($photo_loc,$photo_upload);

      echo"<script>alert('Congratulation Your application successfully Waiting for admin approve')</script>";
  }else{
      echo"<script>alert('sorry something is wrong Please trai again')</script>";
  }
   }else{
        echo"<script>alert('You allready registered')</script>";
   }
 
  
}

$query = mysqli_query($conn,"SELECT * FROM `districts`");
$u_query = mysqli_query($conn,"SELECT * FROM `upazilas`");
?>
    <!-- ---------Main Navbar End ----------- -->
    
        <form action="" method="post" enctype="multipart/form-data"  >
    <div class="container col-lg-8 mt-4 mb-5 ">
        <div class="card shadow">
            <div class="row p-3 d-flex m-auto">
                <div class=" col-10  mx-auto rounded py-3 bg-info">
                    <h3 class="text-center  fw-bold">Register the form to become a blood donor</h3>
                </div>
                <div class="row ">
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Blood Donor Name : *</label>
                        <input class="form-control" type="text" name="d_name" placeholder="name" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Phone Number *</label>
                        <input class="form-control" type="number" name="d_phone" placeholder="Phone number" id="">
                    </div>
                    <div class="col-12 mt-3" style="width:120%;" >
                        <label>Facebook URL Link *</label>
                        <input class="form-control" type="text" name="f_link" value="https://www." id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Blood Group Required :</label>
                        <select name="b_group" class="form-control">
                            <option selected> Select Your Blood Group </option>
                            <option value="A+"> A+ </option>
                            <option value="A-"> A- </option>
                            <option value="B+"> B+ </option>
                            <option value="B-"> B- </option>
                            <option value="O+"> O+ </option>
                            <option value="O-"> O- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB- </option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label for="Address" class="form-label">Blood Status:</label>
                        <select name="blood_status"  class="form-control">

<option value="Regular & Ready">Regular & Ready To Blood Donate - নিয়মিত এবং প্রস্তুত</option>
<option value="Irregular but Interested">Irregular but Interested - অনিয়মিত কিন্তু আগ্রহী</option>
<option value="Ready To Donate">Ready To Blood Donate - প্রস্তুত</option>
<option value="Time hasn't yet">Time hasn't yet - সময় হয়নি</option>
<option value="Regular">Regular Blood Donate - নিয়মিত</option>
 <option value="Irregular">Irregular-অনিয়মিত</option>
<option value="If necessary ">If necessary - প্রয়োজনে</option>
<option value="Try Regularly or Necessary">Try to regularly or necessary - চেস্টা করি প্রয়োজনে এবং নিয়মিত দিতে</option>
</select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Birthday Date</label>
                        <input class="form-control" type="date" name="b_date"  id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Blood Donation Last Date:</label>
                        <input class="form-control" type="date" name="b_d_l_date" id="">
                    </div>

                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Present District:</label>
                        <select name="pre_dis" id="present_dis" class="form-select" aria-label="Default select example" style="width:100%;">
                            <option selected>Choose</option>
                            <?php while($get_data = mysqli_fetch_assoc($query)){ ?>
                            <option value="<?php echo $get_data['name'];?>"><?php echo $get_data['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <!--present city-->
                        <label>Present City :</label>
                         <input name="city"  name="sonod" list="sonod" class="form-control" style="width:100%;" >
                               <datalist id="sonod">
                              <?php while($u_get_data = mysqli_fetch_assoc($u_query)){ ?>
                                <option value="<?php echo $u_get_data['name'];?>">
                            
                            <?php } ?>
                               </datalist>

                         
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Present Zone:</label>
                       <input name="p_zone" style="width:100%;" class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Total Blood Donation Time</label>
                        <select class="form-select" name="tota_donation_donate_time">
                            <option value='0 Time'> 0 Time</option>
                            <option value='1nd'> 1nd</option>
                            <option value='2rd'> 2rd</option>
                            <option value='3th'> 3th</option>
                            <option value='4th'> 4th</option>
                            <option value='5th'> 5th</option>
                            <option value='6th'> 6th</option>
                            <option value='7th'> 7th</option>
                            <option value='8th'> 8th</option>
                            <option value='9th'> 9th</option>
                            <option value='10th'> 10th</option>
                            <option value='11th'> 11th</option>
                            <option value='12th'> 12th</option>
                            <option value='13th'> 13th</option>
                            <option value='14th'> 14th</option>
                            <option value='15th'> 15th</option>
                            <option value='16th'> 16th</option>
                            <option value='17th'> 17th</option>
                            <option value='18th'> 18th</option>
                            <option value='19th'> 19th</option>
                            <option value='20st'> 20st</option>
                            <option value='21nd'> 21nd</option>
                            <option value='22nd'> 22nd</option> 
                            </select>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Gender</label>
 <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>Choose</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Photo:</label>
                        <input name="photo" style="width:100%;" class="form-control" type="file" name="Birthday" placeholder="Reference Name" id="">
                    </div>
                </div>
                <div class="d-grid col-12 m-auto my-4">
                    <button name="br_sent" class="btn btn-danger fw-semibold" type="submit">Register Now <i
                            class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
  </form>

  <?php
include('footer.php');
?>
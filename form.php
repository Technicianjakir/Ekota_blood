<?php
include('header.php');
// include('../admin/conn.php');
if(isset($_POST['br_sent'])){
    
    $p_name = $_POST['p_name'];
    $p_problem = $_POST['p_problem'];
    $H_name = $_POST['H_name'];
    $H_address = $_POST['h_address'];
    $R_name = $_POST['R_name'];
    $P_number = $_POST['P_number'];
    $Bg_name = $_POST['Bg_name'];
    $B_amount = $_POST['B_amount'];
    $gender = $_POST['gender'];
    $D_time = $_POST['D_time'];
    $D_date = $_POST['D_date'];
    $Birthday = $_POST['Birthday'];
    $D_time = $D_date.' '.$D_time;
    
    $suc = mysqli_query($conn,"INSERT INTO `bl_appl`(`patent_name`, `gender`, `blood_group`, `hospital_name`, `h_address`, `birth_day`, `phone`, `ref_name`, `donet_time`, `donet_date`, `patent_problem`, `blood_amount`) 
                                     VALUES ('$p_name','$gender','$Bg_name','$H_name','$H_address','$Birthday','$P_number','$R_name','$D_time','$D_date','$p_problem','$B_amount')");
                                     if($suc){
                                         $last_id = $conn->insert_id;
                                         
                                        echo "<script>alert('Your Application submited succesfull very soon we are contact with you. Your Application ID is: $last_id')</script>";
                                     }
}
?>
    <!-- ---------Main Navbar End ----------- -->
        <form action="" method="post" >
    <div class="container col-lg-8 mt-4 mb-5 ">
        <div class="card shadow">
            <div class="row p-3 d-flex m-auto">
                <div class=" col-10  mx-auto rounded py-3 bg-info">
                    <h3 class="text-center  fw-bold">BLOOD REQUEST</h3>
                </div>
                <div class="row ">
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Patient name:</label>
                        <input class="form-control" type="text" name="p_name" placeholder="name" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Patient problem:</label>
                        <input class="form-control" type="text" name="p_problem" placeholder="Problem" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Hospital name:</label>
                        <input class="form-control" type="text" name="H_name" placeholder="Reference Name" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label for="Address" class="form-label">Address:</label>
                        <input class="form-control" type="text" name="h_address" placeholder="Address" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Reference Name:</label>
                        <input class="form-control" type="text" name="R_name" placeholder="Reference Name" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-6 mt-3">
                        <label>Phone Number:</label>
                        <input class="form-control" type="text" name="P_number" placeholder="Number" id="">
                    </div>

                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Blood group:</label>
                        <select name="Bg_name" class="form-select" aria-label="Default select example">
                            <option selected>Choose</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Total Blood Bag:</label>
                        <input class="form-control" type="text" name="B_amount" placeholder="0" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Gender:</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>Choose</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Donet date</label>
                        <input class="form-control" type="date" name="D_date" placeholder="Reference Name" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Donet time:</label>
                        <input class="form-control" type="time" name="D_time" placeholder="Reference Name" id="">
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4 mt-3">
                        <label>Birthday:</label>
                        <input class="form-control" type="date" name="Birthday" placeholder="Reference Name" id="">
                    </div>
                </div>
                <div class="d-grid col-12 m-auto my-4">
                    <button name="br_sent" class="btn btn-success fw-semibold" type="submit">Send Request <i
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
<footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <i class="fa fa-droplet"></i>
                    <span class="logo_name">Ekota Blood and social org</span>
                </div>
                <div class="media-icons">
                    <a href="https://www.facebook.com/groups/670863406677198/?ref=share&mibextid=NSMWBT"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-bottom:20px;">
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Company</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Team</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Services</li>
                    <li><a href="#">Donate</a></li>
                    <li><a href="#">Find Doner</a></li>
                    <li><a href="#">How we work</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Information</li>
                    <li><a href="#"><?php echo $help_row['email']; ?> </a></li>
                    <li><a href="#"> <?php echo $help_row['phone']; ?></a></li>

                </ul>
                
                <ul class="box input-box">
                    <form action="" method="post" >
                    <li class="link_name">Subscribe</li>
                    <li><input name="sub" type="text" placeholder="Enter your email"></li>
                    <li><input name="esub" type="button" value="Subscribe"></li>
                    </form>
                </ul>
                
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright © 2023 <a href="#">Ekota blood social org .</a>All rights reserved</span>
                <span class="policy_terms">
                    <a href="#">Privacy policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>


    <!-- -------bootstrap---------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


    <!-- Swiper JS -->
    <script src="swipper/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="script.js"></script>
     <script>
        
        $('.up__image').click(function(){
            $('#image__file__input').click();
        });
        

        function meritalFun() {
            var merit1 = document.querySelector('#merit1');
            var ismarridbox = document.querySelector('.ismarridbox');
            if (merit1.checked) {
                ismarridbox.style.display = 'initial';
            } else {
                ismarridbox.style.display = 'none';
            }
        }
        function sameAddr() {
            var sameAddrCheck = document.querySelector('.sameAddrCheck');
            var parmanat_inputs = document.querySelector(".parmanat_inputs");
            if (sameAddrCheck.checked == true){
                parmanat_inputs.style.display = "none";
                // alert('checked');
            } else {
                parmanat_inputs.style.display = "block";
            }
        }
        
        $('#agreeBtn').click(function(){
            if (agreeBtn.checked == true){
                $('.submit__btn').prop('disabled', false);
            }else {
                $('.submit__btn').prop('disabled',true);
            }
        })
        
       
        $('.present_dis').change(function(){
            var dis_id = $('#present_dis').children("option:selected").val();
            // alert(dis_id);
            // then setup ajax
            var data = { 
                dis_id : dis_id,
            };
            $.ajax({
                method: 'POST', // method post
                url: 'ajax.php', // post comment means where will be data go
                data: data, // datas
                success: function(response){
                    // alert(response);
                    $("#present_upz").html(response);
                },
                error: function (request, status, error) {
                    alert("There was an error: ", request.responseText);
                }
            })
        });
        $('.parmanant_dis').change(function(){
            var dis_id = $('#parmanant_dis').children("option:selected").val();
            // alert(dis_id);
            // then setup ajax
            var data = { 
                dis_id : dis_id,
            }
            $.ajax({
                method: 'POST', // method post
                url: 'ajax.php', // post comment means where will be data go
                data: data, // datas
                success: function(response){
                    // alert(response);
                    $("#parmanant_upz").html(response);
                },
                error: function (request, status, error) {
                    alert("There was an error: ", request.responseText);
                }
            })
        });

    </script>

</body>

</html>
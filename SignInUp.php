<div>
    <ul class="top">
        <li><a href="#">
            <img src="img/logo/Logotext.png" style="height: 45px; margin-left: 10px; margin-top: -12px; ">
        </a></li>

        <?php
            if (isset($_COOKIE['nama'])){
                ?>
                <li style="float: right;"><a href="SignOut.php">Sign Out</a></li>
                <li style="float: right;"><a href="index.php?page=profil"><?php echo $_COOKIE['nama'];?></a></li>
                <?php
            }
        
            else{
                ?>
                <li style="float: right;"><a href="SignUp.php">Sign Up</a></li>   
                <li style="float: right;"><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign In</a></li>
                <?php
        }
        ?>
       
            <div id="id01" class="modalo">
                <form class="modal-conten animate" action="login.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <img src="img/logo/Logo.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="isi">
                        <label><b>Email</b></label>
                        <input type="Email" placeholder="Enter Email" name="email">
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw">
                        <button class="button1" type="submit">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>

                    <div class="isi" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="button1 cancelbtn1">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>

    </ul>

</div>
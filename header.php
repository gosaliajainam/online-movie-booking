

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="login.html">Sign in</a>
                
            </div>
            
        </div>
        
        <div id="mobile-menu-wrap"></div>
        
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        
                    </div>
                    <?php
                    include_once "Database.php";
                    if (isset($_SESSION['uname'])) {
                        $uname = $_SESSION['uname'];
                        $result = mysqli_query($conn,"SELECT * FROM user WHERE username ='".$uname."'");

                ?>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) {
                                    if($row['image']== ''){
                                    echo '<img src="image/img_avatar.png" alt="Avatar" class="avatar">';
                            }else{
                                ?>  <img src="admin/image/<?php echo $row["image"]; ?>" alt="Avatar" class="avatar">
                                <?php
                            }
                            }
                        }
                        ?>
                                <span>Hii <?php echo $_SESSION['uname'];?></span>
                                <a href="logout.php"> Logout</a>
                            </div>
                           
                        </div>
                    </div>
                        <?php
                    }else{
                ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="login_form.php">Sign in</a>
                                <a href="register_form.php">Register</a>
                            </div>
                           
                        </div>
                    </div>
                    <?php  
            }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div> 
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="allmovie.php">All Movie</a></li>
                            <li><a href="about.php">About US</a></li>
                            <li><a href="./feedback.php">Feedback</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

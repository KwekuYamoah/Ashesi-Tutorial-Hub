    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">Ash Tutorial Hub</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- =<a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                
                <li><a class=<?php
                                if($title == "Home|Ashesi Tutorial Hub"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="home.php">Home</a></li>
                <li><a class=<?php
                                if($title == "About|Ashesi Tutorial Hub"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="about.php">About</a></li>
                <li><a class=<?php
                                if($title == "Courses|Ashesi Tutorial Hub"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?>  href="courses.php">Courses</a></li>
                <li><a class=<?php
                                if($title == "Submissions|Ashesi Tutorial Hub"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="tut_submission.php">Submissions</a></li>
                <li><a class=<?php
                                if($title == "Events|Ashesi Tutorial Hub"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="events.php">Events</a></li>
                

                <li class="dropdown"><a href="../controller/logout.php"><span>Log Out</span> <i class="bi bi-chevron-down"></i></a>
                </li>
            <li><a class=<?php
                                if($title == "Contact|Ashesi Tutorial Hub"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="contact.php">Contact</a></li>
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.php" class="get-started-btn">Get Started</a>

        </div>
    </header><!-- End Header -->
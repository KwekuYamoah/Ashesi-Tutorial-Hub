<?php

    $title = "Staff|Kaya Store"; //title for header

    //include header which uses title
    include_once("../inc/header.php");

    //include left-side menu 
    include_once("../inc/menu.php");

    //including navigation header
    include_once("../inc/nav.php");

    //include mobile device styling
    include_once("../inc/mobile.php");

?>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Information</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="" method="POST" class="needsclick add-professors" id="demo1-upload">

                                                        <div class="row">
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="f-name" id="f-name" type="text" class="form-control" placeholder="First Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="m-name" id="m-name" type="text" class="form-control" placeholder="Middle Name" optional>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="l-name" id="l-name" type="text" class="form-control" placeholder="Last Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="address" id="address" type="text" class="form-control" placeholder="Address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobileno" id="mobileno" type="phone" class="form-control" placeholder="Mobile no. (+233...)">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Date of Birth (01.01.2020)">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="gender" id="gender" class="form-control">
																		<option value="none" selected="" disabled="">Select Gender</option>
																		<option value="male">male</option>
																		<option value="female">female</option>
																	</select>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    //include footer
    include_once("../inc/footer.php");
?>
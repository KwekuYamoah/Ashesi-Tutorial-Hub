<?php

    $title = "Records|Kaya Store"; //title for header

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
                                <li class="active"><a href="#description">Records</a></li>
                                <li><a href="#reviews"> Cognitive</a></li>
                                <li><a href="#INFORMATION">Health</a></li>
                                <li><a href="#Nutrition">Nutrition </a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="" class="needsclick addcourse" id="record">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Record Date(01.01.2020)">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="development" id="development" class="form-control">
																		<option value="none" selected="" disabled="">Development Gap</option>
																		<option value="Yes">Yes</option>
																		<option value="No">No</option>
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
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="" class="needsclick cognitive" id="cognitive">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                
                                                                <div class="form-group">
                                                                    <select name="rwindex" id="rwindex" class="form-control">
                                                                        <option value="none" selected="" disabled="">Reading Index</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="fluent">fluent</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="numeracy" id="numeracy" class="form-control">
                                                                    <option value="none" selected="" disabled="">Numeracy Skill</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="best">best</option>
                                                                        <option value="poor">poor</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="decision" id="decision" class="form-control">
                                                                    <option value="none" selected="" disabled="">Decision Making</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="best">best</option>
                                                                        <option value="poor">poor</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="ct" id="ct" class="form-control">
                                                                    <option value="none" selected="" disabled="">CT Index</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="best">best</option>
                                                                        <option value="poor">poor</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="problem" id="problem" class="form-control">
                                                                    <option value="none" selected="" disabled="">Problem Solving</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="best">best</option>
                                                                        <option value="poor">poor</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="curiosity" id="curiosity" class="form-control">
                                                                    <option value="none" selected="" disabled="">Curiosity</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="best">best</option>
                                                                        <option value="poor">poor</option>
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
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="" method="POST" class="needsclick health addcourse" id="health">

                                                        <div class="row">
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="length" id="length" type="text" class="form-control" placeholder="Length(68cm)">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="weight" id="weight" type="text" class="form-control" placeholder="Weight(5kg)" optional>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="blood" id="blood" type="text" class="form-control" placeholder="Blood Pressure(120/80mmHg)">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="immu" id="immu" class="form-control">
                                                                        <option value="none" selected="" disabled="">Immunisation</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="ears" id="ears" class="form-control">
                                                                        <option value="none" selected="" disabled="">Ears</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="attention">attention</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="eyes" id="eyes" class="form-control">
                                                                        <option value="none" selected="" disabled="">Eyes</option>
                                                                        <option value="good">good</option>
                                                                        <option value="average">average</option>
                                                                        <option value="attention">attention</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="allergies" id="allergies" class="form-control">
                                                                        <option value="none" selected="" disabled="">Allergies</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                        
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
                                <div class="product-tab-list tab-pane fade" id="Nutrition">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="" class="needsclick nutrition" id="nutrition">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-group">
                                                                    <select name="iron" id="iron" class="form-control">
																		<option value="none" selected="" disabled="">Iron Deficiency</option>
																		<option value="Yes">Yes</option>
																		<option value="No">No</option>
																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="zinc" id="zinc" class="form-control">
																		<option value="none" selected="" disabled="">Zinc Deficiency</option>
																		<option value="Yes">Yes</option>
																		<option value="No">No</option>
																	</select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select name="growth" id="growth" class="form-control">
																		<option value="none" selected="" disabled="">Growth</option>
																		<option value="positive">positive</option>
																		<option value="negative">negative</option>
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

<?php
    //include footer
    include_once("../inc/footer.php");
?>
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
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1>Records <span class="table-project-n">Data</span> Table</h1>
                                                                <div class="add-product">
                                                                    <a href="add-records.php">Add Records</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div id="toolbar">
                                                                    <select class="form-control dt-tb">
                                                                        <option value="">Export Basic</option>
                                                                        <option value="all">Export All</option>
                                                                        <option value="selected">Export Selected</option>
                                                                    </select>
                                                                </div>
                                                                <table
                                                                    id="table-record" 
                                                                    id="table" 
                                                                    data-pagination="true" 
                                                                    data-search="true" 
                                                                    data-show-refresh="true"
                                                                    data-show-columns="true"
                                                                    data-show-pagination-switch="true" 
                                                                    data-show-refresh="true"
                                                                    data-key-events="true"
                                                                    data-show-toggle="true"
                                                                    data-resizable="true"
                                                                    data-cookie="true"
                                                                    data-cookie-id-table="saveId"
                                                                    data-show-export="true"
                                                                    data-click-to-select="true"
                                                                    data-toolbar="#toolbar">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th data-field="record_id">Record ID</th>
                                                                            <th data-field="kayacare_id" >Kaya ID</th>
                                                                            <th data-field="development_gap" data-editable="true">Developmental Gap</th>
                                                                            <th data-field="record_date"data-editable="true" >Record Date</th>
                                                                            <th data-field="delete">Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="staff"></tbody>
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Static Table End -->
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1>Cognitive <span class="table-project-n">Data</span> Table</h1>
                                                                <div class="add-product">
                                                                    <a href="add-records.php">Add Records</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div id="toolbar">
                                                                    <select class="form-control dt-tb">
                                                                        <option value="">Export Basic</option>
                                                                        <option value="all">Export All</option>
                                                                        <option value="selected">Export Selected</option>
                                                                    </select>
                                                                </div>
                                                                <table
                                                                    id="table-cognitive" 
                                                                    id="table" 
                                                                    data-pagination="true" 
                                                                    data-search="true" 
                                                                    data-show-refresh="true"
                                                                    data-show-columns="true"
                                                                    data-show-pagination-switch="true" 
                                                                    data-show-refresh="true"
                                                                    data-key-events="true"
                                                                    data-show-toggle="true"
                                                                    data-resizable="true"
                                                                    data-cookie="true"
                                                                    data-cookie-id-table="saveId"
                                                                    data-show-export="true"
                                                                    data-click-to-select="true"
                                                                    data-toolbar="#toolbar">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th data-field="record_id">Record ID</th>
                                                                            <th data-field="rw_index" data-editable="true">Reading</th>
                                                                            <th data-field="numeracy_skills" data-editable="true" >Numeracy</th>
                                                                            <th data-field="decision_making" data-editable="true" >Decision Making</th>
                                                                            <th data-field="ct_index" data-editable="true" >CT Index</th>
                                                                            <th data-field="problem_solving" data-editable="true" >Problem Solving</th>
                                                                            <th data-field="curiosity" data-editable="true" >Curiosity</th>
                                                                            <th data-field="delete">Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="staff"></tbody>
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Static Table End -->
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1>Health <span class="table-project-n">Data</span> Table</h1>
                                                                <div class="add-product">
                                                                    <a href="add-records.php">Add Records</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div id="toolbar">
                                                                    <select class="form-control dt-tb">
                                                                        <option value="">Export Basic</option>
                                                                        <option value="all">Export All</option>
                                                                        <option value="selected">Export Selected</option>
                                                                    </select>
                                                                </div>
                                                                <table
                                                                    id="table-health" 
                                                                    id="table" 
                                                                    data-pagination="true" 
                                                                    data-search="true" 
                                                                    data-show-refresh="true"
                                                                    data-show-columns="true"
                                                                    data-show-pagination-switch="true" 
                                                                    data-show-refresh="true"
                                                                    data-key-events="true"
                                                                    data-show-toggle="true"
                                                                    data-resizable="true"
                                                                    data-cookie="true"
                                                                    data-cookie-id-table="saveId"
                                                                    data-show-export="true"
                                                                    data-click-to-select="true"
                                                                    data-toolbar="#toolbar">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th data-field="record_id">Record ID</th>
                                                                            <th data-field="length" data-editable="true" >Length</th>
                                                                            <th data-field="weight" data-editable="true">Weight</th>
                                                                            <th data-field="blood_pressure"data-editable="true" >Blood Pressure</th>
                                                                            <th data-field="immunization" data-editable="true">Immunization</th>
                                                                            <th data-field="ears" data-editable="true">Ears</th>
                                                                            <th data-field="eyes" data-editable="true">Eyes</th>
                                                                            <th data-field="allergies" data-editable="true">Allergies</th>
                                                                            <th data-field="delete">Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="staff"></tbody>
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Static Table End -->
                                </div>
                                <div class="product-tab-list tab-pane fade" id="Nutrition">
                                <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1>Nutrition <span class="table-project-n">Data</span> Table</h1>
                                                                <div class="add-product">
                                                                    <a href="add-records.php">Add Records</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div id="toolbar">
                                                                    <select class="form-control dt-tb">
                                                                        <option value="">Export Basic</option>
                                                                        <option value="all">Export All</option>
                                                                        <option value="selected">Export Selected</option>
                                                                    </select>
                                                                </div>
                                                                <table
                                                                    id="table-nutrition" 
                                                                    id="table" 
                                                                    data-pagination="true" 
                                                                    data-search="true" 
                                                                    data-show-refresh="true"
                                                                    data-show-columns="true"
                                                                    data-show-pagination-switch="true" 
                                                                    data-show-refresh="true"
                                                                    data-key-events="true"
                                                                    data-show-toggle="true"
                                                                    data-resizable="true"
                                                                    data-cookie="true"
                                                                    data-cookie-id-table="saveId"
                                                                    data-show-export="true"
                                                                    data-click-to-select="true"
                                                                    data-toolbar="#toolbar">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th data-field="record_id">Record ID</th>
                                                                            <th data-field="iron_difficiency" data-editable="true" >Iron Deficiency</th>
                                                                            <th data-field="zinc_difficiency" data-editable="true">Zinc Deficiency</th>
                                                                            <th data-field="growth" data-editable="true" >Growth</th>
                                                                            <th data-field="delete">Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="staff"></tbody>
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Static Table End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
    //include footer
    include_once("../inc/footer.php");
?>
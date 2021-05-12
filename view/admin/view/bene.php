<?php

    $title = "Beneficiaries |Kaya Store"; //title for header

    //include header which uses title
    include_once("../inc/header.php");

    //include left-side menu 
    include_once("../inc/menu.php");

    //including navigation header
    include_once("../inc/nav.php");

    //include mobile device styling
    include_once("../inc/mobile.php");

?>
        <!-- Static Table Start -->
        
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Beneficiaries <span class="table-project-n">Data</span> Table</h1>
                                    <div class="add-product">
                                        <a href="add-bene.php">Add Beneficiaries</a>
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
                                        id="table-bene" 
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
                                        data-toolbar="#toolbar"
                                        data-auto-refresh-interval
                                        >
                                        <thead>
                                            <tr>
                                                
                                            <th data-field="bene_id">Bene ID</th>
                                            <th data-field="parent_name" data-editable="true">Parent Name</th>
                                            <th data-field="phone" data-editable="true">Parent Phone</th>
                                            <th data-field="child_name" data-editable="true">Child Name</th>
                                            <th data-field="dob" data-editable="true">DOB</th>
                                            <th data-field="sex" data-editable="true">Gender</th>
                                            <th data-field="development_stage" data-editable="true">Dev Stage</th>
                                            <th data-field="development_gap">Dev Gap</th>
                                            <th data-field="location" data-editable="true">Address</th>
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

<?php
    //include footer
    include_once("../inc/footer.php");
?>
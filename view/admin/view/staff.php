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
        <!-- Static Table Start -->
        
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                    <div class="add-product">
                                        <a href="add-staff.php">Add Staff</a>
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
                                        data-toolbar="#toolbar"
                                        data-auto-refresh-interval
                                        >
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="staff_id">Staff ID</th>
                                                <th data-field="kayacare_id" >Kaya ID</th>
                                                <th data-field="fname" data-editable="true">First Name</th>
                                                <th data-field="mname"data-editable="true" >Middle Name</th>
                                                <th data-field="lname" data-editable="true">Last Name</th>
                                                <th data-field="email" data-editable="true" >Email</th>
                                                <th data-field="phone" data-editable="true">Phone</th>
                                                <th data-field="address" data-editable="true">Address</th>
                                                <th data-field="dob" data-editable="true">DOB</th>
                                                <th data-field="sex" data-editable="true">Sex</th>
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
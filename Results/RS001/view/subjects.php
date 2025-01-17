<?php

include 'header.php';

?>

<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- table [] -->
                               
                                <div class="col-sm-12">
                                <div class="card">
                               
                                        <div class="card-header">
                                            <h5>List Of Subjects Data</h5>
                                            <span class="d-block m-t-5">Manage Subjects Information</span>
                                        </div>
                                        <div class="card-block table-border-style">
                                       
                                        <button class="btn btn-success fw-bold " style="width: 20%; float: right" id="newUser">Add New</button>
                                            <div class="table-responsive">
                                                <table class="table table-hover" id="subjectsTable">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Subject ID</th>
                                                            <th>Subject-Name</th>
                                                            <th tooltip="Semester Which Belongs This Subject" data-toggle="tooltip">Belongs Semester</th>
                                                            <th >Actions</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end table -->
                              <!-- <div class="col-sm-8">
                              
                              </div> -->

                              <!-- [ adding model  ] -->
  <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Subject Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-window-close" style="background-color: white; font-size: 20px;" aria-hidden="true"></i>
            </button>
          </div>
          <div class="modal-body">
          <div class="alert alert-success d-none" role="alert">
      This is a success alert—check it out!
      </div>
      <div class="alert alert-danger d-none" role="alert">
      This is a danger alert—check it out!
      </div>
          <form action="" method="POST">

         

            <div class="form-group mb-2">
              <label for="">Subject Name</label>
              <input type="text" class="form-control" id="subjectName">
            </div>

        
            <div class="form-group mb-2">
            <label >Belongs Semester</label>
           <select  id="belongs_semester" class="form-control">
          
           </select>
            </div>

            <div class="form-group mb-2">
              <!-- user photo based -->
            </div>

            
            <button type="button" class="btn btn-primary" id="saveData">Save</button>
          </form>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
            -->
          </div>
        </div>
      </div>
      </div>
                                  <!-- [ end modal content] -->
                                </div>
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>




    <!-- edit model -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Subject Info And Save Changes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-window-close" style="background-color: white; font-size: 20px;" aria-hidden="true"></i>
            </button>
          </div>
          <div class="modal-body">
          <div class="alert alert-success d-none" role="alert">
      This is a success alert—check it out!
      </div>
      <div class="alert alert-danger d-none" role="alert">
      This is a danger alert—check it out!
      </div>
          <form action="" method="POST">

          <div class="form-group mb-2">
              <label for="">Subject Name</label>
              <input type="text" class="form-control" id="ui_subjectName">
            </div>

        
            <div class="form-group mb-2">
            <label >Belongs Semester</label>
          
              <input type="text" class="form-control" id="ui_semester">
            </div>

            <div class="form-group mb-2">
              <!-- user photo based -->
            </div>
            
            <button type="button" class="btn btn-primary" id="editData">Save Changes</button>
          </form>
          <div style="text-align: left;" class="update-message hideMessageInfo">
                <h3 ><span >Hello Bro</span></h3>
              </div>
          </div>
          <!-- <div class="modal-footer">
             
          </div> -->
        </div>
      </div>
      </div>

    <!-- edit modal end -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <script src="../js/subjects.js" ></script>



<?php
include 'footer.php';

?>
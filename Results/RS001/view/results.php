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
            <!-- card -->
            <div class="card-container">
              <div class="main-card">
                <div class="student-card">
                  <div class="title">
                    <h3>Mark Result </h3>
                    <p>Only You Can Register One Result Per/Execution</p>
                  </div>
                  <div class="student-form">
                    <form action="" id="resultsForm">



                      <div class="form-grouping">
                        <label for="">Select Semester</label>
                        <select class="form-control" name="semesterName" id="semesterName">


                        </select>
                      </div>

                      <div class="form-grouping">
                        <label for="">Select Class</label>
                        <select class="form-control" name="className" id="className">

                          <option value="">Select</option>
                        </select>
                      </div>
                      <div class="form-grouping">
                        <label for="">Select Student</label>
                        <select class="form-control" name="studentNames" id="studentNames">

                          <option value="">Select</option>
                        </select>
                        <div class="error-trackerArea">

                        </div>
                      </div>


                      <div id="subjectsArea">

                      </div>
                      <div class="form-grouping">
                        <button type="button" id="saveData" class="btn btn-secondary" style="width: 190px;">Save</button>
                      </div>
                      <div class="form-grouping">
                        <input type="hidden" name="action" value="AddResult">
                      </div>



                    </form>
                    <button type="button" id="modal" class="btn btn-secondary" style="width: 190px;">Modal</button>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- [ Main Content ] end -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!--//? Result Modal  -->
<!-- modal -->
<div class="modal fade" id="editResultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





<!-- scripts -->
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../js/results.js"></script>











<?php
include 'footer.php';
?>
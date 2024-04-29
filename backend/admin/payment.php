<?php
include 'include/header.php';
include 'include/navbar.php';
?>


<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Review Payment Query</h4>
                    <p class="card-description">
                      View registration payment
                    </p>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First name</th>
                            <th>Progress</th>
                            <th>Amount</th>
                            <th>Deadline</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Herman Beck</td>
                            <td>100</td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
                            <td><button type="button" class="btn btn-primary">VIEW</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>


<?php
include 'include/footer.php';
?>
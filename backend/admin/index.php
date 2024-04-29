<?php
include 'include/header.php';
include 'include/navbar.php';
?>

<div class="row">
              <div class="col-sm-6 mb-4 mb-xl-0">
                <div class="d-lg-flex align-items-center">
                  <div>
                    <h3 class="text-dark font-weight-bold mb-2">
                      Hi, welcome back!
                    </h3>
                    <h6 class="font-weight-normal mb-2">
                      Last login was 23 hours ago. View details
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pe-1 mb-3 mb-xl-0">
                    <button
                      type="button"
                      class="btn btn-outline-inverse-info btn-icon-text"
                    >
                      Feedback
                      <i class="mdi mdi-message-outline btn-icon-append"></i>
                    </button>
                  </div>

                  <div class="pe-1 mb-3 mb-xl-0">
                    <button
                      type="button"
                      class="btn btn-outline-inverse-info btn-icon-text"
                    >
                      Print
                      <i class="mdi mdi-printer btn-icon-append"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!---cards to view data----->
            
            <div class="row">
              <div class="col-lg-2 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body pb-0">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <h2 class="text-success font-weight-bold">
                      <?php
                            $query = "SELECT id FROM campusbased ORDER BY id ";
                            $query_run = mysqli_query($con, $query);

                            $row = mysqli_num_rows($query_run);
                            echo  $row;
                            ?>
                      </h2>
                      <i class="mdi mdi-account-check mdi-18px text-dark"></i>
                    </div>
                  </div>
                  <canvas id="newClient"></canvas>
                  <div class="line-chart-row-title">Campus Based Registration</div>
                </div>
              </div>

              <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body pb-0">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <h2 class="text-danger font-weight-bold">839</h2>
                      <i class="mdi mdi-account-check mdi-18px text-dark"></i>
                    </div>
                  </div>
                  <canvas id="allProducts"></canvas>
                  <div class="line-chart-row-title">Non-Campus Based Registration</div>
                </div>
              </div>

              <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body pb-0">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <h2 class="text-info font-weight-bold">
                      <?php
                            $query = "SELECT id FROM user_payment ";
                            $query_run = mysqli_query($con, $query);

                            $row = mysqli_num_rows($query_run);
                            echo  $row;
                            ?>
                      </h2>
                      <i
                        class="mdi mdi-file-document-outline mdi-18px text-dark"
                      ></i>
                    </div>
                  </div>
                  <canvas id="invoices"></canvas>
                  <div class="line-chart-row-title">NEW INVOICES</div>
                </div>
              </div>

              <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body pb-0">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <h2 class="text-warning font-weight-bold">3259</h2>
                      <i class="mdi mdi-database mdi-18px text-dark"></i>
                    </div>
                  </div>
                  <canvas id="projects"></canvas>
                  <div class="line-chart-row-title">Requested skill</div>
                </div>
              </div>

              <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body pb-0">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <h2 class="text-secondary font-weight-bold">
                      <?php
                            $query = "SELECT id FROM add_admin  ";
                            $query_run = mysqli_query($con, $query);

                            $row = mysqli_num_rows($query_run);
                            echo  $row;
                            ?>
                      </h2>
                      <i class="mdi mdi-account-key mdi-18px text-dark"></i>
                    </div>
                  </div>
                  <canvas id="orderRecieved"></canvas>
                  <div class="line-chart-row-title">Total Admin</div>
                </div>
              </div>

              <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body pb-0">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <h2 class="text-dark font-weight-bold">
                      <?php
                            $query = "SELECT id FROM user_payment ";
                            $query_run = mysqli_query($con, $query);

                            $row = mysqli_num_rows($query_run);
                            echo  $row;
                            ?>
                      </h2>
                      <i class="mdi mdi-cash text-dark mdi-18px"></i>
                    </div>
                  </div>
                  <canvas id="transactions"></canvas>
                  <div class="line-chart-row-title">TRANSACTIONS</div>
                </div>
              </div>
            </div>






<?php
include 'include/footer.php';
?>
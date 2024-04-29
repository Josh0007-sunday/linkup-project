<?php
include 'include/header.php';
include 'include/navbar.php';
?>



            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Campus Based Registration</h4>
                    <p class="card-description">
                      View registrations and linkup with requested services
                    </p>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>CAMPUS</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>EMAIL</th>
                            <th>CONTACT</th>
                            <th>SUGGESTED CAMPUS</th>
                            <th>SKILL</th>
                            <th>SUB SKILL</th>
                            <th>VIEW</th>
                            <th>DELETE</th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                          $query = "SELECT * FROM campusbased";
                          $query_run = mysqli_query($con, $query);
                          if (mysqli_num_rows($query_run) > 0) {
                            foreach($query_run as $row){
                          ?>
                          <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['campus'] ?></td>
                            <td><?= $row['firstname'] ?></td>
                            <td><?= $row['lastname'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['contact'] ?></td>
                            <td><?= $row['suggest_campus'] ?></td>
                            <td><?= $row['skill'] ?></td>
                            <td><?= $row['sub_skill'] ?></td>
                            <td><button type="button" class="btn btn-primary"><a  onmouseout="this.style.color='white';" style="color:white; text-decoration:none;" href="view_campusdata.php?<?= $row['id'] ?>">VIEW</a></td>
                            <td><button type="button" class="btn btn-danger">DELETE</td>
                          </tr>
                          <?php
                          }
                          }else{
                            ?>
                                <tr>
                                   <td>No records found...</td>
                                </tr>
                            <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>



<?php
include 'include/footer.php';
?>
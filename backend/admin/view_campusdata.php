<?php
include_once 'include/header.php';
include 'include/navbar.php';


?>


            <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CAMPUS BASED REGISTERED PROFILE</h4>
                  <ul class="list-arrow">
                    <?php
                                            // Check if the 'id' parameter is set in the URL
                        if (isset($_GET['id'])) {
                          // Get the ID from the URL
                          $id = $_GET['id'];

                          // Prepare and execute a query to retrieve data based on the ID
                          $stmt = $con->prepare("SELECT * FROM campusbased WHERE id = ?");
                          $stmt->bind_param("i", $id);
                          $stmt->execute();
                          $result = $stmt->get_result();

                          if ($result->num_rows > 0) {
                              // Display the fetched data
                              $row = $result->fetch_assoc();
                              echo "Name: " . $row["firstname"] . "<br>";
                              // ... display other fields as needed
                          } else {
                              echo "No data found";
                          }

                          // Close the database connection
                          $conn->close();
                        } else {
                          echo "Invalid ID";
                        }
                    ?>
                  
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit></li>
                  </ul>
                </div>
              </div>
            </div>

<?php
include 'include/footer.php';
?>
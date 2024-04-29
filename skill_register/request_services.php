<?php
include '../include/connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>LINKUP || Request a skill</title>
    <link rel="stylesheet" href="fontawesom.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="../assets/w3.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>

   <div class="w3-top">
      <div class="w3-bar w3-card w3-darkblue">
        <a href="../index.html" class="w3-padding w3-right" onclick="myFunction()"
          ><i style="color: white" class="fa fa-sign-out w3-large"></i
        ></a>
      </div>
    </div>

  <?php
      if (isset($_SESSION['status'])){
    ?>
        <script>
              Swal.fire({
                icon: '<?php echo  $_SESSION['status_code'];?>',
                title: '<?php echo  $_SESSION['status'];?>',
                text: '<?php echo  $_SESSION['status_text'];?>',  
              })
        </script>
    <?php
        unset( $_SESSION['status']);
      }
    ?>

    <!-- partial:index.partial.html -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div
          class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"
        >
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
            <h2 id="heading">Request for a  Skill, Services or Products</h2>
            <p>Easily request for a skill, services or Product with just few clicks</p>

            <form method="post" action="processor/request.php" id="msform">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active" id="account"><strong>Campus</strong></li>
                <li id="personal"><strong>Personal</strong></li>
                <li id="payment"><strong>Place Request</strong></li>
                <li id="confirm"><strong>Finish</strong></li>
              </ul>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
              <br />
              <!-- fieldsets -->
              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Choose Campus</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 1 - 4</h2>
                    </div>
                  </div>
                  <label class="fieldlabels">Choose Campus: *</label>
                  <select name="campus" id="">
                    <option value="">Choose Option</option>
                    <option value="Rivers State University">Rivers State University</option>
                    <option value="University of Port Harcourt">University of Port Harcourt</option>
                    <option value="Ignatius Aguru University">Ignatius Aguru university</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <input
                  type="button"
                  name="next"
                  class="next action-button"
                  value="Next"
                />
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Personal Information:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 2 - 4</h2>
                    </div>
                  </div>
                  <input type="hidden" name="amount" value="500" >
                  <label class="fieldlabels">First Name: *</label>
                  <input type="text" name="fname" placeholder="First Name" />
                  <label class="fieldlabels">Last Name: *</label>
                  <input type="text" name="lname" placeholder="Last Name" />
                  <label class="fieldlabels">Email Address: *</label>
                  <input type="email" name="email" placeholder="Email Adress" />
                  <label class="fieldlabels">Contact No.: *</label>
                  <input type="number" name="phno" placeholder="Contact No." />
                  <label class="fieldlabels">Suggest your campus if you choose (others): *</label> 
                  <input type="text" name="campus_other" placeholder="Campus Name" />
                  </textarea>     
                </div>
                <input
                  type="button"
                  name="next"
                  class="next action-button"
                  value="Next"
                />
                <input
                  type="button"
                  name="previous"
                  class="previous action-button-previous"
                  value="Previous"
                />
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Place Request:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 3 - 4</h2>
                    </div>
                  </div>
                  <label class="fieldlabels">Choose Skill</label>

                  <select id="skill" name="skill">
                    <option value="">Select your skill</option>
                    <option value="intern">IT skill</option>
                    <option value="home">Personal Skill/Others</option>
                    <option value="write">write up</option>
                  </select>

                  <label class="fieldlabels" for="subskill">Sub Skill:</label>
                  <select id="subskill" name="subskill" disabled>
                    <option value="">Select Sub skill</option>
                  </select>
                </div>
                <input
                  type="submit"
                  name="next"
                  class="next action-button"
                  value="Submit"
                />
                <input
                  type="button"
                  name="previous"
                  class="previous action-button-previous"
                  value="Previous"
                />
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Finish:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 4 - 4</h2>
                    </div>
                  </div>
                  <br /><br />
                  <h2 class="purple-text text-center">
                    <strong>SUCCESS !</strong>
                  </h2>
                  <br />
                  <div class="row justify-content-center">
                    <div class="col-3">
                      <img src="img/tick.png" class="fit-image" />
                    </div>
                  </div>
                  <br /><br />
                  <div class="row justify-content-center">
                    <div class="col-7 text-center">
                      <p class="purple-text text-center">
                        you have completed the form, You have to make a payment of NGN500
                      </p>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./script.js"></script>
    <script src="ajax.js"></script>
    <script>
        $(document).ready(function() {
          var skillSelect = $("#skill");
          var subskillSelect = $("#subskill");
        //   var citySelect = $("#city");
    
          // Define the options for each dropdown
          var subskill = {
            intern: ["ui/ux", "webdeveloper", "App developer", "Graphics Design", "Content Creation", "Cyber Security", "Data Analysis", ],
            home: ["Baking", "Sanitory", "Interior and exterior design", "house event", "Catering", "Home Cleaner", "Barbing", "Sewing", "Makeup", "Modeling", "Painting", "Phone Repair"],
            write: ["books", "blogs", "story", "Project work", "Script Writing", "Speech writing" ]
          };
    
        //   var cities = {
        //     "New York": ["New York City", "Buffalo", "Rochester"],
        //     California: ["Los Angeles", "San Francisco", "San Diego"],
        //     Texas: ["Houston", "Austin", "Dallas"],
        //     Ontario: ["Toronto", "Ottawa", "Mississauga"],
        //     Quebec: ["Montreal", "Quebec City", "Laval"],
        //     "British Columbia": ["Vancouver", "Victoria", "Surrey"],
        //     London: ["Central London", "West London", "East London"],
        //     Manchester: ["City Centre", "Salford", "Old Trafford"],
        //     Birmingham: ["City Centre", "Aston", "Edgbaston"]
        //   };
    
          // Update the state dropdown when the country is selected
          skillSelect.change(function() {
            var skill = skillSelect.val();
            subskillSelect.empty();
            // citySelect.empty();
    
            if (skill) {
              subskillSelect.prop("disabled", false);
            //   citySelect.prop("disabled", true);
    
              // Populate the state dropdown with options
              var skill_subskill = subskill[skill];
              for (var i = 0; i < skill_subskill .length; i++) {
                var option = $("<option>").text(skill_subskill [i]).val(skill_subskill [i]);
                subskillSelect.append(option);
              }
            } else {
              stateSelect.prop("disabled", true);
            //   citySelect.prop("disabled", true);
            }
          });
    
          // Update the city dropdown when the state is selected
        //   stateSelect.change(function() {
        //     var country = countrySelect.val();
        //     var state = stateSelect.val();
        //     citySelect.empty();
    
        //     if (state) {
        //       citySelect.prop("disabled", false);
    
        //       // Populate the city dropdown with options
        //       var stateCities = cities[state];
        //       for (var i = 0; i < stateCities.length; i++) {
        //         var option = $("<option>").text(stateCities[i]).val(stateCities[i]);
        //         citySelect.append(option);
        //       }
        //     } else {
        //       citySelect.prop("disabled", true);
        //     }
        //   });
        });
      </script>
  </body>
</html>

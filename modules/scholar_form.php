<?php
include "./includes/connection.php";

if(isset($_POST['btn_submit'])){

  $full_name = $_POST['scholar_full_name'];
  $email     = $_POST['scholar_email'];
  $gender    = $_POST['scholar_gender'];
  $barangay   = $_POST['scholar_barangay'];
  $remarks   = $_POST['scholar_remarks'];
  $city      = $_POST['scholar_city'];
  $school    = $_POST['scholar_school'];

  // Insert should be HERE inside the submit condition
  $sql = "INSERT INTO scholars_tbl (full_name, email, gender, barangay, remarks, city, school)
          VALUES ('$full_name', '$email', '$gender', '$barangay', '$remarks', '$city', '$school')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(isset($_POST['btn_reset'])){
  // This does nothing but it's okay
}

$conn->close();
?>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Scholar Form</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method= "POST" action="index.php?page=scholar_form">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Full Name" name="scholar_full_name">
                    <label for="floatingName">Full Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="scholar_email">
                    <label for="floatingEmail">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <select class="form-select" id="floatingGender" aria-label="Gender" placeholder="Gender" name = "scholar_gender" >
                      <option selected>Select Gender</option>
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                    </select> 
                     <label for="floatingGender">Gender</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input class="form-control" placeholder="Barangay" name = "scholar_barangay" id="floatingTextarea" ></input>
                    <label for="floatingTextarea">Barangay</label>
                  </div>
                </div>
                <div class="col-md-6">
    <div class="form-floating">
      <select class="form-select" id="floatingRemarks" aria-label="Remarks" name="scholar_remarks">
        <option selected>Select Remarks</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
        </select>
      <label for="floatingSchool">Remarks</label>
      </div>
  </div>

                
                <!-- <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected>New York</option>
                      <option value="1">Oregon</option>
                      <option value="2">DC</option>
                    </select> 
                     <label for="floatingSelect">State</label>
                  </div>
                </div>  -->
  
    <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingCity" placeholder="City" name="scholar_city">
      <label for="floatingCity">City</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <select class="form-select" id="floatingSchool" aria-label="School" name="scholar_school">
        <option selected>Select School</option>
        <option value="COC">COC</option>
        <option value="CU">CU</option>
        <option value="GHPC">GHPC</option>
        <option value="LDCU">LDCU</option>
        <option value="LC">LC</option>
        <option value="PCC">PCC</option>
        <option value="SPC">SPC</option>
        <option value="USTP">USTP</option>
        <option value="XU">XU</option>
      </select>
      <label for="floatingSchool">School</label>
    </div>
  </div>

</div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
                  <button type="reset" class="btn btn-secondary"name="btn_reset">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
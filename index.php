<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Resume Generator</title>
	<!-- CSS LINKS BEGIN --> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" href="css/all.min.css" />
	<!-- CSS LINKS END -->
</head>
<body>  

	<!-- DISPLAY SECTION BEGIN -->
	<section class="multiform_section"> 
		<form id="msform" action="resume.php" method="POST" enctype="multipart/form-data">
			<div class="container my-5">
				<div class="col-lg-8 mx-auto">
					<div class="tab-container">
						<div class="tab">
							<div class="form-card">
								<div class="stripe_itegration_head mb-4">
									<div class="step">
										<small>STEP 1/5</small>
										<h3 class="mt-3">About You</h3>
										<p>Tell us about yourself</p>
									</div>
									<img src="images/integration_setting_icon.svg" alt="Setting icon">
								</div>
								
								<div class="row mb-4">
									<div class="col-md-6">
										<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required />
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required />
									</div>
								</div>

								<div class="mb-4">
									<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" required />
								</div>

								<div class="mb-4">
									<textarea rows="4" class="form-control" name="about" placeholder="About yourself..." required></textarea>
								</div>

								<div class="mb-4">
									<input type="file" class="form-control" name="profile" id="profile" required />
								</div>
							</div>
						</div>

						<div class="tab">
							<div class="form-card">
								<div class="stripe_itegration_head mb-4">
									<div class="step">
										<small>STEP 2/5</small>
										<h3 class="mt-3">Contact Info</h3>
										<p>Add your personal contact information</p>
									</div>
									<img src="images/integration_setting_icon.svg" alt="Setting icon">
								</div>

								<div class="row mb-4">
									<div class="col-lg-6"> 
										<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required />
									</div>
									<div class="col-lg-6"> 
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required />
									</div>
								</div>

								<div class="mb-4">
									<textarea class="form-control" rows="4" id="Address" name="Address" placeholder="Address..." required></textarea>
								</div>

								<div class="mb-4">
									<input type="text" class="form-control" id="linkedIn" name="linkedIn" placeholder="LinkedIn Username" required />
								</div>
							</div>
						</div>

						<div class="tab">
							<div class="form-card">
								<div class="stripe_itegration_head mb-4">
									<div class="step">
										<small>STEP 3/5</small>
										<h3 class="mt-3">Add Education</h3>
										<p>Tell us about your education background</p>
									</div>
									<img src="images/integration_setting_icon.svg" alt="Setting icon">
								</div>
	
								<div class="row mb-4">
									<div class="col-lg-6">
										<input type="text" class="form-control" name="uniName" placeholder="University Name" required />
									</div>
									<div class="col-lg-6">
										<input type="date" class="form-control" name="uniDate" required />
									</div>
								</div>
	
								<div class="row mb-4">
									<div class="col-lg-6">
										<input type="text" class="form-control" name="collegeName" placeholder="College Name" required />
									</div>
									<div class="col-lg-6">
										<input type="date" class="form-control" name="collegeDate" required />
									</div>
								</div>
	
								<div class="row mb-4">
									<div class="col-lg-6">
										<input type="text" class="form-control" name="schoolName" placeholder="School Name" required />
									</div>
									<div class="col-lg-6">
										<input type="date" class="form-control" name="schoolDate" required />
									</div>
								</div>
							</div>
						</div>

						<div class="tab">
							<div class="form-card">
								<div class="stripe_itegration_head mb-4">
									<div class="step">
										<small>STEP 4/5</small>
										<h3 class="mt-3">About you</h3>
										<p>Tell us about yourself</p>
									</div>
									<img src="images/integration_setting_icon.svg" alt="Setting icon">
								</div>

								<div class="mb-4">
									<div class="skills-container">
										<input type="text" class="form-control mb-3" placeholder="Your Skills" name="skills[]" required />
									</div>
									<button type="button" class="btn btn-success" onclick="addSkills()">Add More</button>
								</div>

								<div class="mb-4">
									<div class="qualities-container">
										<input type="text" class="form-control" placeholder="Soft Skills" name="qualities[]" required />
									</div>
									<button type="button" class="btn btn-success" onclick="addQualities()">Add More</button>
								</div>
							</div>
						</div>

						<div class="tab">
							<div class="form-card">
								<div class="stripe_itegration_head mb-4">
									<div class="step">
										<small>STEP 5/5</small>
										<h3 class="mt-3">Add Experience</h3>
										<p>Tell us about your work journey</p>
									</div>
									<img src="images/integration_setting_icon.svg" alt="Setting icon">
								</div>

								<div class="mb-4">
									<div class="experience-container">
										<div class="row">
											<div class="col-2">
												<input type="text" class="form-control mb-3" placeholder="Designation" name="designation[]" required />
											</div>
											<div class="col-2">
												<input type="text" class="form-control mb-3" placeholder="Company" name="company[]" required />
											</div>
											<div class="col-2">
												<input type="text" class="form-control mb-3" placeholder="Description" name="description[]" required />
											</div>
											<div class="col-2">
												<input type=2text" class="form-control mb-3" placeholder="Start" name="duration_start[]" required />
											</div>
											<div class="col-2">
												<input type="text" class="form-control mb-3" placeholder="End" name="duration_end[]" required />
											</div>
										</div>
									</div>
									<button type="button" class="btn btn-success" onclick="addExperience()">Add More</button>
								</div>
							</div>
						</div>

						<button type="button" class="btn btn-success me-2" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
						<button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
					</div>
				</div>
			</div>
		</form>
	</section>
		
		
		
	<!-- SCRIPTS BEGIN -->
	<script src="js/script.js"></script>  
	<script>
	
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";

		if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		} else {
			document.getElementById("prevBtn").style.display = "inline";
		}

		if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Submit";
		} else {
			document.getElementById("nextBtn").innerHTML = "Next";
		}

		fixStepIndicator(n);
	}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("msform").submit();
	document.getElementById("nextBtn").setAttribute("name", "submit");
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}</script>

	<script> 
	function addSkills() {
		const container = document.querySelector(".skills-container");
		const input = document.createElement("input");
		input.type = "text";
		input.classList.add("form-control");
		input.classList.add("mb-3");
		input.name = "skills[]";
		input.setAttribute('required', '');
		input.setAttribute('placeholder', 'Your Skills');
		container.appendChild(input);
	}

	function addQualities() {
		const container = document.querySelector(".qualities-container");
		var input = document.createElement("input");
		input.type = "text";
		input.classList.add("form-control");
		input.classList.add("mb-3");
		input.name = "qualities[]"; 
		input.setAttribute('placeholder', 'Your Qualities');
		container.appendChild(input);
	}

	function addExperience() {
		const container = document.querySelector(".experience-container");

		const row = document.createElement("div");
		row.classList.add('row');

		const col2_wrapper = [];

		for (let index = 1; index <= 5; index++) {
			const col_2 = document.createElement("div");
			col_2.classList.add('col-2');
			col2_wrapper.push(col_2);
		}

		const designation = document.createElement("input");
		designation.type = "text";
		designation.classList.add("form-control");
		designation.classList.add("mb-3");
		designation.name = "designation[]";
		designation.setAttribute('placeholder', 'Designation');
		col2_wrapper[0].appendChild(designation);

		const company = document.createElement("input");
		company.type = "text";
		company.classList.add("form-control");
		company.classList.add("mb-3");
		company.name = "company[]";
		company.setAttribute('placeholder', 'Company');
		col2_wrapper[1].appendChild(company);

		const description = document.createElement("input");
		description.type = "text";
		description.classList.add("form-control");
		description.classList.add("mb-3");
		description.name = "description[]";
		description.setAttribute('placeholder', 'Description');
		col2_wrapper[2].appendChild(description);

		const duration_start = document.createElement("input");
		duration_start.type = "text";
		duration_start.classList.add("form-control");
		duration_start.classList.add("mb-3");
		duration_start.name = "duration_start[]";
		duration_start.setAttribute('placeholder', 'Start');
		col2_wrapper[3].appendChild(duration_start);

		const duration_end = document.createElement("input");
		duration_end.type = "text";
		duration_end.classList.add("form-control");
		duration_end.classList.add("mb-3");
		duration_end.name = "duration_end[]";
		duration_end.setAttribute('placeholder', 'End');
		col2_wrapper[4].appendChild(duration_end);

		col2_wrapper.map(cols => {
			row.appendChild(cols);
		});

		container.appendChild(row);
	}

	</script>

</body>
</html>
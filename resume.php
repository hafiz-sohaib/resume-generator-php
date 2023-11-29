<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/custom.css" />
</head>
<body>

    <?php
        $db = new mysqli('localhost', 'root', '', 'resumebuilder');

        if ($db->connect_error) {
            die("Database connection failed: " . $db->connect_error);
        }

        if (isset($_POST["firstname"])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $occupation = $_POST['occupation'];
            $about = $_POST['about']; 
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['Address'];
            $linkedIn = $_POST['linkedIn'];
            $uniName = $_POST['uniName'];
            $uniDate = $_POST['uniDate'];
            $collegeName = $_POST['collegeName'];
            $collegeDate = $_POST['collegeDate'];
            $schoolName = $_POST['schoolName'];
            $schoolDate = $_POST['schoolDate'];

            $skills = $_POST['skills'];
            $qualities = $_POST['qualities'];

            $designation = $_POST['designation'];
            $company = $_POST['company'];
            $description = $_POST['description'];
            $duration_start = $_POST['duration_start'];
            $duration_end = $_POST['duration_end'];

            $profile_name = $_FILES['profile']['name'];
            $profile_temp = $_FILES['profile']['tmp_name'];

            move_uploaded_file($profile_temp, 'uploaded-file/'.$profile_name);

            $query = $db->query('INSERT INTO biodata
                (
                    first_name,
                    last_name,
                    occupation,
                    about,
                    phone,
                    email,
                    address,
                    linkedIn,
                    uni_name,
                    college_name,
                    school_name,
                    uni_date,
                    college_date,
                    school_date,
                    skills,
                    qualities,
                    designation,
                    company,
                    description,
                    duration_start,
                    duration_end,
                    profile_name
                ) VALUES (
                    "'.$firstname.'",
                    "'.$lastname.'",
                    "'.$occupation.'",
                    "'.$about.'",
                    "'.$phone.'",
                    "'.$email.'",
                    "'.$address.'",
                    "'.$linkedIn.'",
                    "'.$uniName.'",
                    "'.$collegeName.'",
                    "'.$schoolName.'",
                    "'.$uniDate.'",
                    "'.$collegeDate.'",
                    "'.$schoolDate.'",
                    "'.implode(",", $skills).'",
                    "'.implode(",", $qualities).'",
                    "'.implode(",", $designation).'",
                    "'.implode(",", $description).'",
                    "'.implode(",", $company).'",
                    "'.implode(",", $duration_start).'",
                    "'.implode(",", $duration_end).'",
                    "'.$profile_name.'"
                )'
            );
    ?>

    <section class="resume">
        <div class="container">
            <input type="button" id="generate_pdf" value="Generate" />
            <div class="resume-container">
                <div class="resume-sidebar">
                    <div class="profile-image">
                        <img src="./uploaded-file/<?php echo $profile_name; ?>" alt="Profile images" />
                    </div>

                    <div class="details_seprator">
                        <div class="detail_header">
                            <h2>Contact</h2>
                        </div>
                        <div class="detail_content">
                            <div class="list">
                                <i class="fa-solid fa-phone"></i>
                                <span><?php echo $phone ?></span>
                            </div>
                            <div class="list">
                                <i class="fa-solid fa-envelope"></i>
                                <span><?php echo $email ?></span>
                            </div>
                            <div class="list">
                                <i class="fa-solid fa-location-dot"></i>
                                <span><?php echo $address ?></span>
                            </div>
                            <div class="list">
                                <i class="fa-brands fa-linkedin"></i>
                                <span><?php echo $linkedIn ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="details_seprator">
                        <div class="detail_header">
                            <h2>Education</h2>
                        </div>
                        <div class="detail_content">
                            <div class="education-list">
                                <h6>University</h6>
                                <span><?php echo $uniDate ?></span>
                                <span><?php echo $uniName ?></span>
                            </div>
                            <div class="education-list">
                                <h6>College</h6>
                                <span><?php echo $collegeDate ?></span>
                                <span><?php echo $collegeName ?></span>
                            </div>
                            <div class="education-list">
                                <h6>School</h6>
                                <span><?php echo $schoolDate ?></span>
                                <span><?php echo $schoolName ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="resume-main-content">
                    <div class="profile_bio">
                        <h1><?php echo $firstname.' '.$lastname ?></h1>
                        <h4><?php echo $occupation ?></h4> 

                        <div class="details_seprator"> 
                            <div class="detail_header_light">
                                <h2>Profile</h2>
                            </div>
                            <div class="detail_content">
                                <p><?php echo $about ?></p>
                            </div>
                        </div>

                        <div class="details_seprator"> 
                            <div class="detail_header_light">
                                <h2>Work Experience</h2>
                            </div>
                            <div class="detail_content">
                            <?php
                                for ($index = 0; $index < count($designation); $index++) {
                                    echo "<div class='mb-5'>";
                                    echo "<div class='d-flex justify-content-between'>";
                                    echo "<h5>".$designation[$index]."</h5>";
                                    echo "<div>".$company[$index]." &nbsp;&nbsp; <small>".$duration_start[$index]."-".$duration_end[$index]."</div>";
                                    echo "</div>";
                                    echo "<span>".$description[$index]."</span>";
                                    echo "</div>";
                                }
                            ?>
                            </div>
                        </div>

                        <div class="details_seprator"> 
                            <div class="detail_header_light">
                                <h2>Skills</h2>
                            </div>
                            <div class="detail_content">
                            <?php
                                foreach ($skills as $skill) {
                                    echo "<span class='skill'> " . $skill . "</span>";
                                }
                            ?>
                            </div>
                        </div>

                        <div class="details_seprator"> 
                            <div class="detail_header_light">
                                <h2>Qualities</h2>
                            </div>
                            <div class="detail_content">
                                <ul class="qualities-list"> 
                                <?php
                                    foreach ($qualities as $quality) {
                                        echo "<span class='skill'>".$quality."</span>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class='theme-btn dark' href='index.php'>Back to form</a>
    </section>

    <?php
    } else {
        echo "<div class='error_resume'><h2 class='add_data'>Please fill your bio data in the Form</h2>"."<a class='theme-btn dark' href='index.php'>Back to form</a></div>";
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="js/script.js"></script>  

    <script>

    document.getElementById('generate_pdf').addEventListener('click', function () {
        html2canvas(document.querySelector('.resume-container')).then(function(canvas) {
            const dataUrl = canvas.toDataURL('image/png');
            const a = document.createElement('a');
            a.href = dataUrl;
            a.download = 'resume.png';
            a.click();
        });
    });

    </script>

</body>
</html>
<?php
  if ($_POST["submit"]) {
    if (!$_POST['name']) {
      $error="<br />Please enter your name.";
  }
  
  if (!$_POST['phone']) {
      $error.="<br />Please enter your phone number.";
  }
  
  if (!$_POST['email']) {
    $error.="<br />Please enter your email address.";
  }
    
  if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error.="<br />Please enter a valid email address";
  }

  if ($error) {
    $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
  } else {
    if (mail("jpeder01@gmail.com", "Comment from ASU website",
      "Name: ".$_POST['name'].
      "Phone number: ".$_POST['phone'].
      "Email: ".$_POST['email'])) {
        $result='<div class="alert alert-success"><strong>Thank you!</strong>.  We will get right back to you regarding your interest in working for All Stacked Up Masony.</div>';
          } else {
            $result='<div class="alert alert-danger">Sorry, there was an error sending you message.  Please try again later.</div>';
          }
        }
    }
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>All Stacked Up Masonry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
  <!-- Bootstrap css-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Customized css-->
  <link rel="stylesheet" href="/css/style.css">
  <!--Google font library-->
  <link rel="icon" href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Average+Sans|Fjalla+One" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <![endif]-->
    
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="All Stacked Up Masonry | 5th generation commercial midwest masony company" />
  <meta property="og:description" content="Minnesota commercial masonry company" />
  <meta property="og:url" content="http://www.allstackedupmasonry.com" />
  <meta property="og:site_name" content="All Stacked Up Masonry" />

<!--         _____
            |     \
            |  ()  )
            |   __/
       __   |  |    
      (  \__|  |
       \______/   Joe Pedersen Web Design & Development.  Copyright 2017.
-->
</head> 

<body>
<div class="container">
<section class="header">
  <?php include "header.php"; ?>
</section>
  <div class="col-md-10 col-md-offset-1">
    <h1 id="applicationTitle">Employment Application</h1>
    <h4 class="applicationSection">Applicant Information</h4>
    <?php echo $result; ?>
    <section class="applicationForm">
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Last Name" value="<?php echo $_POST['name']; ?>" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="First Name" value="<?php echo $_POST['phone']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="email" class="form-control"  placeholder="M.I." value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="date" class="form-control"  placeholder="Date" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="address" class="form-control"  placeholder="Street Address" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="apt" class="form-control"  placeholder="Apartment / Unit #" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="city" class="form-control"  placeholder="City" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="state" class="form-control"  placeholder="State" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="zip" class="form-control"  placeholder="Zip" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="tel" name="phone" class="form-control"  placeholder="Phone" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="Email" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="available" class="form-control"  placeholder="Date Available" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="number" name="email" class="form-control"  placeholder="Desired Salary" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="position" class="form-control"  placeholder="Position Applied For" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="available" class="form-control"  placeholder="Date Available" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="number" name="email" class="form-control"  placeholder="Desired Salary" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="position" class="form-control"  placeholder="Position Applied For" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="checkbox">
            <h5>Are you a citizen of the United States 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <h5>If no, are you authorized to work in the U.S.? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="checkbox">
            <h5>Have you ever worked for this company before? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="previous" class="form-control"  placeholder="If so, when?" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="checkbox">
            <h5>Have you ever been convicted of a felony? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="felony" class="form-control"  placeholder="If yes, please explain" value="<?php echo $_POST['email']; ?>"></textarea>
          </div>
        </div>
      </div>
      <h4 class="applicationSection">Education</h4>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="highSchool" class="form-control" placeholder="High School" value="<?php echo $_POST['highSchool']; ?>" />
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="highSchoolAddress" class="form-control" placeholder="High School Address" value="<?php echo $_POST['highSchoolAddress']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from1" class="form-control" placeholder="From" value="<?php echo $_POST['from1']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to1" class="form-control" placeholder="To" value="<?php echo $_POST['to1']; ?>" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="checkbox">
            <h5>Did you graduate? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="degree1" class="form-control" placeholder="Degree" value="<?php echo $_POST['degree1']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="college" class="form-control" placeholder="College" value="<?php echo $_POST['college']; ?>" />
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="collegeAddress" class="form-control" placeholder="College Address" value="<?php echo $_POST['collegeAddress']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from2" class="form-control" placeholder="From" value="<?php echo $_POST['from2']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to2" class="form-control" placeholder="To" value="<?php echo $_POST['to2']; ?>" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="checkbox">
            <h5>Did you graduate? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="degree2" class="form-control" placeholder="Degree" value="<?php echo $_POST['degree2']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="otherEducation" class="form-control" placeholder="Other Education" value="<?php echo $_POST['otherEducation']; ?>" />
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="otherEducationAddress" class="form-control" placeholder="Other School Address" value="<?php echo $_POST['otherEducationAddress']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from3" class="form-control" placeholder="From" value="<?php echo $_POST['from3']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to3" class="form-control" placeholder="To" value="<?php echo $_POST['to3']; ?>" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="checkbox">
            <h5>Did you graduate? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="degree3" class="form-control" placeholder="Degree" value="<?php echo $_POST['degree3']; ?>" />
          </div>
        </div>
      </div>
      <h4 class="applicationSection">References</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refName1" class="form-control" placeholder="Reference Name #1" value="<?php echo $_POST['refName1']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refRelationship1" class="form-control" placeholder="Relationship" value="<?php echo $_POST['refRelationship1']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refCompany1" class="form-control" placeholder="Company" value="<?php echo $_POST['refCompany1']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="tel" name="refPhone1" class="form-control" placeholder="Phone Number" value="<?php echo $_POST['refPhoneNumber1']; ?>" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="refAddress1" class="form-control" placeholder="Address" value="<?php echo $_POST['refAddress1']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refName2" class="form-control" placeholder="Reference Name #2" value="<?php echo $_POST['refName2']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refRelationship1" class="form-control" placeholder="Relationship" value="<?php echo $_POST['refRelationship2']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refCompany2" class="form-control" placeholder="Company" value="<?php echo $_POST['refCompany2']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="tel" name="refPhone2" class="form-control" placeholder="Phone Number" value="<?php echo $_POST['refPhoneNumber2']; ?>" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="refAddress2" class="form-control" placeholder="Address" value="<?php echo $_POST['refAddress2']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refName3" class="form-control" placeholder="Reference Name #3" value="<?php echo $_POST['refName3']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refRelationship3" class="form-control" placeholder="Relationship" value="<?php echo $_POST['refRelationship3']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="refCompany3" class="form-control" placeholder="Company" value="<?php echo $_POST['refCompany3']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="tel" name="refPhone3" class="form-control" placeholder="Phone Number" value="<?php echo $_POST['refPhoneNumber3']; ?>" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="refAddress3" class="form-control" placeholder="Address" value="<?php echo $_POST['refAddress3']; ?>" />
          </div>
        </div>
      </div>
      <h4 class="applicationSection">Previous Employment</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="company1" class="form-control" placeholder="Company #1" value="<?php echo $_POST['companyName1']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="tel" name="companyTelephone1" class="form-control" placeholder="Telephone" value="<?php echo $_POST['companyTelephone1']; ?>" />
          </div>
        </div>
      </div>        
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="companyAddress1" class="form-control" placeholder="Company Address" value="<?php echo $_POST['companyAddress1']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="supervisor1" class="form-control" placeholder="Supervisor" value="<?php echo $_POST['supervisor1']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="jobTitle1" class="form-control" placeholder="Job Title" value="<?php echo $_POST['jobtitle1']; ?>" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="startingSalary1" class="form-control" placeholder="Starting Salary $" value="<?php echo $_POST['startingSalary1']; ?>" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="endingSalary1" class="form-control" placeholder="Ending Salary $" value="<?php echo $_POST['endingSalary1']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="responsibilities1" class="form-control" placeholder="Responsibilities" value="<?php echo $_POST['responsibilities1']; ?>" />
          </div>
        </div>       
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from1" class="form-control" placeholder="From" value="<?php echo $_POST['from1']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to1" class="form-control" placeholder="To" value="<?php echo $_POST['to1']; ?>" />
          </div>
        </div>      
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="reason1" class="form-control" placeholder="Reason for leaving" value="<?php echo $_POST['reason1']; ?>" />
          </div>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-12">
          <div class="checkbox">
            <h5>May we contact your previous supervisor for a reference? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="company2" class="form-control" placeholder="Company #2" value="<?php echo $_POST['companyName2']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="tel" name="companyTelephone2" class="form-control" placeholder="Telephone" value="<?php echo $_POST['companyTelephone2']; ?>" />
          </div>
        </div>
      </div>        
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="companyAddress2" class="form-control" placeholder="Company Address" value="<?php echo $_POST['companyAddress2']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="supervisor2" class="form-control" placeholder="Supervisor" value="<?php echo $_POST['supervisor2']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="jobTitle2" class="form-control" placeholder="Job Title" value="<?php echo $_POST['jobtitle2']; ?>" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="startingSalary2" class="form-control" placeholder="Starting Salary $" value="<?php echo $_POST['startingSalary2']; ?>" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="endingSalary2" class="form-control" placeholder="Ending Salary $" value="<?php echo $_POST['endingSalary2']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="responsibilities2" class="form-control" placeholder="Responsibilities" value="<?php echo $_POST['responsibilities2']; ?>" />
          </div>
        </div>       
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from2" class="form-control" placeholder="From" value="<?php echo $_POST['from2']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to2" class="form-control" placeholder="To" value="<?php echo $_POST['to2']; ?>" />
          </div>
        </div>      
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="reason2" class="form-control" placeholder="Reason for leaving" value="<?php echo $_POST['reason2']; ?>" />
          </div>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-12">
          <div class="checkbox">
            <h5>May we contact your previous supervisor for a reference? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="company3" class="form-control" placeholder="Company #3" value="<?php echo $_POST['companyName3']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="tel" name="companyTelephone3" class="form-control" placeholder="Telephone" value="<?php echo $_POST['companyTelephone3']; ?>" />
          </div>
        </div>
      </div>        
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="companyAddress3" class="form-control" placeholder="Company Address" value="<?php echo $_POST['companyAddress3']; ?>" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="supervisor3" class="form-control" placeholder="Supervisor" value="<?php echo $_POST['supervisor3']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="jobTitle3" class="form-control" placeholder="Job Title" value="<?php echo $_POST['jobtitle3']; ?>" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="startingSalary3" class="form-control" placeholder="Starting Salary $" value="<?php echo $_POST['startingSalary3']; ?>" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" name="endingSalary3" class="form-control" placeholder="Ending Salary $" value="<?php echo $_POST['endingSalary3']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="responsibilities3" class="form-control" placeholder="Responsibilities" value="<?php echo $_POST['responsibilities3']; ?>" />
          </div>
        </div>       
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from3" class="form-control" placeholder="From" value="<?php echo $_POST['from3']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to3" class="form-control" placeholder="To" value="<?php echo $_POST['to3']; ?>" />
          </div>
        </div>      
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="reason3" class="form-control" placeholder="Reason for leaving" value="<?php echo $_POST['reason3']; ?>" />
          </div>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-12">
          <div class="checkbox">
            <h5>May we contact your previous supervisor for a reference? 
            <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
            <label class="checkbox-inline"><input type="checkbox" value="">No</label>
            </h5>
          </div>
        </div>
      </div>
      <h4 class="applicationSection">Military Service</h4>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="branch" class="form-control" placeholder="Branch" value="<?php echo $_POST['branch']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="from3" class="form-control" placeholder="From" value="<?php echo $_POST['from3']; ?>" />
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" name="to3" class="form-control" placeholder="To" value="<?php echo $_POST['to3']; ?>" />
          </div>
        </div>   
      </div>   
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="rank" class="form-control" placeholder="Rank at Discharge" value="<?php echo $_POST['rank']; ?>" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="dischargeType" class="form-control" placeholder="Type of Discharge" value="<?php echo $_POST['dischargeType']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="discharge" class="form-control" placeholder="If other than honorable, please explain" value="<?php echo $_POST['discharge']; ?>" />
          </div>
        </div>       
      </div>
      <h4 class="applicationSection">Disclaimer and Signature</h4>
      <div class="row">
        <div class="col-md-12">
          <h5 id="disclaimer">I certify that my answers are true and complete to the best of my knowledge.<br />If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" name="signature" class="form-control" placeholder="Signature" value="<?php echo $_POST['discharge']; ?>" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="todaysDate" class="form-control" placeholder="Date" value="<?php echo $_POST['todaysDate']; ?>" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <input type="submit" name="submit" class="btn btn-success btn-lg" id="submit" value="Submit" />
        </div>
      </div>
    </form>
  </div>     
    </section>
</div>     

<section class="footer">
  <?php include "footer.php"; ?>
</section>

<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
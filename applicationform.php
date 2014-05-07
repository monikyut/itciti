<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>IT Citi Services Inc.</title>
<!--<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.1.0/pure-min.css">-->
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/stylels.css">
</head>
<body>
<?php include_once 'header.php'; ?>
<div class="pure-g-r appform">
      <div class="pure-u-1 appheader">
            <h2>Application Form</h2>
      </div>
      <div class="pure-u-2-3 appform1">
            <div class="pure-form pure-form-message-inline pure-form-stacked">
                  <div class="pure-g-r appform-col1">
                        <div class="pure-u-1-2" id="fname">
                              <label for="fname">First Name</label>
                              <input id="fname" type="text" placeholder="First Name">
                        </div>
                        <div class="pure-u-1-2" id="lname">
                              <label for="lname">Last Name</label>
                              <input id="lname" type="text" placeholder="Last Name">
                        </div>
                        <div class="pure-u-1-1" id="address">
                              <label for="address">Address</label>
                              <input id="address" type="text" placeholder="Address">
                        </div>
                        <div class="pure-u-1-1" id="eadd1">
                              <label for="email1">Email Address</label>
                              <input id="email1" type="text" placeholder="Email Address">
                        </div>
                        <div class="pure-u-1-1" id="eadd2">
                              <label for="email2">Confirm Email Address</label>
                              <input id="email2" type="text" placeholder="Email Address">
                        </div>
                        <div class="pure-u-1-2" id="contactno1">
                              <label for="contact1">Contact Number 1</label>
                              <input id="contact1" type="text" placeholder="Contact Number">
                        </div>
                        <div class="pure-u-1-2" id="contactno2">
                              <label for="contact2">Contact Number 2</label>
                              <input id="contact2" type="text" placeholder="(Optional)">
                        </div>
                  </div>
            </div>
      </div>
      <div class="pure-u-1-3 appform2">
            <div class="pure-form pure-form-message-inline pure-form-stacked">
                  <div class="pure-g-r appform-col2">
                        <div class="pure-u-1-1">
                              <label for="lblposition">Position</label>
                              <input id="position" type="text" placeholder="Position" readonly>
                        </div>
                        <div class="pure-u-1-1">
                              <label for="lblresume">Upload Resume</label>
                              <input id="resume" type="text" placeholder="No file chosen">
                              <button class="pure-button-active">Choose File</button>
                        </div>
                        <div class="pure-u-1-1">
                              <button type="submit" class="pure-button button-xlarge">JOIN US!</button>
                        </div>
                  </div>
            </div>
      </div>
</div>
<?php include_once 'footer.php'; ?>
</body>
</html>
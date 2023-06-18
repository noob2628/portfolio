<?php 
require "php/session.php";
require "php/add_contact.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
  <title>Contact Me Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="css/contact.css" />
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/emailjs-com/dist/email.min.js"></script>
  <script type="text/javascript">
    (function(){
    emailjs.init("6fmv2rmmfccI3W3Mp");
    })();
  </script>
  <script type="text/javascript" src="js/contact.js"></script>
</head>
<body>
  <form>
    <div class="container border mt-3 bg-light">
      <div class="row">
        <div class="col-md-6 p-5 bg-primary text-white">
          <h1>Hire me please.</h1>
          <h4>Don't miss the opportunity to leverage my skills and expertise. 
            By hiring me, you can elevate your company's IT capabilities, 
            harness the power of data analysis, 
            and optimize warehouse management for improved efficiency and customer satisfaction.</h4>
        </div>
        <div class="col-md-6 border-left py-3">
          <h1>Contact Form</h1>
          <div class="form-group">
            <h5 for="name">Name</h5>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Enter name"
              required
            />
          </div>
          <div class="form-group">
            <h5 for="email">Email</h5>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter email"
              required
            />
          </div>
          <div class="form-group">
            <h5 for="message">Message</h5>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea> <!-- Add the name attribute -->
          </div>
          <input type="button" class="btn btn-primary" value="SEND" onclick="sendMailAndSaveContact()" required>
          <input type="button" class="btn btn-primary" value="BACK TO HOMEPAGE" onclick="myIndex()">
          <div id="statusMessage"></div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>

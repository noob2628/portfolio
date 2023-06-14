function sendMailAndSaveContact() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  var params = {
    name: name,
    email: email,
    message: message,
  };

  const serviceID = "service_x319auv";
  const templateID = "template_41y99l8";

  if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
    alert("Please fill in all fields");
    return false; // Prevent form submission
  } else {
    emailjs.send(serviceID, templateID, params)
      .then(res => {
        // Send the form data to the server
        saveContact(name, email, message);
        // Clear form inputs
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        showStatusMessage("Your message sent successfully!", true);
      })
      .catch(err => console.log(err));
  }
}

function saveContact(name, email, message) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php/add_contact.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Log the response from the server
      console.log(xhr.responseText);

      // Process the response from the server
      var response = JSON.parse(xhr.responseText);
      if (!response.success) {
        showStatusMessage(response.message, false);
      }
    }
  };
  xhr.send(
    "name=" + encodeURIComponent(name) +
    "&email=" + encodeURIComponent(email) +
    "&message=" + encodeURIComponent(message)
  );
}

function myIndex() {
  window.location.href = "index.php";
}

function showStatusMessage(message, success) {
  if (success) {
    Swal.fire({
      icon: 'success',
      title: 'Success',
      text: message,
    });
  } else {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: message,
    });
  }
}

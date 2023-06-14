   // Handle form submission
   document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    var form = this;
    var username = form.elements.username.value;
    var password = form.elements.password.value;
    
    // Send a request to login.php using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = xhr.responseText.trim();
                
                if (response === 'success') {
                    // Successful login
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Successful!',
                        text: 'Click OK to proceed.',
                        showCancelButton: false,
                        confirmButtonText: 'OK'
                    }).then(function() {
                        form.reset(); // Clear form fields
                        window.location.href = 'index.php'; // Redirect to index.php
                    });    
                    
                } else {
                    // Invalid login
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid Login',
                        text: 'Invalid username or password!',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        form.reset(); // Reset the form
                    });
                }
            } else {
                // Error occurred during the request
                Swal.fire({
                    icon: 'error',
                    title: 'Request Error',
                    text: 'An error occurred while processing the request.',
                    confirmButtonText: 'OK'
                }).then(function() {
                    form.reset(); // Reset the form
                });
            }
        }
    };
    xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
});
var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            
            var username = form.elements.username.value;
            var password = form.elements.password.value;
            var email = form.elements.email.value;
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'signup.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText.trim();
                        if (response === 'success') {
                            // Successful registration
                            Swal.fire({
                                icon: 'success',
                                title: 'Registration Successful!',
                                text: 'Click OK to proceed to login.',
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                            }).then(function() {
                                form.reset(); // Clear form fields
                                window.location.href = 'login.php'; // Redirect to login page after clicking OK
                            });
                        } else {
                            // Display error message
                            Swal.fire({
                                icon: 'error',
                                title: 'Registration Error',
                                text: response
                            });
                        }
                    } else {
                        // Display error message for server errors
                        Swal.fire({
                            icon: 'error',
                            title: 'Registration Error',
                            text: 'Server responded with status ' + xhr.status + ' Account has already been taken!'
                        });
                    }
                }
            };
            xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password) + '&email=' + encodeURIComponent(email));
        });
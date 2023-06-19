// Handle logout button click
document.getElementById('logoutBtn').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default link behavior
  
  Swal.fire({
    icon: 'warning',
    title: 'Logout',
    text: 'Are you sure you want to log out?',
    showCancelButton: true,
    confirmButtonText: 'Logout',
    cancelButtonText: 'Cancel',
    customClass: {
      popup: 'logout-alert',
    }
  }).then(function(result) {
    if (result.isConfirmed) {
      // User confirmed the logout
      
      // Perform logout process (e.g., AJAX request, clearing session)
      // ...
      
      // Show success message
      Swal.fire({
        icon: 'success',
        title: 'Logout Successful!',
        text: 'You have been logged out.',
        confirmButtonText: 'OK'
      }).then(function() {
        // Redirect to login page
        window.location.href = 'login.php';
      });
    }
  });
});

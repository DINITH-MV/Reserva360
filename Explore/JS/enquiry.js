// Function to validate the form
function validateForm() {
    // trim will remove the white space
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
  
    if (!validateEmail(email)) {
      alert('Please enter a valid email address');
      return;
    }
  
    if (!validatePhoneNumber(phone)) {
      alert('Please enter a valid 10-digit phone number');
      return;
    }
  
    // Form is valid, perform further actions (e.g., submit the form)
    document.getElementById('myForm').submit();
  }
  
  // Function to validate email address
  function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  // Function to validate phone number
  function validatePhoneNumber(phone) {
    const phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone);
  }
  

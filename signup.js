// const emailInput = document.querySelector('input[name="email"]');
// const domain = /@thapar\.edu$/i;

// emailInput.addEventListener('blur', function () {
//   const emailValue = this.value;
  
//   if (!domain.test(emailValue)) {
//     const alertBox = document.createElement('div');
//     alertBox.classList.add('alert-box');
//     alertBox.innerHTML = `
//       <p>Please enter a Thapar University email address.</p>
//     `;
    
//     document.body.appendChild(alertBox);
//     this.value = '';
//     this.focus();
    
//     alertBox.classList.add('show');
    
//     // Remove the alert box after 5 seconds
//     setTimeout(function() {
//       alertBox.classList.remove('show');
//       alertBox.remove();
//     }, 5000);
//   }
// });


const emailInput = document.querySelector('input[name="email"]');
const domain = /@thapar\.edu$/i;

emailInput.addEventListener('blur', function () {
  const emailValue = this.value;
  
  if (emailValue !== '' && !domain.test(emailValue)) {
    const alertBox = document.createElement('div');
    alertBox.classList.add('alert-box');
    alertBox.innerHTML = `
      <p>⚠️ Please enter a Thapar University email address. ⚠️</p>
    `;
    
    document.body.appendChild(alertBox);
    this.value = '';
    this.focus();
    
    alertBox.classList.add('show');
    
    // Remove the alert box after 5 seconds
    setTimeout(function() {
      alertBox.classList.remove('show');
      alertBox.remove();
    }, 5000);
  }
});





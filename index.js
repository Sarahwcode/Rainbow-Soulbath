//function peaceWord(event) {
//event.preventDefault();
//let formSubmit = document.querySelector("#form-text");
//console.log(formSubmit.value);
//}
//let formText = document.querySelector("#form");
//formText.addEventListener("submit", peaceWord);

//document.getElementById("form").addEventListener("submit", function (event) {
//event.preventDefault(); // Prevent the default form submission behavior
//const peacefulWord = document.getElementById("form-text").value;
//console.log("The word that brings you peace is:", peacefulWord);
//});
document.addEventListener('DOMContentLoaded', () => {
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
  
    // Function to show a specific testimonial
    function showTestimonial(index) {
      testimonialItems.forEach((item, i) => {
        if (i === index) {
          item.classList.add('active');
        } else {
          item.classList.remove('active');
        }
      });
    }
  
    // Show the first testimonial initially
    showTestimonial(currentIndex);
  
    // Event listener for the "Next" button
    nextBtn.addEventListener('click', () => {
      currentIndex++;
      if (currentIndex >= testimonialItems.length) {
        currentIndex = 0; // Loop back to the first testimonial
      }
      showTestimonial(currentIndex);
    });
  
    // Event listener for the "Previous" button
    prevBtn.addEventListener('click', () => {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = testimonialItems.length - 1; // Loop to the last testimonial
      }
      showTestimonial(currentIndex);
    });
  });
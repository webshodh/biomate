// Preload the images into an array
const images = ''
const preloadedImages = [
    '',  // Replace with your image URL
    'image2.jpg',  // Replace with your image URL
    'image3.jpg'   // Replace with your image URL
  ];
  
  let currentIndex = 0;
  
  // Function to update the slider background image
  function updateBackground() {
    const sliderImage = document.getElementById('sliderImage');
    sliderImage.style.backgroundImage = `url(${preloadedImages[currentIndex]})`;
  
    // Optional: Update name, location, profession dynamically based on the current index
    const names = ["John Doe, 25", "Jane Smith, 30", "Michael Lee, 35"];
    const locations = ["New York, USA", "London, UK", "Sydney, Australia"];
    const professions = ["Software Engineer at Google", "Designer at Apple", "Manager at Microsoft"];
  
    document.getElementById('name').innerText = names[currentIndex];
    document.getElementById('location').innerText = locations[currentIndex];
    document.getElementById('profession').innerText = professions[currentIndex];
  }
  
  // Function to handle next button click
  function handleNext() {
    currentIndex = (currentIndex + 1) % preloadedImages.length;
    updateBackground();
  }
  
  // Function to handle previous button click
  function handlePrev() {
    currentIndex = (currentIndex - 1 + preloadedImages.length) % preloadedImages.length;
    updateBackground();
  }
  
  // Function to go to a specific slide
  function goToSlide(index) {
    currentIndex = index;
    updateBackground();
  }
  
  // Initialize the background image on page load
  updateBackground();
  
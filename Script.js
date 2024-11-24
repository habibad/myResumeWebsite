let images = ['bg_1.jpg', 'bg_2.jpg', 'bg_3.jpg', 'bg_4.jpg']; // Add more image URLs here
let texts = [
    "Creative Web Designer & Developer",
    "Experienced in Frontend & Backend",
    "Let's build something amazing together",
    "Artificial Intelligent & Machine Learning"
];

let hero = document.querySelector('.hero');
let heroTitle = document.querySelector('.hero h1');
let currentIndex = 0;
function changeContent() {
    hero.style.backgroundImage = `url(${images[currentIndex]})`;
    heroTitle.textContent = texts[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeContent, 6000); // Change every 5 seconds

document.addEventListener("DOMContentLoaded", function () {
    const progressCircles = document.querySelectorAll(".progress-circle");
  
    progressCircles.forEach((circle) => {
      const percentage = circle.getAttribute("data-percentage");
      circle.style.setProperty("--percentage", percentage);
    });
  });


  //howver effect for navbar

  

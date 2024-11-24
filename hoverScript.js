
const sectionValue = document.querySelectorAll("section");
for (const element of sectionValue) {
  document.querySelectorAll(".navbar nav ul li a").forEach(navItem => {
    element.addEventListener('mouseover', () => {
        const targetId = navItem.getAttribute("href");
        const targetSection = document.getElementById(targetId);
        targetSection.style.backgroundColor = 'black'; // Highlight section
      });
    
      navItem.addEventListener('mouseout', () => {
        const targetId = navItem.getAttribute("href");
        const targetSection = document.getElementById(targetId);
        targetSection.style.backgroundColor = ''; // Remove highlight
      });
    });
}



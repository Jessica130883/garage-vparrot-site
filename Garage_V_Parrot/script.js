const priceRange = document.getElementById("priceRange");
const kmRange = document.getElementById("kmRange");
const yearRange = document.getElementById("yearRange");

const priceValue = document.getElementById("priceValue");
const kmValue = document.getElementById("kmValue");
const yearValue = document.getElementById("yearValue");

priceRange.addEventListener("input", filterAnnonces);
kmRange.addEventListener("input", filterAnnonces);
yearRange.addEventListener("input", filterAnnonces);

function filterAnnonces() {
    
    const price = parseInt(priceRange.value);
    const km = parseInt(kmRange.value);
    const year = parseInt(yearRange.value);
  
    
    priceValue.textContent = price;
    kmValue.textContent = km;
    yearValue.textContent = year;
  
    
    const annonces = document.querySelectorAll(".annonce");
  
    
    annonces.forEach((annonce) => {
      const annoncePrice = parseInt(annonce.querySelector(".prix").textContent);
      const annonceKm = parseInt(annonce.querySelector(".km").textContent);
      const annonceYear = parseInt(annonce.querySelector(".annee").textContent);
  
      if (
        annoncePrice <= price &&
        annonceKm <= km &&
        annonceYear >= year
      ) {
        annonce.style.display = "block";
      } else {
        annonce.style.display = "none";
      }
    });
 
  }
  
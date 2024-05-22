document.addEventListener('DOMContentLoaded', function() {
  let index = 0;
  const slides = document.querySelectorAll(".mySlides");
  
  // Mostrar la primera diapositiva al cargar la página
  slides[0].classList.add('active');
  
  function showSlide(n) {
    // Ocultar todas las diapositivas
    slides.forEach(slide => slide.classList.remove('active'));
    
    // Calcular el índice de la diapositiva a mostrar
    index += n;
    if (index >= slides.length) {
      index = 0;
    } else if (index < 0) {
      index = slides.length - 1;
    }
    
    // Mostrar la diapositiva actual
    slides[index].classList.add('active');
  }
  
  // Asignar eventos a los botones de siguiente y anterior
  document.querySelector('.prev').addEventListener('click', () => showSlide(-1));
  document.querySelector('.next').addEventListener('click', () => showSlide(1));
  
  // Iniciar el desplazamiento automático
  setInterval(() => showSlide(1), 20000);
});



//////////////////////////////////////////////////////////////////////////////

//segundo carrucel

document.addEventListener("DOMContentLoaded", function () {
  let carousel = document.querySelector(".carousel");
  let items = carousel.querySelectorAll(".item");
  let dotsContainer = document.querySelector(".dots");

  // Insert dots into the DOM
  items.forEach((_, index) => {
    let dot = document.createElement("span");
    dot.classList.add("dot");
    if (index === 0) dot.classList.add("active");
    dot.dataset.index = index;
    dotsContainer.appendChild(dot);
  });

  let dots = document.querySelectorAll(".dot");

  // Function to show a specific item
  function showItem(index) {
    items.forEach((item, idx) => {
      item.classList.remove("active");
      dots[idx].classList.remove("active");
      if (idx === index) {
        item.classList.add("active");
        dots[idx].classList.add("active");
      }
    });
  }

  // Event listeners for buttons
  document.querySelector(".prev").addEventListener("click", () => {
    let index = [...items].findIndex((item) =>
      item.classList.contains("active")
    );
    showItem((index - 1 + items.length) % items.length);
  });

  document.querySelector(".next").addEventListener("click", () => {
    let index = [...items].findIndex((item) =>
      item.classList.contains("active")
    );
    showItem((index + 1) % items.length);
  });

  // Event listeners for dots
  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      let index = parseInt(dot.dataset.index);
      showItem(index);
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('myDiv').addEventListener('click', function() {
      window.location.href = 'www.google.com';
  });
});

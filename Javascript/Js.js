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











































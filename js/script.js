document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector(".proyect-detalles");
    const info = document.getElementById("info");
  
    button.addEventListener("click", function() {
      // Mostrar la información
      info.style.display = "block";
      
      // Ocultar la información después de 5 segundos (5000 milisegundos)
      setTimeout(function() {
        info.style.display = "none";
      }, 5000);
    });
  });
  
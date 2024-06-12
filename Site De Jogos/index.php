





<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
 
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tilt+Neon&display=swap');
  </style>



  <title>Games Paradise</title>
</head>

<body>
  
 



  <header>
    <div class="logo">
      <a href="index.php?home"><img src="imagem/Screenshot_2024-05-21_195422-removebg-preview.png" alt=""></a>
    </div>
    <div class="links">
      <nav>
        <ul>
          <li><a href="index.php#Jogar">JOGOS</a></li>
          <li> <a class=" d-none  d-md-block" href="index.php#Destaquepc">DESTAQUES</a>                              <a class="d-md-none" href="#Destaques">DESTAQUES</a></li>
          <li> <a href="pg=desenvolvedores">DESENVOLVEDORES</a></li>
          <li><a href="index.php#Formulario">CONTATOS</a></li>
        </ul>
        
       
       
        
      </nav>


    </div>
  </header>
  <main>
  <?php 
  $pg = $_GET["pg"] ?? "home";
  $pgPath = "paginas/{$pg}.php";

  if (file_exists($pgPath)) {
    include $pgPath;
  } 
   
  ?>
   
    

   


    
    


  
  <footer class="p-2 text-center text-light py-5">
  <h4>Desenvolvido por <br> Thiago Borges Fernandes</h3>

  <div class="redes">
    <a class="text-light px-2 fs-4" href=""><i class="fa-brands fa-instagram"></i></a>
    <a  class="text-light px-2 fs-4"  href=""><i class="fa-brands fa-github"></i></a>
    <a class="text-light px-2 fs-4"   href=""><i class="fa-brands fa-facebook"></i></a>

  </div>









<script>
   
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <script src="script/index.js"></script>
 
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
        const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
      </script>
 
   
    





</body>

</html>
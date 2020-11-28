<!--Start Title-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex ml-5 mr-5 mt-3 mb-2">
  <div class="d-flex ml-5 text-white">
    <h1 class="card-title ">Eventos Populares</h1>
  </div>
</nav>
<!--End Title-->


<!--Start Styles Carousel-->
<style>
  .carousel-item{
    height: 29rem;
    background: #000;
    color: white;
    position: relative;
    background-position: center;
    background-size: cover;


  }
  .container{
    padding-left: 45px;
    padding-bottom: 50px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 
    


  }

  .overlay-image{
    position: absolute;
    bottom: 0;
    left:0;
    right: 0;
    top: 0;
    background-position: center;
    background-size: cover;
    opacity: 0.5;
  }
</style>
<!--End Styles Carousel-->

<!--Start Carousel-->
<div id="mycarousel" class="carousel slide carousel-fade d-flex ml-5 mr-5  mb-1" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="mycarousel" data-slide-to="1"></li>
        <li data-target="mycarousel" data-slide-to="2"></li>
        <li data-target="mycarousel" data-slide-to="3"></li>
        <li data-target="mycarousel" data-slide-to="4"></li>
        <li data-target="mycarousel" data-slide-to="5"></li>
        <li data-target="mycarousel" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner ">
        <div class="carousel-item active" >
          <div class="overlay-image" style="background-image:url('view/img/s1.jpg')"></div>
            <div class="container">
                <h1>Todos</h1>
                  <p >Encuentra aquí todos los eventos a los que puedes asistir</p>
                  <a href="" class="btn btn-lg btn-primary">Ingresar</a>  
            </div>
          </div> 

          <div class="carousel-item ">
            <div class="overlay-image" style="background-image:url('view/img/s2.jpg')"></div>
              <div class="container">
                <h1>Para ti</h1>
                  <p >¿Buscas exclusividad? He aquí una sección sólo para ti</p>
                  <a href="" class="btn btn-lg btn-primary">Ingresar</a>
              </div>     
          </div> 

          <div class="carousel-item ">
            <div class="overlay-image" style="background-image:url('view/img/s3.jpg')"></div>
              <div class="container">
                <h1>Hoy</h1>
                  <p >Encuentra los eventos programados del día</p>
                  <a href="" class="btn btn-lg btn-primary">Ingresar</a>
               </div>     
           </div>

          <div class="carousel-item ">
            <div class="overlay-image" style="background-image:url('view/img/s4.jpg') "></div>
              <div class="container">
                <h1>Este fin de semana</h1>
                  <p >¿Pensando en planes para el fin de semana? Chequea esto</p>
                  <a href="" class="btn btn-lg btn-primary"> Ingresar</a> 
               </div>     
           </div>  

          <div class="carousel-item ">
           <div class="overlay-image" style="background-image:url('view/img/s5.jpg')"></div>
              <div class="container">
                <h1>Musica</h1>
                  <p >¿Eres un melómano? Esta sección es especialmente para ti</p>
                <a href="" class="btn btn-lg btn-primary">Ingresar</a>
             </div>     
          </div> 

          <div class="carousel-item ">
            <div class="overlay-image" style="background-image:url('view/img/s7.jpg')"></div>
              <div class="container">
                <h1>Gastronomia</h1>
                  <p >¡El placer de la variedad en su plato!</p>
                  <a href="" class="btn btn-lg btn-primary">Ingresar</a>
              </div>    
          </div> 

          <div class="carousel-item ">
           <div class="overlay-image" style="background-image:url('view/img/s6.jpg')"></div>
              <div class="container">
                <h1>Gratis</h1>
                <p >Los eventos son efímeros, las emociones perduran</p>
                <a href="" class="btn btn-lg btn-primary">Ingresar </a>
              </div>     
          </div>             
     </div>  

      <a href="#mycarousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a href="#mycarousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
</div>
<!--End Carousel-->


<br><br><br><br>


<!--Start Options-->
<div class="card-deck d-flex ml-5 mr-5">
    <div class="card" style="width: 18rem;">
      <img src="view/img/card1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Galería</h5>
      <p class="card-text">Mira cómo todos disfrutan de los eventos organizados a través de EvenOrg</p>
      <a href="index.php?action=galeria" class="btn btn-primary">Ver más</a>
    </div>
    </div>
      <div class="card" style="width: 18rem;">
        <img src="view/img/card2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nuestros lugares</h5>
        <p class="card-text">Te ofrecemos los mejores lugares para que lleves a cabo tus eventos</p>
        <a href="index.php?action=nuestrosLugares" class="btn btn-primary">Ver más</a>
    </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="view/img/card3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Movilidad y transporte</h5>
      <p class="card-text">Si lo deseas nosotros  te podemos llevar a ti y a tus familiares o amigos a su evento elegido.</p>
      <a href="index.php?action=movilidadTransporte" class="btn btn-primary">Ver más</a>
    </div>
  </div>
</div>
<!--End Options-->

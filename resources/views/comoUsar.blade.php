    @extends('layout.site')

    @section('titulo', 'Heritage - Como usar')

    @section('conteudo')

    <div class="container my-3">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 d-flex justify-content-center h-100">
                <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-color: transparent;">
                    <a class="nav-item details active master mx-2" id="nav-home-tab" data-toggle="tab" href="#Web" role="tab" aria-controls="nav-home" aria-selected="true" style="text-decoration: none;">
                        <h4 class="text-center masterText bold">
                            <img class="img-fluid" src="storage/ComoUsar/WebHover.png">
                            &nbsp;WEB
                        </h4>
                    </a>
                    <a class="nav-item details master mx-2" id="nav-profile-tab" data-toggle="tab" href="#Mobile" role="tab" aria-controls="nav-profile" aria-selected="false" style="text-decoration: none;">
                        <h4 class="text-center masterText bold">
                            <img src="storage/ComoUsar/MobileHover.png" class="img-fluid">
                            &nbsp;MOBILE
                        </h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="tab-content" id="nav-tabContent mt-5">
        <div class="tab-pane fade show active bg-transparent" id="Web" role="tabpanel" aria-labelledby="Web-tab">
            <div class="container-fluid">
                <div class="slideshow-container">
                    <div class="mySlides" style="display: none;">
                        <img src="storage/ComoUsar/Web/AmbientesLight.png" class="img-fluid fadeSlide" id="show">
                        <img src="storage/ComoUsar/Web/AmbientesDark.png" class="img-fluid fadeSlide" id="hideImg">
                    </div>
                    <div class="mySlides fadeSlide" style="display: none;">
                        <img src="storage/ComoUsar/Web/PatrimoniosLight.png" class="img-fluid fadeSlide" id="show">
                        <img src="storage/ComoUsar/Web/PatrimoniosDark.png" class="img-fluid fadeSlide" id="hideImg">
                    </div>
                    <div class="mySlides fadeSlide" style="display: none;">
                        <img src="storage/ComoUsar/Web/UsuariosLight.png" class="img-fluid fadeSlide" id="show">
                        <img src="storage/ComoUsar/Web/UsuariosDark.png" class="img-fluid fadeSlide" id="hideImg">
                    </div>
                    <a class="prevSlide" onclick="plusSlides(-1)"><img class="web" src="storage/ComoUsar/SetaEsquerdaSlide.png"></a>
                    <a class="nextSlide" onclick="plusSlides(1)"><img class="web" src="storage/ComoUsar/SetaDireitaSlide.png"></a>
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>

        </div>

        <div class="tab-pane fade bg-transparent" id="Mobile" role="tabpanel" aria-labelledby="Mobile-tab">
            <div class="container-fluid">
                <img src="storage/Index/SlideEmpresa.png" class="img-fluid">
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>

    @endsection
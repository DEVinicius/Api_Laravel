    @extends('layout.inicialSite')

    @section('titulo', 'Heritage - Home')

    @section('conteudo')

    <div class="container-fluid">
        <div class="w3-content w3-section" style="max-width: 100%">
            <img class="mySlides img-fluid" src="storage/Index/SlideEmpresa.png" alt="CloudState">
            <img class="mySlides img-fluid" src="storage/Index/SlideApp.png" alt="Heritage">
        </div>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 5000);
            }
        </script>
    </div>

    <div class="container">
        <hr style="height: 1px; background-color: #C0C0C0;">
    </div>

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-6">
                <a href="planos.php"><img src="storage/Index/FaleConosco.png" class="img-fluid" alt="Fale conosco"></a>
            </div>
            <div class="col-md-6">
                <a href="contato.php"><img src="storage/Index/ConhecaPlanos.png" class="img-fluid" alt="Conheça nossos planos"></a>
            </div>
        </div>
    </div> 
    @endsection

@extends('Layouts.Principal')
@section('content')

    <section class="section section-top section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(assets/ba.png)">
      </div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      {{--
      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-left bg-triangle-bottom"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-right bg-triangle-bottom"></div>
      --}}

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12 col-md-8">

            <!-- Preheading -->
            {{--<p class="font-weight-medium text-center text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
              by Simpleqode
            </p>--}}
            
            <!-- Heading -->
            <h1 class="text-center text-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
              Taste The Perfection
            </h1>

            <!-- Subheading -->
            <p class="text-center text-white text-muted mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                Delicie-se com a magia de sabores irresistíveis em nossa pizzaria e restaurante, onde cada mordida é uma jornada gourmet para o paladar.
            </p>

            <!-- Button -->
            <div class="text-center">
              <a href="#reservation" class="btn btn-outline-primary text-white" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
                Fazer Reserva
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5 offset-lg-1">
            
            <!-- Image -->
            <div class="img-effect img-effect-solid mb-5 mb-md-0">
              {{--<img src="assets/img/68.jpg" class="img-fluid" alt="...">--}}
              <img src="assets/a1.jpg" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1">

            <!-- Heading -->
            <h2 class="mb-4">
                Ingredientes de alta qualidade para a deliciosa pizza
            </h2>

            <!-- Content -->
            <p class="text-muted mb-0">
                uma explosão de sabores artesanais que vão te transportar diretamente para a Itália, onde a tradição encontra a inovação gastronômica em cada pedaço.
            </p>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5 offset-lg-1 order-md-2">
            
            <!-- Image -->
            <div class="img-effect img-effect-border mb-5 mb-md-0">
              <img src="assets/img/69.jpg" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1 order-md-1">

            <!-- Heading -->
            <h2 class="mb-4">
                Prove a diferença no Pizza Point
            </h2>

            <!-- Content -->
            <p class="text-muted">
                descubra a verdadeira paixão pela culinária, onde cada detalhe é cuidadosamente preparado para proporcionar uma experiência única e inesquecível para você e sua família.
            </p>

            <!-- Button -->
            <a href="contact.html" class="btn btn-outline-primary">
              Contacte-nos
            </a>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
    
    <!-- MENU
    ================================================== -->
    <section class="section bg-light">

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="mb-4 text-center">
              Nosso Menu
            </h2>

            <!-- Subheading -->
            <p class="mb-5 text-center text-muted">
                Uma sinfonia de sabores que agrada a todos os paladares, com opções que vão desde as pizzas clássicas e reconfortantes até a outras diversidades de gastronômias.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Nav -->
            <nav class="nav nav-pills justify-content-center mb-6">
              <a href="#menuTwo" class="nav-link" data-toggle="tab">
                Entradas
              </a>
              <a href="#menuOne" class="nav-link active" data-toggle="tab">
                Pizzas Medias
              </a>
              <a href="#menuThree" class="nav-link" data-toggle="tab">
                Pizzas Grandes
              </a>
              <a href="#menuFour" class="nav-link" data-toggle="tab">
                Marriscos
              </a>
              <a href="#menuFive" class="nav-link" data-toggle="tab">
                Sobremessas
              </a>
              <a href="#menuSix" class="nav-link" data-toggle="tab">
                Carnes
              </a>
              <a href="#menuSeven" class="nav-link" data-toggle="tab">
                Hamburguer
              </a>
              <a href="#menuEight" class="nav-link" data-toggle="tab">
                Bebidas
              </a>
            </nav>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
          
            <!-- Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="menuOne">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/m-margarita.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Margarita
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          400MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/m-fiambre.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Fiambre
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          650MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/m-chourico.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Chouriço 
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          600MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/m-carne.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Carne
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          450MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/m-camarao.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Camarão
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          600MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/m-atum.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Atum
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          550MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                </div> <!-- / .row -->
                
              </div>

              {{--Inicio do menu de Entradas--}}
              <div class="tab-pane fade" id="menuTwo">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/a2.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Sopa
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                            Nossa sopa é uma verdadeira carícia para a alma em dias frios ou sempre que você desejar um momento de puro prazer gastronômico. 
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          100MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/mini.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          3 Mini Pizzas
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                            Cada uma delas é cuidadosamente preparada com uma massa fina e crocante
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          150MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>

                  {{--Inicio da outra coluna contendo os outros links do menu--}}

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/pao.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pao de Alho
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                            O nosso Pão de Alho é uma verdadeira obra-prima culinária que vai encantar os seus sentidos. 
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          150MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>

                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da nova seccao de comidas--}}
              <div class="tab-pane fade" id="menuThree">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3"> 
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/quatro.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza 4 Estações
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Molho de tomate, Queijo mussarela, Fatias de presunto ou bacon.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          650MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/74.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Fiambre
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Frango Molho Picante e Carne Branca.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          750MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/75.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Margarita
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Molho de tomate, Folhas de manjericão e Tomate.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          500MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/70.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Carne
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Calabresa, Salsicha, Carne moida, Pimentão Verde, Cebola e Cogumelos.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          550MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/camarao.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza de Camarao
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Molho branco caseiro, tomate, camarao, queijo, azeitonas e brócolis.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          700MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/pizzapoint.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Pizza point
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Molho de tomate, azeitonas, queijo, carne moida
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          700MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da outra seccao do menu de Sobremesas--}}
              <div class="tab-pane fade" id="menuFive">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/s-salada.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Salada de Frutas
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Hot Sauce & White Meat Chicken.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/s-sorvete.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Sorvete
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce, Tomatoes, Cauliflower & Broccoli.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  
                  {{--Inicio da outra coluna--}}

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/s-mouse.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Mouse de Chocolate
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Bacon, Ham & Beef.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>

                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da seccao contendo os marrisco--}}
              <div class="tab-pane fade" id="menuFour">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/n-camarao.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Camarão panado, arroz de vegetais
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Batata e salada
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          800MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/n-grelhado.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Camarão grelhado ao molho de casa
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Arroz de vegetais, batata frita e salada
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          950MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  
                  {{--Inicio da outra coluna --}}

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/n-lulas.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Lulas grelhadas, arroz de vegetais
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Batata frita e salada / Vegetais salteados
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          850MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>

                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da seccao de menu contendo as carne--}}
              <div class="tab-pane fade" id="menuFive">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/s-salada.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Salada de Frutas
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Hot Sauce & White Meat Chicken.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/s-sorvete.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Sorvete
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce, Tomatoes, Cauliflower & Broccoli.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->


                    <hr class="d-md-none">

                  </div>
                  
                  {{--Inicio da outra seccao--}}

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/s-mouse.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Mouse de Chocolate
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Bacon, Ham & Beef.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  

                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da seccao contendo os marrisco--}}
              <div class="tab-pane fade" id="menuSix">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/c-bife.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Bife com cogumelos
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Batata corada, arroz e salada
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          650MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/c-natas.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Bife com natas
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Com arroz manteiga e batata frita
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          850MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  
                  {{--Inicio da outra coluna--}}

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/c-espetada.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Espetada de frango
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Arroz de vegetais, batata frita e salada
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          750MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>

                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da seccao de menu de hamburguer--}}
              <div class="tab-pane fade" id="menuSeven">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/hamburguer.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Hamburguer Simples
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          200MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/hamburguer-completo.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Hamburguer Completo
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          250MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  
                  {{--Inicio da outra seccao--}}

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/exclusive-burguer.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Exclusivo Burguer
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          380MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  

                </div> <!-- / .row -->
                
              </div>

              {{--Inicio da seccao de Bebidas--}}
              <div class="tab-pane fade" id="menuEight">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/agua-g.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Agua 0,5L
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          30MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/agua-p.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Agua 1,5L
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          60MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/cafe.jfif" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Cafe
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          100MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  

                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/milk.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Milkshake
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          220MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/refresco.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Refresco em lata
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          60MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/sumo.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Sumo natural
                        </h5>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          150MT
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr class="d-md-none">

                  </div>
                  


                </div> <!-- / .row -->
                

              </div>

              {{--Fim da seccao de menu--}}

            </div>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- RESERVATION
    ================================================== -->
    <section class="section" id="reservation">

      <!-- Line -->
      <div class="line line-top"></div>
      
      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="mb-4 text-center">
              Faça reserva online
            </h2>

            <!-- Subheading -->
            <p class="mb-5 text-center text-muted">
              Faça sua reserva de forma online, sem precisar sair de casa. A reserva da mesa deve ser confirmada ate 1h antes da hora prevista na reserva!
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            
            <!-- Form -->
            <form>
              <div class="row mb-5">
                <div class="col-12 col-md-6">
                  
                  <div class="form-group">
                    <label>Nome Completo:</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Numero de Telefone:</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group mb-md-0">
                    <label>Endereço de Email:</label>
                    <input type="email" class="form-control">
                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <div class="form-group">
                    <label>Numero de Integrantes:</label>
                    <select class="form-control">
                      <option value="1" selected>1 pessoa</option>
                      <option value="2">2 pessoas</option>
                      <option value="3">3 pessoas</option>
                      <option value="4">4 pessoas</option>
                      <option value="5">5 pessoas</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Data:</label>
                    <input type="date" class="form-control">
                  </div>

                  <div class="form-group mb-0">
                    <label>Horario:</label>
                    <input type="time" class="form-control">
                  </div>

                </div>
              </div> <!-- / .row -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  
                  <!-- Submit -->
                  <button type="submit" class="btn btn-outline-primary">
                    Reservar uma mesa
                  </button>

                </div>
              </div> <!-- / .row -->
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- NEWSLETTER
    ================================================== -->
    <section class="section">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(assets/img/77.jpg)">
      </div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col">
            
            <!-- Heading -->
            <h3 class="text-center text-white mb-5">
              Inscreva-se no nosso boletim
            </h3>

            <!-- Form -->
            <form class="form-mailchimp form-light validate" action="http://simpleqode.us15.list-manage.com/subscribe/post-json?u=507744bbfd1cc2879036c7780&amp;id=4523d25e1b&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
              <div id="mc_embed_signup_scroll" class="form-row justify-content-center">
                <div class="input-group col-md-4 mb-2 mb-md-0">
                  <input type="email" value="" name="EMAIL" class="required email form-control order-1" id="mce-EMAIL" placeholder="Endereço de email">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="icon icon-envelope input-group-icon icon-offset" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div id="mce-responses" class="clear">
                    <div class="response"></div>
                    <div class="response" id="mce-success-response"></div>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div aria-hidden="true" id="mce-hidden-input">
                    <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
                  </div>
                </div>
                <div class="clear col-md-auto">
                  <button type="submit" class="btn btn-outline-primary text-white" id="mc-embedded-subscribe">
                    Enviar
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>


    {{--Inicio da parte contendo a galeria--}}


    <!-- GALLERY
    ================================================== -->
    <section class="section bg-light">

      <!-- Line -->
      <div class="line line-top"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
              Galeria
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Explore e encante-se com uma coleção cativante de imagens que capturam a essência do nosso universo.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col">
            
            <!-- Slider -->
            <div class="slider slider-no-controls mb-3" data-bind="slider" data-target="#sliderGallerySmall" id="sliderGalleryLarge">
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/g6.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/g2.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/g4.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/g1.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/g7.jpg" alt="..." class="img-fluid">

              </div>
            </div> <!-- / .slider -->
    
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col">
            
            <!-- Slider -->
            <div class="slider slider-highlight" data-bind="slider" data-target="#sliderGalleryLarge" id="sliderGallerySmall">
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/g6.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/g2.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/g4.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/g1.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/g7.jpg" alt="..." class="img-fluid">

              </div>
            </div> <!-- / .slider -->

          </div>
        </div>
      </div> <!-- / .container -->

    </section>

    {{--Fim da parte contendo a galeria--}}

    <!-- MAP
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
              Encontre-nos no mapa
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Estamos aqui para atendê-lo! Entre em contato conosco para esclarecer dúvidas, fornecer feedback ou simplesmente dizer olá. Sua opinião é valiosa para nós!
            </p>
          
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4">
            
            <!-- Address -->
            <div class="row align-items-center mb-5">
              <div class="col-auto">
                
                <i class="icon-marker icon-2x text-primary"></i>

              </div>
              <div class="col ml-n4">
                
                <h5>
                  Endereço:
                </h5>

                <p class="mb-0 text-sm text-muted">
                    Maquinino, Beira, Mozambique
                </p>

              </div>
            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-4">
            
            <!-- Address -->
            <div class="row align-items-center mb-5">
              <div class="col-auto">
                
                <i class="icon-clock icon-2x text-primary"></i>

              </div>
              <div class="col ml-n4">
                
                <h5>
                  Horario de Trabalho
                </h5>

                <p class="mb-0 text-sm text-muted">
                  Seg. - Sexta. / 08:00 - 20:00 <br>
                  Sabado. - Domingo. / 10:00 - 20:00
                </p>

              </div>
            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-4">
            
            <!-- Address -->
            <div class="row align-items-center mb-5">
              <div class="col-auto">
                
                <i class="icon-at icon-2x text-primary"></i>

              </div>
              <div class="col ml-n4">
                
                <h5>
                  Informações de contato:
                </h5>

                <p class="mb-0 text-sm text-muted">
                  Telefone: <a href="tel:12345678900" class="text-muted">
                    +(258) 851350705
                  </a> <br>
                  Email: <a href="mailto:admin@domain.com" class="text-muted">
                    contacto@pizzapoint.com
                  </a>
                </p>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Map -->
            <div class="">
              <div class="map" data-markers="[[34.0872254,-118.4046315]]" data-zoom="8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.2120429766946!2d34.83728387522443!3d-19.83097898153535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f2a6bc676b6fc57%3A0x46ceaed97c8ec05a!2sPizza%20Point!5e0!3m2!1spt-PT!2sfr!4v1691085267797!5m2!1spt-PT!2sfr" width="1150" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

@endsection
@extends('Layouts.Principal')
@section('content')

    <section class="section section-top section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(assets/img/67.jpg)">
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
              <img src="assets/img/68.jpg" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1">

            <!-- Heading -->
            <h2 class="mb-4">
              High quality ingredients for the great tasting pizza
            </h2>

            <!-- Content -->
            <p class="text-muted mb-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores, aperiam. Excepturi assumenda non quasi ipsa quidem harum debitis aut alias dicta. Laudantium reprehenderit ea, suscipit nulla deleniti excepturi repudiandae!
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
              Taste the difference at Incline's pizzeria 
            </h2>

            <!-- Content -->
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima tenetur, non ea, nobis minus distinctio eveniet libero fugiat, ullam deserunt dolores exercitationem quae eum? Alias quaerat rerum, quasi nulla odit?
            </p>

            <!-- Button -->
            <a href="contact.html" class="btn btn-outline-primary">
              Contact us
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
              Our menu
            </h2>

            <!-- Subheading -->
            <p class="mb-5 text-center text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi asperiores beatae quae inventore, molestiae dolorum.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Nav -->
            <nav class="nav nav-pills justify-content-center mb-6">
              <a href="#menuOne" class="nav-link active" data-toggle="tab">
                Pizzas
              </a>
              <a href="#menuTwo" class="nav-link" data-toggle="tab">
                Starters
              </a>
              <a href="#menuThree" class="nav-link" data-toggle="tab">
                Salads
              </a>
              <a href="#menuFour" class="nav-link" data-toggle="tab">
                Sandwiches
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
                          <img src="assets/img/70.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Deluxe pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Green Peppers, Onions & Mushrooms.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/71.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Vegetable pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce, Tomatoes, Cauliflower & Broccoli.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/72.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          White pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce With Tomatoes, Mild Banana Pepper Rings & Black Olives.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
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
                          <img src="assets/img/73.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Meat pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Bacon, Ham & Beef.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $16
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
                          Buffalo chicken pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Hot Sauce & White Meat Chicken.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
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
                          Mediterranean pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Fresh Spinach, Feta And Provolone Cheese, Roasted Red Peppers.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuTwo">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/72.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          White pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce With Tomatoes, Mild Banana Pepper Rings & Black Olives.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/71.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Vegetable pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce, Tomatoes, Cauliflower & Broccoli.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

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
                          Deluxe pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Green Peppers, Onions & Mushrooms.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
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
                          <img src="assets/img/74.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Buffalo chicken pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Hot Sauce & White Meat Chicken.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
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
                          Mediterranean pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Fresh Spinach, Feta And Provolone Cheese, Roasted Red Peppers.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/73.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Meat pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Bacon, Ham & Beef.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $16
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuThree">

                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/73.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Meat pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Bacon, Ham & Beef.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $16
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
                          Buffalo chicken pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Hot Sauce & White Meat Chicken.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
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
                          Mediterranean pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Fresh Spinach, Feta And Provolone Cheese, Roasted Red Peppers.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
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
                          Deluxe pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Green Peppers, Onions & Mushrooms.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/71.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Vegetable pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce, Tomatoes, Cauliflower & Broccoli.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/72.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          White pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce With Tomatoes, Mild Banana Pepper Rings & Black Olives.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuFour">

                <div class="row">
                  <div class="col-12 col-md-6">

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
                          Buffalo chicken pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Hot Sauce & White Meat Chicken.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/71.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Vegetable pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce, Tomatoes, Cauliflower & Broccoli.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $12
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!-- Item -->
                    <div class="row align-items-center">
                      <div class="col-4 col-lg-3">
                        
                        <!-- Image -->
                        <div class="img-square">
                          <img src="assets/img/73.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          Meat pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Bacon, Ham & Beef.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $16
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
                          <img src="assets/img/72.jpg" alt="..." class="img-cover">
                        </div>

                      </div>
                      <div class="col ml-n4">
                        
                        <!-- Heading -->
                        <h5>
                          White pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Homemade White Sauce With Tomatoes, Mild Banana Pepper Rings & Black Olives.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                    <hr>

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
                          Deluxe pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Pepperoni, Sausage, Green Peppers, Onions & Mushrooms.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
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
                          Mediterranean pizza
                        </h5>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                          Fresh Spinach, Feta And Provolone Cheese, Roasted Red Peppers.
                        </p>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Price -->
                        <h5 class="mb-0">
                          $15
                        </h5>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                </div> <!-- / .row -->
                
              </div>
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
              Make online reservation
            </h2>

            <!-- Subheading -->
            <p class="mb-5 text-center text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
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
                    <label>Full name:</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Phone number:</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group mb-md-0">
                    <label>Email address:</label>
                    <input type="email" class="form-control">
                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <div class="form-group">
                    <label>Number of guests:</label>
                    <select class="form-control">
                      <option value="1" selected>1 person</option>
                      <option value="2">2 persons</option>
                      <option value="3">3 persons</option>
                      <option value="4">4 persons</option>
                      <option value="5">5 persons</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Date:</label>
                    <input type="date" class="form-control">
                  </div>

                  <div class="form-group mb-0">
                    <label>Time:</label>
                    <input type="time" class="form-control">
                  </div>

                </div>
              </div> <!-- / .row -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  
                  <!-- Submit -->
                  <button type="submit" class="btn btn-outline-primary">
                    Reserve a table
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
              Sign up to our newsletter
            </h3>

            <!-- Form -->
            <form class="form-mailchimp form-light validate" action="http://simpleqode.us15.list-manage.com/subscribe/post-json?u=507744bbfd1cc2879036c7780&amp;id=4523d25e1b&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
              <div id="mc_embed_signup_scroll" class="form-row justify-content-center">
                <div class="input-group col-md-4 mb-2 mb-md-0">
                  <input type="email" value="" name="EMAIL" class="required email form-control order-1" id="mce-EMAIL" placeholder="Email address">
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
                    Sign up
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section class="section">
      
      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            
            <!-- Heading -->
            <h2 class="text-center mb-4">
              Client testimonials
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora sequi vitae provident optio pariatur. 
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col">
            
            <!-- Slider -->
            <div class="testimonial-slider">

              <!-- Item -->
              <div class="testimonial-slider-item">
                <div class="testimonial-slider-item-inner">
                
                  <!-- Quote -->
                  <div class="quote quote-sm">
                    <blockquote class="quote-blockquote">
                      <p class="quote-blockquote-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores! Itaque nihil quae, omnis, minus nisi iste iure.
                      </p>
                      <footer class="quote-blockquote-footer">
                        <div class="avatar avatar-lg mr-3">
                          <img src="assets/img/16.jpg" alt="..." class="img-cover rounded-circle">
                        </div>
                        <span>
                          John Doe, <span class="text-zigzag">Chicago</span>
                        </span>
                      </footer>
                    </blockquote>
                  </div>

                </div>
              </div>

              <!-- Item -->
              <div class="testimonial-slider-item">
                <div class="testimonial-slider-item-inner">
                
                  <!-- Quote -->
                  <div class="quote quote-sm">
                    <blockquote class="quote-blockquote">
                      <p class="quote-blockquote-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores! Itaque nihil quae, omnis, minus nisi iste iure.
                      </p>
                      <footer class="quote-blockquote-footer">
                        <div class="avatar avatar-lg mr-3">
                          <img src="assets/img/18.jpg" alt="..." class="img-cover rounded-circle">
                        </div>
                        <span>
                          Anna Doe, <span class="text-zigzag">San Francisco</span>
                        </span>
                      </footer>
                    </blockquote>
                  </div>

                </div>
              </div>

              <!-- Item -->
              <div class="testimonial-slider-item">
                <div class="testimonial-slider-item-inner">
                
                  <!-- Quote -->
                  <div class="quote quote-sm">
                    <blockquote class="quote-blockquote">
                      <p class="quote-blockquote-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores! Itaque nihil quae, omnis, minus nisi iste iure.
                      </p>
                      <footer class="quote-blockquote-footer">
                        <div class="avatar avatar-lg mr-3">
                          <img src="assets/img/17.jpg" alt="..." class="img-cover rounded-circle">
                        </div>
                        <span>
                          Jane Roe, <span class="text-zigzag">Los Angeles</span>
                        </span>
                      </footer>
                    </blockquote>
                  </div>

                </div>
              </div>

            </div> <!-- / .testimonials-slider -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- NEWS
    ================================================== -->
    <section class="section bg-light">

      <!-- Line -->
      <div class="line line-top"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
      
      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            
            <!-- Heading -->
            <h2 class="mb-4 text-center">
              Latest news & events
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora sequi vitae provident optio pariatur. 
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card border-0 mb-3 mb-md-0">

              <!-- Image -->
              <img src="assets/img/78.jpg" class="card-img-top" alt="...">

              <!-- Body -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">
                  Guide to the 2018 National “Best Pizzas” Lists
                </h4>

                <!-- Text -->
                <p class="card-text text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis.
                </p>

                <!-- Link -->
                <a href="#!">
                  Read more...
                </a>
                
              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card border-0 mb-3 mb-md-0">

              <!-- Image -->
              <img src="assets/img/56.jpg" class="card-img-top" alt="...">

              <!-- Body -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">
                  We Give Thanks to Our People, Pizza People
                </h4>

                <!-- Text -->
                <p class="card-text text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis.
                </p>

                <!-- Link -->
                <a href="#!">
                  Read more...
                </a>
                
              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card border-0">

              <!-- Image -->
              <img src="assets/img/79.jpg" class="card-img-top" alt="...">

              <!-- Body -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">
                  Pizza Community Celebrates Small Business Saturday
                </h4>

                <!-- Text -->
                <p class="card-text text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis.
                </p>

                <!-- Link -->
                <a href="#!">
                  Read more...
                </a>
                
              </div>

            </div> <!-- / .card -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- MAP
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
              Find us on the map
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum repellendus dolores, error.
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
                  Address:
                </h5>

                <p class="mb-0 text-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                  Work hours:
                </h5>

                <p class="mb-0 text-sm text-muted">
                  Mon. - Thu. / 08:00AM - 09:00PM <br>
                  Fri. - Sun. / 08:00AM - 11:00PM
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
                  Contact info:
                </h5>

                <p class="mb-0 text-sm text-muted">
                  Phone: <a href="tel:12345678900" class="text-muted">
                    +1(234)567-89-00
                  </a> <br>
                  Email: <a href="mailto:admin@domain.com" class="text-muted">
                    admin@domain.com
                  </a>
                </p>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Map -->
            <div class="map">
              <div class="map-container" data-markers="[[34.0872254,-118.4046315]]" data-zoom="8"></div>
            </div>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

@endsection
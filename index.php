<?php 
$home = true; 
$headerTitle = "Find the home of your dreams"; 
include "includes/templates/header.php"; 
?>
<!-- 
  En index añado la variable home, que va a ser true. 
  Solo es true en index. 
  Esto me sirve para diferenciar esta página de index del resto de páginas
  y poder añadir estilos especiales. 
-->

    <!-- ABOUT US -->
    <main class="container section">
      <h1>About us</h1>
      <div class="about">
        <div class="about-content">
          <div class="icon">
            <img
              src="build/img/icono1.svg"
              alt="about us icon"
              class="filter-green"
            />
          </div>
          <h3>Secure</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos a
            similique totam distinctio quod saepe alias ipsam? Quis asperiores,
            error doloribus eius accusamus vel!
          </p>
        </div>
        <div class="about-content">
          <div class="icon">
            <img
              src="build/img/icono2.svg"
              alt="about us icon"
              class="filter-green"
            />
          </div>
          <h3>Price</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos a
            similique totam distinctio quod saepe alias ipsam? Quis asperiores,
            error doloribus eius accusamus vel!
          </p>
        </div>
        <div class="about-content">
          <div class="icon">
            <img
              src="build/img/icono3.svg"
              alt="about us icon"
              class="filter-green"
            />
          </div>
          <h3>On time</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos a
            similique totam distinctio quod saepe alias ipsam? Quis asperiores,
            error doloribus eius accusamus vel!
          </p>
        </div>
      </div>
    </main>

    <!-- PROPERTIES -->
    <section class="section container">
      <h1>Some of our properties</h1>
      <div class="property-container">
        <!-- PROPERTY 1 -->
        <div class="property">
          <img
            src="build/img/anuncio1.jpg"
            alt="property on sale"
            loading="lazy"
          />
          <div class="property-content">
            <h4>Property 1</h4>
            <p class="description">
              3 bedroom House with wide garden in MinamiAoyama, Minato-ku
            </p>
            <p class="area">
              <i class="fas fa-map-marker-alt"></i>MinamiAoyama, Minato, Tokyo
            </p>
            <ul class="property-icons">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>2</p>
              </li>
              <li>
                <img
                  src="build/img/icono_dormitorio.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  src="build/img/icono_estacionamiento.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>1</p>
              </li>
            </ul>
            <p class="price">JPY245,000,000</p>
            <a href="#" class="button green-btn-block">More details</a>
          </div>
        </div>

        <!-- PROPERTY 2 -->
        <div class="property">
          <img
            src="build/img/anuncio2.jpg"
            alt="property on sale"
            loading="lazy"
          />
          <div class="property-content">
            <h4>Property 1</h4>
            <p class="description">
              3 bedroom House with wide garden in MinamiAoyama, Minato-ku
            </p>
            <p class="area">
              <i class="fas fa-map-marker-alt"></i>MinamiAoyama, Minato, Tokyo
            </p>
            <ul class="property-icons">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>2</p>
              </li>
              <li>
                <img
                  src="build/img/icono_dormitorio.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  src="build/img/icono_estacionamiento.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>1</p>
              </li>
            </ul>
            <p class="price">JPY82,000,000</p>

            <a href="#" class="button green-btn-block">More details</a>
          </div>
        </div>

        <!-- PROPERTY 3 -->
        <div class="property">
          <img
            src="build/img/anuncio3.jpg"
            alt="property on sale"
            loading="lazy"
          />
          <div class="property-content">
            <h4>Property 1</h4>
            <p class="description">
              3 bedroom House with wide garden in MinamiAoyama, Minato-ku
            </p>
            <p class="area">
              <i class="fas fa-map-marker-alt"></i>MinamiAoyama, Minato, Tokyo
            </p>
            <ul class="property-icons">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>2</p>
              </li>
              <li>
                <img
                  src="build/img/icono_dormitorio.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  src="build/img/icono_estacionamiento.svg"
                  alt="icon"
                  loading="lazy"
                  class="icons"
                />
                <p>1</p>
              </li>
            </ul>
            <p class="price">JPY480,000,000</p>
            <a href="#" class="button green-btn-block">More details</a>
          </div>
        </div>
      </div>
      <div class="align-rigth">
        <a href="#" class="black-btn">See all the properties</a>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">
      <div class="section-content">
        <h2>Find the house of your dreams</h2>
        <p>Fill up the contact form and we will contact you very soon</p>
        <a href="" class="button green-btn-inline">Contact us</a>
      </div>
    </section>

    <div class="section container section-below">
      <!-- BLOG SECTION -->
      <section class="blog">
        <h2>Our blog</h2>

        <!-- BLOG 1 -->
        <article class="blog-entry">
          <div class="img">
            <picture>
              <source srcset="build/img/blog2.webp" type="img/webp" />
              <source srcset="build/img/blog2.jpg" type="img/jpg" />
              <img src="build/img/blog2.jpg" alt="blog image" loading="lazy" />
            </picture>
          </div>
          <div class="entry-text">
            <a href="#"><h4>A guide for interior plants</h4></a>
            <p class="date posted">Posted on <span>05/03/2021</span></p>
            <p>Have a look at some of the best plants for interior.</p>
          </div>
        </article>

        <!-- BLOG 2 -->
        <article class="blog-entry">
          <div class="img">
            <picture>
              <source srcset="build/img/blog1.webp" type="img/webp" />
              <source srcset="build/img/blog1.jpg" type="img/jpg" />
              <img src="build/img/blog1.jpg" alt="blog image" loading="lazy" />
            </picture>
          </div>
          <div class="entry-text">
            <a href="#"><h4>DYI projects</h4></a>
            <p class="date posted">Posted on <span>05/03/2021</span></p>
            <p>Some interesting DYI projects for your home</p>
          </div>
        </article>
      </section>

      <!-- REVIEWS SECTION -->
      <section class="reviews">
        <h2>Reviews</h2>
        <div class="review-content">
          <blockquote>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi
            accusamus eius enim officiis.
          </blockquote>
          <p>- Maria C.</p>
        </div>
      </section>
    </div>

<?php 
include "includes/templates/footer.php"; 
?>

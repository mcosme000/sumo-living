<?php include "includes/templates/header.php"; ?>

    <!-- MAIN CONTAINER -->
    <main class="container section">
      <h1>Our company</h1>
      <div class="us-content">
        <div class="img">
          <picture>
            <source
              src="build/img/nosotros.webp"
              alt="about us"
              type="imt/webp"
            />
            <source
              src="build/img/nosotros.jpg"
              alt="about us"
              type="img/jpg"
            />
            <img src="/build/img/nosotros.jpg" alt="about us" loading="lazy" />
          </picture>
        </div>
        <div class="us-text">
          <blockquote>25 years of experience</blockquote>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut
            voluptatum officia fuga repudiandae explicabo autem impedit
            necessitatibus odio ipsam. Nam perferendis aliquam iure inventore
            in, fugiat delectus deleniti aspernatur molestias.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
            quaerat necessitatibus, iste rem molestiae sapiente, harum aperiam
            eligendi.
          </p>
        </div>
      </div>
    </main>

    <section class="container section">
      <h1>More about us</h1>
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
    </section>

<?php 
include "includes/templates/footer.php"; 
?>

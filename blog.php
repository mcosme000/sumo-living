<?php include "includes/templates/header.php"; ?>

    <main class="container section content-center">
      <h1>Blog</h1>
      <section class="blog">
        <!-- BLOG 1 -->
        <article class="blog-entry">
          <div class="img">
            <picture>
              <source src="build/img/blog2.webp" type="img/webp" />
              <source src="build/img/blog2.jpg" type="img/jpg" />
              <img src="build/img/blog2.jpg" alt="blog image" loading="lazy" />
            </picture>
          </div>
          <div class="entry-text">
            <a href="blogentry.php"><h4>Build a pool the easy way</h4></a>
            <p class="date posted">Posted on <span>05/03/2021</span></p>
            <p>Some interesting DYI projects for your home</p>
          </div>
        </article>

        <!-- BLOG 2 -->
        <article class="blog-entry">
          <div class="img">
            <picture>
              <source src="build/img/blog1.webp" type="img/webp" />
              <source src="build/img/blog1.jpg" type="img/jpg" />
              <img src="build/img/blog1.jpg" alt="blog image" loading="lazy" />
            </picture>
          </div>
          <div class="entry-text">
            <a href="blogentry.php"><h4>DYI projects</h4></a>
            <p class="date posted">Posted on <span>05/03/2021</span></p>
            <p>Some interesting DYI projects for your home</p>
          </div>
        </article>

        <!-- BLOG 3 -->
        <article class="blog-entry">
          <div class="img">
            <picture>
              <source src="build/img/blog3.webp" type="img/webp" />
              <source src="build/img/blog3.jpg" type="img/jpg" />
              <img src="build/img/blog3.jpg" alt="blog image" loading="lazy" />
            </picture>
          </div>
          <div class="entry-text">
            <a href="blogentry.php"><h4>A guide for interior plants</h4></a>
            <p class="date posted">Posted on <span>05/03/2021</span></p>
            <p>Some interesting DYI projects for your home</p>
          </div>
        </article>

        <!-- BLOG 4 -->
        <article class="blog-entry">
          <div class="img">
            <picture>
              <source src="build/img/blog4.webp" type="img/webp" />
              <source src="build/img/blog4.jpg" type="img/jpg" />
              <img src="build/img/blog4.jpg" alt="blog image" loading="lazy" />
            </picture>
          </div>
          <div class="entry-text">
            <a href="blogentry.php"
              ><h4>Some ideas for dormitories decoration</h4></a
            >
            <p class="date posted">Posted on <span>05/03/2021</span></p>
            <p>Some interesting DYI projects for your home</p>
          </div>
        </article>
      </section>
    </main>

 <?php 
include "includes/templates/footer.php"; 
?>

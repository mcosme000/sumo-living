<?php include "includes/templates/header.php"; ?>

    <main class="container section content-center">
      <h1>Kugahara 4-chome House</h1>
      <div class="top">
        <p class="area">
          <i class="fas fa-map-marker-alt"></i>MinamiAoyama, Minato, Tokyo
        </p>
        <p class="price price-green">JPY243,000,000</p>
      </div>

      <!-- PICTURE -->
      <picture>
        <source src="build/img/anuncio1.webp" type="img/webp" />
        <source src="build/img/anuncio1.jpg" type="img/jpg" />
        <img src="build/img/anuncio1.jpg" alt="house on sale" loading="lazy" />
      </picture>

      <!-- HOUSE CONTENT -->
      <div class="house-details">
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

        <!-- PROPERTY DESCRIPTION -->
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut incidunt
          eaque tenetur, eius omnis laboriosam reiciendis sequi nemo recusandae
          assumenda quis asperiores illo nihil accusamus eligendi maiores rerum
          quidem deleniti.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
          numquam sit recusandae consequuntur itaque earum velit libero, id,
          ullam explicabo harum quod blanditiis error placeat modi? Inventore
          quam sequi laboriosam?
        </p>

        <!-- PROPERTY DETAILS -->
        <div class="details">
          <div class="table-container">
            <table>
              <tbody>
                <tr>
                  <th>Price</th>
                  <td class="price price-green">JPY243,000,000</td>
                </tr>
                <tr>
                  <th>Available from</th>
                  <td>Please inquire</td>
                </tr>
                <tr>
                  <th>Type</th>
                  <td>Mansion</td>
                </tr>
                <tr>
                  <th>Size</th>
                  <td>126.27 m²</td>
                </tr>
                <tr>
                  <th>Year</th>
                  <td>2018</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table-container">
            <table>
              <tbody>
                <tr>
                  <th>House address</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Closest stations</th>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="location"></div>
      </div>
    </main>

<?php 
include "includes/templates/footer.php"; 
?>

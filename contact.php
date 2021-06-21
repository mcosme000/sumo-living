<?php include "includes/templates/header.php"; ?>

    <main class="container section">
      <h1>Contact page</h1>

      <picture>
        <source src="build/img/destacada3.webp" type="img/webp" />
        <source src="build/img/destacada3.jpg" type="img/jpeg" />
        <img
          src="build/img/destacada3.jpg"
          alt="contact image"
          loading="lazy"
        />
      </picture>

      <h2>Form</h2>

      <form action="" class="form">
        <fieldset>
          <!-- sirven para agrupar grupos similares -->
          <!-- important to select the type of input to create a better UX -->
          <legend>Personal information</legend>
          <label for="name">Name</label>
          <input type="text" placeholder="Your name" id="name" />

          <label for="email">E-mail</label>
          <input type="email" placeholder="Your email" id="email" />

          <label for="tlf">Phone number</label>
          <input type="tel" placeholder="Your phone number" id="tlf" />

          <label for="message">Your message</label>
          <textarea name="" id="message" cols="10"></textarea>
        </fieldset>

        <fieldset>
          <legend>Property information</legend>

          <label for="options">Rent / Buy</label>
          <select id="options">
            <option value="" disabled selected>--Choose an option--</option>
            <option value="rent">Rent</option>
            <option value="buy">Buy</option>
          </select>

          <label for="budget">Available budget</label>
          <input type="number" id="budget" placeholder="budget" />
        </fieldset>

        <fieldset>
          <legend>Contact</legend>

          <p>Contact preference</p>
          <!-- To be able to use the radio buttons, I need a same name attribute. 
              Also when we work with PHP, that "name" will allow us to read all the information. 
              We need THE SAME name and DIFFERENT values
          -->
          <div class="contact-preference">
            <label for="contact-tlf">Telephone</label>
            <input
              type="radio"
              name="contact-preference"
              value="tlf"
              id="contact-tlf"
            />
            <label for="contact-email">Email</label>
            <input
              type="radio"
              name="contact-preference"
              value="email"
              id="contact-email"
            />
          </div>

          <p>If phone, please choose the date and time</p>
          <label for="date">Date</label>
          <input type="date" id="date" />

          <label for="time">Time</label>
          <input type="time" id="time" min="09:00" max="20:00" />
          <!-- I can specifiy the available contact hours with min & max -->
        </fieldset>

        <input type="submit" value="Send" class="green-btn-inline" />
      </form>
    </main>

<?php 
include "includes/templates/footer.php"; 
?>

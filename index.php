<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- first page -->
  <div id="home" class="First_sec">
    <div class="navbar">
      <div class="logo"><a href="#home">Main logo</a></div>
      <ul class="links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#ourMenu">Our Menu</a></li>
        <li><a href="#contacts">Contacts</a></li>
      </ul>
      <a href="reservation.php" class="action-btn">Reservation</a>
      <div class="toggle-btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>

    <div class="dropdown-menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#ourMenu">Our Menu</a></li>
      <li><a href="#contacts">Contacts</a></li>
      <li><a href="reservation.php" class="action-btn">Reservation</a></li>
    </div>

    <div class="f-m-section">
      <div class="section-1">
        <h1>Time To Discover <span style="color: #e47624">Our</span></h1>
        <h3>Coffee House</h3>
        <h2>Start Your Day With Best Coffee . . .</h2>
        <h2>Elite Coffee Brands</h2>
        <h3><span id="element"></span></h3>
      </div>
      <div class="section-2">
        <img src="img/fpageside.jpg" alt="" />
      </div>
    </div>

  </div>
  <!-- second page -->
  <div id="about" class="Second_sec">
    <div class="left">
      <video autoplay loop muted poster="" src="video/2ndvi.mp4"></video>
    </div>
    <div class="right">
      <em>Barista.co</em>
      <h1>Cafe KL</h1>
      <p>The café had been in the town for as long as anyone could remember, and it had become a beloved institution
        among the locals.</p>
      <p>
        The café was run by a friendly and hospitable couple, Mr. and Mrs. Johnson. Barista Cafe is free Bootstrap 5
        HTML layout provided by
      </p>
      <br>

      <em>Barista.co</em>
      <h1>Cafe KL</h1>
      <p>The café had been in the town for as long as anyone could remember, and it had become a beloved institution
        among the locals.</p>
      <p>
        The café was run by a friendly and hospitable couple, Mr. and Mrs. Johnson. Barista Cafe is free Bootstrap 5
        HTML layout provided by
      </p>
    </div>
  </div>
  <div id="ourMenu" class="about">
    <div class="con1">
      <em>Creative Baristas</em>
      <h1>Meet People</h1>
    </div>
    <div class="con2">
      <div class="owners">
        <img src="img/ceo.jpg" alt="">
      </div>
      <div class="owners">
        <img src="img/manger.jpg" alt="">
      </div>
      <div class="owners">
        <img src="img/senior.jpg" alt="">
      </div>
      <div class="owners">
        <img src="img/barista.jpg" alt="">
      </div>
    </div>
  </div>
<!-- thidsec -->

  <div class="third_sec">
    <div class="menu-box">
      <div class="mleft">
        <div class="mtext">
          <em>Delicious Menu</em>
          <h2>Breakfast</h2>
        </div>
        <div class="products">
          <span>
            Pancakes
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Fresh brewed coffee and steamed milk</h6>
        </div>
        <div class="products">
          <span>
            Toasted Waffle
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Brewed coffee and steamed milk</h6>
        </div>
        <div class="products">
          <span>
            Fried Chips
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Rich Milk and Foam</h6>
        </div>
        <div class="products">
          <span>
            Pancakes
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Fresh brewed coffee and steamed milk</h6>
        </div>
        <div class="products">
          <span>
            Banana Cakes
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Rich Milk and Foam</h6>
        </div>
      </div>
      <div class="mright">
        <div class="mtext">
          <em>Delicious Menu</em>
          <h2>Breakfast</h2>
        </div>
        <div class="products">
          <span>
            Pancakes
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Fresh brewed coffee and steamed milk</h6>
        </div>
        <div class="products">
          <span>
            Toasted Waffle
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Brewed coffee and steamed milk</h6>
        </div>
        <div class="products">
          <span>
            Fried Chips
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Rich Milk and Foam</h6>
        </div>
        <div class="products">
          <span>
            Pancakes
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Fresh brewed coffee and steamed milk</h6>
        </div>
        <div class="products">
          <span>
            Banana Cakes
          </span>
          <span>
            $12.00
          </span>
          <hr>
          <h6>Rich Milk and Foam</h6>
        </div>
      </div>
    </div>
  </div>

<!-- fourthsec -->
<div id="contacts" class="forth_sec">
        <div class="left_cts">
            <form action="contact.php" method="POST">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter your email" style="width: 500px;" required><br>
                <p>Through your Question</p>
                <input type="text" name="question" placeholder="Ask any question" style="width: 500px;" required><br>
                <p>Other query or review</p>
                <textarea name="review" cols="50" rows="6" style="width: 500px;" required></textarea><br>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="right_cts">
            <h2>Where to find us?</h2>
            <p>Varendra University, Rajshahi</p>
            <h2>Contacts</h2>
            <p>Email: asdfgh123@gmail.com</p>
            <p>Phone: 1234567890</p>
            <h2>Opening hours</h2>
            <p>Sunday to Friday 8:00 AM to 8:00 PM</p>
            <h2>Closed on Saturday</h2>
        </div>
    </div>



  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    var typed = new Typed("#element", {
      strings: ["Latte ..", "White Coffee ..", "Chocolate Milk .... ", "Dark Chocolate.... "],
      typeSpeed: 50,
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>

</html>
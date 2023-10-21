<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
  <title>A Better Weight, Inc</title>
</head>

<body>
  <header>
  <div class="header-container">
      <nav class="navbar">
        <a href="#"><img src="{{ asset('assets/logo.png') }}" alt="A Better Weight, Inc logo" class="header-logo"></a>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="#" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Book Online</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Weight Loss Programs</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Real Patient Stories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Locations</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Shop</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Subscription</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
    <div class="header__yellow-bg"></div>
  </header>

  <main id="main" class="main">
    @yield('content')
  </main>

  <footer class="footer">
  <div class="circle13"></div>
    <div class="footer-container">
      <div class="footer__section">
        <div>
          <img src="./assets/logo.png" alt="A Better Weight, Inc logo" class="footer__logo">
          <div>
            <p class="footer__description">A Better Weigh Medical Weight Loss Center offers a weight loss program
              dedicated to helping you achieve
              long term weight loss success with the use of FDA approved medication.</p>
            <div class="footer__contact-links">
              <div class="footer__contact-link">
                <img src="./assets/icons/location-icon.svg" alt="location icon">
                <a href="https://maps.app.goo.gl/fqo7535iugar6Trc9" target="_blank"><b>Head Office:</b> 1931 W 95th
                  Streeet Chicago IL,
                  60643</a>
              </div>
              <div class="footer__contact-link">
                <img src="./assets/icons/phone-icon.svg" alt="phone icon">
                <a href="tel:7734964222"><b>Phone:</b> 773-496-4222</a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__section-links">
          <div>
            <h3 class="footer__links-title">About</h3>
            <ul class="footer__links">
              <li><a href="#">About us</a></li>
              <li><a href="#">Book Online</a></li>
              <li><a href="#">Locations</a></li>
              <li><a href="#">Real Patient Stories</a></li>
              <li><a href="#">Weight Loss Programs</a></li>
            </ul>
          </div>
          <div>
            <h3 class="footer__links-title">More Links</h3>
            <ul class="footer__links">
              <li><a href="#">Franchise Opportunities</a></li>
              <li><a href="#">Career Opportunities</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Return Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__social-media">
        <div class="footer__social-media-container">
          <a href="#"><img src="./assets/icons/instagram-icon.svg" alt="instagram icon"
              class="footer__social-media-icon"></a>
          <a href="#"><img src="./assets/icons/twitter-icon.svg" alt="twitter icon"
              class="footer__social-media-icon"></a>
          <a href="#"><img src="./assets/icons/facebook-icon.svg" alt="facebook icon"
              class="footer__social-media-icon"></a>
        </div>
        <span>
          Copyright by A Better Weigh Inc. All rights reserved.</span>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

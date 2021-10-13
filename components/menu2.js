class Menu extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="Abraham Rivera Rojas" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Abraham Rivera</a></h1>
        <h5 class="text-light text-center"><a href="index.html">Cod3F1re</a></h5>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/codefire/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.youtube.com/cod3f1re" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="https://www.linkedin.com/in/abraham-rivera-rojas-86323b181/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://github.com/cod3f1re/" class="github"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <!-- nav-menu -->
      <nav class="nav-menu">
        <ul>
          <li><a href="index.html#hero"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
          <li><a href="index.html#acercade"><i class="bx bx-user"></i> <span>Acerca de</span></a></li>
          <li><a href="index.html#resumen"><i class="bx bx-file-blank"></i> <span>Resumen</span></a></li>
          <li><a href="index.html#portafolio"><i class="bx bx-book-content"></i> Portafolio</a></li>
          <li><a href="index.html#contacto"><i class="bx bx-envelope"></i> Contacto</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>
  <!-- End Header -->
        `
    }
}
window.customElements.define('menu-pagina', Menu);
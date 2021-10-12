class Footer extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Cod3f1re</span></strong>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->
        `
    }
}
window.customElements.define('pie-pagina', Footer);
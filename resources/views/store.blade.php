@include ('navbar')
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Daftar Produk</span>
                                <span class="section-heading-lower">Toko Cipta Mandiri Sibolga</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                
                             @foreach  ($info as $eventidx )
                                <li class="list-unstyled-item list-hours-item d-flex">
                                {{$eventidx -> nama}}
                                    <span class="ms-auto">{{$eventidx -> jabatan}}</span>
                                </li>
                                @endforeach
                                
                            </ul>
                            <p class="mb-0">
                                <small><em>Instagram</em></small>
                                <br />
                                <a href="https://www.instagram.com/depagsos.itdel/">Klik disini</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy;    <Em>Edgar Simatupang</Em></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

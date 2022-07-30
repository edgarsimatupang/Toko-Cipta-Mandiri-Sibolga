@include ('navbar')
        <section class="page-section">
            <div class="container">
            @foreach  ($info as $eventidx )
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">{{$eventidx -> judul}}</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{url('images/event/'.$eventidx -> gambar)}}" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">{{$eventidx -> keterangan}}</p></div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
       
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Edgar Simatupang</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

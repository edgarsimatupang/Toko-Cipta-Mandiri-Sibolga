@include ('navbar')
        <section class="page-section clearfix">
            <div class="container">
            @foreach  ($info as $eventidx )
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{url('images/index/'.$eventidx -> gambar)}}" alt="..." />
                    
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-lower">{{$eventidx -> judul}}</span>
                        </h2>
                        <p class="mb-3">{{$eventidx -> keterangan}}</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="/products">Visit Us Today!</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Department of religion and social</span>
                                <span class="section-heading-lower">Del Institute of Technology</span>
                            </h2>
                           </div>
                    </div>
                </div>
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

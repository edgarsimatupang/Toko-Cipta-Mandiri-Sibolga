@include ('admin.sidebar')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola Data</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">      
                            </nav>
                        </div>
                    </div>
                       
                </div>
            </div>
            <div class="container-fluid">
      
      
                <!--    -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  </h4>
                                <a class="btn btn-success btn-sm" href="/tambahbagian">
                              <i class="fas fa-plus">
                              </i>
                              Tambah
                          </a><br>
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                        class="table table-striped table-bordered display no-wrap" style="width:100%" >
                                        <thead>
                                            <tr>
                                                <th style='width:50px'>Nama Produk</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach  ($bagian as $indexx )
                                            <tr>
                                                <td>{{$indexx -> nama}}</td>
                                                <td>Rp.{{$indexx -> jabatan}}</td>
                                                <td>
                            <a href="/editbagian/edit/{{$indexx->id}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                          <a class="btn btn-danger btn-sm" href="bagianadmin/delete/{{$indexx->id}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                                                </td>
                                            </tr>@endforeach
                                            
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Edgar Simatupang. Designed and Developed by <a
                    href="">Edgar Simatupang </a>.
            </footer>
            <!-- ============================================================== -->
        </div>
    </div>
 
</body>

</html>
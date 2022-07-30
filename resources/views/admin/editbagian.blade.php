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
                
                
<form role="form" action="{{route('bagian.update',$update->id)}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="nama" name="nama" class="form-control" id="nama" value="{{$update->nama}}">
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input type="jabatan" name="jabatan" class="form-control" id="jabatan"  value="{{$update->jabatan}}">
  </div>


  <button type="submit"  class="btn btn-primary">Submit</button>
  <a href="{{url('admin.bagianadmin ')}}" class="btn btn-primary">Back</a>
</form>
            </div>
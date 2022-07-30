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
                
                
<form role="form" action="{{route('index.update',$update->id)}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul:</label>
    <input type="judul" name="judul" class="form-control" id="judul" value="{{$update->judul}}">
  </div>
  <div class="form-group">
    <label for="keterangan">Keterangan:</label>
    <input type="keterangan" name="keterangan" class="form-control" id="keterangan"  value="{{$update->keterangan}}">
  </div>
  <div class="form-group">
    <label for="pwd">Gambar:</label>
    <input class="form-control" id="formFileMultiple"  name="gambar" type="file" id="formFileMultiple" value="{{$update->gambar}}">
  </div>


  
  <button type="submit"  class="btn btn-primary">Submit</button>
  <a href="{{url('admin.indexadmin ')}}" class="btn btn-primary">Back</a>
</form>
            </div>
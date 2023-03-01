<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.head')
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('Template.navbar')
      <div class="main-sidebar sidebar-style-2">
        @include('Template.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Surat Masuk</h1>
          </div>
           <div class="card">
                  <div class="card-header">
                    <h4>Tambah Data Surat Masuk</h4>
                  </div>
                  <div class="card-body">
                    <form action="/updatesuratkeluar/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputAddress">Nomor Surat</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="masukkan nomor surat..." name="nomorsurat" value="{{ $data->nomorsurat }}" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress">Lampiran</label>
                              <input type="number" class="form-control" id="inputAddress" placeholder="masukkan lampiran..." name="lampiran" value="{{ $data->lampiran }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputAddress">perihal</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="masukkan perihal.." name="perihal" value="{{ $data->perihal }}" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">kepada</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="masukkan kepada.." name="kepada" value="{{ $data->kepada }}" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputAddress">di</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="masukkan di.." name="di" value="{{ $data->di }}" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputAddress">Tanggal Surat</label>
                          <input type="date" class="form-control" id="inputAddress" placeholder="masukkan tanggal surat..." name="tanggalsurat" value="{{ $data->tanggalsurat }}" required>
                            </div>
                          </div>
                        <div class="form-group">
                          <label for="editor">Isi</label>
                          <textarea class="form-control" id="editor" name="isi_surat" >{{ old('isi_surat') ? old('konten') :$data->isi_surat }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">tanda tangan 1</label>
                                <select name="ttd_1" id="ttd_1" class="form-control" value="{{ $data->ttd_1 }}">
                                    <option value="BasoSamriadi">Baso Samriadi</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">tanda tangan 2</label>
                                <select name="ttd_2" id="ttd_1" class="form-control" value="{{ $data->ttd_2 }}">
                                    <option value="AdeRyanAlqadri">Ade Ryan Alqadri</option>
                                    <option value="SusiSusanti">Susi Susanti</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
                </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Created By <a href="https://www.instagram.com/ryanalqadri_/">Ade ryan alqadri</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src={{ asset("stisla-master/assets/js/stisla.js") }}></script>

  @section('ckeditor')
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
  @endsection

  @yield('ckeditor')


  <!-- JS Libraies -->
  <script src={{ asset("stisla-master/node_modules/simpleweather/jquery.simpleWeather.min.js") }}></script>
  <script src={{ asset("stisla-master/node_modules/chart.js/dist/Chart.min.js") }}></script>
  <script src={{ asset("stisla-master/node_modules/jqvmap/dist/jquery.vmap.min.js") }}></script>
  <script src={{ asset("stisla-master/node_modules/jqvmap/dist/maps/jquery.vmap.world.js") }}></script>
  <script src={{ asset("stisla-master/node_modules/summernote/dist/summernote-bs4.js") }}></script>
  <script src={{ asset("stisla-master/node_modules/chocolat/dist/js/jquery.chocolat.min.js") }}></script>

  <!-- Template JS File -->
  <script src={{ asset("stisla-master/assets/js/scripts.js") }}></script>
  <script src={{ asset("stisla-master/assets/js/custom.js") }}></script>

  <!-- Page Specific JS File -->
  <script src={{ asset("stisla-master/assets/js/page/index-0.js") }}></script>
</body>
</html>

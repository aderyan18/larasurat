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
                    <form action="/updatesuratmasuk/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="inputAddress">Nomor Surat</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="masukkan nomor surat..." name="nomor_surat" value="{{ $data->nomor_surat }}" required>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Perihal</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="masukkan perihal surat..." name="perihal" value="{{ $data->perihal }}" required>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal_kegiatan" value="{{ $data->tanggal_kegiatan }}" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputAddress">Tempat Kegiatan</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="masukkan tempat kegiatan..." name="tempat_kegiatan" value="{{ $data->tempat_kegiatan }}" required>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputAddress">Pengirim</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="masukkan pengirim surat..." name="pengirim" value="{{ $data->pengirim }}" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">File</label>
                            <input type="file" class="form-control" name="file" required>
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

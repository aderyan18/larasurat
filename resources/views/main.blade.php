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
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    @php
                    $admin = DB::table('users')->count();
                    echo $admin;
                    @endphp
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Surat Masuk</h4>
                  </div>
                  <div class="card-body">
                    @php
                    $surat = DB::table('suratmasuk')->count();
                    echo $surat;
                    @endphp
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Surat Keluar</h4>
                  </div>
                  <div class="card-body">
                    1
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Buat Surat</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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

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
            <h1>Data User</h1>
          </div>
            <div class="card card-body">
                <div class="section-title mt-0">Light</div>
                    <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>1</td>
                              <td>Irwansyah Saputra</td>
                              <td>2017-01-09</td>
                              <td>
                              <a href="#" class="btn btn-warning">Edit</a>
                              <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
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
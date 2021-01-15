<?= $this->extend('admin') ?>
<?= $this->section('content') ?> 
<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="jumbotron bg-light text-white-50">
      <div class="container text-center">
        <!-- <style>
          body{
            background-image: url(banner.png);
          }
        </style> -->
        <h1>Selamat Datang di E-Auction</h1>
          </br></br>
          
        <div class="container card-center" style="width: 40rem;">
            <img src="/assets/banner.png" class="card-img-top" alt="...">
          </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="nav-icon fas fa-th"></i>
                Category
              </h3>
            </div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="row row-cols-3 row-cols-md-8">
              <div class="col">
                <div class="card h-100">
                  <img src="<?php echo base_url(); ?>/assets/img/gucci.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a class="btn btn-secondary" href="http://localhost:8080/etalase" role="button">Sweater</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?php echo base_url(); ?>/assets/img/prada.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a class="btn btn-secondary" href="http://localhost:8080/etalase" role="button">Jacket</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?php echo base_url(); ?>/assets/img/shirtmanfendi.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a class="btn btn-secondary" href="http://localhost:8080/etalase" role="button">Shirt</a>
                  </div>
                </div>
              </div>
             
                  
            </div>
            </div>
            <!-- /.card -->
            
        </div>
    
        <div class="row">
            <!-- TO DO List -->
            <section class="col-lg-6 connectedSortable">
            
              
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- </div> -->

<?= $this->endSection() ?> 
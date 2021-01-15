<?= $this->extend('admin/index'); ?>
<?= $this->section('content'); ?>

<div class="wrapper ">
  <div class="main-panel">
    <div class="content">
      <div class="row">
      
      
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">USER SISWA</p>
                      <p class="card-title"><?php echo $matkul ; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-badge text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">USER DOSEN</p>
                      <p class="card-title"><?php echo $matkull ; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">TOTAL USERS</p>
                      <p class="card-title"><?php echo $matkulll ; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total MataKuliah</p>
                      <p class="card-title"><?php echo $matkullll ; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Daftar Mata Kuliah</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nama Mata Kuliah
                      </th>
                      <th>
                        Nama Dosen
                      </th>
                      <th>
                        Kelas
                      </th>
                      <th>
                        Kategori
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Data Warehouse
                        </td>
                        <td>
                          Tristiyanto
                        </td>
                        <td>
                          A dan B
                        </td>
                        <td>
                          Teori
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Manajemen Pengetahuan
                        </td>
                        <td>
                          Dewi Asiah Shofiana
                        </td>
                        <td>
                          Pilihan
                        </td>
                        <td>
                          Teori
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Machine Learning
                        </td>
                        <td>
                          Akmal Junaidi
                        </td>
                        <td>
                          B
                        </td>
                        <td>
                          Teori
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Web Lanjut
                        </td>
                        <td>
                          Rizky Prabowo
                        </td>
                        <td>
                          A dan B
                        </td>
                        <td>
                          Teori
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       
    
<?= $this->endSection(); ?>
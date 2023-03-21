<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori</h1>
            <div class="row">
                <div class="col-md-6">
                <div class="card mb-4">

<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Kategori
</div>
<div class="card-body">

  
    <!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #2c79d4;">
    Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
        <form action="<?= base_url('Dashboard_admin/tambah_kategori')?>" method="post">
            <input  type="text" class="form form-control" name="kategori" required placeholder="kategori">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<table class="table table-bordered">
        <thead>
            <tr>
              <th>No</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no =1;
            foreach ($kategori as $k) : ?>
                <tr>
                <td><?= $no ?></td>
                    <td><?= $k['kategori'] ?></td>
                    
                   
                   

                </tr>
            <?php
            $no++;
             endforeach ?>
        </tbody>
    </table>
</div>
</div>
                </div>
                <div class="col-md-6">
                <div class="card mb-4">

<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Sub Kategori
</div>
<div class="card-body">
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#tambahsub" style="background-color: #2c79d4;">
    Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="tambahsub" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Dashboard_admin/tambah_subkategori')?>" method="post">
            <input type="text" class="form form-control" name="subkategori" required placeholder="subkategori">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
              

                <th>Nama Sub Kategori</th>
              
            

            </tr>
        </thead>
        <tbody>
            <?php 
            $no =1;
            foreach ($sub_kategori as $k) : ?>
                <tr>
                <td><?= $no ?></td>
                    <td><?= $k['sub_kategori'] ?></td>
                    
                   
                   

                </tr>
            <?php
            $no++;
             endforeach ?>
        </tbody>
    </table>
</div>
</div>
                </div>
            </div>
            
        </div>
    </main>
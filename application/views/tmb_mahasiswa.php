<div class="container mt-3">
  <form class="col-md-6" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama">
      <small class="form-text text-danger"><?= form_error('nama'); ?></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nrp</label>
      <input type="text" class="form-control" id="nrp" name="nrp">
      <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" class="form-control" id="email" name="email">
      <small class="form-text text-danger"><?= form_error('email'); ?></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jurusan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
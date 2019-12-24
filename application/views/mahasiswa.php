
<div class="container mt-3">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

	<!-- <a href="<?= base_url('Mahasiswa/tambah'); ?>" class="btn btn-primary">Tambah Data Mahasiswa</a> -->
	<button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal">
		Tambah data mahasiswa
	</button>

	<table class="table mt-3">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Nrp</th>
				<th scope="col">Email</th>
				<th scope="col">Jurusan</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $count = 1; ?>
			<?php foreach( $mahasiswa as $mhs ) : ?>
			<tr>
				<td><?= $count; $count++; ?></td>
				<td><?= $mhs['nama']; ?></td>
				<td><?= $mhs['nrp']; ?></td>
				<td><?= $mhs['email']; ?></td>
				<td><?= $mhs['jurusan']; ?></td>
				<td>
					<a href="<?= base_url('mahasiswa/edit/'); ?><?= $mhs['id']; ?>" data-id="<?= $mhs['id']; ?>" class="btn btn-warning tombolUbah" data-toggle="modal" data-target="#formModal">Edit</a>
					<a href="<?= base_url('mahasiswa/hapus/'); ?><?= $mhs['id']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
				</td>
			</tr>
			<?php endforeach; ?> 
		</tbody>
	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah data mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="<?= base_url('Mahasiswa/tambah'); ?>">
      		<input type="hidden" id="id" name="id">
      		<div class="form-group">
      			<label for="exampleInputEmail1">Nama</label>
      			<input type="text" class="form-control" id="nama" name="nama" required>
      		</div>
      		<div class="form-group">
      			<label for="exampleInputPassword1">Nrp</label>
      			<input type="text" class="form-control" id="nrp" name="nrp" required>
      		</div>
      		<div class="form-group">
      			<label for="exampleInputEmail1">Email</label>
      			<input type="text" class="form-control" id="email" name="email" required>
      		</div>
      		<div class="form-group">
      			<label for="exampleInputPassword1">Jurusan</label>
      			<input type="text" class="form-control" id="jurusan" name="jurusan" required>
      		</div>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      			<button type="submit" class="btn btn-primary">Tambah Data</button>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>





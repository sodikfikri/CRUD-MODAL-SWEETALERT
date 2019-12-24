<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/myscript.js'); ?>"></script>

	<script type="text/javascript">
		$(function () {
			$('.tombolTambah').on('click', function () {

				$('#formModalLabel').html('Tambah data mahasiswa');
				$('.modal-footer button[type=submit]').html('Tambah data');

			})

			$('.tombolUbah').on('click', function () {

				$('#formModalLabel').html('Ubah data mahasiswa');
				$('.modal-footer button[type=submit]').html('Ubah data');
				$('.modal-body form').attr('action', '<?= base_url('Mahasiswa/edit'); ?>');

				const id = $(this).data('id');
				// console.log(id);

				$.ajax({

					url: 'http://localhost/test-crud/Mahasiswa/getdata/'+id,
					// data: {id : id},
					dataType: 'json',
					type: 'get',
					
					success: function(data) {
						// console.log(data);
						$('#nama').val(data.nama);
						$('#nrp').val(data.nrp);
						$('#email').val(data.email);
						$('#jurusan').val(data.jurusan);
						$('#id').val(data.id);
					}

				});

			})


		});
	</script>

</body>
</html>
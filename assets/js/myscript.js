const flashData = $('.flash-data').data('flashdata');
if (flashData)
{
	Swal.fire({
		title: 'Data',
		text: 'Berhasil ' + flashData,
		icon: 'success'
	});
}

//tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href')
	Swal.fire({
		title: 'Apakah Anda Yakin',
  		text: "Data Ini Akan Dihapus?",
  		icon: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Ya, Hapus Data!'
		}).then((result) => {
  			if (result.isConfirmed) {
  				document.location.href = href;	
  			}
	})
});
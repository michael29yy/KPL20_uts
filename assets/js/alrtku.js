const flashData = $('.flash-data').data('flashdata');

if (flashData){
	Swal.fire({
		title: "Data berhasil " + flashData + '!!',
		text: "Selamat Bekerja",
		icon: "success"
	});
}
// const flashData = $('.flash-data').data('flashdata');

// if (flashData) {
// 	Swal.fire({
// 		title: 'Customer ',
// 		text: 'has been ' + flashData,
// 		icon: 'success'
// 	});
// }

const flas = $('.flash_data').data('flashdata');
if (flas) {
	Swal.fire({
		title: 'Customer',
		text: 'has been ' + flas,
		icon: 'success'
	});
}

// const flash = $('.flash_Data').data('flashdata');
// if (flash) {
// 	Swal.fire({
// 		title: 'Access',
// 		text: 'is ' + flash,
// 		icon: 'success'
// 	});
// }

// const fls = $('.flas-data').data('flashdata');
// if (fls) {
// 	Swal.fire({
// 		title: 'Role',
// 		text: 'has been ' + fls,
// 		icon: 'success'
// 	});
// }

// const flashdata = $('.flash-Data').data('flashdata');
// if (flashdata) {
// 	Swal.fire({
// 		title: 'Your profile',
// 		text: 'has been ' + flashdata,
// 		icon: 'success'
// 	});
// }


//! tombol-hapus
$('.tombol-delete').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure Delete this data?',
		text: "Data Customer has been deleted in system",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Delete'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});



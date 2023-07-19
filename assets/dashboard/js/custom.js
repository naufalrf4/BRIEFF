var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
    	damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}

// Select2 & Datatable Script
$(document).ready(function() {
	// Select2
    $(".select2").select2({
        width: '100%'
    });
    // DataTable
    $('#datatable').DataTable();
});

// SweetAlert2
var flash = $('#flash').data('flash');
if (flash) {
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: flash,
	})
}
var flash = $('#flash-error').data('flash');
if (flash) {
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: flash,
	})
}
$(document).on('click', '#btn-hapus', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
$(document).on('click', '#form1', function(e){
    e.preventDefault();
    var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});
$(document).on('click', '#btn-logout', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan keluar dari aplikasi!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, keluar!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
$(document).on('click', '#baca-pesan', function(e){
    e.preventDefault();
    var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Status Pesan Menjadi Terbaca!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Baca!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});
$(document).on('click', '#delete-acc', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan menghapus akun dan keluar dari aplikasi!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, saya yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
$(document).on('click', '#terima-pendaftaran', function(e) {
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pendaftaran akan diterima!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, saya yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});
$(document).on('click', '#tolak-pendaftaran', function(e) {
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pendaftaran akan ditolak!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, saya yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

$(document).on('click', '#gagal', function(e) {
	e.preventDefault();

	Swal.fire({
		title: 'Gagal',
		text: "Anda harus login terlebih dahulu!",
		icon: 'error',
	})
});
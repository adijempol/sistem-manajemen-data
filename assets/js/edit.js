// function modal() {
// 	const button = 

// 	$('.tombolCust').on('click', function () {

// 		$('#newCustomerModal').html("Add New Customer");
// 		$('.modal-footer button[type=submit]').html('Add');
// 		$('.modal-body form')[0];
// 		// $('.modal-body form')[0].reset();
// 		// $('#title').val('');
// 		// $('#menu_id').val('');
// 		// $('#url').val('');
// 		// $('#icon').val('');
// 		//$('#is_active').val('');
// 	});

// 	$('.tampilModalCust').on('click', function () {

// 		$('#newCustomerModal').html("Edit Submenu");
// 		$('.modal-footer button[type=submit]').html('Edit');
// 		$('.modal-body form').attr('action', 'http://localhost/KP-Project/customer/ubahCust/');

// 		const idCustomer = $(this).data('idCustomer');

// 		$.ajax({
// 			url: 'http://localhost/KP-Project/customer/getUbahCust/',
// 			data: {
// 				idCustomer: idCustomer
// 			},
// 			method: 'post',
// 			dataType: 'json',
// 			success: function (data) {
// 				$('#nodeId').val(data.nodeId);
// 				$('#portId').val(data.portId);
// 				$('#vlanId').val(data.vlanId);
// 				$('#provider').val(data.provider);
// 				$('#cidProvider').val(data.cidProvider);
// 				$('#serviceId').val(data.serviceId);
// 				$('#customerName').val(data.customerName);
// 				$('#customerAddress').val(data.customerAddress);
// 				$('#latitude').val(data.latitude);
// 				$('#longitude').val(data.longitude);
// 				$('#bandwidth').val(data.bandwidth);
// 				$('#monthlyCharge').val(data.monthlyCharge);
// 				$('#billStartDate').val(data.billStartDate);
// 				$('#status').val(data.status);
// 				$('#documentRecord').val(data.documentRecord);
// 				$('#idCustomer').val(data.idCustomer);

                    
// 			}
// 		});
// 	});
	
// 	// console.log(tombolCust);
// };


// Controller

// public function getUbah() {
//     $json = file_get_contents('php://input');
//     $data = json_decode($json);
//     // echo $data;
//     echo json_encode($this -> model('Mahasiswa_model') -> getMahasiswaById($data));
//     die();
//     // echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($data));
// }

// public function ubah() {
//     if ($this -> model('Mahasiswa_model') -> ubahDataMahasiswa($_POST) > 0) {
//         Flasher:: setFlash('berhasil', 'diubah', 'success');
//         header('Location: '.BASEURL. '/mahasiswa');
//         exit;
//     } else {
//         Flasher:: setFlash('gagal', 'diubah', 'danger');
//         header('Location: '.BASEURL. '/mahasiswa');
//         exit;
//     }
// }

// // Model
// public function getMahasiswaById($id) {
//     $this -> db -> query('SELECT * FROM '.$this -> table. ' WHERE id=:id');
//     $this -> db -> bind('id', $id);
//     return $this -> db -> single();
// }
// public function ubahDataMahasiswa($data) {
//     $query = "UPDATE mahasiswa SET 
//     nama = : nama,
//         nrp = : nrp,
//             email = : email,
//                 jurusan = : jurusan
//     WHERE id = : id";

//     $this -> db -> query($query);
//     $this -> db -> bind('nama', $data['nama']);
//     $this -> db -> bind('nrp', $data['nrp']);
//     $this -> db -> bind('email', $data['email']);
//     $this -> db -> bind('jurusan', $data['jurusan']);
//     $this -> db -> bind('id', $data['id']);

//     $this -> db -> execute();
//     return $this -> db -> rowCount();
// }

// js


document.addEventListener("DOMContentLoaded", function () {
	const tampilModalUbah = document.querySelector('.tampil');
    console.log(tampilModalUbah);
	// tampilModalUbah.forEach(a => {
          // document.getElementById('modal-bodi form').reset();

     	tampilModalUbah.addEventListener('click', function () {
            console.log('okkk');
          	// e.preventDefault();
          // const judulModal = document.querySelector('#newCustomerModalLabel');
          // judulModal.innerHTML = 'Ubah Data Mahasiswa';


          // const modalFooter = document.querySelector('.modal-footer button[type=submit]');
          // modalFooter.innerHTML = 'Ubah Data';
          // // document.querySelector('.modal-body form').setAttribute('action', 'http://localhost/KP-Project/customer/ubahCust');

          //   // const id = parseInt(a.attributes['data-bs-id'].value);
          // const id = a.attributes['data-id'].value;
          // //   console.log(id);
          //   // const data = { id: id };

          // (async () => {
          //      const result = await fetch('http://localhost/KP-Project/customer/getUbahCust', {
          //           method: 'POST', // or 'PUT'
          //           headers: {
          //           	'Accept': 'application/json',
          //           	'Content-Type': 'application/json'
          //           },
          //           body: JSON.stringify({ id: id, toJSON() { return this.id; } })
          //      });

          //      const content = await result.text();
          //      //  console.log(content);
          //      let jueson = JSON.parse(content);

          //      document.querySelector('#nodeId').value = jueson.nodeId;
          //      document.querySelector('#portId').value = jueson.portId;
          //      document.querySelector('#vlanId').value = jueson.vlanId;
          //      document.querySelector('#provider').value = jueson.provider;
          //      document.querySelector('#cidProvider').value = jueson.cidProvider;
          //      document.querySelector('#serviceId').value = jueson.serviceId;
          //      document.querySelector('#customerName').value = jueson.customerName;
          //      document.querySelector('#customerAddress').value = jueson.customerAddress;
          //      document.querySelector('#latitude').value = jueson.latitude;
          //      document.querySelector('#longitude').value = jueson.longitude;
          //      document.querySelector('#bandwidth').value = jueson.bandwidth;
          //      document.querySelector('#monthlyCharge').value = jueson.monthlyCharge;
          //      document.querySelector('#billStartDate').value = jueson.billStartDate;
          //      document.querySelector('#status').value = jueson.status;
          //      document.querySelector('#documentRecord').value = jueson.documentRecord;
          //      document.querySelector('#idCustomer').value = jueson.idCustomer;
          //      console.log(jueson);
          // })();

     });
});
    // console.log(tampilModalUbah.attributes['data-id'].value);
    // console.log(tampilModalUbah);

// });
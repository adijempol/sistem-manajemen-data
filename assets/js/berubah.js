$(function () {

	$('.tombolCust').on('click', function () {

		$('#newCustomerModalLabel').html("Add New Customer");
		$('.modal-footer button[type=submit]').html('Add');
		$('.modal-body form')[0].reset();
		// $('#title').val('');
		// $('#menu_id').val('');
		// $('#url').val('');
		// $('#icon').val('');
		//$('#is_active').val('');
	});

	$('.tampil').on('click', function () {

		$('#newCustomerModalLabel').html("Edit Data Customer");
		$('.modal-footer button[type=submit]').html('Save');
		$('.modal-body form').attr('action', 'http://localhost/KP-Project/customer/ubahCust');

		// const id = $('.tampil').val('data-id');
		const id = $(this).data('id');
          // console.log(id);

		$.ajax({
			url: 'http://localhost/KP-Project/customer/getUbahCust',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#nodeId').val(data.nodeId);
				$('#portId').val(data.portId);
				$('#vlanId').val(data.vlanId);
				$('#provider').val(data.provider);
				$('#cidProvider').val(data.cidProvider);
				$('#serviceId').val(data.serviceId);
				$('#customerName').val(data.customerName);
				$('#customerAddress').val(data.customerAddress);
				$('#latitude').val(data.latitude);
				$('#longitude').val(data.longitude);
				$('#bandwidth').val(data.bandwidth);
				$('#monthlyCharge').val(data.monthlyCharge);
				$('#billStartDate').val(data.billStartDate);
				$('#status').val(data.status);
				// $('#documentRecord').val(data.documentRecord);
				$('#idCustomer').val(data.idCustomer);
			}
		});
          // console.log($.ajax(success));

	});



});

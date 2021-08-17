<div id="layoutSidenav_content">
     <main>
          <div class="container-fluid px-4 mb-5 mt-5">
               <h3 class="text-decoration-underline fw-bold position-fixed" style="margin-top: -1%; margin-bottom: 5%">NNI Customer List</h3>
               <!-- <hr> -->

               <div class="flash_data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">

               </div>
               <?php if ($this->session->flashdata('flash')) : ?>

               <?php endif; ?>

               <!-- <?= form_error(
                         'Customer',
                         '<div class="alert alert-danger" role="alert">',
                         '</div>'
                    ); ?> -->

               <!-- <?= $this->session->flashdata('message'); ?> -->

               <div class="row" style="margin-bottom: 5%;">
                    <div class="col-md-8">
                         <a class="btn btn-primary tombolCust col-md-3 position-fixed" style="margin-top: 3.4%; width: 15%;" data-bs-toggle="modal" data-bs-target="#newCustomerModal">Add New Customer</a>
                    </div>
                    <div class="col-md-4">
                         <form action=" <?= base_url('customer'); ?>" method="POST">
                              <div class="input-group mb-3 position-fixed" style="margin-top: 3.4%; width: 20%;">
                                   <input type=" text" class="form-control" placeholder="Search Customer" autocomplete="off" autofocus name="keyword">
                                   <button class="btn btn-primary" type="submit" name="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                              </div>
                         </form>
                    </div>
               </div>
               <div class="row">
                    <div class="col">
                         <table class="table table-hover table-striped table-xl mt-5" style="width:max-content;">
                              <thead>
                                   <tr>

                                        <th>Node ID</th>
                                        <th>Port ID</th>
                                        <th>Vlan ID</th>
                                        <th>Provider</th>
                                        <th>CID Provider</th>
                                        <th>Service ID</th>
                                        <th>Customer Name</th>
                                        <th>Customer Address</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Bandwidth</th>
                                        <th>Monthly Charge</th>
                                        <th>Bill Start Date</th>
                                        <th>Status</th>
                                        <th>Document Record</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <!-- <tfoot>
                                   <tr></tr>
                              </tfoot> -->
                              <tbody>
                                   <?php foreach ($customer as $cust) : ?>
                                        <tr class="table-active">

                                             <td><?= $cust['nodeId']; ?></td>
                                             <td><?= $cust['portId']; ?></td>
                                             <td><?= $cust['vlanId']; ?></td>
                                             <td><?= $cust['provider']; ?></td>
                                             <td><?= $cust['cidProvider']; ?></td>
                                             <td><?= $cust['serviceId']; ?></td>
                                             <td><?= $cust['customerName']; ?></td>
                                             <td><?= $cust['customerAddress']; ?></td>
                                             <td><?= $cust['latitude']; ?></td>
                                             <td><?= $cust['longitude']; ?></td>
                                             <td><?= $cust['bandwidth']; ?></td>
                                             <td><?= $cust['monthlyCharge']; ?></td>
                                             <td><?= $cust['billStartDate']; ?></td>
                                             <td><?= $cust['status']; ?></td>
                                             <td><?= $cust['documentRecord']; ?></td>
                                             <td>
                                                  <a href="<?= base_url('customer/ubahCust/'); ?><?= $cust['idCustomer']; ?>" class="badge rounded-pill bg-warning tampil" data-bs-toggle="modal" data-bs-target="#newCustomerModal" data-id="<?= $cust['idCustomer']; ?>">Edit</a>
                                                  <a href="<?= base_url('customer/deleteCust/'); ?><?= $cust['idCustomer']; ?>" class="badge bg-danger rounded-pill tombol-delete">Delete</a>
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>
                              </tbody>
                         </table>
                         <?= $this->pagination->create_links(); ?>


                    </div>
               </div>
          </div>
     </main>

     <!-- </div> -->

     <!-- MODAL BOX -->

     <!-- Modal -->
     <div class="modal fade" id="newCustomerModal" tabindex="-1" aria-labelledby="newCustomerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="newCustomerModalLabel">Add New Customer</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" id="modal-bodi">
                         <form action="<?= base_url('customer'); ?>" method="POST">
                              <input type="hidden" name="idCustomer" id="idCustomer">

                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Node ID</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="nodeId" name="nodeId" placeholder="node id" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Port ID</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="portId" name="portId" placeholder="port id" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Vlan ID</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="vlanId" name="vlanId" placeholder="vlan id" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Provider</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="provider" name="provider" placeholder="provider" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">CID Provider</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="cidProvider" name="cidProvider" placeholder="cid provider" autocomplete="off">
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Service ID</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="serviceId" name="serviceId" placeholder="service id" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Customer Name</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="customerName" name="customerName" placeholder="customer name" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Customer Address</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="customerAddress" name="customerAddress" placeholder="customer address" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Latitude</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Longitude</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Bandwidth</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="bandwidth" name="bandwidth" placeholder="bandwidth" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Monthly Charge</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="monthlyCharge" name="monthlyCharge" placeholder="monthly charge" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Bill Start Date</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="billStartDate" name="billStartDate" placeholder="bill start date" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Status</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="status" name="status" placeholder="status" autocomplete="off" required>
                                   </div>
                              </div>
                              <div class="row g-1 align-items-center mb-3">
                                   <div class="col">
                                        <label class="col-form-label col-sm-8 text-end">Doc. Record</label>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control" id="documentRecord" name="documentRecord" placeholder="status" autocomplete="off">
                                   </div>
                              </div>

                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
               </div>
          </div>
     </div>
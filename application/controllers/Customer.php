<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          if (!$this->session->userdata('email')) {
               redirect('auth');
          }
          $this->load->model('Customer_model');
          $this->load->library('pagination');
     }

     public function index()
     {
          $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
          $data['title'] = 'oprEJA';

          //* LOAD MODEL
          $this->load->model('Customer_model');


          // $this->Customer_model->getAllCustomer();

          //TODO: tampil data searching
          $tombol = $this->input->post('submit');
          if (isset($tombol)) {
               $data['keyword'] = $this->input->post('keyword');
               $this->session->set_userdata('cariuser', $data['keyword']);
          } else if (!$this->uri->segment(2)) {
               $data['keyword'] = $this->session->unset_userdata('cariuser');
          } else
               $data['keyword'] = $this->session->userdata('cariuser');

          $this->db->like('customerName', $data['keyword']);
          $this->db->or_like('serviceId', $data['keyword']);
          $this->db->from('customer');

          //* CONFIG
          $config['total_rows'] = $this->db->count_all_results();
          $data['total_rows'] = $config['total_rows'];
          $config['per_page'] = 5;

          //* INISIALISASI
          $this->pagination->initialize($config);

          //* PAGINATION
          $data['start'] = $this->uri->segment(3);
          $data['customer'] = $this->Customer_model->getCustomer($config['per_page'], $data['start'], $data['keyword']);
          // $data['customer'] = $this->Customer_model->getCustomer(5, 0);

          $this->form_validation->set_rules('nodeId', 'Node ID', 'required');
          $this->form_validation->set_rules('portId', 'Port ID', 'required');
          $this->form_validation->set_rules('vlanId', 'Vlan ID', 'required');
          $this->form_validation->set_rules('provider', 'Provider', 'required');
          $this->form_validation->set_rules('cidProvider', 'CID Provider');
          $this->form_validation->set_rules('serviceId', 'Service ID', 'required');
          $this->form_validation->set_rules('customerName', 'Customer Name', 'required');
          $this->form_validation->set_rules('customerAddress', 'Customer Address', 'required');
          $this->form_validation->set_rules('latitude', 'Latitude', 'required');
          $this->form_validation->set_rules('longitude', 'Longitude', 'required');
          $this->form_validation->set_rules('bandwidth', 'Bandwidth', 'required');
          $this->form_validation->set_rules('monthlyCharge', 'Monthly Charge', 'required');
          $this->form_validation->set_rules('billStartDate', 'Bill Start Date', 'required');
          $this->form_validation->set_rules('status', 'Status', 'required');
          // $this->form_validation->set_rules('documentRecord', 'Document Record', 'required');

          if ($this->form_validation->run() == false) {

               $this->load->view('templates/header', $data);
               $this->load->view('templates/sidebar', $data);
               $this->load->view('templates/topbar', $data);
               $this->load->view('customer/index', $data);
               $this->load->view('templates/footer');
          } else {
               $data = [
                    'nodeId' => $this->input->post('nodeId'),
                    'portId' => $this->input->post('portId'),
                    'vlanId' => $this->input->post('vlanId'),
                    'provider' => $this->input->post('provider'),
                    'cidProvider' => $this->input->post('cidProvider'),
                    'serviceId' => $this->input->post('serviceId'),
                    'customerName' => $this->input->post('customerName'),
                    'customerAddress' => $this->input->post('customerAddress'),
                    'latitude' => $this->input->post('latitude'),
                    'longitude' => $this->input->post('longitude'),
                    'bandwidth' => $this->input->post('bandwidth'),
                    'monthlyCharge' => $this->input->post('monthlyCharge'),
                    'billStartDate' => $this->input->post('billStartDate'),
                    'status' => $this->input->post('status'),
                    'documentRecord' => $this->input->post('documentRecord'),
               ];

               $this->db->insert('customer', $data);
               $this->session->set_flashdata('flash', 'Added');
               redirect('customer');
          }
     }

     public function getUbahCust()
     {
          // $this->load->model('Customer_model');
          // $json = file_get_contents('php://input');
          // $data = json_decode($json);
          echo json_encode($this->Customer_model->getCustById($_POST['id']));
          // die();
     }

     public function ubahCust()
     {
          $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
          $data['customer'] = $this->db->get('customer')->result_array();

          // $this->load->model('Customer_model');

          $this->form_validation->set_rules('nodeId', 'Node ID', 'required');
          $this->form_validation->set_rules('portId', 'Port ID', 'required');
          $this->form_validation->set_rules('vlanId', 'Vlan ID', 'required');
          $this->form_validation->set_rules('provider', 'Provider', 'required');
          $this->form_validation->set_rules('cidProvider', 'CID Provider');
          $this->form_validation->set_rules('serviceId', 'Service ID', 'required');
          $this->form_validation->set_rules('customerName', 'Customer Name', 'required');
          $this->form_validation->set_rules('customerAddress', 'Customer Address', 'required');
          $this->form_validation->set_rules('latitude', 'Latitude', 'required');
          $this->form_validation->set_rules('longitude', 'Longitude', 'required');
          $this->form_validation->set_rules('bandwidth', 'Bandwidth', 'required');
          $this->form_validation->set_rules('monthlyCharge', 'Monthly Charge', 'required');
          $this->form_validation->set_rules('billStartDate', 'Bill Start Date', 'required');
          $this->form_validation->set_rules('status', 'Status', 'required');
          // $this->form_validation->set_rules('documentRecord', 'Document Record', 'required');

          if ($this->form_validation->run() == false) {

               $this->load->view('templates/header', $data);
               $this->load->view('templates/sidebar', $data);
               $this->load->view('templates/topbar', $data);
               $this->load->view('customer/index', $data);
               $this->load->view('templates/footer');
          } else {
               $data = [
                    'nodeId' => $this->input->post('nodeId'),
                    'portId' => $this->input->post('portId'),
                    'vlanId' => $this->input->post('vlanId'),
                    'provider' => $this->input->post('provider'),
                    'cidProvider' => $this->input->post('cidProvider'),
                    'serviceId' => $this->input->post('serviceId'),
                    'customerName' => $this->input->post('customerName'),
                    'customerAddress' => $this->input->post('customerAddress'),
                    'latitude' => $this->input->post('latitude'),
                    'longitude' => $this->input->post('longitude'),
                    'bandwidth' => $this->input->post('bandwidth'),
                    'monthlyCharge' => $this->input->post('monthlyCharge'),
                    'billStartDate' => $this->input->post('billStartDate'),
                    'status' => $this->input->post('status'),
                    // 'documentRecord' => $this->input->post('documentRecord'),
               ];

               $this->Customer_model->updateCust();
               $this->session->set_flashdata('flash', 'Edit');
               redirect('customer');
          }
     }

     public function deleteCust($idCustomer)
     {
          $this->load->model('Customer_model');

          $this->Customer_model->hapusCust($idCustomer);
          $this->session->set_flashdata('flash', 'Delete');
          redirect('customer');
     }
}

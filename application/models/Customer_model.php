<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
     // public function getAllCustomer()
     // {
     //      return $this->db->get('customer')->result_array();
     // }

     public function getCustById($idCustomer)
     {
          return $this->db->get_where('customer', ['idCustomer' => $idCustomer])->row_array();
     }

     public function updateCust()
     {
          $data = [
               'nodeId' => $this->input->post('nodeId', true),
               'portId' => $this->input->post('portId', true),
               'vlanId' => $this->input->post('vlanId', true),
               'provider' => $this->input->post('provider', true),
               'cidProvider' => $this->input->post('cidProvider', true),
               'serviceId' => $this->input->post('serviceId', true),
               'customerName' => $this->input->post('customerName', true),
               'customerAddress' => $this->input->post('customerAddress', true),
               'latitude' => $this->input->post('latitude', true),
               'longitude' => $this->input->post('longitude', true),
               'bandwidth' => $this->input->post('bandwidth', true),
               'monthlyCharge' => $this->input->post('monthlyCharge', true),
               'billStartDate' => $this->input->post('billStartDate', true),
               'status' => $this->input->post('status', true),
               // 'documentRecord' => $this->input->post('documentRecord', true),
          ];
          $this->db->where('idCustomer', $this->input->post('idCustomer'));
          $this->db->update('customer', $data);
     }

     public function hapusCust($idCustomer)
     {
          $this->db->delete('customer', ['idCustomer' => $idCustomer]);
     }

     public function getCustomer($limit, $start, $keyword = null)
     {
          // $this->db->order_by('id', 'DESC');
          // $this->db->order_by('id', 'desc');
          if ($keyword) {
               $this->db->like('customerName', $keyword);
               $this->db->or_like('serviceId', $keyword);
          }
          return  $this->db->get('customer', $limit, $start)->result_array();
     }

     public function countAllCustomer()
     {

          return $this->db->get('customer')->num_rows();
     }
     // public function documen($documentRecord)
     // {
     //      return $this->db->get_where('customer', 'documentRecord' = $documentRecord )->row_array();
     // }
}

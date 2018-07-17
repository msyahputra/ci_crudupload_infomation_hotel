<?php
/**
 *
 */
class detail_admin_model extends CI_Model
{

  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      $this->db->from('hotel');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('hotel');

    return $query->num_rows();
  }

  public function get_by_id($kondisi)
  {
      $this->db->from('hotel');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

}

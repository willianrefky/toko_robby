<?php 

/**
 * 
 */
class Laporan_m extends CI_Model
{
	
	function fetch_data($query)
	{
		$this->db->select('barang_masuk.* , supplier.name as name_supplier, p_item.name as item_name');
		$this->db->from('barang_masuk');
		$this->db->join('supplier', 'supplier.supplier_id = barang_masuk.supplier_id');
		$this->db->join('p_item', 'p_item.barcode = barang_masuk.barcode');
		$this->db->like('barang_masuk.tanggal_masuk' $query);
		$satu = $this->db->get();
		return $satu;
	}
}
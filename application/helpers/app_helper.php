<?php 
function RandomString($length = 5) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = 'RF-';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function cek_testimoni($id_pemesanan)
{
	$CI =& get_instance();

	$ambil = $CI->db->query("SELECT * FROM testimoni WHERE id_pemesanan='$id_pemesanan'");
	return $ambil->num_rows();
}
function laporan_harian($tanggal)
{
    $CI =& get_instance();
    $ambil = $CI->db->query("SELECT SUM(total_bayar) AS jumlah_bayar FROM pemesanan WHERE status_pemesanan='Selesai' AND tanggal_pemesanan='$tanggal'");
    return $ambil->row_array();
}
?>
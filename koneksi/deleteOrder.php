        		<?php
require_once ("koneksi.php");

                    $queryDelete = mysql_query("Delete from orderpesanan where status='belum' and kode_produk='".$_POST['kode_produk']."' and id_customer='".$_POST['id_customer']."' and tgl_bayar='".$_POST['tgl_bayar']."'");
                ?>
                        <script>
            alert("Telah dihapus");
            window.location='../checkout.php';
        </script>
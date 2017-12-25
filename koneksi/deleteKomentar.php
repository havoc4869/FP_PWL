        		<?php
require_once ("koneksi.php");

                    $queryDelete = mysql_query("Delete from komentar where no='".$_POST['no']."'");
                ?>
                        <script>
            alert("Telah dihapus");
            window.location='../index.php';
        </script>
<hr>
            <hr>
            
            <div style="margin: 20px; clear: both;">
                <h2>Komentar</h2>
            <br>
                <div style="margin-left: 50px;">

                <?php
                    $query_komentar = mysql_query("select * from komentar order by no desc limit 4");
                    while ($record = mysql_fetch_array($query_komentar)) {
                ?>
                <h3><?php echo $record['nama']; ?></h3>
                <h4><?php echo $record['email']; ?></h4>
                <h5><?php echo $record['komentar']; ?></h5>
                <?php
                    if($_COOKIE['email']==$record['email']){
                        $j = $record['No'];
                ?>
<form action="koneksi/deleteKomentar.php" method="post">
    <input type="hidden" name="no" value="<?php echo $j;?>">
    <button class="btn btn-primary" type="submit">Hapus</button>
</form>

                <?php
                    }
                ?>
                <hr>
                <?php
                }
                ?>
            </div>
            
        </div>





        <?php
        if(isset($_GET['set'])) {
                    $queryDelete = mysql_query("Delete from komentar where no='".$j."'");
                
                echo"<script>alert('berhasil dihapus');</script>";
                ?>
<script>
    window.location('index.php');
</script>
                <?php
}
                ?>
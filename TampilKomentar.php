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
                <h5><?php echo $record['komentar']; ?></h5><hr>
                <?php
                    }
                ?>
            </div>
            
        </div>
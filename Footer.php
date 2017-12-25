<div class="container_Utama" >
	
    <div id="footer">
		<div class="kaki row-md-20">
        <div class="row">
            
            <div class="col-md-8" style="padding: 20px 40px 10px;">
                <h4 style="color: white">Butuh Bantuan ? Telepon 7276kali.<br><br>Atau Tulis disini</h4>
                <hr>
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required="required" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" required="required" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Komentar"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Kirim</button>

                            <button type="reset" class="btn btn-primary" style="float: right;  margin-right: 10px;">Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4" style="padding: 20px 40px 10px;">

                <hr>
                <p style="color: white">
                Jalan ringroad utara<br>
                alamat web menyusul
				</p>
                <hr>
                <a href="http://www.facebook.com" target="_blank"><img src="img/logo/fb.png" class="logo"></a>
                <a href="http://twitter.com" target="_blank"><img src="img/logo/twet.jpg" class="logo"></a>
                <a href="http://youtube.com" target="_blank"><img src="img/logo/you.jpg" class="logo"></a>
                <a href="https://plus.google.com" target="_blank"><img src="img/logo/gug.jpg" class="logo"></a>

            </div>
        </div>


    </div>
	</div>
	</div>
	
    <?php
        if(isset($_POST['submit'])){
            $query = "insert into komentar(nama,email,komentar) values ('".$_POST['nama']."','".$_POST['email']."','".$_POST['message']."')";

            $hasil = mysql_query($query) or die(mysql_error());

    ?>
        <script>
            alert("Terima Kasih atas Komentar Anda");
            window.location='.';
        </script>
    <?php
    
        }
    ?>
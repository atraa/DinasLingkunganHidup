<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                <marquee><strong>~ SELAMAT DATANG DI SISTEM INFORMASI DINAS LINGKUNGAN HIDUP TANJUNGBALAI ~</strong></marquee>
            </div>
        </div>
    </div>

    <div class="row">
        <!--colomn kedua-->
         <img src="img/dinas_lh.png" style="width:100%; height:150px;">
        <div class="col-sm-9 col-xs-12">
           
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Setoran</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Setoran</th>
                                <th>Nama Petugas</th>
                                <th>Lokasi Tugas</th>
                                <th>Target Setoran</th>
                                <th>Setoran</th>
                                <th>Tanggal Setoran</th>
                                <th>Keterangan</th>
                                <th>Nama Penerima</th> 
                                <th>ID Anggaran</th>
                                <th>Nama Pengirim</th>
                                <th>Tanggal Dikirim</th>
                                <th>Jumlah</th> 
                                 <th>Keterangan</th>                                                       

                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM relasihasil";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['kd_setor'] ?></td>
                                    <td><?= $data['nm_pemberi'] ?></td>
                                    <td><?= $data['lokasi_tugas'] ?></td>
                                    <td><?= $data['target_setoran'] ?></td>
                                    <td><?= $data['setoran'] ?></td>
                                    <td><?= $data['tgl_setor'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                    <td><?= $data['nm_penerima'] ?></td>
                                    <td><?= $data['kd_anggaran'] ?></td>
                                    <td><?= $data['nama_pengirim'] ?></td>
                                    <td><?= $data['tgl_kirim'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['ket'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                    </div> <!-- </div> table responsive -->
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <!-- FORM LOGIN -->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>

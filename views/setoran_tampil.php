<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Setoran</h3>
                </div>
                <div class="panel-body">
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
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_setoran";
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
                                    <td>
                                        <a href="?page=setoran&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=setoran&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										<a href="?page=anggaran&actions=tambah&kd_setor=<?= $data['kd_setor'] ?>" class="btn btn-info btn-xs">
											<span class="fa fa-arrow-right"></span>
										</a>
                                        <a href="?page=setoran&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=setoran&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Setoran

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


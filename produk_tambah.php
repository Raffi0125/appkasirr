<?php
    if(isset($_POST['nama_produk'])) {
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $query = mysqli_query($koneksi,"INSERT INTO produk(nama_produk,harga,stok) VALUES ('$nama_produk','$harga','$stok')");
        if($query){
            echo '<script>alert("Tambah produk Berhasil!")</script>';
        }else{
            echo '<script>alert("Tambah produk Gagal!")</script>';
        }
    }
?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                            <a href="?page=Produk" class="btn btn-danger">Kembali</a>
                            <hr>
                       
                            <form method="POST">
                                <table class="table table-bordered">
                                    <tr>
                                        <td width="200">Nama Produk</td>
                                        <td width="1">:</td>
                                        <td><input class="form-control" type="text" name="nama_produk"></td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td><input class="form-control" name="harga" type="number" step="0"></input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td><input class="form-control" type="number" step="0" name="stok"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>

                    </div>
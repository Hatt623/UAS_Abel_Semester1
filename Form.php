<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PengGajihan</title>

    <center>
        <h3 align="center" class="mt-5">SOAL UAS PRAKTIK RPL </h3>
    </center>
  </head>
  <body>
    <center>
        <img src="Yayasan.png"  width = "200px" alt="">
        <h3 align="center">PENGGAJHIAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</h3>
    </center>

    <center>
        <form action="Struk.php" method="post">
            <div class="card text-dark bg-light mb-3" style="max-width: 40rem;">
                <div class="card-header text-dark">Data Penggajihan</div>
                <table>
                    <tr>
                        <td colspan="2">
                            <label for="No">No: </label>
                            <div class="input-group flex-nowrap">
                                <input type="number" class="form-control" name="No" id="No" placeholder="No" min="1" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>    
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label for="Nama">Nama: </label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>    
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <label for="Unit">Unit: </label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="Unit" Name="Unit" required>
                                    <option value="" selected disabled hidden >Pilih Unit Pendidikan</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMK">SMK</option>
                                </select>
                                
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"> 
                            <label for="Tanggal">Tanggal Gajian: </label>
                            <input id="Tanggal" class="form-control" type="date" name="Tanggal" required />
                        </td>
                    </tr>

                    <!-- Part 2 -->

                    <tr align="center">
                        <td> <h2>Gaji</h2> </td>
                        <td> <h2>Potongan</h2> </td>
                    </tr>

                    <!-- Baris 1 -->
                    <tr>
                        
                        <td>
                            <label for="Jabatan">Jabatan: </label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="Jabatan" Name="Jabatan" required >
                                        <option value="" selected disabled hidden >Pilih Jabatan</option>
                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        <option value="Wakasek">Wakasek</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Karyawan">Karyawan</option>
                                    </select>
                                </div>
                        </td>

                        <td>
                            <label for="BPJS">BPJS: </label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="BPJS" id="BPJS" min="1" required>
                                </div>
                        </td>

                    </tr>

                    <!-- Baris 2 -->
                    <tr>
                        <td>
                            <label for="Lama">Lama Kerja: </label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="Lama" id="Lama" min="1" required>
                                </div>
                        </td>
        
                        <td>
                            <label for="Pinjaman">Pinjaman: </label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="Pinjaman" id="Pinjaman" min="1" required>
                                </div>
                        </td>

                    </tr>

                    <!-- Baris 3 -->
                    <tr>
                        
                        <td>
                            <label for="Status">Status Kerja: </label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="Status" Name="Status" required>
                                        <option value="" selected disabled hidden >Pilih Status Kerja</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </div>
                        </td>

                        <td>
                            <label for="Cicilan">Cicilan: </label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="Cicilan" id="Cicilan" min="1" required>
                                </div>
                        </td>

                    </tr>

                    <!-- baris 4 -->
                    <tr>
                        
                        <td>
                            <!-- Space -->
                        </td>

                        <td>
                            <label for="Infaq">Infaq: </label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="Infaq" id="Infaq" min="1" required>
                                </div>
                        </td>

                    </tr>

                    <!-- Baris 5 -->
                    <tr>
                        <td colspan = "3" align="center">
                            <div class="col-12 mb-3">
                                <button type="submit" name="Proses" class="btn btn-primary">Proses</button>
                            </div>
                        </td>
                    </tr>
                    
                </table>
            </div>

        </form>

    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
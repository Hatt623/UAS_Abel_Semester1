<?php
if (isset($_POST['Proses'])) {
    $No = $_POST['No'];
    $Nama = $_POST['Nama'];
    $Unit = $_POST['Unit'];
    $Tanggal = $_POST['Tanggal'];
    $Jabatan = $_POST['Jabatan'];
    $BPJS = $_POST['BPJS'];
    $Lama = $_POST['Lama'];
    $Pinjaman = $_POST['Pinjaman'];
    $Status = $_POST['Status'];
    $Cicilan = $_POST['Cicilan'];
    $Infaq = $_POST['Infaq'];

    $Bonus = 1000000;

}

class Struk {
    public $No;
    public $Nama;
    public $Unit;
    public $Tanggal;
    public $Jabatan;
    public $BPJS;
    public $Lama;
    public $Pinjaman;
    public $Status;
    public $Cicilan;
    public $Infaq;

    public function DataDiri($No2, $Nama2, $Unit2, $Tanggal2) {
        $this->No = $No2;
        $this->Nama = $Nama2;
        $this->Unit = $Unit2;
        $this->Tanggal = $Tanggal2;

    }

    public function Gaji($Jabatan2, $Lama2, $Status2,) {
        $this->Jabatan = $Jabatan2;
        $this->Lama = $Lama2;
        $this->Status = $Status2;

    }

    public function Potongan($BPJS2, $Pinjaman2, $Cicilan2, $Infaq2,) {
        $this->BPJS = $BPJS2;
        $this->Pinjaman = $Pinjaman2;
        $this->Cicilan = $Cicilan2;
        $this->Infaq = $Infaq2;

    }

}

$Print = new Struk();

$Print->DataDiri($No, $Nama, $Unit, $Tanggal);
$Print->Gaji($Jabatan, $Lama, $Status);
$Print->Potongan($BPJS, $Pinjaman,$Cicilan , $Infaq);

$Potongan = $Print->BPJS + $Print->Pinjaman + $Print->Cicilan + $Print->Infaq;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <center>
        <h2>Struk Gaji</h2>
        <div class="card text-primary bg-light border-primary mb-3" style="max-width: 40rem;">
            <div class="card-header text-dark"> <?php echo $Print->Nama; ?></div>
            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Info Guru/Karyawan</h2>
                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->No; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->Nama; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Unit Pendidikan</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->Unit; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Tanggal Gajian</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->Tanggal; ?>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 2 -->
                <h2 class="card-title">Gaji</h2>
                <table>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->Jabatan; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Gaji</td>
                        <td>:</td>
                        <td>
                            <?php 
                            // Gaji
                            if ($Print->Jabatan == "Kepala Sekolah") {
                                $Gaji = 10000000;
                                echo number_format ($Gaji);
                            }

                            elseif ($Print->Jabatan == "Wakasek"){
                                $Gaji = 7000000;
                                echo number_format ($Gaji);
                            }

                            elseif ($Print->Jabatan == "Guru"){
                                $Gaji = 5000000;
                                echo number_format ($Gaji);
                            }

                            elseif ($Print->Jabatan == "Karyawan"){
                                $Gaji = 2500000;
                                echo number_format ($Gaji);
                            }


                            else {
                                echo "Error";
                            }
                            
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->Lama ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td>
                            <?php echo $Print->Status ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Bonus</td>
                        <td>:</td>
                        <td>
                            <?php 
                                if ($Print->Lama >= 5) {
                                    echo number_format($Bonus);
                                }

                                else{
                                    echo "Tidak ada";
                                }
                            
                            ?>
                        </td>
                    </tr>
                    
                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Potongan</h2>
                <table>
                    <tr>
                        <td>BPJS</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Print->BPJS); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Pinjaman</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Print->Pinjaman); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Cicilan</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Print->Cicilan); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Infaq</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Print->Infaq); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Total Potongan</b></td>
                        <td>:</td>
                        <td>
                        <?php echo number_format ($Potongan); ?>
                        </td>
                    </tr>

                    <!-- Baris 4 -->

                    <tr>
                        <td colspan = 3 align="center" >
                            <h2>Total</h2>
                        </td>

                    </tr>

                    <tr>
                        <td colspan = 3>
                            <?php
                            echo "<b> Gaji Bersih:  </b>";
                            // Hitung Gaji Bersih
                            if ($Print->Jabatan == "Kepala Sekolah") {
                                $Gaji = 10000000;
                            
                                if  ($Print->Lama >= 5 && $Print->Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5 && $Print->Status == "Kontrak" ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Print->Jabatan == "Wakasek") {
                                $Gaji = 7000000;
                            
                                if  ($Print->Lama >= 5 && $Print->Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5 && $Print->Status == "Kontrak" ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Print->Jabatan == "Guru") {
                                $Gaji = 5000000;
                            
                                if  ($Print->Lama >= 5 && $Print->Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5 && $Print->Status == "Kontrak" ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Print->Jabatan == "Karyawan") {
                                $Gaji = 2500000;
                            
                                if  ($Print->Lama >= 5 && $Print->Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5 && $Print->Status == "Kontrak" ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Print->Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }
                            
                            ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
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
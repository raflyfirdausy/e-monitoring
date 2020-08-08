 <!--start fn. simpan data-->
          <?php 
          include '../config/koneksi.php';
          
                  $kode = $_POST['kode'];
                  $nama = $_POST['nama'];
                  $noseri = $_POST['noseri'];
                  $merk = $_POST['merk'];
                  $tipe = $_POST['tipe'];
                  $jumlah = $_POST['jumlah'];

                  $query = mysqli_query($conn,"INSERT INTO m_aksesories_alat (id,kode,nama,noseri,merk,tipe,jumlah) VALUES ('','".$kode."','".$nama."','".$noseri."','".$merk."','".$tipe."','".$jumlah."')");  
                  
          ?>
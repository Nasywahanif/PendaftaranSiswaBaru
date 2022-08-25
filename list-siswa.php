<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftran Siswa Baru | SMK Coding</title>
    </head>

    <body>
        <header>
           <h3>Siswa yang sudah mendaftar</h3>
        </header>

        <nav> 
            <a href="form-daftar.php">[+] Tambah Baru</a>
        </nav>
        
        <nav> 
            <a href="home.php">Home</a>
        </nav>

        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
    <tbody>
      
       <?php
       $sql = "SELECT * FROM calon_siswa";
       $query = mysqli_query($db, $sql);

       while($siswa = mysqli_fetch_array($query)){
        echo "<tr>";
         
        echo"<td>".$siswa['Id']."</td>";
        echo"<td>".$siswa['Nama']."</td>";
        echo"<td>".$siswa['Alamat']."</td>";
        echo"<td>".$siswa['Jenis_kelamin']."</td>";
        echo"<td>".$siswa['Agama']."</td>";
        echo"<td>".$siswa['Sekolah_Asal']."</td>";

        echo"<td>";
        echo"<a href='form-edit.php?id=".$siswa['Id']."'>Edit</a>  ";
        echo"<a href='hapus.php?id=".$siswa['Id']."'>Hapus</a> ";
        echo"</td>";

        echo"</tr>";



       }
       ?>

       </tbody>
       </table>

       <p>Total: <?php echo mysqli_num_rows($query) ?></p>

       </body>
       </html>
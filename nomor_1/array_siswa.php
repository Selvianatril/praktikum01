<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/praktikum/bootstrap/css/bootstrap.min.css">
	<title>Siswa</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="text-align: center; padding: 15px;">
                <h2>
                    TABLE NILAI SISWA
                </h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="justify-content: center;">
                <?php
                    $ns1 = ['id'=>'Jamal','matkul'=>"DDP",'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                    $ns2 = ['id'=>'Budi','matkul'=>"BDI",'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                    $ns3 = ['id'=>'Joko' ,'matkul'=>"WEB1",'nim'=>'01102','uts'=>60,'uas'=>86,'tugas'=>70];
                    $ns4 = ['id'=>'Jaenudin','matkul'=>"DDP",'nim'=>'01122','uts'=>90,'uas'=>91,'tugas'=>82];
                    if(isset($_GET['proses'])){
                        $ns5 = ['id'=> $_GET['nama'],'matkul'=> $_GET['matkul'],'nim'=>$_GET['nim'],'uts'=>$_GET['nilai_uts'],'uas'=>$_GET['nilai_uts'],'tugas'=>$_GET['nilai_tugas']];
                        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
                    }else{
                        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
                    }                   
                ?>
                <h3>Daftar Nilai Siswa</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">NIM</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($ar_nilai as $ns){
                                echo '<tr><td>'.$nomor.'</td>';
                                echo '<td>'.$ns['id'].'</td>';
                                echo '<td>'.$ns['matkul'].'</td>';
                                echo '<td>'.$ns['nim'].'</td>';
                                echo '<td>'.$ns['uts'].'</td>';
                                echo '<td>'.$ns['uas'].'</td>';
                                echo '<td>'.$ns['tugas'].'</td>';
                                $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                                echo '</tr>';
                                $nomor++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
</body>
</html>
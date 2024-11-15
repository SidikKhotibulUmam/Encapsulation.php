<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class hutan{
        var $nama_lokasi = "Pulau komodo";
        var $luas = 390;
        var $lokasi_koor = "8.55_S_119.45_E";
        var $jumlah_satwa = 243;
        var $nama_daerah = "Kepulauan Sunda Kecil";
        var $kode_akses = 7777;
        var $jml_penjaga_hutan = 25;

        protected function lindungi(){
            
            echo "Jumlah Satwa  : $this->jumlah_satwa<br>";
            echo "Kode akses    : $this->kode_akses<br>";
            echo "Koordinat     : $this->lokasi_koor<br>";

        }

        function identitas(){
            
            echo "Nama Lokasi   : $this->nama_lokasi<br>";
            echo "Nama Daerah   : $this->nama_daerah<br>";
            echo "Luas          : $this->luas km2<br>";
            echo "Jumlah Penjaga Hutan : $this->jml_penjaga_hutan<br>";
        }

        function rahasia(){
            
            $this->identitas();
            $this->lindungi();

        }

    }

    $penjaga = new hutan();
    echo "<h2>Data Umum</h2>";
    $penjaga->identitas();
    echo "<br>";
    echo "<h2>Data Rahasia</h2>";
    $penjaga->rahasia();

    ?>
</body>
</html>
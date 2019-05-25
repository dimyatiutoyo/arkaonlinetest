<?php
function cetak_gambar($sisi) {

    // perulangan sebanyak $sisi
    for ($i=1; $i <= $sisi; $i++) {
        echo "<pre>";

        // jika $i == 1 atau $i == $sisi
        // percabangan untuk membuat deret X sebanyak jumlah $sisi
        // di sisi atas dan sisi bawah
        if($i == 1 || $i == $sisi) {

            // mencetak X sebanyak $sisi
            for ($j=1; $j <= $sisi; $j++){
                echo "X";

                // jika sudah dicetak sebanyak $sisi dan itu adalah baris pertama, buat baris baru di bawahnya
                if($j == $sisi && $i == 1) {
                    echo "<br>";
                }
            }
        } else {

            // mencari nilai tengah
            $med = ceil($sisi/2);

            // perulangan sebanyak $sisi
            for ($k=1; $k <= $sisi; $k++){

                //jika nilai tengah ditemukan, cetak 'X'
                if($k == $med) {
                    echo "X";
                } else { // cetak "="
                    echo "=";
                }

                // jika mencapai nilai $sisi, buat baris baru dibawahnya.
                if($k == $sisi) {
                    echo "<br>" ;
                }
            }
        }
    }
}

cetak_gambar(9);
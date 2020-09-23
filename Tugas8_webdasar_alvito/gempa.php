<?php
class Gempa {
    public $lokasi;
    public $skala;
    
    public function __construct($lokasi,$skala){
        $this->lokasi = $lokasi;
        $this->skala = $skala;
    }

    public function dampak(){
        if($this->skala <= 2) {
            $hasil= 'Tidak Terasa';
        } else if($this->skala >= 2 && $this->skala <= 3){
            $hasil= 'Bangunan Retak-Retak';
        } else if($this->skala >= 3 && $this->skala <= 6){
            $hasil= 'Bangunan Hancur';
        } else if($this->skala >= 6){
            $hasil= 'Bangunan Hancur & Tsunami';
        } else {
            $hasil= '';
        }
        return $hasil;
    }

    public function cetak(){
        echo 'Lokasi : '.$this->lokasi;
        echo '<br>Skala : '.$this->skala.' SR'; 
        echo '<br>Akibat : '.$this->dampak();
        echo '<hr>';
    }
}
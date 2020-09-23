<?php
class Bank{
    //member1 variabel
    public $nama;
    protected $norek;
    private $saldo;
    const BANK = 'Bank Komunis Syariah';
    static $jml = 0;
    //member2 konstruktor
    public function __construct($nasabah,$no,$saldo){
        $this->nama = $nasabah;
        $this->norek = $no;
        $this->saldo = $saldo;
        self::$jml++;
    }
    //member2 method/fungsi
    public function setor($uang){
        //$this->saldo = $this->saldo + $uang;
        $this->saldo += $uang;
    }
    public function ambil($uang){
        //$this->saldo = $this->saldo - $uang;
        $this->saldo -= $uang;
    }
    public function cetak(){
        echo '<b><u>'.self::BANK.'</u></b>';
        echo '<br>No. Rekening : '.$this->norek;
        echo '<br>Nasabah : '.$this->nama;
        echo '<br>Saldo : RP. '.number_format($this->saldo,2,'.','.');
        echo '<hr>';
    }
}
<?php
class koneksi {
    public $host = "localhost";
    public $username ="root";
    public $password ="";
    public $database = "db_zakat";
    public $koneksi = "";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database
    );
    if (mysqli_connect_errno()){
    echo "koneksi gagal";
    
}


    }
    function tampil_Data_Banyak($query){
        $data = mysqli_query($this->koneksi,$query);
        while ($row = mysqli_fetch_assoc($data))
            $hasil[] =$row;
        return $hasil;
    }
    

}

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas OOP dengan PHP</title>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap');

      body {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         background: #F0F8FF;
         font-family: "Poppins", sans-serif;
      }

      .wrap {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background: #FFE4C4;
         width: 700px;
         height: auto;
         border-radius: 3px;
         padding: 0 12px;
         box-shadow: 3px 3px 4px #bbb, -3px -3px 4px #fff;
      }

      h3 {
         text-align: center;
         font-weight: 600;
      }

      p {
         background: #DEB887;
         padding: 2px 8px;
         font-weight: 500;
         font-size: 16px;
         text-align: justify;
      }
   </style>
</head>

<body>
    <?php
        class product {
            public $name;
            public $price;
            public $discount;

            function getPrice(){
                return $this->price;
            }
            function setPrice($price){
                $this->price = $price;

            }
            function getName(){
                return $this->name;
            }
            function setName($name){
                $this->name = $name;
            }
            function getDiscount(){
                return $this->discount;
            }
            function setDiscount($discount){
                $this->discount = $discount;
            }

        }

        class CDMusic extends product
        {
            public $artist;
            public $genre;

            function __construct($name="nama", $price="harga", $discount="diskon"){

            }

            function getArtist(){
                return $this->artist;
            }
            function setArtist($artist){
                $this->artist = $artist;
            }
            function getGenre(){
                return $this->genre;
            }
            function setGenre($genre){
                $this->genre = $genre;
            }
            function setPrice($price){
                $this->price = $price;
            }
            function getPrice(){
                $harga = $this->price;
                $ppn = ((10/100) * $this->price);
                $discount = ((5/100) * $this->price);
                return ($harga + $ppn) - $discount;
                }
            function setDiscount($discount){
                $this->discount = $discount;
            }
        }


        class CDRack extends product
        {
            public $capacity;
            public $model;

            function getCapacity(){
                return $this->capacity;
            }
            function setCapacity($capacity){
                $this->capacity = $capacity;
            }
            function getModel(){
                return $this->model;
            }
            function setModel($model){
                $this->model = $model;
            }
            function setPrice($price){
                $this->price = $price;
            }
            function getPrice(){
                $harga = $this->price;
                $tambahan = ((15/100) * $this->price);
                return $harga + $tambahan;
            }
        }
    ?>
    <div class="wrap">
      <h3>Tugas 1 OOP PHP || Pembelian Product CD</h3>
      <p>
            <?php
                $beli = new product();
                $beli_cdm = new CDMusic();
                $beli_cdr = new CDRack();

                $beli->setName("CD lagu");
                $beli->setPrice(200000);
                $beli->setDiscount("Discount saat ini : <br/>
                1. CDMusic = 5% <br/>
                2. CDRack = 0% (tidak ada discount)<hr/>");

                echo "Nama Product : " . $beli->getName() . "<br/>";
                echo "Harga : Rp. " . $beli->getPrice() . ",-<br/>";
                echo $beli->getDiscount() . "<br/><hr/>";

                $beli_cdm->setArtist("Guns N' Roses");
                $beli_cdm->setGenre("Pop Slow Rock");
                $beli_cdm->setDiscount("5%");
                $beli_cdm->setPrice(200000);

                echo "----------SELAMAT DATANG DI CDMUSIC---------<br/>";
                echo "Nama Product : " . $beli->getName() . "<br/>";
                echo "Artist : " . $beli_cdm->getArtist() . "<br/>";
                echo "Genre : " . $beli_cdm->getGenre() . "<br/>";
                echo "selamat Anda Mendapatkan Discount sebedsar " . $beli_cdm->getDiscount() . "<br/>";
                echo "Total Harga : Rp." . $beli_cdm->getPrice() . ", -<br/>Harga tersebut sudah termasuk PPN sebesar 10% dan Discount 5%<br/><hr/><br/><hr/>";

                $beli_cdr->setCapacity("600mb");
                $beli_cdr->setModel("Keluaran New First Album");
                $beli_cdr->setPrice(200000);

                echo "---------SELAMAT DATANG DI CDRACK------- <br/>";
                echo "Kapasitas : " . $beli_cdr->getCapacity() . "<br/>";
                echo "Model :  " . $beli_cdr->getModel() . "<br/>";
                echo "Mohon maaf Anda tidak medapatkan Discount <br/>";
                echo "Total Harga : Rp." . $beli_cdr->getPrice() . "-<br/>Harga tersebut sudah termasuk PPN 15% dan tidak mendapatkan Discount";
            ?>
        </p>
   </div>
</body>

</html>
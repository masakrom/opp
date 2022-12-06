<!DOCTYPE html>
<html lang="en">

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

   interface Hewan
   {
      public function jenis();
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }

   class Monyet implements Hewan
   {
      public function jenis()
      {
         return "Monyet merupakan salah satu dari jenis Hewan<br/>";
      }

      public function Makan()
      {
         return "Monyet bisa berjalan<br/>";
      }

      public function Berjalan()
      {
         return "Monyet bisa makan<br/>";
      }

      public function Bersuara()
      {
         return "Monyet bisa bersuara<br/>";
      }
      public function Sepeda()
      {
         return "Apabila dilatih Monyet dapat mengendarai sepeda<br/>";
      }
   }
   class Kualifikasi implements Hewan
   {
      public function jenis()
      {
         return "";
      }
      public function Makan()
      {
         return "Monyet dapat berjalan<br/>";
      }

      public function Berjalan()
      {
         return "Monyet memakan pisang<br/>";
      }

      public function Bersuara()
      {
         return "Monyet dapat bersuara<br/>";
      }
      public function Sepeda()
      {
         return "Tapi Juga dapat naik sepeda apa<br/>";
      }
   }

   class Lainnya implements Hewan
   {
      public function jenis()
      {
         return "";
      }
      public function Makan()
      {
         return "";
      }

      public function Berjalan()
      {
         return "";
      }

      public function Bersuara()
      {
         return "";
      }
      public function Sepeda()
      {
         return "Monyet juga dapat menaiki sebuah sepeda<br/>";
      }
   }

   ?>
   <div class="wrap">
      <h3>Tugas 2 || Deskripsi mengenai Hewan</h3>
      <p>
         <?php
         $Monyet = new Monyet;
         $Kualifikasi = new Kualifikasi;
         $Lainnya = new Lainnya;
         echo "<b>Klasifikasi : </b><br/>";
         echo $Monyet->jenis();

         echo "<b>Kemampuan Monyet : </b><br/>";
         echo $Monyet->Makan();
         echo $Monyet->Berjalan();
         echo $Monyet->Bersuara();

         echo "<b>Kemampuan Lainya yang dimiliki : </b><br/>";
         echo $Monyet->Sepeda();
         ?>
      </p>
   </div>
</body>

</html>
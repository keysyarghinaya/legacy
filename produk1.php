<!DOCTYPE html>
<html lang="en">

<head>
  <title>Foto Produk</title>
  <style>
    .sambutan {
      display: flex;
      justify-content: left;
      align-items: flex-start;
    }

    .sub-sambutan2 {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding-bottom: 0px;
    }

    .sub-sambutan-img {
      padding-top: 30px;
      position: right;
      width: 668px;
      /* Adjust the width as needed */
      height: 1100px;
      /* Adjust the height as needed */
      padding-right: 20px;
    }

    .sub-sambutan-img img {
      border-radius: 25px;
      margin-bottom: 20px;
      display: block;
      width: 450px;
      height: 450px;
      padding-left: 110px;
      object-fit: cover;
    }

    .photo-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .photo {
      width: 100px;
      margin: 10px;
      cursor: pointer;
    }

    .whatsapp-button {
      background-color: #128C7E;
      color: #FFF;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 22px;
      cursor: pointer;
      text-decoration: none;
    }

    .whatsapp-button:hover {
      background-color: #25D366;
    }

    .photo-container {
      width: 190px;
      height: 165px;
      border: 1px solid #ccc;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      margin: 20px;
      margin-top: -610px;
    }

    .photo-container img {
      max-width: 120px;
      max-height: 120px;
    }

    .fullscreen-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.9);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .fullscreen-image {
      max-width: 90%;
      max-height: 90%;
    }

    .fullscreen-overlayy {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.9);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .fullscreen-imagee {
      max-width: 90%;
      max-height: 90%;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .logo-link {
      display: inline-block;
      width: 50px;
      height: 50px;
      background-color: transparent;
      text-decoration: none;
    }

    .logo-img {
      width: 100%;
      height: 100%;
    }

    .logo-link:hover {
      opacity: 0.7;
    }

    .gmap_canvas {

      overflow: hidden;
      background: none !important;
      height: 450px;
      width: 600px;
      padding-bottom: 400px;
    }
  </style>
  <script>
    function handleClick() {
      const fullscreenOverlay = document.getElementById('fullscreen-overlay');
      const fullscreenImage = document.getElementById('fullscreen-image');

      fullscreenImage.src = this.src;
      fullscreenOverlay.style.display = 'flex';
    }

    function closeFullscreen() {
      const fullscreenOverlay = document.getElementById('fullscreen-overlay');
      fullscreenOverlay.style.display = 'none';
    }
  </script>
</head>

<body>
  <?php
  include('navbar_produk.php');
  ?>
  <div class="sambutan">
    <div class="sub-sambutan1">
      <div class="sub-sambutan-img">
        <img src="baju1.png" alt="produk1">
      </div>

      <div class="photo-gallery">
        <div class="photo-container" onclick="handleClick.call(this)">
          <img src="baju1.png" alt="Front">
        </div>
        <div class="photo-container" onclick="handleClick.call(this)">
          <img src="baju1_back.png" alt="Back">
        </div>
      </div>

      <div id="fullscreen-overlay" class="fullscreen-overlay" onclick="closeFullscreen()">
        <img id="fullscreen-image" class="fullscreen-image" img src="baju1.png">
      </div>
      <div id="fullscreen-overlayy" class="fullscreen-overlayy" onclick="closeFullscreen()">
        <img id="fullscreen-imagee" class="fullscreen-imagee" img src="baju1.png">
      </div>
    </div>

    <div class="sub-sambutan2">
      <div class="sub-sambutan-img">
        <p>
          <font size="5" face="Times New Roman">Good Deal</font>
        </p>
        <font size="7"><b>LEGACY NIGHTMARE</b></font><br>
        <font size="6"><b>[Sweater]</b></font><br>
        <p></p>
        <p>
          <font color="red">
            <font size="5"><b>Rp 165,000,00</b></font>
          </font>
        </p>
        <br>
        <a href="javascript:void(0);" onclick="openWhatsApp()" class="whatsapp-button">Order Now!</a>

        <script>
          function openWhatsApp() {
            var phoneNumber = "1234567890"; // Ganti dengan nomor telepon yang diinginkan
            var url = "https://wa.me/" + phoneNumber;
            window.location.href = url;
          }
        </script>
        <br>
        <br>
        <br>
        <br>
        <font size="6"><b>Descriptions Product</b></font><br>
        <p>●Know Tomorrow Tee (Cement)</p>
        <p>●100% Cotton</p>
        <p>●Front & Back Printed Graphics</p>
        <br>
        <br>
        <font size="5"><b>NOT WHAT YOU'RE LOOKING FOR?</b></font><br>
        <br>
        <p>Check out more Skateboards
          <a href="link-halaman-baru.php" style="color: black; text-decoration: none;">
            <span style="color: green; text-decoration: underline;">here</span>
          </a>
        </P>
        <p>View our full range of Skateboard Tees
          <a href="link-halaman-baru.php" style="color: black; text-decoration: none;">
            <span style="color: green; text-decoration: underline;">here</span>
          </a>
        </P>
        <br>
        <div class="gmap_canvas">
          <font size="5"><b>Visit Legacy Skate Shop📍</b></font>
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.31756796184976!2d104.06059429719619!3d1.1014635438593972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d988d34c07d407%3A0x11b8e244ed210e97!2sLegacy%20Skateshop!5e0!3m2!1sid!2sid!4v1687442701755!5m2!1sid!2sid"
             width="460" height="295" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>

</body>
<?php
include('footer_produk.php');
?>

</html>
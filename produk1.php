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
      width: 668px; /* Adjust the width as needed */
      height: 1100px; /* Adjust the height as needed */
      padding-right: 20px;
    }
    
    .sub-sambutan-img img {
      border-radius: 25px;
      margin-bottom: 20px;
      display: block;
      width: 450px;
      height: 450px;
      padding-left:110px ;
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
      background-color:#128C7E;
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
        <img id="fullscreen-imagee" class="fullscreen-imagee">
      </div>
    </div>

    <div class="sub-sambutan2">
      <div class="sub-sambutan-img">
        <p><font face="Times New Roman">Good Deal</font></p>
        <font size="7"><b>TEMPLETON BULLMAN</b></font><br>
        <font size="6"><b>[Sweater]</b></font><br>
        <p></p>
        <p><font color="red"><font size="5"><b>Rp 165,000,00</b></font></font></p>
        <a href="javascript:void(0);" onclick="openWhatsApp()" class="whatsapp-button">Chat On Whatsapp</a>

        <script>
          function openWhatsApp() {
              var phoneNumber = "1234567890"; // Ganti dengan nomor telepon yang diinginkan
              var url = "https://wa.me/" + phoneNumber;
              window.location.href = url;
          }
        </script>

        <p>We hope that this website can be used as a means of positive interaction between the school and alumni, even though they have graduated, wherever they are, they can still contribute to the school at any time and with the community can establish close friendship in all elements. Let's move together to realize the Vision and Mission of SMK Negeri 7 Batam, build and advance our beloved school and deliver the ideals of the nation's children.</p>
        <p>Wa’allaikumsalam Warahmatullah Wabarakatuh.</p>
      </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">


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
        
        .sub-sambutan-img img{
            border-radius: 25px;
            margin-bottom: 20px;
            display: block;
            width: 450px;
            height: 450px;
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

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.9);
}

.modal-content {
  display: block;
  margin: auto;
  max-width: 90%;
  max-height: 90%;
}

.close {
  color: white;
  position: absolute;
  top: 15px;
  right: 35px;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.caption {
  color: white;
  text-align: center;
  margin-top: 10px;
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

</style>


<div class="sambutan">
    <div class="sub-sambutan1">
    <div class="sub-sambutan-img">
        <img src="baju1.png" alt="produk1">
    </div>

<div class="photo-gallery">
  <div class="photo">
    <img src="baju1.png" alt="Foto 1" onclick="openModal('baju1.png', 'Foto 1')" />
  </div>
  <div class="photo">
    <img src="baju1_back.png" alt="Foto 2" onclick="openModal('baju1_back.png', 'Foto 2')" />
  </div>
  <div class="photo">
    <img src="foto/baju3.png" alt="Foto 3" onclick="openModal('foto/baju3.png', 'Foto 3')" />
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImg" alt="Modal Image">
  <div id="caption" class="caption"></div>

<script>
  function openModal(imgSrc, caption) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("modalImg");
  var captionText = document.getElementById("caption");
  modal.style.display = "block";
  modalImg.src = imgSrc;
  captionText.innerHTML = caption;
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
</script>
</div>
</div>

<div class="sub-sambutan2">
    <div class="sub-sambutan-img">
    <p><font face="Times New Roman">Good Deal</font></P>

    <font size="7"><b>TEMPLETON BULLMAN</b></font><br>
    <font size="6"><b>[Sweater]</b></font><br>
    <p></p>
    <p><font color="red"><font size="5"><b>Rp 165,000,00</b></font></br></p>

    <a href="javascript:void(0);" onclick="openWhatsApp()" class="whatsapp-button">Chat On Whatsapp</a>

<script>
    function openWhatsApp() {
        var phoneNumber = "1234567890"; // Ganti dengan nomor telepon yang diinginkan
        var url = "https://wa.me/" + phoneNumber;
        window.location.href = url;
    }
</script>
    
        <p>We hope that this website can be used as a means of positive interaction between the school and alumni, even though they have graduated, wherever they are, they can still contribute to the school at any time and with the community can establish close friendship in all elements. Let's move together to realize the Vision and Mission of SMK Negeri 7 Batam, build and advance our beloved school and deliver the ideals of the nation's children.

   <p>Wa’allaikumsalam Warahmatullah Wabarakatuh. </p>
        </div>

    </div>


</div>

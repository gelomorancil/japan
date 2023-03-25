<?php include('includes/header-footer/header.php'); ?>
<style>
.send_button {
  border-radius: 25px;
  width: 200px;
  background-color: #fe738c;
  color: white;
}
</style>

<!-- Contact Section -->
<div class="xyz-container" style="padding:128px 16px; background-color: #fef0ce;" id="contact">
    <div class="xyz-twothird slide-in">
        <h1 class="xyz-center xyz-jumbo" style="color: #80baef"><strong>CONTACT</strong></h1>
    </div>
    <br>
    

    <div class="xyz-container">
        <div class="xyz-row">
            <div class="xyz-third xyz-container"> </div>
            <div class="xyz-third xyz-container">
                <form action="" target="">
                <p>
                    <label for=""><strong>ファーストネーム</strong></label>
                    <input class="xyz-input xyz-border" type="text" required>
                </p>
                <p>
                    <label for=""><strong>ミドルネーム</strong></label>
                    <input class="xyz-input xyz-border" type="text" required>
                </p>
                <p>
                    <label for=""><strong>苗字</strong></label>
                    <input class="xyz-input xyz-border" type="text" required>
                </p>
                <p>
                    <label for=""><strong>連絡先番号</strong></label>
                    <input class="xyz-input xyz-border" type="number" required>
                </p>
                <p>
                    <label for=""><strong>Eメール</strong></label>
                    <input class="xyz-input xyz-border" type="email" required>
                </p>
                <p>
                    <label for=""><strong>主題</strong></label>
                    <input class="xyz-input xyz-border" type="text" required>
                </p>
                <p>
                    <label for=""><strong>備考</strong></label>
                    <textarea class="xyz-input xyz-border" type="text" required></textarea>
                </p>
                <p class="xyz-center">
                    <button class="xyz-button send_button" type="submit">
                    <strong>SEND</strong>
                    </button>
                </p>
                </form>
            </div>
            <div class="xyz-third xyz-container"> </div>
        </div>
    </div>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("xyz-show") == -1) {
    x.className += " xyz-show";
  } else { 
    x.className = x.className.replace(" xyz-show", "");
  }
}
</script>

</body>
</html>

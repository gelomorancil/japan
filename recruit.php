<?php include('includes/header-footer/header.php'); ?>
<style>
.top_button {
  border-radius: 25px;
  width: 200px;
  background-color: white;
  color: #80baef;
}

.send_button {
  border-radius: 25px;
  width: 200px;
  background-color: #fe738c;
  color: white;
}
.myLink {display: none}
</style>

<!-- Contact Section -->
<div class="xyz-container" style="padding:128px 16px; background-color: #fef0ce;" id="contact">
    <div class="xyz-twothird slide-in">
        <h1 class="xyz-center xyz-jumbo" style="color: #80baef"><strong>RECRUIT</strong></h1>
    </div>
    <br>
    
    <div class="xyz-container">
        <div class="xyz-row">
        <div class="xyz-third xyz-container"></div>
        <div class="xyz-third xyz-container">
            <div class="xyz-container xyz-padding-16">
                <div class="xyz-row-padding" style="margin:0 -50px ;">
                    <div class="xyz-half">
                        <button class="xyz-button xyz-border top_button tablink" type="submit"  onclick="openLink(event, 'fresh_grad');">
                            <strong>新卒者</strong>
                        </button>
                    </div>
                    <div class="xyz-half">
                        <button class="xyz-button xyz-border top_button tablink" type="submit"  onclick="openLink(event, 'experienced');">
                            <strong>経験豊富な労働者</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="xyz-third xyz-container"></div>

        </div>
    </div>

    <div class="xyz-container">
        <div class="xyz-row myLink" id="fresh_grad">
            <div class="xyz-third xyz-container"></div>
            <div class="xyz-third xyz-container">
            新卒者
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

        <div class="xyz-row myLink" id="experienced">
            <div class="xyz-third xyz-container"> </div>
            <div class="xyz-third xyz-container">
            熟練労働者

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

// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" xyz-blue", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " xyz-blue";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
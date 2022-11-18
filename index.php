<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Help</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Help</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Manage DB Sync</h1>
      <p>User can provide required inputs to run db sync.</p>
      <div id="fcf-form">
            <form class="fcf-form-class" action="process.php" method="post"  novalidate="novalidate">
                <div class="field">
                    <label for="Username" class="label has-text-weight-normal">Your db user name</label>
                    <div class="control">
                        <input type="text" name="Username" id="Name" class="input is-full-width" maxlength="100" data-validate-field="Name">
                    </div>
                </div>
                <div class="field">
                    <label for="password" class="label has-text-weight-normal">Your db password</label>
                    <div class="control">
                        <input type="text" name="password" id="password" class="input is-full-width" maxlength="100" data-validate-field="password">
                    </div>
                </div>
                <div class="field">
                    <label for="host" class="label has-text-weight-normal">Your db host (optional)</label>
                    <div class="control">
                        <input type="text" name="host" id="host" class="input is-full-width" maxlength="300" data-validate-field="host">
                    </div>
                </div>
                <div class="field">
                    <label for="application_name" class="label has-text-weight-normal">Your message</label>
                    <div class="control">
                         <input type="text" name="application_name" id="application_name" class="input is-full-width" maxlength="100" data-validate-field="application_name">
                    </div>
                </div>
                <div id="fcf-status" class="fcf-status"></div>
                <div class="field">
                    <div class="buttons">
                        <button id="fcf-button" type="submit" class="button is-link is-medium is-fullwidth">Run DB Sync
                            </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="w3-third w3-container">

    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>


<!-- <!DOCTYPE html>
<html>
<body>

<h1>Manage Database Opearations</h1>

    <form action="process.php" method="post" >
        User name: <input type="text" name="username" />
        Database: <input type="text" name="database" />
        <input type="submit"/>
    </form>
</body>
</html> -->

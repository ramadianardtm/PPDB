<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="css/dasmen.css">
  <link rel="stylesheet" href="css/paymen.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="sidebar">
  <div class="logo-details">
    <div class="logo_name">PPDB</div>
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <a href="/dashboard">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="/payment">
        <i class='bx bx-credit-card'></i>
        <span class="links_name">Payment</span>
      </a>
      <span class="tooltip">Payment</span>
    </li>
    <li>
      <a href="/">
        <i class='bx bx-home'></i>
        <span class="links_name">Home</span>
      </a>
      <span class="tooltip">Home</span>
    </li>
    <li class="profile">
      <div class="profile-details">
        <div class="name_job">
          <div class="name">AHAHAHAH</div>
          <div class="job">Presiden</div>
        </div>
      </div>
      <a href="/logout"><i class='bx bx-log-out' id="log_out"></i></a>
    </li>
  </ul>
</div>

<body>
  <section class="dashboard">
    <div class="main-body" style="width: 70%; padding: 1rem;">
    </div>
    <div class="container">
      <h1>Formulir Pembayaran</h1>
      <p>Silahkan upload bukti pembayaran Anda di dalam form berikut</p>
      <form>
        <div class="row">
          <div class="column">
            <label for="bank">Nama Bank</label>
            <input type="text" id="bank" placeholder="Masukkan Nama Bank">
          </div>
          <div class="column">
            <label for="rek">Nama Pemilik Rekening</label>
            <input type="text" id="rek" placeholder="Masukkan Nama Rekening">
          </div>
        </div>
        <div class="row">
          <div class="column">
            <label for="tlp">Nomor Telephone</label>
            <input type="number" id="tlp" placeholder="Masukkan Nomor Telephone">
          </div>
          <div class="column">
            <label for="contact">Nominal</label>
            <input type="nominal" id="contact" placeholder="Masukkan Nominal">
          </div>
        </div>
        <div class="row">
          <div class="column" style="">
            <label for="issue">Upload Bukti Pembayaran</label>
            <input name="file-upload-field" type="file" class="file-upload-field" value="" style="color:#f6fbff;">
          </div>
        </div>

        <button>Submit</button>
      </form>
    </div>
</body>

</html>
</section>
</body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- js untuk select2  -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


















<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
  }
</script>
</body>

</html>
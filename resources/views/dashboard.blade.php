<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/dasmen.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
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
            @foreach($data as $d)
            <div class="name">{{$d->name}}</div>
            <div class="job">Presiden</div>
            @endforeach
          </div>
        </div>
        <a href="/logout"><i class='bx bx-log-out' id="log_out"></i></a>
      </li>
    </ul>
  </div>
  <section class="dashboard">
    <div class="main-body" style="width: 70%; padding: 1rem;">
      <h2>Dashboard</h2>
      <div style="width: 100%; color: #fff; margin-top: 26px; justify-content: center; align-item: center; border-radius: 18px; padding: 0.5rem 1rem 1rem 3rem; background: #071019;">
        @foreach($data as $dt)
        <h1 style="margin: 10px;">Hallo, {{$dt->name}}</h1>
        <div class="row" style="padding: 10px">
          <div class="col" style="margin-bottom: 10px;">
            <h5>NISN</h5>
            <p>{{$dt->nisn}}</p>
          </div>
          <div class="col" style="margin-bottom: 10px;">
            <h5>Sekolah</h5>
            <p>{{$dt->school}}</p>
          </div>
          <div class="col" style="margin-bottom: 10px;">
            <h5>Jenis Kelamin</h5>
            <p>{{$dt->gender}}</p>
          </div>
          <div class="col" style="margin-bottom: 10px;">
            <h5>Email</h5>
            <p>{{$dt->email}}</p>
          </div>
          <div class="col" style="margin-bottom: 10px;">
            <h5>Nomor Telephone</h5>
            <p>{{$dt->tlp}}</p>
          </div>
          <div class="col" style="margin-bottom: 10px;">
            <h5>Telephone Ayah</h5>
            <p>{{$dt->papa}}</p>
          </div>
          <div class="col" style="margin-bottom: 10px;">
            <h5>Telephone Ibu</h5>
            <p>{{$dt->mama}}</p>
          </div>
        </div>
        @endforeach
      </div>
  </section>


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
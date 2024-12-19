<<<<<<< HEAD
<?php
include 'connect.php';
session_start();

if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit();
}

// Menampilkan ID pengguna di atas halaman
$userId = $_SESSION['id'];
?>
=======
>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./css/image.png" type="image/x-icon" />
  <title>FR-DASHBOARD</title>
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="logo">
        <a href="./index.html"><img src="./css/image.png" alt="FR Logo" /></a>
      </div>
      <!-- Menu -->
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#work">Work</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">
            Product & Solutions<span class="arrow">&#9662;</span>
          </a>
          <div class="dropdown-content">
            <a href="#ip-telephony">IP Telephony Solution</a>
            <a href="#network-connectivity">Network & Connectivity Solution</a>
            <a href="#design-testing">Design & Testing</a>
            <a href="#other-services">Other IT Services</a>
          </div>
        </li>
        <li><a href="#internship">Magang</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <!-- Profile Icon -->
      <div class="right-icons">
        <div class="profile">
          <a href="#" class="profile-link" onclick="toggleProfileMenu()">
            <img src="./css/download.png" alt="Profile" />
          </a>
          <div
            class="profile-dropdown"
            id="profileDropdown"
            class="profile-dropdown">
            <a href="#settings">Settings</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
        <!-- Hamburger Icon -->
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
      </div>
    </nav>
  </header>

  <main>
    <section class="dashboard">
      <div class="card">
        <h2>Project Pending</h2>
        <div class="counter" data-target="45">0</div>
      </div>
      <div class="card">
        <h2>Project Progress</h2>
        <div class="counter" data-target="20">0</div>
      </div>
      <div class="card">
        <h2>Project Success</h2>
        <div class="counter" data-target="100">0</div>
      </div>
      <div class="card">
        <h2>Corporate Clients</h2>
        <div class="counter" data-target="75">0</div>
      </div>
    </section>

    <section class="updates">
      <div class="chart-tasks">
        <h2>UPDATE KETERANGAN PROJECT</h2>
          <table>
            <thead>
              <tr>
                <th>User</th>
                <th>Commit</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img
                    src="./css/download.png"
                    alt="logo"
                    class="logo-img" />
                </td>
                <td>PENAMBAHAN FITUR lading page</td>
                <td>29 Juni 2024</td>
              </tr>
              <tr>
                <td>
                  <img src="./css/download.png" alt="logo" class="logo-img" />
                </td>
                <td>membuat login</td>
                <td>29 Juni 2024</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="chart-tasks">
        <div id="chart"></div>
      </div>
      </div>
    </section>

    <section class="tasks">
      <div class="card-tasks">
        <h2>Task List</h2>
        <div class="scroll">
          <div class="task-item">
            <input type="checkbox" checked placeholder="checked" />
            <div class="task-details">
              <p>Verify the event flow</p>
              <span class="date">August 05, 2021</span>
              <img
                src="./css/download.png"
                alt="Profile"
                class="profile-img" />
            </div>
          </div>
          <div class="task-item">
            <input type="checkbox" placeholder="checked" />
            <div class="task-details">
              <p>Verify the event flow</p>
              <span class="date">January 01, 2019</span>
              <img
                src="./css/download.png"
                alt="Profile"
                class="profile-img" />
            </div>
          </div>
          <div class="task-item">
            <input type="checkbox" placeholder="checked" />
            <div class="task-details">
              <p>Verify the event flow</p>
              <span class="date">January 01, 2019</span>
              <img
                src="./css/download.png"
                alt="Profile"
                class="profile-img" />
            </div>
          </div>
          <div class="task-item">
            <input type="checkbox" placeholder="checked" />
            <div class="task-details">
              <p>Verify the event flow</p>
              <span class="date">January 01, 2019</span>
              <img
                src="./css/download.png"
                alt="Profile"
                class="profile-img" />
            </div>
          </div>
          <div class="task-item">
            <input type="checkbox" placeholder="checked" />
            <div class="task-details">
              <p>Verify the event flow</p>
              <span class="date">January 01, 2019</span>
              <img
                src="./css/download.png"
                alt="Profile"
                class="profile-img" />
            </div>
          </div>
        </div>
      </div>
      
      <div class="card-tasks">
        <h2>File Data</h2>
        <div class="files-container">
          <table class="table-figma">
            <thead>
              <tr>
                <th>Page Name</th>
                <th>Line Code</th>
                <th>Bounce Rate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">./layout page.html</a></td>
                <td>400</td>
                <td>45%</td>
              </tr>
              <tr>
                <td><a href="#">./layout page.html</a></td>
                <td>400</td>
                <td>45%</td>
              </tr>
              <tr>
                <td><a href="#">./layout page.html</a></td>
                <td>400</td>
                <td>45%</td>
              </tr>
              <tr>
                <td><a href="#">./layout page.html</a></td>
                <td>400</td>
                <td>45%</td>
              </tr>
              <tr>
                <td><a href="#">./layout page.html</a></td>
                <td>400</td>
                <td>45%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    <section class="upload-section">
      <h2>Upload Gambar dan Video</h2>
      <div class="upload-container">
        <button class="upload-button" onclick="window.location.href='./upload.php'">Upload</button>
      </div>
      <div class="images-table">
        <h3>Daftar Gambar</h3>
        <table>
          <thead>
            <tr>
              <th>nama</th>
              <th>tipe</th>
              <th >Action</th>
=======
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT.MEISSA BERKAH</title>
  <link rel="icon" href="image.png">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="">
  <nav class="navbar navbar-expand-lg card card text-bg-success">
    <div class="container-fluid">
      <a class="nav-link active ms-2" aria-current="page" href="./index.php">
        <img src="image.png" alt="logo" width="35" height="35">
      </a>
      <h3 class="text-dark m-2">PT.MEISSA BERKAH</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <span class="navbar-nav ms-auto mb-0">
          <li class="nav-item nav-link ms-1">
            <a class="btn btn-danger" href="logout.php">Log out</a>
          </li>
          <li class="nav-item nav-link ms-1">
            <a class="btn btn-outline-primary" href="login.php">Login</a> <!-- Link Login -->
          </li>
        </span>
      </div>
    </div>
  </nav>

  <!-- Dashboard Konten -->
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-lg-6">
        <!-- Grafik Penjualan -->
        <h4 class="mb-3">Grafik Penjualan</h4>
        <canvas id="salesChart" width="400" height="200"></canvas>
      </div>

      <div class="col-lg-6">
        <!-- Tabel Data Pengguna -->
        <h4 class="mb-3">Data Pengguna</h4>
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Role</th>
>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43
            </tr>
          </thead>
          <tbody>
            <tr>
<<<<<<< HEAD
              <td>image1.png</td>
              <td>gambar</td>
              <td>
                <a href="./detail.php" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <tr>
              <td>image2.video</td>
              <td>video</td>
              <td>
                <a href="./detail.php" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <!-- Tambahkan baris gambar lainnya sesuai kebutuhan -->
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script type="text/javascript" src="./js/scripts.js"></script>
</body>
</html>
=======
              <td>1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>Admin</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>User</td>
            </tr>
            <tr>
              <td>3</td>
              <td>David Brown</td>
              <td>david@example.com</td>
              <td>Editor</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-12">
        <!-- Tabel Proyek -->
        <h4 class="mb-3">Data Proyek</h4>
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama Proyek</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Proyek A</td>
              <td>Selesai</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Proyek B</td>
              <td>Dalam Proses</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Proyek C</td>
              <td>Ditunda</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Script untuk Grafik Penjualan -->
  <script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
          label: 'Penjualan',
          data: [150, 200, 180, 220, 250, 300],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43

<!DOCTYPE html>
<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <title>Hi, Admin</title>

<style>
    *{
      margin:0;
      padding:0;
      font-family: 'Poppins', sans-serif;
      position:sticky;
    }

    .sidebar ul{
      padding-left:1.8rem;
      padding-right:1.8rem;
    }

    .sidebar a {
      display: block;
      width: 100%;
      text-decoration: none;
      list-style: none;
      color: #026369;
      font-weight: 400;
      font-size: 1rem;
      padding: 10px 10px;
     
    }

    .sidebar li{
      list-style:none;
      width:100%;
      margin-bottom:5px;
    }

    .sidebar-menu ul li a.active {
      background-color: #026369;
      color: #fff;
      border-radius:10px;
    }

    .sidebar-menu ul li a:hover {
      background-color: rgba(2, 99, 105, 0.2);
      color: #026369;
      border-radius:10px;
    }

    .head{
      padding-left:2rem;
      margin-bottom:1.3rem;
    }

    .icon{
      margin-right:13px;
    }

    .sidebar{
      width: 270px;
      position:fixed;
      left:0;
      top;0;
      height:100%;
      background-color: #fff;
      margin:auto;
      box-shadow:0px 3px 10px rgba(0,0,0,0.2);
      z-index:1000;
    }

    li{
      cursor:pointer;
    }

    #card {
      background-color: white;
      border: 1px solid black;
      padding: 10px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    #card button {
      position: absolute;
      top: 5px;
      right: 5px;
    }

    #logout {
      background: red;
      border-radius: 10px;
      color: white;
    }
</style>
</head>

<body>
  <div class="sidebar border">
    <div class="head d-flex align-items-center  mt-3">
      <img class=""src="img/logogo.png" width="90%" alt="">
    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <p>Menu</p>
          <!-- <a id="dashboard" href="index.php"><i class="icon bi bi-house"></i>Dashboard</a> -->
        </li>
        <li>
          <a id="bookings" href="bookings.php"><i class="icon bi bi-card-list"></i>Bookings</a>
        </li>
        <li>
          <a id="tours" href="tours_copy.php"><i class="icon bi bi-airplane-engines"></i>Tour Packages</a>
        </li>
        <li>
          <a id="blogs" href="blogs.php"><i class="icon bi bi-chat-left"></i>Blogs & Reviews</a>
        </li>
        <li>
          <a id="inquiries" href="inquiries.php"><i class="bi bi-telephone"></i><span style="margin-left: 14px">Inquiries</span></a>
        </li>
        <li>
          <a id="archive" href="archive.php"><i class="bi bi-archive"></i><span style="margin-left: 14px">Archives</span></a>
        </li>
        <li>
          <a id="logout" href="login.php" class="btn btn-warning" style="margin-top: 300px;"><span >Logout</span></a>
        </li>
        <!-- <li style="margin-top: 300px;">
          <a id="logout" href='logout.php'><i class="bi bi-box-arrow-left"></i><span style="margin-left: 14px">Logout</span></a>
        </li> -->
      </ul>
    </div>
  </div>
  
  <script>
    //Get the current URL and extract the page name
    var url = window.location.href;
    var pageName = url.substring(url.lastIndexOf("/") + 1);

    //Add the active class to the corresponding menu item based on the page name
    switch (pageName) {
      case "bookings.php":
        document.getElementById("bookings").classList.add("active");
        break;
      case "tours_copy.php":
        document.getElementById("tours").classList.add("active");
        break;
      case "blogs.php":
        document.getElementById("blogs").classList.add("active");
        break;
      case "inquiries.php":
        document.getElementById("inquiries").classList.add("active");
        break;
      case "archive.php":
        document.getElementById("archive").classList.add("active");
        break;
      case "archive.php?page=bookings":
        document.getElementById("archive").classList.add("active");
        break;
      case "archive.php?page=adventures":
        document.getElementById("archive").classList.add("active");
        break;
      case "archive.php?page=blogs":
        document.getElementById("archive").classList.add("active");
        break;
      case "archive.php?page=inquiries":
        document.getElementById("archive").classList.add("active");
        break;
    }
  </script>
</body>
</html>
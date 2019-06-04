<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layouts/script_head'); ?>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <title>Dashboard</title>
  
</head>
<body>
  <?php 
    if($_SESSION['statusid'] != '1')
      {   
        redirect(site_url('home_controller'));
      } 
  ?>
  <?php $this->load->view('layouts/navbar'); ?>
  <!-- <ul class="nav">
    <li><a class="active" href="#home">หน้าหลัก</a></li>
    <li><a href="#news">จัดการข้อมูลสมาชิก</a></li>
    <li><a href="#contact">จัดการข้อมูลข่าวสาร</a></li>
    <li><a href="#about">จัดการข้อมูลการเงิน</a></li>
    <li><a href="#exit">ออกจากระบบ</a></li>
  </ul>

  <div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <marquee bgcolor="#A9E0B8" direction="lefe" scrollamount="5" width="100%">ยินดีต้อนรับเข้าสู่ระบบจัดการบริการภาพถ่ายเพื่อสังคม
        </marquee>
    <h2>Fixed Full-height Side Nav</h2>
    <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
    <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
    <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p> 
  </div> -->


    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar border border-dark border-left-0 border-bottom-0">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  จัดการข้อมูลสมาชิก
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  จัดการข้อมูลข่าวสาร
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
          </table>          
        </main>
      </div>
    </div>


  <?php $this->load->view('layouts/footer'); ?>
  <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>

<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );
</script>

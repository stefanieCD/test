<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tables - SB Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>
  <?php include 'get_latest_data.php'; ?>
  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">简单集成项目</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="index.html"><i class="fa fa-dashboard"></i> 简介</a></li>
          <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> 可视化</a></li>
          <li class="active"><a href="tables.php"><i class="fa fa-table"></i> 数据库</a></li>
          <li><a href="forms.php"><i class="fa fa-edit"></i> 控制台</a></li>
          <li><a href="typography.html"><i class="fa fa-font"></i> 样式表</a></li>
          <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> 表单样式</a></li>
          <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> 布局</a></li>
          <li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>
          <li><a href="1.html"><i class="fa fa-file"></i>水产品贸易中心-客户信息管理</a></li>
            <li><a href="2.html"><i class="fa fa-file"></i>水产品贸易中心-供应商信息管理</a></li>
            <li><a href="3.html"><i class="fa fa-file"></i>水产品贸易中心-产品信息管理</a></li>
            <li><a href="4.html"><i class="fa fa-file"></i>水产品贸易中心-库存信息管理</a></li>
            <li><a href="5.html"><i class="fa fa-file"></i>水产品贸易中心-入库信息管理</a></li>
            <li><a href="6.html"><i class="fa fa-file"></i>水产品贸易中心-销售记录管理</a></li>
            <li><a href="7.html"><i class="fa fa-file"></i>水产品贸易中心-订单记录管理</a></li>
            <li><a href="8.html"><i class="fa fa-file"></i>水产品贸易中心-订单与销售记录关系管理</a></li>
            <li><a href="9.html"><i class="fa fa-file"></i>水产品贸易中心-订单与供应商关系管理</a></li>
            <li><a href="10.html"><i class="fa fa-file"></i>水产品贸易中心-签约关系管理</a></li>
            <li><a href="11.html"><i class="fa fa-file"></i>水产品贸易中心-货运司机管理</a></li>
            <li><a href="12.html"><i class="fa fa-file"></i>水产品贸易中心-订单与供应商关系管理</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>
              Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Dropdown Item</a></li>
              <li><a href="#">Another Item</a></li>
              <li><a href="#">Third Item</a></li>
              <li><a href="#">Last Item</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown messages-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> 消息 <span
                class="badge">7</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">7 New Messages</li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li><a href="#">View Inbox <span class="badge">7</span></a></li>
            </ul>
          </li>
          <li class="dropdown alerts-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> 设备状况 <span
                class="badge">3</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Default <span class="label label-default">Default</span></a></li>
              <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
              <li><a href="#">Success <span class="label label-success">Success</span></a></li>
              <li><a href="#">Info <span class="label label-info">Info</span></a></li>
              <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
              <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
              <li class="divider"></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b
                class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
              <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

      <div class="row">
        <div class="col-lg-12">
          <h1>数据库 <small>数据库可视化及管理</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-table"></i> </li>
          </ol>
          <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <a class="alert-link" href="http://tablesorter.com/docs/">数据库页面管理，数据同时存储于于本地数据库及云数据库内</a>
            <button onclick="updateData()">更新同步数据库</button>
          </div>
        </div>
      </div><!-- /.row -->
      <script>
        function updateData() {
          // Reload the page to fetch fresh data from the database
          location.reload();
        }
      </script>

      <div class="col-lg-6">
        <h2>供应商 Data</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">
            <thead>
              <tr>
                <th>供应商编号<i class="fa fa-sort"></i></th>
                <th>商家名称<i class="fa fa-sort"></i></th>
                <th>商家特色简介<i class="fa fa-sort"></i></th>
                <th>商家地址<i class="fa fa-sort"></i></th>
                <th>联系人<i class="fa fa-sort"></i></th>
                <th>联系方式<i class="fa fa-sort"></i></th>
                <th>热度<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($supplier_result->num_rows > 0) {
                while ($row = $supplier_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["supplier_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contact_person"] . "</td><td>" . $row["contact_info"] . "</td><td>" . $row["popularity"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-lg-6">
        <h2>产品数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped tablesorter">
            <thead>
              <tr>
                <th>产品编号<i class="fa fa-sort"></i></th>
                <th>供应商编号<i class="fa fa-sort"></i></th>
                <th>产品名称<i class="fa fa-sort"></i></th>
                <th>产品描述<i class="fa fa-sort"></i></th>
                <th>产地<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($product_result->num_rows > 0) {
                while ($row = $product_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["supplier_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["origin"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      <br><br><br><br>
      </div>
      


      <div class="col-lg-6">
        <h2>库存数据</h2>
        <div class="table-responsive">
          <table class="table table-hover tablesorter">
            <thead>
              <tr>
                <th>产品编号<i class="fa fa-sort"></i></th>
                </th>
                <th>批次号<i class="fa fa-sort"></i></th>
                </th>
                <th>库存数量<i class="fa fa-sort"></i></th>
                </th>
                <th>储存位置<i class="fa fa-sort"></i></th>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if ($inventory_result->num_rows > 0) {
                while ($row = $inventory_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["batch_number"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["storage_location"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6">
        <h2>进货关系数据</h2>
        <div class="table-responsive">
          <table class="table table-hover table-striped tablesorter">
            <thead>
              <tr>
                <th>产品编号<i class="fa fa-sort"></i></th>
                <th>批次号<i class="fa fa-sort"></i></th>
                <th>供应商编号<i class="fa fa-sort"></i></th>
                <th>进货单价<i class="fa fa-sort"></i></th>
                <th>入库日期<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($purchase_result->num_rows > 0) {
                while ($row = $purchase_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["batch_number"] . "</td><td>" . $row["supplier_id"] . "</td><td>" . $row["purchase_price"] . "</td><td>" . $row["purchase_date"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>



      <div class="col-lg-6">
        <h2>销售记录数据</h2>
        <div class="table-responsive">
          <table class="table table-hover tablesorter">
            <thead>
              <tr>
                <th>销售记录编号<i class="fa fa-sort"></i></th>
                <th>售出单价<i class="fa fa-sort"></i></th>
                <th>销售数量<i class="fa fa-sort"></i></th>
                <th>产品编号<i class="fa fa-sort"></i></th>
                <th>批次号<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($salesrecord_result->num_rows > 0) {
                while ($row = $salesrecord_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["sales_record_id"] . "</td><td>" . $row["selling_price"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["product_id"] . "</td><td>" . $row["batch_number"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


      <div class="col-lg-6">
        <h2>订单销售记录</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">
            <thead>
              <tr>
                <th>订单编号<i class="fa fa-sort"></i></th>
                <th>订单总金额<i class="fa fa-sort"></i></th>
                <th>实付金额<i class="fa fa-sort"></i></th>
                <th>订单状态<i class="fa fa-sort"></i></th>
                <th>发货日期<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($orders_result->num_rows > 0) {
                while ($row = $orders_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["order_id"] . "</td><td>" . $row["total_amount"] . "</td><td>" . $row["actual_amount"] . "</td><td>" . $row["order_status"] . "</td><td>" . $row["delivery_date"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>



      <div class="col-lg-6">
        <h2>订单销售记录关系数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">
            <thead>
              <tr>
                <th>销售记录编号<i class="fa fa-sort"></i></th>
                <th>订单编号<i class="fa fa-sort"></i></th>
                <th>单品利润<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($ordersalesrecord_result->num_rows > 0) {
                while ($row = $ordersalesrecord_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["sales_record_id"] . "</td><td>" . $row["order_id"] . "</td><td>" . $row["profit"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


      <div class="col-lg-6">
        <h2>订单供应商关系数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">


            <thead>
              <tr>
                <th>订单编号<i class="fa fa-sort"></i></th>
                <th>供应商编号<i class="fa fa-sort"></i></th>
                <th>商品权重<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($ordersupplier_result->num_rows > 0) {
                while ($row = $ordersupplier_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["order_id"] . "</td><td>" . $row["supplier_id"] . "</td><td>" . $row["product_weight"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>




      <div class="col-lg-6">
        <h2>客户数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">
            <thead>
              <tr>
                <th>客户编号<i class="fa fa-sort"></i></th>
                <th>客户名称<i class="fa fa-sort"></i></th>
                <th>默认地址<i class="fa fa-sort"></i></th>
                <th>联系人<i class="fa fa-sort"></i></th>
                <th>联系方式<i class="fa fa-sort"></i></th>
                <th>购买次数<i class="fa fa-sort"></i></th>
                <th>总交易额<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($customer_result->num_rows > 0) {
                while ($row = $customer_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["default_address"] . "</td><td>" . $row["contact_person"] . "</td><td>" . $row["contact_info"] . "</td><td>" . $row["purchase_count"] . "</td><td>" . $row["total_transaction"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


      <div class="col-lg-6">
        <h2>签订关系数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">


            <thead>
              <tr>
                <th>订单编号<i class="fa fa-sort"></i></th>
                <th>客户编号<i class="fa fa-sort"></i></th>
                <th>折扣倍率<i class="fa fa-sort"></i></th>
                <th>下单日期<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($contract_result->num_rows > 0) {
                while ($row = $contract_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["order_id"] . "</td><td>" . $row["customer_id"] . "</td><td>" . $row["discount_rate"] . "</td><td>" . $row["order_date"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
        <br><br><br><br><br><br>
      </div>


      <div class="col-lg-6">
        <h2>运货司机数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">


            <thead>
              <tr>
                <th>司机编号<i class="fa fa-sort"></i></th>
                <th>车辆编号<i class="fa fa-sort"></i></th>
                <th>司机姓名<i class="fa fa-sort"></i></th>
                <th>联系方式<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($driver_result->num_rows > 0) {
                while ($row = $driver_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["driver_id"] . "</td><td>" . $row["vehicle_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["contact_info"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


      <div class="col-lg-6">
        <h2>配送关系数据</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover tablesorter">
            <thead>
              <tr>
                <th>订单编号<i class="fa fa-sort"></i></th>
                <th>司机编号<i class="fa fa-sort"></i></th>
                <th>配送状态<i class="fa fa-sort"></i></th>
                <th>配送费用<i class="fa fa-sort"></i></th>
                <th>配送地点<i class="fa fa-sort"></i></th>
                <th>预计送达时间<i class="fa fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php if ($distribution_result->num_rows > 0) {
                while ($row = $distribution_result->fetch_assoc()) {
                  echo "<tr><td>" . $row["order_id"] . "</td><td>" . $row["driver_id"] . "</td><td>" . $row["status"] . "</td><td>" . $row["cost"] . "</td><td>" . $row["location"] . "</td><td>" . $row["estimated_time"] . "</td></tr>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>






    </div><!-- /.row -->






    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>

  <!-- Page Specific Plugins -->
  <script src="js/tablesorter/jquery.tablesorter.js"></script>
  <script src="js/tablesorter/tables.js"></script>

</body>

</html>
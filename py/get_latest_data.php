<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "management";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//查询数据
$supplier_sql = "SELECT * FROM supplier";
$supplier_result = $conn->query($supplier_sql);

$product_sql = "SELECT * FROM product";
$product_result = $conn->query($product_sql);

        
$inventory_sql = "SELECT * FROM Inventory";
$inventory_result =$conn->query($inventory_sql);
        

 
$purchase_sql = "SELECT * FROM Purchase";
$purchase_result =$conn->query($purchase_sql);



$salesrecord_sql = "SELECT * FROM SalesRecord";
$salesrecord_result =$conn->query($salesrecord_sql);
        


$orders_sql = "SELECT * FROM Orders";
$orders_result =$conn->query($orders_sql);



$ordersalesrecord_sql = "SELECT * FROM OrderSalesRecord";
$ordersalesrecord_result =$conn->query($ordersalesrecord_sql);



$ordersupplier_sql = "SELECT * FROM OrderSupplier";
$ordersupplier_result =$conn->query($ordersupplier_sql);



$customer_sql = "SELECT * FROM Customer";
$customer_result =$conn->query($customer_sql);
        


$contract_sql = "SELECT * FROM Contract";
$contract_result =$conn->query($contract_sql);



$driver_sql = "SELECT * FROM Driver";
$driver_result =$conn->query($driver_sql);



$distribution_sql = "SELECT * FROM Distribution";
$distribution_result =$conn->query($distribution_sql);
        
                         
      

// 关闭连接
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Data</title>
</head>
<body>


<!-- Add a button to trigger data update -->
<button onclick="updateData()">更新</button>

<script>
    function updateData() {
        // Reload the page to fetch fresh data from the database
        location.reload();
    }
</script>

<h1>供应商 Data</h1>
    <table border="1">
        <tr>
            <th>供应商编号</th>
            <th>商家名称</th>
            <th>商家特色简介</th>
            <th>商家地址</th>
            <th>联系人</th>
            <th>联系方式</th>
            <th>热度</th>
        </tr>
        <?php if ($supplier_result->num_rows > 0) {
            while ($row = $supplier_result->fetch_assoc()) {
                echo "<tr><td>" . $row["supplier_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contact_person"] . "</td><td>" . $row["contact_info"] . "</td><td>" . $row["popularity"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        } ?>
    </table>
    
    <h1>产品数据</h1>
    <table border="1">
        <tr>
            <th>产品编号</th>
            <th>供应商编号</th>
            <th>产品名称</th>
            <th>产品描述</th>
            <th>产地</th>
        </tr>
        <?php  if ($product_result->num_rows > 0) {
            while ($row =$product_result->fetch_assoc()) {
                echo "<tr><td>" . $row["product_id"] . "</td><td>" .$row["supplier_id"] . "</td><td>" . $row["name"] . "</td><td>" .$row["description"] . "</td><td>" . $row["origin"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>库存数据</h1>
    <table border="1">
        <tr>
            <th>产品编号</th>
            <th>批次号</th>
            <th>库存数量</th>
            <th>储存位置</th>
        </tr>
        <?php if ($inventory_result->num_rows > 0) {
            while ($row =$inventory_result->fetch_assoc()) {
                echo "<tr><td>" . $row["product_id"] . "</td><td>" .$row["batch_number"] . "</td><td>" . $row["quantity"] . "</td><td>" .$row["storage_location"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>进货关系数据</h1>
    <table border="1">
        <tr>
            <th>产品编号</th>
            <th>批次号</th>
            <th>供应商编号</th>
            <th>进货单价</th>
            <th>入库日期</th>
        </tr>
        <?php  if ($purchase_result->num_rows > 0) {
            while ($row =$purchase_result->fetch_assoc()) {
                echo "<tr><td>" . $row["product_id"] . "</td><td>" .$row["batch_number"] . "</td><td>" . $row["supplier_id"] . "</td><td>" .$row["purchase_price"] . "</td><td>" . $row["purchase_date"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
    <h1>销售记录数据</h1>
    <table border="1">
        <tr>
            <th>销售记录编号</th>
            <th>售出单价</th>
            <th>销售数量</th>
            <th>产品编号</th>
            <th>批次号</th>
        </tr>
        <?php    if ($salesrecord_result->num_rows > 0) {
            while ($row =$salesrecord_result->fetch_assoc()) {
                echo "<tr><td>" . $row["sales_record_id"] . "</td><td>" .$row["selling_price"] . "</td><td>" . $row["quantity"] . "</td><td>" .$row["product_id"] . "</td><td>" . $row["batch_number"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
    <h1>订单数据</h1>
    <table border="1">
        <tr>
            <th>订单编号</th>
            <th>订单总金额</th>
            <th>实付金额</th>
            <th>订单状态</th>
            <th>发货日期</th>
        </tr>
        <?php    if ($orders_result->num_rows > 0) {
            while ($row =$orders_result->fetch_assoc()) {
                echo "<tr><td>" . $row["order_id"] . "</td><td>" .$row["total_amount"] . "</td><td>" . $row["actual_amount"] . "</td><td>" .$row["order_status"] . "</td><td>" . $row["delivery_date"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>订单销售记录关系数据</h1>
    <table border="1">
        <tr>
            <th>销售记录编号</th>
            <th>订单编号</th>
            <th>单品利润</th>
        </tr>
        <?php     if ($ordersalesrecord_result->num_rows > 0) {
            while ($row =$ordersalesrecord_result->fetch_assoc()) {
                echo "<tr><td>" . $row["sales_record_id"] . "</td><td>" .$row["order_id"] . "</td><td>" . $row["profit"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>订单供应商关系数据</h1>
    <table border="1">
        <tr>
            <th>订单编号</th>
            <th>供应商编号</th>
            <th>商品权重</th>
        </tr>
        <?php    if ($ordersupplier_result->num_rows > 0) {
            while ($row =$ordersupplier_result->fetch_assoc()) {
                echo "<tr><td>" . $row["order_id"] . "</td><td>" .$row["supplier_id"] . "</td><td>" . $row["product_weight"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>客户数据</h1>
    <table border="1">
        <tr>
            <th>客户编号</th>
            <th>客户名称</th>
            <th>默认地址</th>
            <th>联系人</th>
            <th>联系方式</th>
            <th>购买次数</th>
            <th>总交易额</th>
        </tr>
        <?php    if ($customer_result->num_rows > 0) {
            while ($row =$customer_result->fetch_assoc()) {
                echo "<tr><td>" . $row["customer_id"] . "</td><td>" .$row["name"] . "</td><td>" . $row["default_address"] . "</td><td>" .$row["contact_person"] . "</td><td>" . $row["contact_info"] . "</td><td>" .$row["purchase_count"] . "</td><td>" . $row["total_transaction"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>签订关系数据</h1>
    <table border="1">
        <tr>
            <th>订单编号</th>
            <th>客户编号</th>
            <th>折扣倍率</th>
            <th>下单日期</th>
        </tr>
        <?php    if ($contract_result->num_rows > 0) {
            while ($row =$contract_result->fetch_assoc()) {
                echo "<tr><td>" . $row["order_id"] . "</td><td>" .$row["customer_id"] . "</td><td>" . $row["discount_rate"] . "</td><td>" .$row["order_date"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>运货司机数据</h1>
    <table border="1">
        <tr>
            <th>司机编号</th>
            <th>车辆编号</th>
            <th>司机姓名</th>
            <th>联系方式</th>
        </tr>
        <?php    if ($driver_result->num_rows > 0) {
            while ($row =$driver_result->fetch_assoc()) {
                echo "<tr><td>" . $row["driver_id"] . "</td><td>" .$row["vehicle_id"] . "</td><td>" . $row["name"] . "</td><td>" .$row["contact_info"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

    <h1>配送关系数据</h1>
    <table border="1">
        <tr>
            <th>订单编号</th>
            <th>司机编号</th>
            <th>配送状态</th>
            <th>配送费用</th>
            <th>配送地点</th>
            <th>预计送达时间</th>
        </tr>
        <?php    if ($distribution_result->num_rows > 0) {
            while ($row =$distribution_result->fetch_assoc()) {
                echo "<tr><td>" . $row["order_id"] . "</td><td>" .$row["driver_id"] . "</td><td>" . $row["status"] . "</td><td>" .$row["cost"] . "</td><td>" . $row["location"] . "</td><td>" .$row["estimated_time"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>

</html>





   

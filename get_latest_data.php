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

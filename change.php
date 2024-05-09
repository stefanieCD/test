<?php
// 连接到数据库
$servername = "localhost";$username = "root";
$password = "123456";$dbname = "management";

$conn = new mysqli($servername, $username,$password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 处理删除操作
if(isset($_POST['delete_id'])) {
    $delete_id =$_POST['delete_id'];
    $sql = "DELETE FROM Purchase WHERE product_id =$delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "删除成功";
    } else {
        echo "删除失败";
    }
}

// 处理插入操作
if(isset($_POST['product_id']) && isset($_POST['batch_number']) && isset($_POST['supplier_id']) && isset($_POST['purchase_price']) && isset($_POST['product_date'])) {

    // 假设这些变量已经从HTML表单或其他地方获取
    $product_id = intval($_POST['product_id']);
    $batch_number =$_POST['batch_number'];
    $supplier_id =$_POST['supplier_id'];
    $purchase_price =$_POST['purchase_price']; // 假设purchase_price已经是整数类型
    $product_date =$_POST['product_date']; // 假设product_date已经是日期格式

    // 使用mysqli_real_escape_string()防止SQL注入
    $product_id =$conn->real_escape_string($product_id);
    $batch_number =$conn->real_escape_string($batch_number);
    $supplier_id =$conn->real_escape_string($supplier_id);
    $purchase_price =$conn->real_escape_string($purchase_price);
    $product_date =$conn->real_escape_string($product_date);

    // 使用mysqli_query()执行SQL查询
    $sql = "INSERT INTO Purchase (product_id, batch_number, supplier_id,purchase_price,purchase_date) VALUES ($product_id, '$batch_number','$supplier_id','$purchase_price', '$product_date')";
    if ($conn->query($sql) === TRUE) {
        echo "插入成功";
    } else {
        echo "插入失败: " . $conn->error;
    }
}

// 关闭数据库连接
$conn->close();
?>

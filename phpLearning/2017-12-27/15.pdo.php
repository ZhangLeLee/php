<?php 
# 数据库发生改变或数据移植
/*
1:PDO真正的以底层实现的统一接口数库操作接口，不管后端使用的是何种数据库，如果代码封装好了以后，应用层调用基本上差不多的，当后端数据库更换了以后，应用层代码基本不用修改.

2:PDO支持更高级的DB特性操作，如：存储过程的调度等,mysql原生库是不支持的.

3:PDO是PHP官方的PECL库，兼容性稳定性必然要高于MySQL Extension,可以直接使用 pecl upgrade pdo 命令升级.

4:PDO可以防止SQL注入，确保数据库更加安全
*/

# 如何使用pdo操作数据库

# 1.用pdo链接数据库
$dsn = 'mysql:dbname=user;host=localhost';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn,$user,$pass);
$pdo->query("set names utf8");
$stmt = $pdo->query('select * from users');
$rows = $stmt->fetchAll();
echo "<pre>";
print_r($rows);





 ?>

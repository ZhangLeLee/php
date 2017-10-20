<?php 
	require("config/config.php");
	require("config/db.php");

	// 编辑博客
	if (isset($_POST['submit'])) {
		# 获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);

		# 获取到update_id
		$update_id = mysqli_real_escape_string($conn,$_POST['update_id']);

		if(!empty($title) && !empty($author) && !empty($body)){
			$query = "UPDATE posts SET title='$title',author='$author',body='$body' WHERE id={$update_id} ";
			mysqli_query($conn,"set names utf8");

			if(mysqli_query($conn,$query)){
				header("location: index.php");
			} else {
				echo "数据插入失败".mysql_error($conn);
			}
		}
	}

	mysqli_query($conn,"set names utf8");
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	$query = "SELECT * FROM posts WHERE id={$id}";
	$result = mysqli_query($conn, $query);
	$post = mysqli_fetch_assoc($result);
	// var_dump($post);
	mysqli_free_result($result);
	mysqli_close($conn);
	
?>


<?php include("inc/header.php"); ?>
	<div class="container">
		<h1 class="text-muted">编辑博客</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>标题</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
			</div>
			<div class="form-group">
				<label>作者</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
			</div>
			<div class="form-group">
				<label>内容</label>
				<input type="text" name="body" class="form-control" value="<?php echo $post['body']; ?>">
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
			<input class="btn btn-primary btn-block" type="submit" value="确认" name="submit">
		</form>
	</div>
<?php include("inc/footer.php"); ?>


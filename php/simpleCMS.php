<?php
	$jsonobj = '{"0":{"title":"ok","content":"hey hey hey"},"1":{"title":"test","content":"this is the test post"}}';
	$arr = json_decode($jsonobj, true);
	

	if(isset($_REQUEST['action'])){
		if($_REQUEST['action']=="Edit"){
			$editID = $_REQUEST['postSelect'];
			$editTitle = $arr[$editID]['title'];
			$editContent = $arr[$editID]['content'];
		}
	}

?>
<html>
	<head>
		<title>simpleCMS</title>
		<style>
			td{text-align:left;vertical-align: top;}
			
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>Posts</th>
				<th>Edit Post</th>
			</tr>
			
			<tr>
				<td>
					<form>
						<select name="postSelect" multiple>
							<?php
								foreach ($arr as $key =>$value){
									print '<option value ="'.$key.'">'.$value['title']."</option>";
								}
							?>

							<!--
							<option value ="4">Most Recent Post</option>
							<option value ="3">Ok this is awsome</option>
							<option value ="2">Thinking about trees</option>
							<option value ="1">first post</option>-->
						</select><br>
						<input type="submit" value="Edit" name="action">
						<input type="submit" value="New" name="action">
					</form>
				</td>
				<td>
					<form method="post">
						<div style="visibility:hidden;display:box;">id: 
							<input type="text" value="<?php     if(isset($editID))echo $editID;else echo "-1";?>" name="updateID"></div>
						Title<br> <input type="text" name="updateTitle" value="<?php     if(isset($editID))echo $editTitle;?>"><br>
						Text<br><textarea name="updateContent"><?php     if(isset($editID))echo $editContent;?></textarea><br>
						<input type="submit" value="update">
					</form>
				</td>
				
			</tr>
			
		</table>
	</body>
</html>

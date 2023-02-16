<?php
	$jsonobj = '{"0":{"title":"ok"}}';
	$var = json_decode($jsonobj);
	print_r($var);
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
							<option value ="4">Most Recent Post</option>
							<option value ="3">Ok this is awsome</option>
							<option value ="2">Thinking about trees</option>
							<option value ="1">first post</option>
						</select><br>
						<input type="submit" value="Edit" name="action">
						<input type="submit" value="New" name="action">
					</form>
				</td>
				<td>
					<form>
						<sub style="visibility:hidden;display:none;">id: 
							<input type="text" value="3" name="id"></sub>
							<br>
						
						
						Title<br> <input type="text"><br>
						Text<br><textarea></textarea><br>
						<input type="submit" value="update">
					</form>
				</td>
				
			</tr>
			
		</table>
	</body>
</html>

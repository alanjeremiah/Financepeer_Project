
<?php
include('db_connection.php');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
	</script>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script>

	<style>
		.box {
			width: 1200px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 100px;
		}
	</style>
</head>

<body style="background-color:  #D2B48C">
	<div class="container box">
		<h3 align="center">
			Import JSON
			data into database
		</h3><br />
        
        <div align = "center">
            <p><strong>Upload a Json File</strong></p>
            <form enctype="multipart/form-data" action="Home_process.php" method="post">
                <input type="file" name = "File" id="file" onchange="return fileValidation()" /> <br>
                <button type="submit" name="Upload"> Upload</button>
            </form>
        </div>
        <script>
		function fileValidation() {
			var fileInput =
				document.getElementById('file');
			
			var filePath = fileInput.value;
		
			// Allowing file type
			var allowedExtensions = 
					/(\.json)$/i;
			
			if (!allowedExtensions.exec(filePath)) {
				alert('Invalid file type');
				fileInput.value = '';
				return false;
			}
            return true
		}
	</script>
		
		<br />
	</div>
</body>

</html>


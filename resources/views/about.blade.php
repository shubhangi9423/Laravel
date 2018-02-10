<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body{
			margin:0;
			min-width: 250px;
		}
		*{
			box-sizing: border-box;
		}
		ul{
			margin: 0;
			padding: 0;
		}
		ul li{
			cursor: pointer;
			position: relative;
			padding: 12px 8px 12px 4px;
			list-style-type: none;
			background: #eee;
			font-size: 18px;
			transition: 0.25;
		}

		-webkit-user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		user-select:none;
	    </style>

	</head>
	<body>
		<div id="myDIV" class="header">
			<h2 style="margin: 5px">My To Do List</h2>

			<form method="POST">
				<input type="text" name="task" id="myInput" placeholder="Title....">
				<input type="submit" name="" value="Add" class="AddBtn">
			</form>
		</div>
      <ul id="myUL">
      	<li>Hit the gym<a href="" class="close">X</a></li>
      	<li class="checked">Pay bills<a href="" class="close">X</a></li>
      	<li>Meet George<a href="" class="close">X</a></li>
      	<li>Read a book<a href="" class="close">X</a></li>

      </ul>


	</body>
</html>
<html>
<head>
	<meta charset="UTF-8">
<title></title>
<style>
body{
	margin:0;
	padding:0;
}
.container{
	height:100%;
	min-height: 1024px;
	width:auto;
	margin:;
}
.leftFolderColumn
{
	height:cover;
	width:20%;
	margin:;
	float:left;
	background-color: lightgrey;

}
.rightPhotoColumn
{
min-height:100%;
	height:auto;
	width:80%;
	margin:;
	float:left;
	background:url('fzm-seamless-corkboard-texture-01-800x800.jpg')fixed;
background-repeat: repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.pframe{
  background-color:white;
  height:200px;
  width:200px;
  border:white 1px solid;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  margin:10px 40px 30px 10px;
  float:left;

}
.pTitle{height:40px;width:100%:;margin:;}
.pPhoto{height:150px;width:180px;margin:10px 10px 0px  10px;background-color:black;}
.pTitle{font-size:26px;font-weight:bolder;text-align:center;}
.pframe:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}


.folderList{height:22px;width:100%;color:#434343;font-family:"Times New Roman";font-size:14px;text-align: center;font-weight:bolder;line-height: 2;}
.folderList:hover{height:22px;width:100%;color:white;font-family:"Times New Roman";font-size:14px;text-align: center;background:linear-gradient(#288FE0, #1B79E8);font-weight:bolder;line-height: 2;}

.folderSelect{}
</style>
</head>

<body>

<div class="container">
	<div class="leftFolderColumn">
<div class="folderList">Test folder UI</div>
	</div>

	<div class="rightPhotoColumn">
		<!-- photo template  begin-->
<?php
foreach (glob("*.jpg") as $filename) {
	echo "<div class=\"pframe\">";
	echo "<a href=\"".$filename."\">";
	echo "<img src=\"".$filename."\" class=\"pPhoto\" style=\"border:solid 1px lightgrey;display:block\"></a>";
	echo "<div class=\"pTitle\">"."title"."</div></div>";
}		
?>
<!-- photo template end-->
	</div>

</div>

<script type="">

</script>

</body>
</html>

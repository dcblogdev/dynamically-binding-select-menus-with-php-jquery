<?php require('config.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dynamically binding select menus with PHP & jQuery</title>
  <style type="text/css">
  <!--
  p {
    color: #555555;
    font-size: 0.9em;
    line-height: 1.9em;
    margin: 3px 3px 10px;
  }

  a {
    color: #EF1F2F;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  form input {
    border: 1px solid #999999;
    border-bottom-color: #cccccc;
    border-right-color: #cccccc;
    padding: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.0em;
    margin: 2px;
  }

  #wrapper {
    margin:auto;
    width:900px;
  }
  -->
  </style>
</head>
<body> 

<div id="wrapper">

    <h1>Dynamically binding select menus with PHP & jQuery</h1>

    <p>This demo shows two select menus the second is determined by the first.</p>
 
	<form action='' method='post'>

		<p><label>Book Type:</label>
      <select name='catID' id='catID'>
      <option value=''>Select</option>
      <?php
      $stmt = $conn->query('SELECT catID,catTitle FROM book_categories ORDER BY catTitle');
      while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
          echo "<option value='$row->catID'>$row->catTitle</option>";
      }
      ?>
     </select>
    </p>

    <p><label>Book:</label>
      <select name='bookID' id='bookID'></select>

	</form>

  <p>Read the full <a href="http://www.daveismyname.com/tutorials/php-tutorials/dynamically-binding-select-menus-with-php-jquery/">Dynamically binding select menus with PHP & jQuery</a> Tutorial</p>

</div>
 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(function() {
 
 $("#catID").bind("change", function() {
     $.ajax({
         type: "GET", 
         url: "change.php",
         data: "catID="+$("#catID").val(),
         success: function(html) {
             $("#bookID").html(html);
         }
     });
 });
			
 
});
</script>
</body>
</html>
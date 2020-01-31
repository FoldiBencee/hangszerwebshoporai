<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <title>Insert and Retrieve data from MySQL database with ajax</title>
  <link rel="stylesheet" href="styles.css">

<div class="container-fluid" style="text-align: center;">
  <h1 style="color: #9D11EE">Hangszerwebshop</h1>
  <p></p>
</div>
<style>
  .wrapper {
  width: 45%;
  height: auto;
  margin: 10px auto;
  border: 1px solid #cbcbcb;
  
  
}
/*
* COMMENT FORM
**/
.comment_form {
  width: 80%;
  margin: 100px auto;
  border: 1px solid green;
  background: #fafcfc;
  padding: 20px;
  opacity: 1;
  
}
.comment_form label {
  display: block;
  margin: 5px 0px 5px 0px;
  opacity: 1;
}
.comment_form input, textarea {
  padding: 5px;
  width: 95%;
  opacity: 1;
}
#submit_btn, #update_btn {
  padding: 8px 15px;
  color: white;
  background: #339;
  border: none;
  border-radius: 4px;
  margin-top: 10px;
  opacity: 1;
}
#update_btn {
  background: #1c7600;
  opacity: 1;
}
/*
* COMMENT DISPLAY AREA
**/
#display_area {
  width: 90%;
  padding-top: 15px;
  margin: 10px auto;
  opacity: 1;
}
.comment_box {
  cursor: default;
  margin: 5px;
  border: 1px solid #cbcbcb;
  padding: 5px 10px;
  position: relative;
  opacity: 1;
}
.delete {
  position: absolute;
  top: 0px;
  right: 3px;
  color: red;
  display: none;
  cursor: pointer;
  opacity: 1;
}
.edit {
  position: absolute;
  top: 0px;
  right: 45px;
  color: green;
  display: none;
  cursor: pointer;
  opacity: 1;
}
.comment_box:hover .edit, .comment_box:hover .delete {
  display: block;
  opacity: 1;
}
.comment_text {
  text-align: justify;
  opacity: 1;
}
.display_name {
  color: blue;
  padding: 0px;
  margin: 0px 0px 5px 0px;
  opacity: 1;
}









</style>


</head>
<body background="hatter.jpg">

  <div style="color: #9D11EE ;" class="container">
    <?php echo $comments; ?>
    <form class="comment_form" style="opacity: 0.9;">
      <div>
        <label for="name">Kategória:</label>
        <input type="text" name="kategoria" id="katetgoria">
      </div>
      <div>
        <label for="comment">Márka:</label>
        <textarea name="marka" id="marka" cols="30" rows="5"></textarea>
      </div>
      <div>
        <label for="comment">Ár:</label>
        <textarea name="ar" id="ar" cols="30" rows="5"></textarea>
      </div>
      <div>
        <label for="comment">Készleten:</label>
        <textarea name="keszleten" id="keszleten" cols="30" rows="5"></textarea>
      </div>
      <button type="button" id="submit_btn">Felvétel</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
    </form>
  </div>
</body>
</html>
<!-- Add JQuery -->
<script src="jquery.min.js"></script>
<script src="scripts.js"></script>






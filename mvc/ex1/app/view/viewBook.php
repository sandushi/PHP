
<!DOCTYPE html>
<html>
<head>
<style>

body {
  background-color: #faf2e4;
  margin: 0 15%;
  font-family: sans-serif;
  }

h1 {
  text-align: center;
  font-family: serif;
  font-weight: normal;
  text-transform: uppercase;
  border-bottom: 1px solid #57b1dc;
  margin-top: 30px;
}

h2 {
  color: #d1633c;
  font-size: 1em;
}

</style>
</head>

<body>


<h1><?php echo "Title : {$book['title']}"; ?></h1>
<h2><?php echo "Category : {$book['category']}"; ?></h1>
<h2><?php echo "Author : {$book['author']}"; ?></h1>
<p><?php echo "Author : {$book['description']}"; ?></p>





</body>


</html>



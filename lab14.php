<html>
<head>
<title>Array Sorting</title>
<style>
body {
    font-family: Arial;
    background: lightblue;
    text-align: center;
}
.container {
    background: white;
    width: 600px;
    margin: 40px auto;
    padding: 80px 20px;
    border-radius: 15px;
}
h2 {
    color: darkblue;
}
pre {
    background: #f2f6fc;
    display: inline-block;
    text-align: left;
    padding: 60px 80px;
    border-radius: 10px;
}
</style>
</head>
<body>
<div class="container">
<?php
$students = array("Alice", "Bob", "Charlie", "David", "Eve");
echo "<h2>Original Array:</h2>";
print_r($students);
asort($students);
echo "<h2>Ascending Order (asort):</h2>";
print_r($students);
arsort($students);
echo "<h2>Descending Order (arsort):</h2>";
print_r($students);
?>
</div>
</body>
</html>

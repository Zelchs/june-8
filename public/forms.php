<form action="forms.php" method="get">
<input type="email" name="myEmail" id="myEmail" placeholder="email">
<input type="text" name="myName" id="myName" placeholder="name">
<button type="submit">Submit Me</button>
</form>
<?php
if (isset($_GET['myName'])) {
    echo "<hr>Hello there " . $_GET['myName'] . ". Nice to meet you";
} 
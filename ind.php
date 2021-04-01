<?php
 echo ("biti");
 echo("ne biti");
echo("pitanje je");
?>

<script>

console.log("olaa")
</script>
<form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">

<input name="nesto" type="text" value="type..."/>
<input name="nesto" type="text" value="author"/>
<input type="submit" value="add"/>
</form>
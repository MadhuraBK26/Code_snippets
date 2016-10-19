<html>
<input type="text" name="input[a]" value="1" />
<input type="text" name="input[b]" value="2" />
<input type="text" name="input[c]" value="3" />
</html>
<?php
foreach ($_POST['input'] as $shortcut => $ses) {
    // process $shortcut and $ses
}
?>
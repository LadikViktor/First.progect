<form method="POST" action="?action=edit">


    <?php
    foreach ($data as $key => $value) {
        echo "<input type='text' name='$key' value='$value'> <br>";
    }
    // print_r($data);
    ?>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="OK">
</form>
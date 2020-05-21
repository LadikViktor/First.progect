<?php
echo "<table class='table table-sm table-inverse w-25 p-3 bg-warning'>";
foreach ($table as $row) {
    echo "<tr class=' border border-dark'>";
    foreach ($row as $value) {
        echo "<td class='border border-dark'>$value</td>";
    }
    echo '</td>';
}
echo '</table>';
?>

<form>
    <div class="form-group ">
        <input type="text" class=".form-control-sm bg-warning" placeholder="Имя">
        <input class="btn btn-danger" type="submit" value="OK">
    </div>
    <div class="form-group">
        <textarea class=".form-control-sm bg-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
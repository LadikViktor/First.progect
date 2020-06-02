<?php
echo "<table class = 'table'>";
foreach ($table as $row) {
    echo '<tr>';
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a href='?action=del&id=$row[id]'>❌</a></td>";
    echo "<td><a href='?action=showedit&id=$row[id]'>🔨</a></td>";
    echo "</tr>";
}
echo '</table>';
?>
<form method="POST" action="?action=add" class="form">
    <textarea name='text'></textarea>
    <input name='name' type="text" value='name'>
    <input type="submit" value='OK'>
</form>
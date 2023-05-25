<?php
$res = mysqli_query("select * from clothing order by item_type, item_size");

$item_type=null;
while ($row = mysqli_fetch_assoc($res)) {
    if ($item_type != $row['item_type']) {
        $item_type = $row['item_type'];
        echo $item_type . "\r\n";
    }
    echo $row["item_name"];
    echo $row["item_size"];
    echo $row["item_desc"];
}
?>
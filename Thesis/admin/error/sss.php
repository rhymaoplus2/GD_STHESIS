<?php
    $query = $_GET['query'];
    $min_length = 1;
    if(strlen($query) >= $min_length)
    { 
        $query = htmlspecialchars($query);
        $query = mysql_real_escape_string($query);
        $raw_results = mysql_query("SELECT * FROM barang WHERE (`tanggal` LIKE '%".$query."%')") or die(mysql_error());
        if(mysql_num_rows($raw_results) > 0)
        { 
?>
        <table width="107%" class="view">
        <thead>
            <tr>
                <th width="180">Tanggal</th>
                <th width="150">Barang Masuk</th>
                <th width="90">Bijih Keluar</th>
                <th width="120">Kantong Hitam Keluar</th>
                <th width="120">Kantong Putih Keluar</th>
                <th width="90">Stok Bijih</th>
                <th width="90">Stok Kantong Hitam</th>
                <th width="90">Stok Kantong Putih</th>
                <th width="130">Catatan</th>
            </tr>
        </thead>
<?php
        while($results = mysql_fetch_assoc($raw_results))
        {
            <tr>
                <td><?php echo $results['tanggal']; ?></td>
                <td><?php echo $results['barang_in']; ?></td>
                <td><?php echo $results['bijih_out']; ?></td>
                <td><?php echo $results['htm_out']; ?></td>
                <td><?php echo $results['pth_out']; ?></td>
                <td><?php echo $results['bijih']; ?></td>
                <td><?php echo $results['kantong_htm']; ?></td>
                <td><?php echo $results['kantong_pth']; ?></td>
                <td><?php echo $results['note']; ?></td>
            </tr>
   <?php             
        }
?>
        </table>
<?php

        }
        else
        { // if there is no matching rows do following
            echo "Hasil tidak bisa ditemukan atau tidak ada di dalam database.";
        }

    }
    else
    { 
        echo "Minimum length is ".$min_length;
    }
?>
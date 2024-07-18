<div class="sidebar">
    <h4 style="text-align:center">Hãng sản xuất</h4>
    <ul class="list-sidebar">
        <?php
            $sql = "select * from danhmuc order by iddanhmuc DESC";
            $query = mysqli_query($connect,$sql);
            while ($row = mysqli_fetch_array($query)){
        ?>
        <li class="sidebar-item"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['iddanhmuc']?>"><?php echo $row['ten']?></a></li>
        <?php } ?>
    </ul>
</div>
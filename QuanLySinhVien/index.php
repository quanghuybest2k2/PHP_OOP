<?php
require_once 'header.php' ?>
<h1>Nội dung:</h1>
<div>
    <p>Nội dung website</p>
    <table width="100%">
        <tr>
            <th>STT</th>
            <th>Mã lớp</th>
            <th>Tên lớp</th>
        </tr>
        <?php $query = "SELECT * FROM lop";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                echo $malop = $row["MaLop"];
                echo $tenlop = $row["TenLop"];
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$malop</td>";
                echo "<td>$tenlop</td>";
            }
        } else {
            echo "Không có lớp.";
        }  ?>
    </table>

    <?php
    // $query = "SELECT CONCAT(HoTenLot, ' ', Ten) AS HoTen from sinhvien";
    // $result = mysqli_query($conn, $query);
    // if (mysqli_num_rows($result) > 0) {
    //     $i = 0;
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $i++;
    //         echo "$i. " . $row["HoTen"] . "<br/>";
    //     }
    // } else {
    //     echo "Không có sinh viên nào.";
    // }
    require_once './right.php';
    require_once './footer.php'
    ?>
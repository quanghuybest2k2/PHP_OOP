<?php
require_once 'header.php' ?>
<h1>Nội dung:</h1>
<div class="container">
    <h2>Thông tin sinh viên</h2>
    <table width="100%">
        <tr>
            <th>STT</th>
            <th>Họ và tên</th>
            <th>Lớp</th>
        </tr>
        <?php
        $query = "SELECT CONCAT(HoTenLot, ' ', Ten) AS HoTen, tenlop FROM sinhvien sv, lop l WHERE sv.lopID = l.id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                $hoTen = $row["HoTen"];
                $tenLop = $row["tenlop"];
                echo "<tr>
                        <td>$i</td>
                        <td>$hoTen</td>
                        <td>$tenLop</td>
                      </tr>";
            }
        } else {
            echo "Không có sinh viên nào.";
        }
        ?>
    </table>
</div>
<?php
require_once './right.php';
require_once './footer.php'
?>
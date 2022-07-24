<?php
require_once 'header.php' ?>
<div class="container">
    <h2>Thông tin sinh viên</h2>
    <table width="100%" class="table table-dark table-hover">
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

    <?php require_once './right.php'; ?>
    <?php require_once './footer.php' ?>
    <hr />
    <div class="card" style="width:400px">
        <img class="card-img-top" src="./images/Huy.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Đoàn Quang Huy</h4>
            <p class="card-text">Sinh viên K44 Trường Đại học Đà Lạt.</p>
            <a href="https://github.com/quanghuybest2k2/" class="btn btn-primary">Github</a>
        </div>
    </div>
</div>
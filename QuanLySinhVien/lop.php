<?php
require_once 'header.php' ?>
<h1>Nội dung:</h1>
<div>
    <table width="100%" class="table table-dark table-hover table-sm">
        <tr>
            <th>STT</th>
            <th>Lớp</th>
            <th>Xử lý</th>
        </tr>
        <?php $query = "SELECT * FROM lop";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                $malop = $row["id"];
                $tenlop = $row["TenLop"];
        ?>
                <?php
                echo "<tr>
                        <td>$i</td>
                        <td>$tenlop</td>"; ?>
                <td><button type="button" class="btn btn-warning">Sửa</button></td>
                <td><button type="button" class="btn btn-danger" name="xoa">Xóa</button></td>
        <?php
                echo "</tr>";
            }
        } else {
            echo "Không có lớp.";
        }  ?>
    </table>
    <hr>
    <form method="POST">
        <div class="form-group">
            <label>Tên lớp:</label>
            <input type="text" class="form-control" name="tenLop">
        </div>
        <button type="submit" class="btn btn-primary" name="themLop">Thêm lớp</button>
        <button class="btn btn-dark" onclick="history.go(-1);">Trở về</button>
    </form>
    <?php
    if (isset($_POST['themLop'])) {
        $tenLop = $_POST["tenLop"];
        $query = "INSERT INTO lop(TenLop) VALUES('$tenLop')";
        mysqli_query($conn, $query) or die("Thêm không thành công!!!");
        header('Location:lop.php'); // reload
    }
    // xoa
    if (isset($_POST['xoa'])) {

        $query = "DELETE FROM lop WHERE id = $malop";
        mysqli_query($conn, $query) or die("Xóa không thành công!!!");
        header('Location:lop.php'); // reload
    }
    //require_once './right.php';
    require_once './footer.php'
    ?>
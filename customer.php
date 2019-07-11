<?php
require './header.php';

?>
<div id="customer">
	<table>
		<tr>
		<th>STT</th>
		<th>Tài khoản</th>
		<th>Ảnh đại diện</th>
		<th>Tên khách hàng</th>
		<th>Địa chỉ</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Sửa</th>
     	 <th>Xóa</th>
		</tr>
			<?php
            require_once './connection.php';
               $stt=1;
                $rows = array();
                 $result=mysqli_query($connect,"SELECT `id_custom`, `username`, `avatar`,`name`, `address`, `email_contact`, `phone` FROM `customer` INNER JOIN `account` ON `id_acount` = `id_account`");
               while ($data = mysqli_fetch_assoc($result))
                        
               { $rows[] = $data;
                   echo"<tr>";
                    echo"<td >$stt</td>";
                    echo"<td >$data[username]</td>";
                    echo"<td >$data[avatar]</td>";
                    echo"<td >$data[name]</td>";
                    echo"<td >$data[address]</td>";
                    echo"<td >$data[email_contact]</td>";
                    echo"<td >$data[phone]</td>";
                    echo " <td><a style='color: #ffcc00' href='edit_sanpham.php?id=$data[id_custom]'>Sửa</a></td>";
                    echo"<td><a style='color: red' href='delete_sanpham.php?id=$data[id_custom] '>Xóa</a></td>";
                echo"</tr>";
                $stt++;
               }
               
           
                mysqli_close($connect);
                        ?>
	</table>
	</table>
</div>

</body>
</html>
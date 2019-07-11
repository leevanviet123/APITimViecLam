<?php
require 'header.php';
?>
<div id="account">
	<table>
		<tr >
			<th>STT</th>
			<th>Tài khoản</th>
			<th>Mật khẩu</th>
			<th>Tên hiển thị</th>
			<th>Email</th>
			<th>Sửa</th>
      		<th>Xóa</th>
		</tr>
		<?php
            require_once './connect.php';
               $stt=1;
               $rows = array();
             $result=mysqli_query($connect,"SELECT `id_account`, `username`, `password`, `name_displayed`, `email_restore` FROM `account`");
               while ($data = mysqli_fetch_assoc($result))
                        
               { $rows[] = $data;
                   echo"<tr>";
                    echo"<td >$stt</td>";
                    echo "<td>$data[username]</td>";
                    echo "<td>$data[password]</td>";
					echo "<td>$data[name_displayed]</td>";
					echo "<td>$data[email_restore]</td>";
                    echo " <td><a style='color: #ffcc00' href='edit_sanpham.php?id=$data[id_account]'>Sửa</a></td>";
                    echo"<td><a style='color: red' href='delete_sanpham.php?id=$data[id_account] '>Xóa</a></td>";
                echo"</tr>";
                $stt++;
               }
              
           
                mysqli_close($connect);
               ?>
	</table>
</div>
		
</body>
</html>
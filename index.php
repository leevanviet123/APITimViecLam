<?php 
 require'./header.php';
 ?>
<div id="job">
	<table>
		<tr >
			<th>STT</th>
			<th>Ngành nghề</th>
			<th>Tên Việc</th>
			<th>Yêu cầu</th>
			<th>Lương</th>
			<th>Mô tả</th>
			<th>Số lượng tuyển</th>
			<th>Liên hệ</th>
      <th>Sửa</th>
      <th>Xóa</th>
		</tr>
		<?php
            require_once './connection.php';
               $stt=1;
                $rows = array();
    $result = mysqli_query($connect,"SELECT `id_job`, `name_work`,`Name`, `Request`, `salary`, `describe`,`number`, `contact` FROM `job`INNER JOIN `category` ON `id` = `id_category` ");
               while ($data = mysqli_fetch_assoc($result))              
               { $rows[] = $data;
                   echo"<tr>";
                    echo"<td >$stt</td>";
                    echo"<td >$data[name_work]</td>";
                    echo"<td >$data[Name]</td>";
                    echo"<td >$data[Request]</td>";
                    echo"<td >$data[salary]</td>";
                    echo"<td >$data[describe]</td>";
                    echo"<td >$data[number]</td>";
                    echo"<td >$data[contact]</td>";
                    echo " <td><a style='color: #ffcc00' href='edit_sanpham.php?id=$data[id_job]'>Sửa</a></td>";
                    echo"<td><a style='color: red' href='delete_sanpham.php?id=$data[id_job] '>Xóa</a></td>";
                echo"</tr>";
                $stt++;
               }
               
                mysqli_close($connect);
                        ?>
	</table>
</div>
		
</body>
</html>
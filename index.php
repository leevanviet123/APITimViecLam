<?php 
 require'./header.php';
 ?>
<div id="job">
	<table>
		<tr >
			<th>STT</th>
			<th>Tên Việc</th>
			<th>Yêu cầu</th>
			<th>Lương</th>
			<th>Mô tả</th>
			<th>Số lượng tuyển</th>
			<th>Liên hệ</th>
		</tr>
		<?php
            require_once './connect.php';
               $stt=1;
                $rows = array();
               $result=mysqli_query($connect,"SELECT `id`, `Name`, `Request`, `salary`, `describe`, `number`, `contact` FROM `job` ");
               while ($data = mysqli_fetch_assoc($result))
                        
               { $rows[] = $data;
                   echo"<tr>";
                    echo"<td >$stt</td>";
                    echo"<td style = 'text-align: center'>$data[Name]</td>";
                    echo"<td style = 'text-align: center'>$data[Request]</td>";
                    echo"<td style = 'text-align: center'>$data[salary]</td>";
                    echo"<td style = 'text-align: center'>$data[describe]</td>";
                    echo"<td style = 'text-align: center'>$data[number]</td>";
      				echo"<td style = 'text-align: center'>$data[contact]</td>";
                    echo " <td><a style='color: #ffcc00' href='edit_sanpham.php?id=$data[id]'>Sửa</a></td>";
                    echo"<td><a style='color: red' href='delete_sanpham.php?id=$data[id] '>Xóa</a></td>";
                echo"</tr>";
                $stt++;
               }
           
                mysqli_close($connect);
                        ?>
	</table>
</div>
		
</body>
</html>
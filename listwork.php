<?php
require './header.php';

?>
<div id="listwork">
	<table>
		<tr >
			<th>STT</th>
			<th>Ngành nghề</th>
			<th>Sửa</th>
     		 <th>Xóa</th>
			
		</tr>
		<?php
           require_once './connection.php';
               $stt=1;
                $rows = array();
               $result=mysqli_query($connect,"SELECT `id`, `name_work` FROM `category` ");
               while ($data = mysqli_fetch_assoc($result))
                        
               { $rows[] = $data;
                   echo"<tr>";
                    echo"<td >$stt</td>";
                    echo"<td >$data[name_work]</td>";
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
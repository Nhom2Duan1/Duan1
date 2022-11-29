<div class="content">
<div class="content">
        <div class="introduce_container">
        <div class="title">
        <h1>Danh sách tài khoản</h1>
        </div>
       <div>
       <div class="form">
       
       <table>
            <tr class="tieude">
                <th>STT</th>
                <th>Tên Tài Khoản</th>
                <th>Emaill</th>
                <th>Pass</th>
                <th>SĐT</th>
                <th>vai trò</th>
                <th><i class="fa-solid fa-pen-to-square icon--update"></i></th>
                <th><i class="fa-solid fa-trash-can icon--delete"></i></th>
            </tr> 
         <?php 
                
                foreach($list_taikhoan as $taikhoan){
                    extract($taikhoan);
                    $delete_acc="?ctr=delete_acc&&id_tai_khoan=".$id_tai_khoan;
                    $update_acc="?ctr=update_acc&&id_tai_khoan=".$id_tai_khoan;
                    echo 
                    '<tr>
                    <td>'.$id_tai_khoan.'</td>
                    <td>'.$ten_tk.'</td>
                    <td>'.$email.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$sdt.'</td>
                    <td>'.$vai_tro.'</td>
                    <td><a href="'.$update_acc.'"><i class="fa-solid fa-pen-to-square icon--update"></i></a></td>
                    <td><a href="'. $delete_acc.'"><i class="fa-solid fa-trash-can icon--delete"></i></a> </td>   
                    </tr>';
                }

?>     
        </table>
       </div>
       </div>
       </div>
    </div>
</div>
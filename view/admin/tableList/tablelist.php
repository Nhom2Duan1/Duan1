<div class="content">
   
 <div class="dm">

 <div class="them_moi"><a href="?ctr=adddm">THêm Mới Danh Mục +</a></div>
    <table class="table_dm" style="width:100%">
        <thead>
            <tr class="tr_dm">
                <th class="th_dm">id</th>
                <th class="th_dm">Loại Bàn</th>
                <th class="th_dm">Số Lượng</th>
                <th class="th_dm"></th>
            </tr>
           
        </thead>
      
        <tbody>
            <?php
            foreach ($list_dm as $danh_muc) {
               extract ($danh_muc);
               $xoadm = "?ctr=xoadm&id_loai_ban=".$id_loai_ban;
               echo '<tr>
               <td>'.$id_loai_ban.'</td>
               <td>'.$ten_danh_muc.'</td>
               <td>'.$so_luong.'</td>
               <td> <a href="'.$xoadm.'" ><i class="fa-solid fa-trash-can"></i></a> </td>
           </tr>';
            }
            
            ?>
            
        </tbody>
    </table>

 </div>
</div>
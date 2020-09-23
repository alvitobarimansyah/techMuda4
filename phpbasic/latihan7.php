<table align="center" width="40%" border="1" cellpadding="10" cellspacing="0">
   <thead>
      <tr bgcolor="aqua">
          <th>Tanggal</th>
          <th>Bulan</th>
          <th>Tahun</th>
      </tr>
   </thead>
   <tbody>
        <tr>
            <td>
                <select name="hari">
                    <option value="">Day</option>
                    <?php
                    for($day = 1; $day <= 31; $day++){
                        ?>
                            <option value=""> <?= $day ?> </option>
                   <?php } ?>
                </select>
            </td>
            <td>
                <select name="bulan">
                    <option value="">Month</option>
                    <?php
                    //for($month = 1; $month <= 12; $month++) {
                    $ar_bulan = [ 1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                    foreach($ar_bulan as $key_bln => $nama_bln) {
                        ?>
                            <option value="<?= $key_bln ?>"> <?= $nama_bln ?> </option>
                    <?php } ?>
                </select>
            </td>
            <td>
                <select name="tahun">
                    <option value="">Year</option>
                    <?php
                     $thNow = date(Y);
                     $thnMin = $thNow - 17;
                     $thnMax = $thNow - 35;
                     while($thnMin >= $thnMax) {
                        ?>
                        <option value="<?= $thnMin ?>"> <?= $thnMin ?> </option>
                <?php $thnMin--; } ?>
                </select>
            </td>
        </tr>
   </tbody>
</table>
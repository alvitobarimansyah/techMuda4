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
                    for($month = 1; $month <= 12; $month++) {
                        ?>
                            <option value=""> <?= $month ?> </option>
                    <?php } ?>
                </select>
            </td>
            <td>
                <select name="tahun">
                    <option value="">Year</option>
                    <?php
                    for($year = 2020; $year >= 1905; $year--){
                        ?>
                        <option value=""> <?= $year ?> </option>
                <?php } ?>
                </select>
            </td>
        </tr>
   </tbody>
</table>
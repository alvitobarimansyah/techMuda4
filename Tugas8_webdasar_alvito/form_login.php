<form method="POST" action="cek_login.php">
    <table align="center" width="25%" cellpadding="10" cellspacing="0">
        <thead>
            <tr bgcolor="aqua">
                <th colspan="2">Form Login</th>
            </tr>
        </thead>
        <tbody>
            <tr bgcolor="azure">
                <td>Username :</td>
                <td>
                    <input type="text" name="uname" value="">
                </td>
            </tr>
            <tr bgcolor="azure">
                <td>Password :</td>
                <td>
                    <input type="password" name="pass" value="">
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr bgcolor="darkcyan">
                <th colspan="2">
                    <input type="submit" name="proses" value="Login">
                    <input type="reset" name="unproses" value="Batal">
                </th>
            </tr>
        </tfoot>
    </table>
</form>
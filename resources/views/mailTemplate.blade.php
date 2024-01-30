<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Akun</title>
</head>
<body>
    <p>Halo <b>{{$details['username']}}</b>!</p>
    <p>Berikut ini adalah Data Anda:</p>
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td>{{$details['username']}}</td>
      </tr>
      <tr>
        <td>Role</td>
        <td>:</td>
        <td>{{$details['role']}}</td>
      </tr>
      <tr>
        <td>IG</td>
        <td>:</td>
        <td>Sumanto_vegetarian</td>
      </tr>
      <tr>
        <td>Tanggal Register</td>
        <td>:</td>
        <td>{{$details['datetime']}}</td>
      </tr>
    </table>


  <p>Terima kasih telah melakukan registrasi.</p>
</body>
</html>
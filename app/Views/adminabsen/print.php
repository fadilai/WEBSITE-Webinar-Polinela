<html>

<body>
    <center>
        <h2 style="margin-top:50px;">
            Data Absen Peserta Seminar Nasional 2022
        </h2>
        <p style="margin-top:-10px;">
            Politeknik Negeri Lampung
        </p>
    </center>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Asal Instansi/Sekolah</th>
                <th scope="col">No Whatsapp</th>
                <th scope="col">Tanggal</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($semnasabsen as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style="text-align: left;"><?= $dt->email; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>
                    <td style="text-align: left;"><?= $dt->insek; ?></td>
                    <td style=" text-align: left;"><?= $dt->wa; ?></td>
                    <td style=" text-align: left;"><?= $dt->tanggal; ?></td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        table tr td {
            font-size: 13px;
        }
        #img {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<center>
    <div class="table-responsive">
        <table border="1" align="center" width="620">
            <tr>
                <td><img src="{{ asset('logo/logo_footer.png') }}" width="110" height="110" alt="BTS"></td>
                <td>
                    <center><font size="3"><b> BADAN PENGURUS HARIAN (BPH) </b></font><br>
                    <font size="3" color="blue"><b> DIPANEGARA COMPUTER CLUB (DCC) </b></font><br>
                    <font size="3" color="red"><b> UNIVERSITAS DIPA MAKASSAR </b></font><br>
                    <font size="3"><b> PERIODE 2022-2023 </b></font><br>
                    <font size="2"><b> Sekretariat : BTN Antara Blok A11 No.2, Telp. : 082250332018 </b></font><br>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
        </table>
        <table border="1">
            <tr>
                <br>
                <td>Nomor</td>
                <td width="572">: 002/I/DCC/X/2022</td>
            </tr>
            <tr>
                <td>Lamp</td>
                <td width="572">: -</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td width="572">: Undangan Rapat Anggota</td>
            </tr>
        </table>
        <br>
        <table border="1" width="620">
            <tr>
                <td>
                    <font size="2">Kepada Yth, <br> &AMP; <b> Anggota DCC </b><br>Di <br> &amp; tempat</font>
                </td>
            </tr>
        </table>
        <br>
        <table border="1" width="625">
            <tr>
                <td>
                    <font size="2">
                        Assalamu Alaikum Wr.Wb. <br>
                       &amp; Teriring salam dan doa semoga segala aktifitas keseharian kita senantiasa mendapat hidayah dan inayah dari Tuhan Yang Maha Esa. <br>
                       &amp; Sehubungan dengan akan diadakannya Rapat Anggota, dalam rangka Sosialisasi AD / ART dan Format LPJ, yang Insya Allah akan dilaksanakan pada : <br>
                    </font>
                </td>
            </tr>
        </table>
    </div>
</center>
</body>
</html>

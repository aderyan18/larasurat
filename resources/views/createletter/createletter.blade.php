<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    {{-- <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p> --}}
    <div class="table-responsive">
                <table border="1" align="center">
                     <td><img src="{{ asset('logo/logo_footer.png') }}" width="110" height="110" alt=""></td>
                     <td><center><font size="3">{{ $title1 }}</font><br>
                        <font size="3" color="blue">{{ $title2 }}</font><br>
                        <font size="3" color="red">{{ $title3 }}</font><br>
                        <font size="3">{{ $title4 }}</font><br>
                        <font size="2">{{ $title5 }}</font><br>
                 </td>
            </table>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nomor Surat</th>
            <th>Tanggal Surat</th>
            <th>Perihal</th>
        </tr>
        {{-- @foreach($suratkeluar as $suratkeluar)
            <tr>
                <td>{{ $suratkeluar->nomorsurat }}</td>
                <td>{{ $suratkeluar->tanggalsurat }}</td>
                <td>{{ $suratkeluar->perihal }}</td>
            </tr>
        @endforeach --}}
    </table>
</body>
</html>

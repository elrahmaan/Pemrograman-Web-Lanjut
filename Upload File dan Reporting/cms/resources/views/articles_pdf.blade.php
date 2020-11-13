<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
            
        }
        thead{
            background:#d3d3d3;
        }
        tbody{
            background:#F5F5F5;
        }
    </style>
    <strong>TUGAS PEMROGRAMAN WEB LANJUT</strong><br>
    Nama : Abdul Rahman Saleh<br>
    NIM &nbsp;&nbsp;: 1931710038<br>
    Kelas &nbsp;: MI - 2F<br>
    Absen : 01<br>   
    <hr>
    <center>
        <h2>Laporan Artikel</h2>
    </center>
    <table class="">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($cultures as $c)
            <tr>
                <td align="center">{{ $i++ }}</td>
                <td align="center">{{$c->title}}</td>
                <td align="justify">{{$c->intro}}<br>{{$c->paragraph1}}<br>{{$c->paragraph2}}</td>
                <td align="center"><img src="{{'storage/'.$c->featured_image}}" width="100px;"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

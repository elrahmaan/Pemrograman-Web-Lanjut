<!DOCTYPE html>
<html>

<head>
    <title>Indonesian Cultures Blog - Laporan PDF Data Artikel</title>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <link href="{{public_path('/css/app.css')}}" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">

    <!-- Custom icon font-->
    <link rel="stylesheet" href="/css/kuis1/fontastic.css">

    <!-- Fancybox-->
    <link rel="stylesheet" href="/vendor/@fancyapps/fancybox/jquery.fancybox.min.css">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{public_path('/css/kuis1/style.default.css')}}" id="theme-stylesheet">
</head>

<body>
    <table align="center" style="border-bottom: 1px solid black; font-size:12px;">
        <tbody>
            <tr>
                <td><img src="{{public_path('/img/logo-polinema.png')}}" style="width: 100px; height:100px;"></td>
                <td align="center">
                    <p><strong>KEMENTRIAN RISET TEKNOLOGI, DAN PENDIDIKAN TINGGI<br>POLITEKNIK NEGERI MALANG<br>JURUSAN TEKNOLOGI INFORMASI
                            <br>PROGRAM STUDI MANAJEMEN INFORMATIKA</strong><br> Jl.Soekarno Hatta PO BOX 04 Malang Telp. (0341) 404424 pes. 1122<br>
                        http://www.polinema.ac.id</p>
                </td>
                <td><img src="{{public_path('/img/logo-jas-anz.png')}}" style="width: 100px; height:100px;"></td>
            </tr>
        </tbody>
    </table>
    <br>
    <p style="font-size:14px;"><strong>TUGAS PEMROGRAMAN WEB LANJUT</strong><br>
        Nama : Abdul Rahman Saleh<br>
        NIM &nbsp;&nbsp;: 1931710038<br>
        Kelas &nbsp;: MI - 2F<br>
        Absen : 01</p>
    <center>
        <h2>Laporan Artikel</h2>
    </center>
    <table class="table table-bordered table-striped">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Author</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($cultures as $c)
            @foreach ($users as $user)
            @if($c->user_id == $user->id)
            <tr>
                <td align="center">{{ $i++ }}</td>
                <td align="center">{{$c->title}}</td>
                <td align="justify">{{$c->intro}}<br>{{$c->paragraph1}}<br>{{$c->paragraph2}}</td>
                <td align="justify">{{$user->name}}</td>
                <td align="center"><img src="{{'storage/'.$c->featured_image}}" width="100px;"></td>
            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>
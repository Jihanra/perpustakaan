<!DOCTYPE html>
<html>
<head>
    <title>Laporan PDF</title>
</head>
<body>
    <style type="text/css">
       .table-striped tbody tr:nth-of-type(odd) td {
      background-color: rgba(0,0,0,.05) !important;
      -webkit-print-color-adjust: exact;
    }
    </style>
        <h4 align="center">ANGGOTA REPORT</h4>
    <b>NISN</b> : {{ $anggota->nisn }} <br>
    <b>Nama</b> : {{ $anggota->nama }} <br>
    <b>Kelas</b> : {{ $anggota->kelas->nama_kelas }} <br><br>
    <table border=1>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Tanggal Pinjam</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota->books as $b)
            <tr>
                <td>{{ $b->judul_buku }}</td>
                <td>{{ $b->penerbit }}</td>
                <td>{{ $b->tahun_terbit }}</td>
                <td>{{ $b->pivot->tgl_pinjam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
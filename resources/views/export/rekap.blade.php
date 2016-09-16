<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    thead > tr{  background-color: #DCDCDC;  }
    tfoot > tr{  background-color: #DCDCDC;  }
    td > h2 { text-align: left; }
    td, th { border: 1px solid black; }
    table {  border-collapse: collapse;  }
    .title { text-align: left;}
</style>
<body>
<table>
    <tr>
        <td colspan="14" >
            <h2 class="title">Rekap Pendaftar Program Antariksa</h2>
        </td>
    </tr>
    <tr>
        <td colspan="14" class="title">
            <i>Exported at {{date('d/m/Y H:i:s')}}</i>
        </td>
    </tr>
</table>
<br>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Kode Daftar</th>
        <th>Jalur Daftar</th>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
        <th>Tgl Lahir</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Provinsi</th>
        <th>Zona Waktu</th>
        <th>Telpon</th>
        <th>Email</th>
        <th>FB</th>
        <th>Twitter</th>
        <th>Instagram</th>
        <th>WhatsApp</th>
        <th>Telegram</th>
        <th>Tipe HP</th>
        <th>Pengalaman</th>
        <th>Harapan</th>
    </tr>
    </thead>
    <tbody>
        @foreach($pendaftar as $i => $user)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$user->kode_daftar}}</td>
                <td>{{$user->jalur->name}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->call_name}}</td>
                <td>{{$user->birthdate}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->city->title}}</td>
                <td>{{$user->province->title}}</td>
                <td>{{$user->time_zone}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->fb}}</td>
                <td>{{$user->twitter}}</td>
                <td>{{$user->instagram}}</td>
                <td>{{$user->whatsapp==1?"Yes":"No"}}</td>
                <td>{{$user->telegram==1?"Yes":"No"}}</td>
                <td>{{ucfirst($user->platform)}}</td>
                <td>{{$user->experience}}</td>
                <td>{{$user->expectation}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
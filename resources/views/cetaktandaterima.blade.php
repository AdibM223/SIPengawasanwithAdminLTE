<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    @foreach ($dataajuan as $p)
<table align="center">
<tr>
    <td>
        <table  align="left">
            <tr>
                <td>
                <img src="https://www.bpjs-kesehatan.go.id/bpjs//themes/webbpjs/img/logo/logo-bpjs.png" height="50" width="320" alt="bpjs-kesehatan">
                </td>
            </tr>
            </table>
    </td>
</tr>
<tr>
    <td>
        <table align="left">
                    <tr>
                        <td width="10%">Nomor </td>
                        <td width="2%">:</td>
                        <td width="48%">{{$p->tgl_surat}}</td>
                        <td width="20%" align="right">
                            {{$p->tgl_cetak}}
                        </td>
                    </tr>
                    <tr>
                        <td>Lampiran</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr >
                        <td>Hal</td>
                        <td>:</td>
                        <td>Tanda Terima Penyerahan Sertifikat</td>
                    </tr>
                    @endforeach

                    <tr>
                        <td height="100" colspan="2"></td>
                    </tr>
            
        </table>
        <table>
        @foreach ($dataajuan as $p)
            <tr>
                <td colspan="2" >Dengan ini memberitahukan bahwa sertifikat yang diajukan oleh <br>
                
            </tr>
                @endforeach
                </table>

               <table>   
                @foreach ($dataajuan as $p)
                <tr>
                    @foreach ($namabadanusaha as $r)
                    <td>Nama Badan Usaha</td>
                    <td>:</td>
                    <td>{{$r-> nama_bu}}</td>
                </tr>
                <tr>
                    <td width="40%">Tanggal Pengajuan</td>
                    <td width="2%">:</td>
                    <td width="58%">{{$p->tgl_surat}}</td>
                </tr>
                @endforeach
                </table>

                @foreach ($dataajuan as $p)
                <tr><td>
                    
                    Telah dicetak pada tanggal {{$p->tgl_cetak}} dan diserahkan pada pihak yang bersangkutan pada tanggal {{$p->tanggal_diserahkan}}.<br>
                   
                    Demikian kami sampaikan, atas perhatian dan kerjasama yang baik diucapkan terima kasih.
                
                </td>
                </td>
            </tr>
            @endforeach
            @endforeach
        </table>
    </td>
</tr>
<tr>
    <td>
        <table  width="30%" align="right">
            <tr>
                <td height="50"></td>
            </tr>
            <tr>
                <td>Penanggung Jawab</td>
            </tr>
            <tr>
                <td height="50"></td>
            </tr>
            <tr>
                <td>{{Auth::user()->name}}</td>
            </tr>
            </table >
    </td>
</tr>
<tr>
    <td>
        <table  align="left">
            <tr>
                <td height="150"></td>
            </tr>
            <tr>
                <td>KANTOR CABANG PATI</td>
            </tr>
            <tr>
                <td>
                    Jl.Diponegoro No. 34 Pati
                </td>
            </tr>
            <tr>
                <td>
                    Telp. (0295) 381801, Fax. (0295) 386602
                </td>
            </tr>
            <tr>
                <td>
                    www.bpjs-kesehatan.go.id
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
    
<script type="text/javascript">

    
    window.print();
</script>
</body>
</html>
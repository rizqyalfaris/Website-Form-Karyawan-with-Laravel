<!DOCTYPE html>
<html>
<head>
    <title>Form Karyawan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
</head>
<body>
<center><font size="+2"><b>Form Karyawan</b></font></center>
<div class="container">
    <form>
        <section>
            <div class="panel panel-header">
            <table>
            <div>
                <tr>
                <td id="indeks"><label for="nama"><b>Nama * : </b></label></td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap"/>
                </td>
                </tr>   
            </div>
            <div>
                <tr>
                <td id="indeks"><label for="alamat"><b>Alamat : </b></label></td>
                <td><input type="text" name="alamat" placeholder="Alamat Lengkap"/>
                </td>
                </tr>
            </div> 
            <div>
                <tr>
                <td id="indeks"><label for="ktp"><b>No.KTP * : </b></label></td>
                <td><input type="text" name="ktp" placeholder="Nomor KTP"/>
                </td>
                </tr>
            </div>
            </table> 
            
            <div>
                <td>Pendidikan</td>
            </div>
            <div class="panel panel-footer">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Sekolah/Universitas *</th>
                            <th>Jurusan *</th>
                            <th>Tahun Masuk *</th>
                            <th>Tahun Lulus *</th>
                            <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="sekolah[]" class="form-control sekolah" required="">
                            </td>
                            <td><input type="text" name="jurusan[]" class="form-control">
                            </td> 
                            <td><input type="text" name="masuk[]" class="form-control masuk">
                            </td> 
                            <td><input type="text" name="lulus[]" class="form-control lulus">
                            </td>
                            <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove">
                            </i></a></td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </form>
</div>
<script type="text/javascript">
    $('.addRow').on('click',function){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="sekolah[]" class="form-control sekolah" required=""></td>'+
        '<td><input type="text" name="jurusan[]" class="form-control"></td>'+
        '<td><input type="text" name="masuk[]" class="form-control masuk"></td>'+
        '<td><input type="text" name="lulus[]" class="form-control lulus"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("Ingin hapus baris terakhir?");
        } else{
            $(this).parent().parent().remove();
        }
    });
</script>

<div class="container">
<section>
    <form>
        <div>
            <td>Pengalaman Kerja</td>
            </div>
            <div class="panel panel-footer">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Perusahaan *</th>
                            <th>Jabatan *</th>
                            <th>Tahun *</th>
                            <th>Keterangan</th>
                            <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="perusahaan[]" class="form-control perusahaan" required="">
                            </td>
                            <td><input type="text" name="jabatan[]" class="form-control">
                            </td> 
                            <td><input type="text" name="tahun[]" class="form-control tahun">
                            </td> 
                            <td><input type="text" name="keterangan[]" class="form-control keterangan">
                            </td>
                            <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove">
                            </i></a></td>
                        </tr>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </form>
</div>
<script type="text/javascript">
    $('.addRow').on('click',function){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="sekolah[]" class="form-control sekolah" required=""></td>'+
        '<td><input type="text" name="jurusan[]" class="form-control"></td>'+
        '<td><input type="text" name="masuk[]" class="form-control masuk"></td>'+
        '<td><input type="text" name="lulus[]" class="form-control lulus"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("Ingin hapus baris terakhir?");
        } else{
            $(this).parent().parent().remove();
        }
    });
</script>
<center><td>Keterangan *. Tidak boleh kosong atau ada validasi.</td></center>
</body>
</html>
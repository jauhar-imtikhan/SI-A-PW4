<div class="container">
    <div class="col-md-6 mt-3 ml-auto mr-auto ">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Form Tanggal Kelahiran & Pasaran</h1>
            </div>
            <div class="card-body">
                <form autocomplete="off" autocapitalize="on">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="" id="jk" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" id="tgl" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="myFunc()" id="btn" class="btn btn-primary">Tampilkan</button>
                    </div>
                </form>
                <hr>

                <h2 class="text-center">Hasil</h2>
                <hr>
                <div class="form-group">
                    <label>Nama : </label>
                    <h5 id="hasilNama"></h5>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin : </label>
                    <h5 id="jenisKelamin"></h5>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <h5 id="tglLahir"></h5>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    let name = $("#nama")
    let tanggallahir = $("#tgl")
    let hasilnama = $("#hasilNama")
    let hasiltanggal = $("#tglLahir")
    let hasiljk = $("#jenisKelamin")
    let jeniskelamin = $("#jk")

    function myFunc() {
        $("#hasilNama").html(name.val())
        $("#jenisKelamin").html(jeniskelamin.val())
        $("#tglLahir").html(tanggallahir.val())

    }
</script>
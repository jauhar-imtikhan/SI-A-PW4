<div class="row mt-5">
    <div class="col-md-6 mr-auto ml-auto">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form Hari Kelahiran & Pasaran</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Isi Tanggal Lahir</label>
                            <input type="date" id="txttgllahir" class="form-control" style="font-size: 20px;">
                            <small class="form-text text-muted">isi Sesuai Dengan Format Yang Muncul</small>
                        </div>
                        <div class="form-group">
                            <button type="button" onclick="tampil()" class="btn btn-primary">Tampilkan</button>
                            <button type="button" onclick="kosong()" class="btn btn-danger">Reset</button>
                        </div>
                        <div class="form-group">
                            <p id="blokhasil" style="font-size:20px;">Hari Kelahiran: ?????</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function HitungHari() {
        let terjemahhari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        let x = $('#txttgllahir').val();
        let tgllahir = new Date(x);
        return terjemahhari[tgllahir.getDay()];
    }

    function HitungPasaran() {
        let terjemahpasar = ["Kliwon", "Legi", "Pahing", "Pon", "Wage"];
        let x = $('#txttgllahir').val();
        let tgllahir = new Date(x);
        let y = "1900-01-01";
        let tglawal = new Date(y);
        let selisih = (Date.parse(tgllahir.toGMTString()) - Date.parse(tglawal.toGMTString())) / (1000 * 60 * 60 * 24);
        let hasil = Math.floor(selisih + 2) % 5;
        return terjemahpasar[hasil];
    }

    function tampil() {
        let hari = HitungHari();
        let pasaran = HitungPasaran();
        let hasil = "Hari Kelahiran : " + hari + " " + pasaran;
        $('#blokhasil').html(hasil);
    }

    function kosong() {
        $('#txttgllahir').val(" ");
        $('#blokhasil').html("Hari Kelahiran: ?????");
    }
</script>
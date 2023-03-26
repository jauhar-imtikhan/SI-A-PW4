<div class="row mt-5" id="blokfilm" style="margin-left: 15px; margin-right: 15px;"></div>
<div class="modal fade" role="dialog" id="modaldetail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h5 class="modal-title">Detail Film</h5>
            </div>
            <div class="modal-body" id="blokdetail"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>




<script src="https://drive.crazycode.my.id/datajs/film.js"></script>
<script>
    ambildatafilm();

    function ambildatafilm() {
        let hasil = "";
        let x;
        for (x in datafilm) {
            let cv = datafilm[x].cover;
            let jd = datafilm[x].judul;
            let pm = datafilm[x].pemain;
            let th = datafilm[x].tahun;
            let rt = datafilm[x].rating;
            let sn = datafilm[x].sinopsis;
            hasil += "<img src='" + cv + "' data-judul='" + jd + "' data-pemain='" + pm + "' data-tahun='" + th + "' data-rating='" + rt + "' data-sinopsis='" + sn + "' class='col-md-2' style='margin-bottom: 15px' onclick='tampildetail(this)'>";
        }
        $("#blokfilm").html(hasil);
    }

    function tampildetail(el) {
        let judul = $(el).data("judul");
        let pemain = $(el).data("pemain");
        let tahun = $(el).data("tahun");
        let rating = $(el).data("rating");
        let sinopsis = $(el).data("sinopsis");
        $("#blokdetail").html("<p style='font-size: 20px;'><b>Judul:</b><br>" + judul + "<p style='font-size:20px;'><b>Pemain:</b><br>" + pemain + "<p style='font-size: 20px;'><b>Tahun:</b><br>" + tahun + "<p style='font-size: 20px;'><b>Rating:</b><br>" + rating + "<p style='font-size: 20px; text-align:justify'><b>Sinopsis:</b><br>" + sinopsis);
        $("#modaldetail").modal("show");

    }
</script>
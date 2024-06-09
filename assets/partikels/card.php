<div class="arrivals" id="card">
    <div class="container p-2">
        <h2 class="text-center">New Arrivals</h2>
        <div class="row mt-5 gap-4">

            <?php foreach ($shoes as $sh) : ?>
            <div class="card" style="width: 18rem; height: 28rem;">
                <img src="assets/img/<?= $sh["gambar"]; ?>" width="250px" height="250px" alt="...">
                <div class="card-body p-0 mt-3">
                    <p class="card-text mb-1"><?= $sh["tipe"]; ?></p>
                    <p class="card-title mt-0"><?= $sh["judul"]; ?></p>
                    <p><?= $sh["harga"]; ?></p>
                    <button class="btn btn-danger">BUY</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="arrivals">
    <div class="container p-2">
        <h2 class="text-center">Explore Accessesoris</h2>
        <div class="row mt-5 gap-4">
            <?php foreach ($accs as $acc) : ?>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/<?= $acc["gambar"]; ?>" alt="...">
                <div class="card-body p-0 mt-3">
                    <p class="card-text mb-1"><?= $acc["tipe"]; ?></p>
                    <p class="card-title mt-0"><?= $acc["judul"]; ?></p>
                    <p><?= $acc["harga"]; ?></p>
                    <button class="btn btn-danger">BUY</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
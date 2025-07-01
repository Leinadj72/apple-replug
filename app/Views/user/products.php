<?= $this->include('layout/header') ?>

<div class="container mt-5">
    <h2 class="mb-4">Browse Products</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url('assets/images/' . $product['image']) ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($product['name']) ?></h5>
                        <p class="card-text">
                            <strong>Type:</strong> <?= esc($product['type']) ?><br>
                            <strong>Condition:</strong> <?= esc($product['condition']) ?><br>
                            <strong>Price:</strong> GHS <?= esc($product['price']) ?><br>
                            <strong>Stock:</strong> <?= esc($product['stock']) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('layout/footer') ?>
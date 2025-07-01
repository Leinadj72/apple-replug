<?= $this->include('layout/header') ?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">📱 Browse Our Products</h2>

    <?php if (!empty($products)): ?>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="<?= base_url('assets/images/' . $product['image']) ?>" class="card-img-top" alt="<?= esc($product['name']) ?>" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($product['name']) ?></h5>
                            <p class="card-text">
                                <strong>Type:</strong> <?= esc($product['type']) ?><br>
                                <strong>Condition:</strong> <?= esc($product['condition']) ?><br>
                                <strong>Price:</strong> <span class="text-success fw-bold">GHS <?= esc($product['price']) ?></span>
                            </p>
                            <a href="#" class="btn btn-primary w-100">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center">No products available at the moment.</p>
    <?php endif; ?>
</div>

<?= $this->include('layout/footer') ?>
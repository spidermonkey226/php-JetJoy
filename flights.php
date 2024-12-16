<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<?php

$products = [
    [
        'product_id' => 1,
        'product_name' => 'Athens Tour',
        'price' => 200.00,
        'stock_quantity' => 20
    ],
    [
        'product_id' => 2,
        'product_name' => 'Dubai Tour',
        'price' => 350.00,
        'stock_quantity' => 35
    ],
    [
        'product_id' => 3,
        'product_name' => 'Romania Tour',
        'price' => 250.00,
        'stock_quantity' => 15
    ],
    [
        'product_id' => 4,
        'product_name' => 'Hamburg Tour',
        'price' => 300.00,
        'stock_quantity' => 35
    ]
];

?>

<div class="product-list">
    <link rel="stylesheet" href="styleflight.css">

    <?php foreach ($products as $product): ?>
        <div class="product-item">
            <h2><?php echo $product['product_name']; ?></h2>
            <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
            <p>Stock Available: <?php echo $product['stock_quantity']; ?></p>
            
            <form action="cart.php" method="POST" onsubmit="return false;">
                <label for="quantity-<?php echo $product['product_id']; ?>">Select Quantity:</label>
                <input type="number" id="quantity-<?php echo $product['product_id']; ?>" name="quantity" min="1" max="<?php echo $product['stock_quantity']; ?>" value="1">
                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
            </form>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>

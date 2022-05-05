<style>
    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }

    .breadcrumb {
        background-color: white;
    }
</style>


<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>admin-dashboard" class="text-uppercase">Dashboard</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Add Products</li>
    </ol>
</nav>

<div class="container my-1">
    <form action="add-product" method="post" enctype="multipart/form-data">

        <p>Title</p>
        <p><input type="text" name="product_title"></p>

        <p>Author</p>
        <p><input type="text-block" name="product_brand"></p>

        <p>Description</p>
        <p><input type="text" name="product_description"></p>

        <p>Price</p>
        <p><input type="text" name="product_price"></p>

        <p>Discount Amount</p>
        <p><input type="text" name="product_discount_amount"></p>

        <p>Stock</p>
        <p><input type="text" name="product_quantity"></p>

        <p>Image 1</p>
        <p><input type="file" name="product_image1"></p>

        <p>Status</p>
        <p><input type=" text" name="product_status"></p>

        <p>Genre</p>
        <p><input type="text" name="product_category"></p>

        <p><input type="submit" name="add_product"></p>


    </form>
</div>
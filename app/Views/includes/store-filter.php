<div class="card p-2 my-3 bg-light text-dark">

    <div class="row">

        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend w-75">
                        <select name="brand" class="form-control form-control-md" id="brand">
                            <option value="0">Author</option>
                            <?php
                            $brands = $product_object->getAllBrands();
                            foreach ($brands as $brand) :
                            ?>
                                <option><?php echo ($brand["product_brand"]); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-sm"><i class="fa fa-magic"></i></button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend w-75">
                        <select name="category" class="form-control form-control-md" id="category">
                            <option value="0">Genre</option>
                            <?php
                            $categories = $product_object->getAllCategories();
                            foreach ($categories as $category) :
                            ?>
                                <option><?php echo ucfirst($category["product_category"]); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-sm"><i class="fa fa-magic"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend w-75">
                        <select name="subcategory" class="form-control form-control-md" id="subcategory">
                            <option value="0">Category</option>
                            <option>Best Seller</option>
                            <option>Box Set</option>
                            <option>Coming Soon</option>
                            <option>Frequently Purchased</option>
                            <option>New Arrivals</option>
                            <option>Staff Picks</option>
                            <option>Turned into Film/TV</option>
                        </select>
                    </div>
                    <button class="btn btn-sm"><i class="fa fa-magic"></i></button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend w-75">
                        <select name="format" class="form-control form-control-md" id="format">
                            <option value="0">Format</option>
                            <option>Hardcover</option>
                            <option>Paperback</option>
                        </select>

                    </div>
                    <button class="btn btn-sm"><i class="fa fa-magic"></i></button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend w-75">
                        <select name="condition" class="form-control form-control-md" id="condition">
                            <option value="0">Condition</option>
                            <option>New</option>
                            <option>Used</option>
                        </select>
                    </div>
                    <button class="btn btn-sm"><i class="fa fa-magic"></i></button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend w-75">
                        <select name="order" class="form-control form-control-md" id="order">
                            <option value="0">Sort</option>
                            <option value="order-title">Title (A-Z)</option>
                            <option value="order-title-desc">Title (Z-A)</option>
                            <option value="order-price">$(Lowest-Highest)</option>
                            <option value="order-price_desc">$(Highest-Lowest)</option>
                        </select>
                    </div>
                    <button class="btn btn-sm"><i class="fa fa-magic"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
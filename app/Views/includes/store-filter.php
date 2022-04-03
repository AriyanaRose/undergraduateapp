<div class="card p-2">

    <div class="row">

        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select name="category" class="form-control" id="category">
                            <option value="0">Select Category</option>
                            <?php
                            $categories = $product_object->getAllCategories();
                            foreach ($categories as $category) :
                            ?>
                                <option><?php echo ucfirst($category["product_category"]); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-default"><i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>


        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select name="brand" class="form-control" id="brand">
                            <option value="0">Select Author</option>
                            <?php
                            $brands = $product_object->getAllBrands();
                            foreach ($brands as $brand) :
                            ?>
                                <option><?php echo ($brand["product_brand"]); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-default"><i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <form action="store" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select name="order" class="form-control" id="order">
                            <option value="0">Order By</option>
                            <option value="order-title">Product Title (A-Z)</option>
                            <option value="order-title-desc">Product Title (Z-A)</option>
                            <option value="order-price">Price(Lowest-Highest)</option>
                            <option value="order-price_desc">Price(Highest-Lowest)</option>
                        </select>
                    </div>
                    <button class="btn btn-default"><i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
        


    </div>

</div>
<br>
<div class="row">

    <div class="col-md-12">

        <h5 class="text-center"> <STRONG> Exchange Points </STRONG></h5>
        <div class="mb-4">
            <hr class="solid">
        </div>
        <form action="checkout" method="post">
            <select name="points" class="form-control form-control-lg" id="points">
                <option value="0">Reset</option>
                <option value="200">$20 Discount - 200 Points</option>
                <option value="300">$30 Discount - 300 Points</option>
                <option value="400">$40 Discount - 400 Points</option>
                <option value="500">$50 Discount - 500 Points</option>
                <option value="1000">$100 Discount - 1000 Points </option>
                <option value="1500">$150 Discount - 1500 Points </option>
                <option value="2000">$200 Discount - 2000 Points </option>
            </select>
            <br>
            <ul>
                <li> <strong> Current Points:</strong> <?php echo $cart_object->getUserTotalPoints(); ?></li>
                <li> <strong> Points Being Used:</strong> <?php echo $cart_object->getPointsUsed(); ?></li>
                <li> <strong>Points Discount:</strong> $<?php echo $cart_object->getPointsDiscountAmount(); ?></li>
                <li> <strong> Points Gain:</strong> <?php echo $cart_object->getPointsGained(); ?></li>
            </ul>

            <button name="points_btn" type="submit" class="btn btn-secondary btn-lg btn-block">Exchange Points</button>
        </form>
    </div>
</div>

<br>
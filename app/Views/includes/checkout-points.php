<br>
<div class="row">

    <div class="col-md-12">

        <h5 class="text-center"> Exchange Points</h5>
        <br>
        <form action="checkout" method="post">
            <select name="points" class="form-select" id="points">
                <option value="0">Reset</option>
                <option value="100">$5 Off - 100 Points</option>
                <option value="200">$10 Off - 200 Points</option>
                <option value="300">$15 Off - 300 Points</option>
                <option value="500">$25 Off - 500 Points</option>
                <option value="1000">$50 Off - 1000 Points </option>
            </select>
            <button name="points_btn" type="submit" class="btn btn-success btn-block">Exchange Points</button>
        </form>
        <br>
        <ul>
            <li>Current Points: <?php echo $cart_object->getUserTotalPoints(); ?></li>
            <li>Points being used: <?php echo $cart_object->getPointsUsed(); ?></li>
            <li>Points Discount: $<?php echo $cart_object->getPointsDiscountAmount(); ?></li>
            <li>Points Gain: <?php echo $cart_object->getPointsGained (); ?></li>
        </ul>

    </div>

</div>
<div class="container my-5">
    <h2 class="text-center">Order History</h2>
    <p></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Order No</th>
                <th>Date</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($orders as $data) :  ?>


                <tr>
                    <td><?php echo $data["order_id"]; ?></td>
                    <td><?php echo $data["order_created"]; ?></td>
                    <td><?php echo $data["total"]; ?></td>
                    <td>
                        <a href="orders/details/<?php echo $data["order_id"]; ?>"> <i class="fa fa-eye"></i> Details</a>
                    </td>

                </tr>


            <?php endforeach; ?>


        </tbody>
    </table>
</div>
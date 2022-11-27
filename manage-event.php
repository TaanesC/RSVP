    <?php include('partials-front/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Order History</h1>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br>

                <table class="tbl-full">
                    <tr>
                        <th width="1%">#</th>
                        <th width="1%">Order Date</th>
                        <th width="1%">Event</th>
                        <th width="1%">Price</th>
                        <th width="1%">Num of Guest</th>
                        <th width="1%">Total</th>
                       
                      


                       
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_order ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $event = $row['event'];
                                $price = $row['price'];
                                $qty = $row['qty'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                
                               
        ?>

                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo $event; ?></td>
                                        <td><?php echo 'RM'.$price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo 'RM'.$total; ?></td>
                                        

                                       

                                  
                                      


                                        
                                       
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>

    <?php include('partials-front/footer.php'); ?>
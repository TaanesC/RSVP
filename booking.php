
<?php include('partials-front/menu.php'); ?>



    <?php 
        if(isset($_GET['event_id']))
        {
            $event_id = $_GET['event_id'];

            $sql = "SELECT * FROM tbl_event WHERE id=$event_id";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);

                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];
            }
            else
            {
                header('location:'.SITEURL);
            }
        }
        else
        {
            header('location:'.SITEURL);
        }
    ?>

    <section class="event-search2">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your book.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    
                    <div> Selected Event</div>
                    
                    

                    <div class="event-menu-img">
                        <?php 
                        
                            if($image_name=="")
                            {
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/event/<?php echo $image_name; ?>" alt="Not found" class="img-responsive img-curve">
                                <?php
                            }
                        
                        ?>
                        
                    </div>
    
                    <div class="event-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="event" value="<?php echo $title; ?>">

                        <p class="event-price">Rm<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">num of guest</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <div>Delivery Details</div>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Vimala" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0123456789" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. vimala1234@gmail.com" class="input-responsive" required>
                    
                    <div class="order_label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    
                    <div class="order-label">Time Start</div>
                    <input type="time" name="time_start" placeholder="E.g. 3.00 pm" class="input-responsive" required>
                    
                    <div class="order_label">Time End</div>
                    <input type="time" name="time_end" placeholder="E.g. 5.00 pm" class="input-responsive" required>
                    
                    <div class="order_label">Date</div>
                    <input type="date" nam="date" placeholder="E.g. 01/01/2022" class="input-responsive" required>
                    
                    
                    

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php 

                if(isset($_POST['submit']))
                {

                    $event = $_POST['event'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; 

                    $order_date = date("Y-m-d ");

                    $status = "Booked";  

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];
                    $time_start = $_POST['time_start'];
                    $time_end = $_POST['time_end'];



                    $sql2 = "INSERT INTO tbl_order SET 
                        event = '$event',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address',
                        time_start = '$time_start',
                        time_end = '$time_end'
                            
                       

                    ";

    $res2 = mysqli_query($conn, $sql2);

                    if($res2==true)
                    {
                        $_SESSION['order'] = "<div class='success text-center'>Event Booked Successfully.</div>";
                        header('location:'.SITEURL);
                    }
                    else
                    {
                        $_SESSION['order'] = "<div class='error text-center'>Failed to Book Event.</div>";
                        header('location:'.SITEURL);
                    }

                }
            
            ?>

        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>
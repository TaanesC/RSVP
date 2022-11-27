
    <?php include('partials-front/menu.php'); ?>

    <section class="event-search text-center">
        <div class="container">
            <?php 

                $search = $_POST['search'];
            
            ?>


            <h2><a href="#" class="text-white">Event on Your Search "<?php echo $search; ?>"</a></h2>

        </div>
    </section>



    <section class="event-menu">
        <div class="container">
            <h2 class="text-center">Events</h2>

            <?php 

                $sql = "SELECT * FROM tbl_event WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="event-menu-box">
                            <div class="event-menu-img">
                                <?php 

                                if($image_name=="")
                                    {

                                    echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="not found" class="img-responsive img-curve">
                                        <?php 

                                    }
                                ?>
                                
                            </div>

                            <div class="event-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="event-price">Rm<?php echo $price; ?></p>
                                <p class="event-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="<?php echo SITEURL; ?>booking.php?event_id=<?php echo $id; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food Not Available
                    echo "<div class='error'>Event not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>

    <?php include('partials-front/footer.php'); ?>
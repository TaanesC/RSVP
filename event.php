
    <?php include('partials-front/menu.php'); ?>

    
    <section class="event-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>event-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for event.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>



    <section class="event-menu">
        <div class="container">
            <h2 class="text-center">Events</h2>

            <?php 

            $sql = "SELECT * FROM tbl_event WHERE active='Yes'";

                $res=mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //Foods Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
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
                                        <img src="<?php echo SITEURL; ?>images/event/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
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

                    echo "<div class='error'>Event not found.</div>";
                }
            ?>

            

            

            <div class="clearfix"></div>

            

        </div>

    </section>

    <?php include('partials-front/footer.php'); ?>
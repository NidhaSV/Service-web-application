<?php
class Workers {

    private $con;

    function __construct($con)
    {
        $this->con = $con;
    }

    function generate_list($category) {
        $con = $this->con;
        $sql = "SELECT * from service s where type_of_service=?";
        $query = mysqli_prepare($con, $sql);
        $query->bind_param('s',$category);
        $query->execute();
        $result = $query->get_result();
        $num = mysqli_num_rows($result);
        if($num==0) {?>
            <div class="row"> Sorry, Currently we don't have any painters</div>
        <?php }

        $n = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $n++;
        ?>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img  src="images/plum<?php echo $n ?>.jpg" alt="<?php echo $row['fullname'] ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="detail">
                    <h3><?php echo $row['fullname'] ?></h3>
                    <div class="stars" data-rating="3">
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                    </div>
                    Today's Hours: <div class="hours"></div>
                <p> DATE | TIME <span class="datetime"></span></p>
                    <p> House Painting, Furniture Polishing , Furniture Painting </p>
                    <p>Kailsas Niwas , Shinde nagar <br> Dahisar East </p>
                        <a href="dharmesh.php">  <button>Contact</button> </a>
                        
                </div>
            </div>
            <div class="col-5">
                <div class="map">
                    <iframe  width="480px" height="250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.65999130577!2d72.82654491473473!3d19.383869586911988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7aec0a4b41bef%3A0xbd1a4ca919d6a613!2sVidyavardhini%20College%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1569611675659!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <?php }
    }
}
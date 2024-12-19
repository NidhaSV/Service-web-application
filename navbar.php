     <!---------------------Navigation Bar-------------------->
     <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/LOGO.png"></a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="checkactive.php" > I have a Business!</a>
                    </li>
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                <?php  if(isset($_SESSION['username'])){
                echo " <li class=\"nav-item active\"> 
                  <a class=\"nav-link\" href=\"logout.php\"> LOG OUT(" .$_SESSION['username']. ") </a> 
                </li> ";
                }else{ 
                 echo " <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"login.html\"> LOG IN </a>
                  </li> ";
                } ?>
                  <li class="nav-item active">
                        <a class="nav-link" href="#topservices">TOP SERVICES</a>
                      </li>
                <li class="nav-item">
                  <a class="nav-link" href="#browse">BROWSE BUSINESS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#aboutus">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactus">CONTACT US</a>
                </li>
                
              </ul>
            </div>
          </nav>
    </section>
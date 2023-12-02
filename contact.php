
<!DOCTYPE html>
<html>
 
<head>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="style1.css"/>
</head>
<div class="menu-container">
        <nav>
            <a href="index.php">Home</a>
           

            <!-- Dropdown Example -->
            <div class="dropdown">
                <a href="#">Website</a>
                <div class="dropdown-content">
                    <a href="Church_Management/index.php">Church Managemet</a></br>
                    <a href="crud/index.php">Hotel Reservation</a></br>
                    <a href="clothing/index.php">T-Shirt Clothing</a></br>
                    <a href="My Crud/home.php">JRP Clothing</a></br>
                    <a href="cake shop/index.php">Cake Shop</a></br>
                </div>
            </div>

            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
        </nav>
    </div>

 
<body>
    <section id="last">
        <!-- heading -->
        <div class="full">
            <h3>Drop a Message</h3>
 
            <div class="lt">
 
                <!-- form starting  -->
                <form class="form-horizontal"method="post"
                      action="contact.php">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- name  -->
                            <input type="text"class="form-control"
                                   id="name"placeholder="NAME"
                                   name="name"value=""/>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- email  -->
                            <input type="email"class="form-control"
                                   id="email"placeholder="EMAIL"
                                   name="email"
                                value=""/>
                        </div>
                    </div>
 
                    <!-- message  -->
                    <textarea class="form-control"rows="10"
                              placeholder="MESSAGE"name="message">
            </textarea>
 
                    <button class="btn btn-primary send-button"
                            id="submit"type="submit"value="SEND">
                        <i class="fa fa-paper-plane"></i>
                        <span class="send-text">SEND</span>
                    </button>
                </form>
                <!-- end of form -->
            </div>
 
            <!-- Contact information -->
            <div class="rt">
                <ul class="contact-list">
                    <li class="list-item">
                        <i class="fa fa-map-marker fa-1x">
                            <span class="contact-text place">
                                Binalonan, Pangassinan
                            </span>
                        </i>
                    </li>
 
                    <li class="list-item">
                        <i class="fa fa-envelope fa-1x">
                            <span class="contact-text gmail">
                                <a href="mailto:yourmail@gmail.com"
                                   title="Send me an email">
                                    email@gmail.com</a>
                            </span>
                        </i>
                    </li>
 
                    <li class="list-item">
                        <i class="fa fa-phone fa-1x">
                            <span class="contact-text phone">
                                (+63) xxx xxx xxxx
                            </span>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>




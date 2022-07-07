<?php


if($_POST["message"]) {


mail("bryce_dawson@outlook.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Bryce Dawson CV</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
           
            <ul class="list-unstyled components">
               
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="About.html">About</a>
                </li>
                <li>
                    <a href="Portfolio.php">Portfolio</a>
                </li>
                <li>
                    <a href="Contact.html">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
            </nav>

            <h2>Porfolio</h2>
            <p>Below you can find links to previous websites I have created throughout my time at University. There is also a link to a google colab notebook where I created my own convolutional neural network to try and predict the likelyhood of Pneumonia in a number of pateients x-rays which was also part of my University studies.</p>

            <div class="line"></div>

            <div class="m-4">
                <ul class="list-group list-group-flush">

                    <div class="polaroid">
                    <li class="list-group-item"> <h4>Abderdeen Traffic Viewer</h4>
                        <p>The Aberdeen Traffic Viewer is a website which contains information about the traffic in the city of Aberdeen and ways users can reduce their carbon footprint. The website also contains a smart cities visualisation which is an interactive map where users can add layers to the map to view different types of data. Users can see the traffic density during and post the first Covid-19 lockdown, as well as recycling points, bus stops and the air quality. The wesbite was created as part of my fourth year Honours project in my last year of University. </p>
                        <a href="https://aberdeen-traffic.herokuapp.com"> <div class="container">
                            <h5>Aberdeen Traffic Viewer</h5>
                            </div><img alt="aberdeen-traffic" src="Images/Aberdeen-Traffic.png">
                    </div>

                    <div class="line"></div>

                    <div class="polaroid">
                            <li class="list-group-item"> <h4>Love For The Uglies</h4>
                                <p>Love For The Uglies is a site which was created as part of a module in my fourth year of University. I was given a basic REACT template and was tasked with craeting a site with a number of features such as a loggin/create an account section, areas only accesably to members, areas for users to post comments and many more. All which is supported with a backend database running atlasDB.  </p>
                                <a href="https://love-for-the-uglies.herokuapp.com/"> <div class="container">
                                    <h5>Love For The Uglies</h5>
                                    </div>
                                    <img alt="CNN-Pneumonia" src="Images/Love-Uglies.png">
                    </div>

                    <div class="line"></div>

                    <div class="polaroid">
                                    <li class="list-group-item"> <h4>Pneumonia CNN - Google Colab</h4>
                                        <p> </p>
                                        <a href="https://colab.research.google.com/drive/1O1C6SWxl9aNfbLg-YV8RRgmtKAiUwhs2?usp=sharing"> <div class="container">
                                            <h5>Pneumonia CNN - Google Colab</h5>
                                            </div>
                                            <img alt="aberdeen-traffic" src="Images/CNN.png">

                                            <div class="line"></div>

                                            <a href="PDF/CNN_Pneumonia.pdf" download="CNN-Pneumonia">Download the pdf here!</a>
                    </div>

                    <div class="polaroid">
                        <li class="list-group-item"> <h4>Email Me</h4>
                            <p> </p>
                            <form method="post" action="subscriberform.php">


                                <textarea name="message"></textarea>
                                
                                
                                <input type="submit">
                                
                                
                                </form>
                            
        </div>

                    <li class="list-group-item"></li>
                </ul>
            </div>

          

            <div class="line"></div>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
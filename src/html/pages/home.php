<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/home.css">
        <link rel="stylesheet" href="/src/css/shared.css">
        <link rel="stylesheet" href="/src/css/footer.css">
        <link rel="stylesheet" href="/src/css/header.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>
        <!-- End of Header -->
        <!------------------------------------------------------------------------------------------------>
        <!-- Start of Home page content -->
        <!-- Section 1 - This is the image that the user will see when they land on the home page. -->
        <div class="top-image-landing-page">
            <!-- <img src="/src/media/images/riggers.jpg" alt="Image of gunwall of a quad rowing shell with hands and oar of rowers."> -->
        </div>
        
        <!-- End of Section 1 -->
        <div class="body">
            <!-- Section 2 - THE SPORT OF ROWING -->
            <div class="section" id="sport-of-rowing-section">
                <div class="section-headers">
                    <h2 class="section-headers-uppercase">
                        The Sport of Rowing
                    </h2>
                </div>
                <!-- This will be flex display -->
                <div class="sport-of-rowing" id="sport-of-rowing-content">

                    <div class="col-md-2 col-1" id="sport-of-rowing-col-md-2 col-1"></div>

                    <!-- This is the good stuff -->
                    <div class="middle-content" id="sport-of-rowing-middle-content">
                        <div class="sport-of-rowing-left-panel">
                            <p>Rowing, or crew, is a complex, beautiful sport. It is a sport that focuses on every part of the body and tests the mental and physical limits of its athletes across two main seasons throughout the year. In the Fall, head races of distances in the range of 4000 to 6000 meters take place. In the Spring, athletes compete head to head in 2000 meter laned races. </p>
                        </div>
                        <div class="sport-of-rowing-right-panel">
                            <img src="/src/media/images/vintage-eight.jpg">
                        </div>
                    </div>
                    <!-- End of the good stuff -->

                    <div class="col-md-2 col-1" id="sport-of-rowing-col-md-2 col-1"></div>
                </div>
            </div>
            <!-- End of Section 2 -->

            <!-- Section 3 -->
            <div class="section" id="rowing-stroke-section">
                <div class="section-headers">
                    <h2 class="section-headers-uppercase">
                        The Rowing Stroke
                    </h2>
                </div>
                <!-- This will be flex display again -->
                <div class="rowing-stroke" id="rowing-stroke-content">
                    <div class="col-md-2 col-1" id="rowing-stroke-col-md-2 col-1"></div>

                    <!-- This is the good stuff again -->
                    <div class="middle-content w-100" id="rowing-stroke-middle-content">
                        <div class="rowing-stroke-top-panel">
                            <p>The rowing stroke consists of different phases. It starts at the catch position where the rower's knees are bent, shins vertical, body leaned forward, and arms extended forward with oar blades in the water.</p>
                            <br>
                            <p>From there, the rower initiates the drive phase. They begin by explosively pushing with their legs, extending them fully. As the legs finish extending, the rower swings their torso backward from the hips while maintaining a straight back. This transfers the power from the legs to the upper body. Finally, the rower pulls the oar handle towards their body using their arms, propelling the boat forward.</p>
                            <br>
                            <p>Once the rower has completed the drive phase, they reach the finish position. Here, the legs are fully extended, the body leans back slightly, and the oar blades are lifted out of the water. </p>
                            <br>
                            <p>To prepare for the next stroke, the rower enters the recovery phase. It involves extending the arms forward, swinging the body forward from the hips while keeping the back straight, sliding the seat up the slide by bending the knees, and finally reaching the catch position again to start the cycle anew.</p>
                        </div>
                        <div class="rowing-stroke-bottom-panel">
                            <img class="rounded-3" src="/src/media/images/kiwipair.jpg">
                        </div>
                    </div>
                    <div class="col-md-2 col-1" id="rowing-stroke-col-md-2 col-1"></div>

                    <!-- End of the good stuff -->

                </div>
            </div>
            <!-- End of Section 3 -->
            <!-- Section 4 -->
            <div class="section" id="boat-classes-section">
                <div class="section-headers">
                    <h2 class="section-headers-uppercase">
                        Boat Classes
                    </h2>
                </div>
                <!-- This will be flex display again -->
                <div class="boat-classes" id="boat-classes-content">
                    <div class="col-md-2 col-1" id="boat-classes-col-md-2 col-1"></div>

                    <!-- This is the good stuff again -->
                    <div class="middle-content" id="boat-classes-middle-content">
                        <!-- flex display and row direction row -->
                        <div class="boat-classes-two-column-table w-100">
                            <!-- column 1 -->
                            <div class="boat-classes-column" id="boat-classes-column-scull">
                                <div class="boat-classes-column-title">
                                    <h3 class="boat-classes-title-uppercase">
                                        Sculling
                                    </h3>
                                </div>
                                <div class="boat-classes-list-column">
                                    <div class="boat-class-item" id="single-scull">
                                        <div class="boat-class-item-description">
                                            <h4>Single (1x)</h4>
                                            <p>The Single is arguably the most challenging boat to master and compete in with a waterline width of less than 1 foot. These boats typically measure between 25 and 30 feet in length.</p>
                                        </div>
                                        <img src="/src/media/images/single.jpg">
                                    </div>
                                    <div class="boat-class-item" id="double-scull">
                                        <div class="boat-class-item-description">
                                            <h4>Double (2x)</h4>
                                            <p>The Double is a rowing boat designed for two rowers, with each rower using two oar simultaneously. These boats typically measure between 30 and 34 feet in length.</p>   
                                        </div>
                                        <img src="/src/media/images/double.jpg">
                                    </div>
                                    <div class="boat-class-item" id="quad-scull">
                                        <div class="boat-class-item-description">
                                            <h4>Quadruple (4x)</h4>
                                            <p>The Quadruple, also known as the "Quad" is a rowing boat designed for four rowers, with each rower using two oar simultaneously. These boats typically measure between 36 and 42 feet in length.</p>
                                        </div>
                                        <img src="/src/media/images/quad.jpg">
                                    </div>
                                </div>
                            </div>
                            <!-- column 2 -->
                            <div class="boat-classes-column" id="boat-classes-column-sweep">
                                <div class="boat-classes-column-title">
                                    <h3 class="boat-classes-title-uppercase">
                                        Sweeping
                                    </h3>
                                </div>
                                <div class="boat-classes-list-column">
                                    <div class="boat-class-item" id="pair-sweep">
                                        <div class="boat-class-item-description">
                                            <h4>Pair (2-)</h4>
                                            <p>The Pair is a rowing boat designed for two rowers, with each rower using a single oar. These boats typically measure between 32 and 34 feet in length, offering a compact and agile platform for rowing.</p>
                                        </div>
                                        <img src="/src/media/images/pair.jpg">
                                    </div>
                                    <div class="boat-class-item" id="four-sweep">
                                        <div class="boat-class-item-description">
                                            <h4>Four (4-/+)</h4>
                                            <p>The Four is a rowing boat designed for four rowers, with each rower using a single oar. These boats typically measure between 39 and 44 feet in length. The main difference between a 4+ and a 4- is that a 4+ includes a coxswain, while a 4- does not.</p>
                                        </div>
                                        <img src="/src/media/images/four.jpg">
                                    </div>
                                    <div class="boat-class-item" id="eight-sweep">
                                        <div class="boat-class-item-description">
                                            <h4>Eight (8+)</h4>
                                            <p>The Eight is a rowing boat designed for eight rowers, with each rower using a single oar. These boats typically measure between 55 and 65 feet in length. It is steered by a single coxswain who sits at the stern of the boat. This is the largest class of rowing shells.</p>
                                        </div>
                                        <img src="/src/media/images/eight.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of the good stuff -->

                    <div class="col-md-2 col-1" id="boat-classes-col-md-2 col-1"></div>
                </div>
            </div>
            <!-- End of Section 4 -->
        </div>
        <!-- End of Home page content -->

        <!-- Start of Footer -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\footer.php';?>
        <!-- End of Footer -->

        <!--------------------------------------------------------------->
        <!-- SCRIPTS ---------------------------------------------------->
        <!--------------------------------------------------------------->

        <script src="/src/scripts/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="/src/scripts/dropdown-nav.js"></script>
        <script src="/src/scripts/scroll-to-top.js"></script>        
        <script>
        </script>
    </body>
</html>
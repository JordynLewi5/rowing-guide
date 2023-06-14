<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/faq.css">
        <link rel="stylesheet" href="/src/css/shared.css">
        <link rel="stylesheet" href="/src/css/footer.css">
        <link rel="stylesheet" href="/src/css/header.css">
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>
        
        <!-- End of Header -->
        <!-- Start of FAQ body -->
        <div class="body">
            <div class="FAQ-page">
                <div class="left-sidebar"></div>
                <!-- FAQ List Section -->
                <div class="middle-content">
                    <div class="FAQ-header">
                        <h1 class="uppercase top-margin">Faq</h1>
                    </div>
                    <div class="FAQ-body">
                        <div class="QA" id="QA1">
                            <div class="Question">
                                <p>What is the correct sequences for the drive and recovery?</p>
                            </div>
                            <div class="Answer">
                                <p>During the drive, begin with your body angled forward about 30 degrees and arms fully extended. 
                                    Drive the legs down while maintaining your upperbody and arm position. 
                                    Just before the legs straighten out begin swinging your body back to about -30 degrees while keeping the arms straight out. 
                                    Start bringing in the hands keeping your shoulders relaxed. Do not try to get extra drive length by bringing your shoulders back. 
                                    This position is called the finish. The recovery is the exact reverse of the drive sequence all the way up to the catch.</p>
                            </div>
                        </div>
                        <div class="QA" id="QA2">
                            <div class="Question">
                                <p>Why are my forearms burning when I row?</p>
                            </div>
                            <div class="Answer">
                                <p>The burning sensation is usually caused by an incorrect grip of the oar handle. 
                                    Your thumb should be on the underside of the oar handle. 
                                    Make sure your hands are not gripping too tightly. 
                                    The oar handle should sit snuggly locked in place by your fingers and touching the upper region of your palm. 
                                    If you've ever held a bird before, you should almost treat the handle in the same way and just lock your fingers in place instead of squeezing.</p>
                            </div>
                        </div>
                        <div class="QA" id="QA3">
                            <div class="Question">
                                <p>Why do I keep catching crabs?</p>
                            </div>
                            <div class="Answer">
                                <p>Crabs typically happen when the oar blade is not locked in its vertical position, aka not fully squared. 
                                    When your blade is not squared and you begin the drive, the blade gets sucked under the water.
                                    To stop this from happening entirely will take time and practice, but it all comes down to preparation for the catch.
                                    As you approach the catch you should already be gradually squaring, or rolling up, your blade so that it is completely squared just before your reach your catch position.
                                    I typically tell my athletes to begin the roll up the moment their hands pass over their feet. 
                                    It is also important to not let your hands drop down as you approach the catch as this will increase the distance you need to move the oar in order to get it into the water which inevitably leads to a much more chaotic catch.
                                    There are many other factors to consider, but in my experience it most important that you make sure you are prepared for the catch in every single stroke and do everything you can to make sure the catch is a smooth transition.</p>
                            </div>
                        </div>
                        <div class="QA" id="QA4">
                            <div class="Question">
                                <p>What are some important terms I should know?</p>
                            </div>
                            <div class="Answer">
                                <div class="answer-paragraph">
                                    <p>Drive: the phase of the stroke that generates power.</p>
                                    <p>Recovery: the phase of the stroke where you move back up to the catch and prepare for the next stroke.</p>
                                    <p>Catch: the position you will be in at the beginning of the drive. Arms extended, body pivoted forward, and legs brought in with shins perpendicular to the water/ground.</p>
                                    <p>Finish: the position you will be in at the end of the drive. Legs down, body pivoted back, and arms brought in towards the body.</p>
                                    <p>Starboard/Port: Facing away from the direction of boat travel, starboard is on the left side and port is on the right side.</p>
                                    <p>Stern/Bow: Face away from the direction of boat travel, stern is end of the boat you are facing towards and and the bow is the end of the boat you are facing away.</p>
                                    <p>You can find some additional important terms <a href="https://www.britishrowing.org/2017/03/a-glossary-of-rowing-lingo/" target="__">here</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of FAQ List Section -->

                <div class="right-sidebar"></div>
            </div>
        </div>
        <!-- Start of Footer -->
        <footer class="default-footer">
            <ul>
                <li>Jordyn Lewis</li>
                <li>(C) 2023</li>
            </ul>
        </footer>
        <!-- End of Footer -->

        <!--------------------------------------------------------------->
        <!-- SCRIPTS ---------------------------------------------------->
        <!--------------------------------------------------------------->

        <script src="/src/scripts/jquery.js"></script>
        <!-- Code -->
        <script src="/src/scripts/dropdown-nav.js"></script>
        <script src="/src/scripts/scroll-to-top.js"></script>
        <script>
            $('.QA').click(function(event) {
                    $('.QA').removeClass('show');
                    $(this).find('.Answer').toggleClass('show');
                });
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/oar.css">
        <link rel="stylesheet" href="/src/css/shared.css">
        <link rel="stylesheet" href="/src/css/footer.css">
        <link rel="stylesheet" href="/src/css/header.css">
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>

        <!-- End of Header -->
        <!-- Start of Gear body -->
        <div class="body">
            <div class="oar-page">
                <div class="left-sidebar"></div>
                <!-- Gear List Section -->
                <div class="middle-content">
                    <div class="oar-header">
                        <h1 class="uppercase top-margin">The Oar</h1>
                    </div>
                    <div class="oar-interactive">
                        <div class="oar-diagram">
                            <img class="oar-icon"  src="/src/media/images/concept2-oar.png" alt="Concept 2 Oar" usemap="#oarmap">
                            <map name="oarmap">
                                <area class="oarmap-area" id="handle" shape="rect" coords="0,32.5,130,52" alt="handle">
                                <area class="oarmap-area" id="inboard-shaft" shape="rect" coords="130,32.5,481,52" alt="inboard-shaft">
                                <area class="oarmap-area" id="sleeve" shape="rect" coords="481,26,495.6,58.5" alt="sleeve">
                                <area class="oarmap-area" id="collar" shape="rect" coords="495.6,13,508.3,65" alt="collar">
                                <area class="oarmap-area" id="sleeve" shape="rect" coords="508.3,26,586.3,58.5" alt="sleeve">
                                <area class="oarmap-area" id="outboard-shaft" shape="rect" coords="586.3,32.5,1024.4,52" alt="outboard-shaft">
                                <area class="oarmap-area" id="blade" shape="rect" coords="1024.4,0,1280.5,128.7" alt="blade">
                                <area class="oarmap-area" id="vortex-tip" shape="rect" coords="1280.5,0,1300,128.7" alt="vortex-tip">
                            </map>
                        </div>
                        <small>Hover mouse over oar to view descriptions</small>

                        <hr>
                        <div class="oars-information">
                            <div id="handle-info" class="oar-information">
                                <h2>Handle</h2>
                                <p>The handle is the part of the oar that the rower holds onto. It is made of a hard plastic that is designed to be gripped easily. The handle can be adjusted to move closer or further away from the blade to adjust the inboard length of the oar.</p>
                            </div>
                            <div id="inboard-shaft-info" class="oar-information">
                                <h2>Inboard Shaft</h2>
                                <p>The inboard shaft is the length of shaft of the oar that is on the side of the oarlock. It is typically made of a carbon fiber material that is designed to be lightweight and incredibly stiff.</p>
                            </div>
                            <div id="sleeve-info" class="oar-information">
                                <h2>Sleeve</h2>
                                <p>The sleeve is the part of the oar that is connected to the collar. It allows rowers to adjust the location of the collar to increase or decrease the ratio of inboard length to outboard length.</p>
                            </div>
                            <div id="collar-info" class="oar-information">
                                <h2>Collar</h2>
                                <p>The collar is the part of the oar that is connected to the sleeve. Looking directly down the shaft, the collar is square in shape with rounded edged that allow rowers to lock the oar's orientation in a "feathered" and "squared" position. It is made of a hard plastic.</p>
                            </div>
                            <div id="outboard-shaft-info" class="oar-information">
                                <h2>Outboard Shaft</h2>
                                <p>The outboard shaft is the length of shaft of the oar that is on the side of the blade. It is typically made of a carbon fiber material that is designed to be lightweight and incredibly stiff</p>
                            </div>
                            <div id="blade-info" class="oar-information">
                                <h2>Blade</h2>
                                <p>The blade is the part of the oar that is in the water. It is typically made of a layered composite material that is designed to be lightweight and durable. The geometry of the blade impacts how the blade connects and glides through the water.</p>
                            </div>
                            <div id="vortex-tip-info" class="oar-information">
                                <h2>Vortex Tip</h2>
                                <p>The vortex tip is a common component that oar manufacturers implement into their oars. It is located on the furthest edge of the blade. It is typically made of a hard plastic that is designed to be durable and impact resistant. The vortex works by disrupting the flow of water around the edge of the blade and allows for better connection to the water and thus higher efficiency.</p>
                            </div>
                        </div>
                    </div>
                <!-- End of Gear List Section -->
            </div>
            <div class="right-sidebar"></div>

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
        <script>
            // Oar Diagram
            $('.oar-information').hide();
            $('#handle-info').show();

            $('.oarmap-area').on('mouseenter', function() {
                $('.oar-information').hide();
                $(`#${$(this).attr('id')}-info`).show();
            });
            // End of Oar Diagram
            $(document).ready(function() {
                let prevScrollPos = $(window).scrollTop();
                let headerHideMargin = 120;
                $(window).on("scroll", function() {
                    let currentScrollPos = $(window).scrollTop();
                    if (currentScrollPos - prevScrollPos < -headerHideMargin) {
                        $(".default-header").css("top", "0");
                        prevScrollPos = currentScrollPos;
                    } else if (currentScrollPos - prevScrollPos > headerHideMargin) {
                        $(".default-header").css("top", "-114px");
                        prevScrollPos = currentScrollPos;
                    }
                });
            });
            // Gear Nav
            $('.gear-nav-dropdown').on('mouseenter', function() {
                $('.gear-nav-bottom').toggleClass('show');
                $('.gear-nav-top').toggleClass('show');
            }) .on('mouseleave', function() {
                $('.gear-nav-bottom').toggleClass('show');
                $('.gear-nav-top').toggleClass('show');
            }) 
            // End of Gear Nav
        </script>
    </body>
</html>
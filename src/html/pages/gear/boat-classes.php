<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/boat-classes.css">
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
            <div class="boats-page">
                <div class="left-sidebar"></div>
                <!-- Gear List Section -->
                <div class="middle-content">
                    <div class="boats-header">
                        <h1 class="uppercase top-margin">Boat Classes</h1>
                    </div>              
                      <!--  -->
                    <div class="carousel">
                        <div class="carousel-image-panel">                            
                            <img class="carousel-image" id="carousel-image-left" src="/src/media/images/boat6.jpg">
                            <img class="carousel-image" id="carousel-image-center" src="/src/media/images/boat1.jpg">
                            <img class="carousel-image"id="carousel-image-right" src="/src/media/images/boat2.jpg">

                        </div>
                        <div class="carousel-controller-panel">
                            <button class="carousel-button" id="carousel-button-left"><image src="/src/media/images/left-arrow.png"></button>
                            <button class="carousel-button" id="carousel-button-right"><image src="/src/media/images/right-arrow.png"></button>
                        </div>
                    </div>
                    <div class="boat-information-divs">
                        <div class="boat-information" id="1-info">
                            <h2 class="uppercase">Single (1x)</h2>
                            <p>The single in rowing refers to a specific type of rowing boat designed for a single rower. It is also commonly known as a "single scull."</p>
                            <p>In a single scull, the rower sits in a narrow, long shell with a sliding seat and uses two oar, one in each hand. This rowing boat is built to be stable and streamlined to enable efficient rowing by a single person.</p>
                            <p>The rower faces toward the stern (rear) of the boat and propels the boat forward by applying force to the oar through a series of coordinated movements. The rower uses their legs, core, and upper body to generate power and transfer it to the oar, which are placed in the water.</p>
                            <p>The single scull provides a challenging rowing experience as the rower must maintain balance and control the boat while executing the rowing stroke. It requires a combination of technique, strength, and endurance to achieve efficient and effective rowing.</p>
                            <p>Singles are commonly used for both recreational rowing and competitive rowing. In competitive rowing, single sculling races are often held, testing the rower's speed, agility, and racing strategy.</p>
                            <p>Rowing in a single scull offers a unique connection to the water, allowing the rower to experience the tranquility and beauty of rowing alone, with complete control over the boat's movements. It requires focus, discipline, and mastery of the rowing stroke to achieve optimal performance in this individual rowing discipline.</p>
                        </div>
                        <div class="boat-information" id="2-info">
                            <h2 class="uppercase">Double (2x)</h2>
                            <p>The double in rowing refers to a specific type of rowing boat designed for two rowers. It is also commonly known as a "double scull."</p>
                            <p>In a double scull, two rowers sit side by side in a narrow, long shell with sliding seats and each rower uses two oar, one in each hand. The boat is built to be stable and streamlined to enable efficient rowing by the two rowers working in tandem.</p>
                            <p>The rowers face toward the stern (rear) of the boat and synchronize their movements to propel the boat forward. They coordinate their leg drive, core engagement, and upper body strength to generate power and transfer it to the oar, which are placed in the water.</p>
                            <p>The double scull requires excellent teamwork, coordination, and communication between the rowers. They must row in sync, maintaining a harmonious rhythm and balance to achieve maximum efficiency and speed.</p>
                            <p>Doubles are commonly used in both recreational rowing and competitive rowing. In competitive rowing, double sculling races are popular, challenging the rowers' skills, endurance, and tactical decision-making.</p>
                            <p>Rowing in a double scull offers a shared experience on the water, allowing the rowers to work together, complementing each other's strengths and pushing each other to achieve their best performance. It requires trust, cooperation, and a deep understanding of each other's rowing technique to excel in this team-oriented rowing discipline.</p>
                        </div>
                        <div class="boat-information" id="3-info">
                            <h2 class="uppercase">Quad (4x)</h2>
                            <p>The quad is a specific type of rowing shell that is designed to be rowed by a crew of four rowers.</p>
                            <p>The quad shell consists of four rowing positions, with each rower equipped with a pair of oar. The rowers sit in a line facing the stern of the boat, with each rower controlling two oar. The oar are connected to the boat via riggers, which are attached to the sides of the boat.</p>
                            <p>The boat itself is long and narrow, usually made of lightweight materials such as carbon fiber or fiberglass. This construction allows the quad to be fast and maneuverable in the water. The hull of the boat is designed to minimize drag and maximize efficiency, enabling the rowers to propel the boat forward with each stroke.</p>
                            <p>In terms of rowing technique, the quad requires coordination and synchronization among the rowers. The rowers must work together to achieve precise timing and balance in order to maximize the boat's speed and efficiency. The stroke sequence typically involves an alternating pattern of rowers, with one rower starting the stroke followed by the others in sequence.</p>
                            <p>Quads are often used in competitive rowing events, ranging from local regattas to international championships. They are favored for their speed and versatility, making them suitable for various racing distances, from short sprints to longer endurance races. The quad is also a popular choice for recreational rowing, allowing a group of friends or teammates to enjoy the sport together.</p>
                        </div>
                        <div class="boat-information" id="4-info">
                            <h2 class="uppercase">Pair (2-)</h2>
                            <p>The pair is a specific type of rowing shell designed for a crew of two rowers.</p>
                            <p>The pair shell consists of two rowing positions, with each rower handling a single oar. The rowers sit side by side, typically facing the bow of the boat. Each rower operates an oar on one side of the boat, creating a symmetrical rowing setup.</p>
                            <p>The boat itself is long and narrow, constructed from lightweight materials such as carbon fiber or fiberglass. This design allows the pair to be agile and fast on the water. The hull is carefully crafted to minimize drag and maximize efficiency, enabling the rowers to generate propulsion with each stroke.</p>
                            <p>In terms of rowing technique, the pair requires excellent coordination and synchronization between the rowers. They must work together to maintain balance and timing, ensuring their strokes complement each other for optimal efficiency. The stroke sequence typically involves an alternating pattern, where one rower initiates the stroke followed by the other in a rhythmic fashion.</p>
                            <p>The pair is often used in both competitive and recreational rowing. It is a challenging boat to row, as the rowers must rely on each other for balance and coordination. The pair is favored for its demanding nature, offering a unique opportunity to develop a strong partnership and enhance rowing skills.</p>
                        </div>
                        <div class="boat-information" id="5-info">
                            <h2 class="uppercase">Four (4+/-)</h2>
                            <p>The four is a type of rowing shell designed to be rowed by a crew of four rowers.</p>
                            <p>The four shell consists of four rowing positions, with each rower equipped with a single oar. The rowers sit in a line, facing the bow of the boat. Each rower operates an oar on one side of the boat, creating a symmetrical rowing configuration.</p>
                            <p>The boat itself is long and slender, typically constructed using lightweight materials like carbon fiber or fiberglass. This construction enables the four to be swift and maneuverable in the water. The hull of the boat is designed to minimize resistance and optimize efficiency, allowing the rowers to generate forward momentum with each stroke.</p>
                            <p>Rowing a four requires a high level of coordination and synchronization among the rowers. They must work together to maintain precise timing and balance, ensuring their strokes harmonize for maximum power and efficiency. The stroke sequence often follows a coordinated pattern, with one rower initiating the stroke followed by the others in sequence.</p>
                            <p>The four is commonly used in both competitive and recreational rowing. It is a popular choice for crew events, providing a dynamic and challenging rowing experience. The four demands teamwork, communication, and synchronization, making it an ideal boat for developing rowing skills and fostering a sense of unity among the crew.</p>
                        </div>
                        <div class="boat-information" id="6-info">
                            <h2 class="uppercase">Eight (8+)</h2>
                            <p>The eight is the largest and most prestigious boat type, designed for a crew of eight rowers.</p>
                            <p>The eight shell consists of eight rowing positions, with each rower equipped with a single oar. The rowers sit in a line, facing the bow of the boat. Each rower operates an oar on one side of the boat, creating a symmetrical and synchronized rowing arrangement.</p>
                            <p>The boat itself is long and sleek, typically crafted from lightweight materials like carbon fiber or fiberglass. The design of the eight prioritizes speed and stability on the water. The hull is engineered to minimize resistance and maximize efficiency, allowing the rowers to generate substantial power and propel the boat forward.</p>
                            <p>Rowing an eight demands a high level of coordination and unity among the rowers. They must work together in perfect harmony, syncing their strokes and maintaining precise timing. The stroke sequence in an eight follows a carefully choreographed pattern, with one rower setting the rhythm and the others following suit.</p>
                            <p>The eight is primarily used in competitive rowing, including major races and championships. It requires exceptional teamwork, physical strength, and endurance. The eight represents the pinnacle of rowing excellence, offering a thrilling and demanding rowing experience that showcases the power and synchronization of a united crew.</p>
                        </div>
                    </div>
                </div>
                <!-- End of Gear List Section -->

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
        <script>
            let carouselIndex = 1;
            let imageCount = 6;

            // Reset the boat info descriptions
            $('.boat-information').hide();
            $(`#${carouselIndex}-info`).show();

            // Carousel
            $('#carousel-button-left, #carousel-image-left').click(function() {
                carouselIndex = (carouselIndex > 1 ? --carouselIndex : imageCount);
                updateCarouselImage();
                updateBoatDescriptions();
            })
            $('#carousel-button-right, #carousel-image-right').click(function() {
                carouselIndex = (carouselIndex < 6 ? ++carouselIndex : 1);
                updateCarouselImage();
                updateBoatDescriptions();
            })
            // End of Carousel

            // Header
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
            $('.gear-nav-dropdown').on('mouseenter', function() {
                $('.gear-nav-bottom').addClass('show');
                $('.gear-nav-top').addClass('show');

            })
            .on('mouseleave', function() {
                $('.gear-nav-bottom').removeClass('show');
                $('.gear-nav-top').removeClass('show');
            }) 
            // End of Header

            // Functions
            function updateCarouselImage() {                
                // update left image
                let imagePath = '/src/media/images/boat' + (carouselIndex > 1 ? carouselIndex - 1 : imageCount) + '.jpg';
                $('#carousel-image-left').attr('src', imagePath);
                // update center image
                imagePath = '/src/media/images/boat' + carouselIndex + '.jpg';
                $('#carousel-image-center').attr('src', imagePath);
                // update right image
                imagePath = '/src/media/images/boat' + (carouselIndex < 6 ? carouselIndex + 1 : 1) + '.jpg';
                $('#carousel-image-right').attr('src', imagePath);
            }

            function updateBoatDescriptions() {
                $('.boat-information').hide();
                $(`#${carouselIndex}-info`).show();
            }
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/contact.css">
        <link rel="stylesheet" href="/src/css/shared.css">
        <link rel="stylesheet" href="/src/css/footer.css">
        <link rel="stylesheet" href="/src/css/header.css">
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>

        <!-- End of Header -->
        <!-- Start of Contact body -->
        <div class="body">
            <div class="contact-page">
                <div class="left-sidebar"></div>

                <div class="middle-content">
                    <div class="contact-header">
                        <h1 class="uppercase top-margin">Contact</h1>
                    </div>
                    <div class="contact-body">
                        <form action="">
                            <input type="text" id="name" name="name" placeholder="Name" required><br><br>
                            <input type="email" id="email" name="email" placeholder="Email Address" required><br><br>
                            <input type="text" id="subject" name="subject" placeholder="Subject" required><br><br>
                            <textarea type="textarea" id="message" name="message" placeholder="Message" required></textarea><br><br>

                            <input type="submit" id="submit" value="Submit"><br><br>
                        </form>
                    </div>
                </div>

                <div class="right-sidebar"></div>
            </div>
        </div>
        <!-- End of Contact body -->
        <!-- Start of Footer -->
        <footer class="default-footer">
            <ul>
                <li>Jordyn Lewis</li>
                <li>(C) 2023</li>
            </ul>
        </footer>
        <!-- End of Footer -->
        <script src="/src/scripts/jquery.js"></script>
        <!-- Code -->
        <script src="/src/scripts/dropdown-nav.js"></script>
        <script src="/src/scripts/scroll-to-top.js"></script>
        
        <script>    
        </script>
    </body>
</html>
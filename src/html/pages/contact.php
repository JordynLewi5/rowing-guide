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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>

        <!-- End of Header -->
        <!-- Start of Contact body -->
        <div class="body">
            <div class="contact-page">
                <div class="col-md-2 col-1"></div>

                <div class="middle-content w-100">
                    <div class="contact-header">
                        <h1 class="uppercase mt-4">Contact</h1>
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

                <div class="col-md-2 col-1"></div>
            </div>
        </div>
        <!-- End of Contact body -->
        <!-- Start of Footer -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\footer.php';?>
        <!-- End of Footer -->
        <script src="/src/scripts/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>        
        <script src="/src/scripts/dropdown-nav.js"></script>
        <script src="/src/scripts/scroll-to-top.js"></script>
        
        <script>    
        </script>
    </body>
</html>
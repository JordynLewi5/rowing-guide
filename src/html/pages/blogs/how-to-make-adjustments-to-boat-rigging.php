<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/blogs.css">
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
            <div class="blogs-page">
                <div class="col-md-2 col-1"></div>

                <div class="middle-content">
                    <div class="blogs-header">
                        <a href="/src/html/pages/blog.php">Back to Blogs</a>
                        <p class="date-author">June 16, 2023 | By Jordyn Lewis</p>

                        <h1 class="uppercase">How to Make Adjustments to Boat Rigging</h1>
                    </div>
                    <div class="blogs-body">
                        <h2>What can be Adjusted?</h2>
                        <p>There are number of components that can be adjusted to better suit a specific rower. Oarlock spacers, footstretcher tracks, footstretcher heights, rigger spanning, rigger setting, seat track displacement, oar collars, and oar handle lengths can all be adjust.</p>
                        <h2>General Guidelines</h2>
                        <p>When it comes to making changes to boat, there are a few guidelines to follow. Most adjustments are made based off height, leg length, shoulder span, wing span, etc. For taller people, you generally want the footstretchers to be further away to account for longer legs, oarlocks to be positioned further out to account for wider shoulders, more spacers underneath the oarlocks for higher shoulders, lower shoes, and seat tracks to be moved back to account for longer leg drive.</p>
                        <img class="blog-image" src="/src/media/images/rigger.jpg" alt="Boat Rigging" style="width:100%">
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
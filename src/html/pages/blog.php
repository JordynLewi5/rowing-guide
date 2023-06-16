<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1</title>
        <meta name="description" content="Project 1 description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/src/css/blog.css">
        <link rel="stylesheet" href="/src/css/shared.css">
        <link rel="stylesheet" href="/src/css/footer.css">
        <link rel="stylesheet" href="/src/css/header.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>


        <!-- End of Header -->
        <!-- Start of Blog body -->
        <div class="body">
            <div class="blog-page d-flex pb-4">
                <div class="col-md-2 col-1"></div>
                <!-- Blog List Section -->
                <div class="middle-content">
                    <h1 class="uppercase mt-4">Blog</h1>
                    <h3>Recent Blogs</h3>
                    <ul class="blog-list">
                        <?php 
                            // Generate list of blogs with image, title, date, and author pulled from blog post
                            $blogs = scandir("C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\pages\blogs");
                            foreach ($blogs as $blog) {
                                if ($blog == "." || $blog == "..") {
                                    continue;
                                }

                                $blogName = str_replace(".php", "", $blog);
                                $blogName = str_replace("-", " ", $blogName);
                                $blogName = ucwords($blogName);
                                echo "<li><div class=\"blog-description\"><a class=\"blog-link\" href='/src/html/pages/blogs/$blog'>$blogName</a>";

                                $html = file_get_contents("C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\pages\blogs/$blog");
                                $dom = new DOMDocument();
                                libxml_use_internal_errors(true);
                                $dom->loadHTML($html);
                                libxml_use_internal_errors(false);
                                $xpath = new DOMXPath($dom);

                                $dateAndAuthor = $xpath->query('//p[@class="date-author"]')->item(0);
                                if ($dateAndAuthor) {
                                    echo "<p>$dateAndAuthor->nodeValue</p></div>";
                                }

                                $imageElement = $xpath->query('//img[@class="blog-image"]')->item(0);
                                if ($imageElement) {
                                    $imageUrl = $imageElement->getAttribute('src');
                                    echo "<a class=\"blog-image-link\" href='/src/html/pages/blogs/$blog'><img src='$imageUrl'></a>";
                                }

                                echo "</li>";
                                echo "<br>";
                            }
                        ?>
                    </ul>
                </div>
                <!-- End of Blog List Section -->
                <div class="col-md-2 col-1"></div>
            </div>
        </div>
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
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
    </head>
    <body>
        <!-- Start of Header -->
        <?php require 'C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\components\header.php';?>


        <!-- End of Header -->
        <!-- Start of Blog body -->
        <div class="body">
            <div class="blog-page">
                <div class="left-sidebar"></div>
                <!-- Blog List Section -->
                <div class="middle-content">
                    <h1 class="uppercase top-margin">Blog</h1>
                    <h3>Recent Blogs</h3>
                    <ul class="blog-list">
                        <?php 
                            $blogs = scandir("C:\Users\jlewi\OneDrive\Desktop\Kinetic Projects\Project 1\src\html\pages\blogs");
                            foreach ($blogs as $blog) {
                                if ($blog == "." || $blog == "..") {
                                    continue;
                                }
                                $blogName = str_replace(".php", "", $blog);
                                $blogName = str_replace("-", " ", $blogName);
                                $blogName = ucwords($blogName);
                                echo "<li><a href='/src/html/pages/blogs/$blog'>$blogName</a></li>";
                                echo "<hr>";
                            }
                        ?>
                    </ul>
                </div>
                <!-- End of Blog List Section -->
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
        </script>
    </body>
</html>
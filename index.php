<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechcp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle like and dislike actions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['action'] == 'like' || $_POST['action'] == 'dislike') {
        $action = $_POST['action'];
        $comment_id = $_POST['comment_id'];

        // Check if the user has already liked or disliked this comment
        $username = $_SESSION['username'];
        $checkQuery = $conn->query("SELECT * FROM likes WHERE comment_id = $comment_id AND username = '$username'");
        if ($checkQuery->num_rows > 0) {
            // User has already performed an action, update the action
            $conn->query("UPDATE likes SET action = '$action' WHERE comment_id = $comment_id AND username = '$username'");
        } else {
            // User is performing a new action, insert a new record
            $conn->query("INSERT INTO likes (comment_id, username, action) VALUES ($comment_id, '$username', '$action')");
        }

        // Return updated like and dislike counts from the comment table
        $commentCountResult = $conn->query("SELECT likes, dislikes FROM comments WHERE comment_id = $comment_id");
        $commentCountRow = $commentCountResult->fetch_assoc();
        $like = $commentCountRow['likes'];
        $dislike = $commentCountRow['dislikes'];

        // Return updated counts as response
        echo json_encode(array('likeCount' => $like, 'dislikeCount' => $dislike));
        header('Location: index.php');
        exit; // Stop further execution
    } elseif ($_POST['action'] == 'post_comment') {
        $username = $_SESSION['username']; // Ensure this is the session username
        $content = $_POST['content'];

        // Insert the comment
        $conn->query("INSERT INTO comments (username, content) VALUES ('$username', '$content')");
        header('Location: index.php');
        exit; 
    } elseif ($_POST['action'] == 'post_reply') {
        $comment_id = $_POST['comment_id'];
        $username = $_SESSION['username']; // Ensure this is the session username
        $content = $_POST['content'];

        // Insert the reply
        $conn->query("INSERT INTO replies (comment_id, username, content) VALUES ($comment_id, '$username', '$content')");
        header('Location: index.php');
        exit; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/static/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/static/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="cars.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
    /* Add your CSS styles here */
    .comment-container {
        margin-bottom: 20px;
    }
    .comment {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        align:right;
    }
    .like-dislike {
        margin-top: 10px;
    }
    .reply-form textarea {
        width: 100%;
        margin-bottom: 10px;
    }
    
    /* Hover effect for buttons */
    .btn:hover {
        opacity: 0.8; /* Adjust the opacity value as needed */
    }


    .body{
        font-family: revert;
    }
    #comment-form{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    
    .navbar-nav .nav-link.active:hover {
            color: white!important;
            background-color: grey;
        }
        .dropdown-item:hover {
            background-color: #555;
            color: #fff;
        }
        .navbar-nav .nav-link:hover {
            background-color: #555;
            color: #fff;
        }
        .navbar-nav .nav-link {
           font-size: 1.2rem;
           text-decoration: none;
        }
        #compare123
        {
            margin: 10px;
            border: 2px solid grey;
            font-size: 1.2rem;
            border-radius: 30px;
            color: white;
            background-color: black;
            text-decoration: none;
        }
        #compare123:hover
        {
            border: 2px solid red;
            
        }
       .footer
        {   padding-top: 500px;
            margin-top: 50px;
        }
        .body
        {
            margin-bottom: 200px;
        }
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-light shadow p-0" style="background-color: black  !important;">
        <a class="navbar-brand" href="#index.html" id="carlogo">
            <img src="uploads/logo/Designer.png" alt="CarVerse Logo" width="80" class="d-inline-block align-text-top">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link" style="color: white;">Home</a>
                <a href="ourteam.html" class="nav-item nav-link active" style="color: grey;">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white;">Brands</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="company-specific-details.html?brand=Porsche" class="dropdown-item">Porsche</a>
                        <a href="company-specific-details.html?brand=Bugatti" class="dropdown-item">Bugatti</a>
                        <a href="company-specific-details.html?brand=BMW" class="dropdown-item">BMW</a>
                        <a href="company-specific-details.html?brand=Lamborghini" class="dropdown-item">Lamborghini</a>
                        <a href="company-specific-details.html?brand=Ferrari" class="dropdown-item">Ferrari</a>
                        <a href="company-specific-details.html?brand=Ford" class="dropdown-item">Ford</a>
                        <a href="company-specific-details.html?brand=Mercedes" class="dropdown-item">Mercedes-Benz</a>
                        <a href="company-specific-details.html?brand=McLaren" class="dropdown-item">Mclaren</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white;">Dealers</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="porschedealer.html" class="dropdown-item">Porsche</a>
                        <a href="bmw.html" class="dropdown-item">BMW</a>
                        <a href="lambodealer.html" class="dropdown-item">Lamborghini</a>
                        <a href="Ferrari.html" class="dropdown-item">Ferrari</a>
                        <a href="Ford.html" class="dropdown-item">Ford</a>
                        <a href="Mercedesde.html" class="dropdown-item">Mercedes-Benz</a>
                        <a href="McLarende.html" class="dropdown-item">Mclaren</a>
                    </div>
                </div>
                <a href="signup-free.html" class="nav-item nav-link" style="color: white;">Discussion Forum</a>
            </div>
            <a href="compare.html" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" id="compare123">Compare Cars<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>


   <div class="container">
            <div class="col-md-10">
                <img src="All Cars Specific\Porsche\Cayman\CarImages\interior2.webp" alt="Porsche 718 Cayman" class="img-fluid">
            </div>
        
    </div> 


    <div class = "container-xl"> 
        <!-- Comment Form -->
    <form id="comment-form" action="index.php" method="post" style="margin-bottom: 20px;">
    <input type="hidden" name="action" value="post_comment">
    <div class="form-group">
    <textarea id="comment-text" name="content" class="form-control" rows="3" style="margin-top: 20px; margin-bottom: 0px; resize: none;"></textarea>


    </div>
      <button type="button"  id="cancel-comment" class="btn btn-secondary m-3" >Cancel</button>
    

    <input type="submit" value="Comment" class="btn btn-primary m-3">
</form>

    <div id="comments-section">
        <?php
        // Fetch comments
        $result = $conn->query("SELECT * FROM comments ORDER BY comment_time DESC");
        while ($row = $result->fetch_assoc()) {

            echo '<div class="comment-container">';
            echo '<div class="comment">';
            echo '<div class="d-flex align-items-center">';
            echo '<div>';
            echo '<p class="mb-0"><b style="font-family: Times New Roman;">Commented by @' . $row['username'] . '</b> on ' . date('F j, Y, g:i a', strtotime($row['comment_time'])) .  '</p>';
         
           echo '<br>';
            echo '<p>' . $row['content'] . '</p>';
            echo '</div>';
            echo '</div>';

            // Like and Dislike Icons
            $likeCount = $row['likes'];
            $dislikeCount = $row['dislikes'];

            echo '<div class="like-dislike">';
            echo '<button class="like-btn btn btn-link btn-sm"><i class="fas fa-thumbs-up"></i> <span class="like-count">' . $likeCount . '</span></button>';
            echo '<button class="dislike-btn btn btn-link btn-sm"><i class="fas fa-thumbs-down"></i> <span class="dislike-count">' . $dislikeCount . '</span></button>';
            echo '</div>';

            // Reply Button and Reply Form
            echo '<button class="reply-btn btn btn-info mt-2" onclick="toggleReplyBox(this)">Reply</button>';
            echo '<div class="replies" style="display: none;">';
            $replyResult = $conn->query("SELECT * FROM replies WHERE comment_id = " . $row['comment_id'] . " ORDER BY reply_time DESC");
            while ($replyRow = $replyResult->fetch_assoc()) {
                echo '<div class="reply-container">';
                echo '<div class="reply">';
                echo '<div class="d-flex align-items-center">';
                echo '<div>';
                echo '<p class="mb-0"><b style="font-family: Times New Roman;">Replied by @ ' . $replyRow['username'] . '</b> on ' . date('F j, Y, g:i a', strtotime($replyRow['reply_time'])) . '</p>';
              
                echo '<br>'; 
                echo '<p>' . $replyRow['content'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '<form class="reply-form" action="index.php" method="post">';
            echo '<input type="hidden" name="action" value="post_reply">';
            echo '<input type="hidden" name="comment_id" value="' . $row['comment_id'] . '">';
            echo '<textarea name="content" class="form-control" rows="3"></textarea>';
            echo '<input type="submit" value="Reply" class="btn btn-primary mt-2">';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {



         // Function to clear comment text
         $('#cancel-comment').on('click', function() {
            $('#comment-text').val(''); // Clear the comment text
        });
        
        // Function to toggle reply form
        function toggleReplyBox(button) {
            var replyBox = button.nextElementSibling;
            if (replyBox && replyBox.classList.contains('replies')) {
                if (replyBox.style.display === "none") {
                    replyBox.style.display = "block";
                } else {
                    replyBox.style.display = "none";
                }
            }
        }

        // Toggle reply form visibility
        $('.reply-btn').on('click', function() {
            toggleReplyBox(this);
        });

        $('#comment-form').on('submit', function(e) {
            var commentText = $('#comment-text').val().trim(); // Trim to remove whitespace
            if (commentText === '') {
                alert('Please enter your comment.'); // Show alert if comment is empty
                e.preventDefault(); // Prevent form submission
            }
        });
          
        // Handle like button click
        $('.like-btn').on('click', function() {
            var likeCountElement = $(this).find('.like-count');
            var dislikeCountElement = $(this).closest('.comment-container').find('.dislike-count');
            var currentLikeCount = parseInt(likeCountElement.text());
            var currentDislikeCount = parseInt(dislikeCountElement.text());
            var isLiked = $(this).hasClass('liked');

            if (isLiked) {
                // If already liked, decrement count and remove 'liked' class
                likeCountElement.text(currentLikeCount - 1);
                $(this).removeClass('liked');
            } else {
                // If not liked, increment count and add 'liked' class
                likeCountElement.text(currentLikeCount + 1);
                $(this).addClass('liked');

                // If the dislike button is already clicked, decrement its count and remove 'disliked' class
                if ($(this).siblings('.dislike-btn').hasClass('disliked')) {
                    dislikeCountElement.text(currentDislikeCount - 1);
                    $(this).siblings('.dislike-btn').removeClass('disliked');
                }
            }
        });

        // Handle dislike button click
        $('.dislike-btn').on('click', function() {
            var dislikeCountElement = $(this).find('.dislike-count');
            var likeCountElement = $(this).closest('.comment-container').find('.like-count');
            var currentDislikeCount = parseInt(dislikeCountElement.text());
            var currentLikeCount = parseInt(likeCountElement.text());
            var isDisliked = $(this).hasClass('disliked');

            if (isDisliked) {
                // If already disliked, decrement count and remove 'disliked' class
                dislikeCountElement.text(currentDislikeCount - 1);
                $(this).removeClass('disliked');
            } else {
                // If not disliked, increment count and add 'disliked' class
                dislikeCountElement.text(currentDislikeCount + 1);
                $(this).addClass('disliked');

                // If the like button is already clicked, decrement its count and remove 'liked' class
                if ($(this).siblings('.like-btn').hasClass('liked')) {
                    likeCountElement.text(currentLikeCount - 1);
                    $(this).siblings('.like-btn').removeClass('liked');
                }
            }
        });

        // Handle reply form submission
        // Handle reply form submission
        $('.reply-form').on('submit', function(e) {
            var replyText = $(this).find('textarea').val().trim(); // Trim to remove whitespace
            if (replyText === '') {
                alert('Please enter your reply.'); // Show alert if reply is empty
                e.preventDefault(); // Prevent form submission
            }
        });
    });
</script>

<hr style="margin-top: 10%;">

<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="footer1234" style="margin-top: 200px;">
  <div class="container py-5">
      <div class="row">
          <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">CarVerse</h5>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Homepage</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
          </div>
          <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Quick links</h5>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Homepage</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
          </div>
          <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Contact</h5>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>VIT,Pune , Maharashtra,Pune</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>Carverse@gmail.com</p>
              <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">About Us</h5>
              <span>
                  CarVerse is your premier online destination for delving deep into the world of luxury car brands and their iconic models. Our platform is dedicated to delivering meticulously researched, engaging.
              </span>
          </div>
      </div>
  </div>
</div>


</body>
</html>

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
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
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
</style>

</head>
<body>

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


</body>
</html>

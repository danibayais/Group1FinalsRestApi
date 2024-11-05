<?php  
session_start();


 $teamMembers = [
        [
            'name' => 'Kenneth Perez',
            'position' => 'Team Leader',
            'description' => "Kenneth is a fantastic team leader. He’s always clear about our goals, keeps us motivated, and makes sure we all communicate well. Plus, he handles any conflicts with ease, helping us stay focused and productive.",
            'image' => 'https://example.com/kenneth.jpg',
            'profileLink' => 'https://www.facebook.com/profile.php?id=100013606843911'
        ],
        [
            'name' => 'Angelo Miniano',
            'position' => 'Member',
            'description' => "He’s always engaged in meetings, shares useful ideas, and communicates clearly with everyone. He’s also really supportive, stepping in to help others whenever needed, and reliably gets his tasks done on time.",
            'image' => 'https://example.com/angelo.jpg',
            'profileLink' => 'https://www.facebook.com/minianoangelo05'
        ],
        [
            'name' => 'Adrian Atilano',
            'position' => 'Member',
            'description' => "He’s always involved in discussions, contributes valuable ideas, and keeps everyone updated. Plus, he’s really supportive, always ready to help out, and consistently meets his deadlines.",
            'image' => 'https://example.com/adrian.jpg',
            'profileLink' => 'https://www.facebook.com/100007965338896'
        ],
        [
            'name' => 'Danilo Raphael Bayais',
            'position' => 'Member',
            'description' => "He’s fully engaged in every project, offers creative insights, and keeps the team in the loop. His enthusiasm is contagious, he’s always there to lend a hand, and you can count on him to hit every deadline.",
            'image' => 'https://example.com/danilo.jpg',
            'profileLink' => 'https://www.facebook.com/danilo.bayais'
        ],
        [
            'name' => 'Glendelle Antonio Porlaje',
            'position' => 'Member',
            'description' => "Always proactive in meetings, Glendelle offers fresh perspectives and ensures everyone is on the same page. She’s quick to assist colleagues and consistently delivers high-quality work on schedule.",
            'image' => 'https://example.com/glendelle.jpg',
            'profileLink' => 'https://www.facebook.com/glendelleAntonioporlaje'
        ]
    ];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<div class='contact-form' style='padding: 20px; text-align: center;'>";
    echo "<h2>Thank You for Your Message, $name!</h2>";
    echo "<p>We have received your message and will get back to you at $email soon.</p>";
    echo "</div>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile with Social Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://w0.peakpx.com/wallpaper/476/51/HD-wallpaper-triangle-solid-black-gold-laptop-full-background-and.jpg');
            text-align: center; 
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            font-size: 24px;
        }
        .team-profile {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .profile {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPiCZFFL5usCcrfwSPa3QWv1TyeXOWRJKCYg&s');
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 15px;
            padding: 10px;
            width: 200px;
        }
        .profile img {
            width: 100%;
            border-radius: 8px;
        }
        .profile:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
            border: 2px solid hsl(180, 100%, 75%);
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            width: 100%;
        }
        .contact-us, .social-login {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPiCZFFL5usCcrfwSPa3QWv1TyeXOWRJKCYg&s');
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 8px;
            width: 300px; 
        }
        .contact-us input,
        .contact-us textarea {
            width: 90%;
            padding: 8px; 
            margin: 8px 0; 
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            width: 90%;   
        }
        .login-button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
            border: 2px solid hsl(180, 100%, 75%);
        }
        .fb { background-color: #3b5998; }
        .twitter { background-color: #1da1f2; }
        .tiktok { background-color: #000000; }
        .custom-url { background-color: #ff5722; }
    </style>
</head>
<body>

    <header>
        Our Team
    </header>
    <div class="team-profile">
        <?php foreach ($teamMembers as $member): ?>
            <div class="profile">
                <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                <h2><?php echo $member['name']; ?></h2>
                <h3><?php echo $member['position']; ?></h3>
                <p><?php echo $member['description']; ?></p>
                <a href="<?php echo $member['profileLink']; ?>" target="_blank">View Profile</a>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="contact-us">
        <h2>Contact Us</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <div class="social-login">
        <h2>Login with Social Media</h2>
        <button class="login-button fb" onclick="loginWithFacebook()">Login with Facebook</button>
        <button class="login-button twitter" onclick="loginWithTwitter()">Login with Twitter</button>
        <button class="login-button tiktok" onclick="loginWithTikTok()">Login with TikTok</button>
        <button class="login-button custom-url" onclick="loginWithCustomURL()">Login with Custom URL</button>
    </div>

    <footer>
        &copy; 2024 Your Team Name. All rights reserved.
    </footer>

    <!-- Facebook SDK -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: 'YOUR_FACEBOOK_APP_ID', // Replace with your Facebook App ID
                cookie: true,
                xfbml: true,
                version: 'v16.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function loginWithFacebook() {
            FB.login(function(response) {
                if (response.authResponse) {
                    console.log('Successfully logged in with Facebook');
                    // Fetch user data after successful login
                    getUserData();
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            }, {scope: 'public_profile,email'});  // Request for public_profile and email permissions
        }

        function getUserData() {
            FB.api('/me', {fields: 'id,name,email,picture'}, function(response) {
                console.log('User Data:', response);
                // Display user data on the page
                document.getElementById('user-info').innerHTML = `
                    <h3>Welcome, ${response.name}!</h3>
                    <p>Email: ${response.email}</p>
                    <img src="${response.picture.data.url}" alt="Profile Picture" />
                `;
            });
        }

        function loginWithTwitter() {
            alert("Twitter login coming soon!");
        }

        function loginWithTikTok() {
            alert("TikTok login coming soon!");
        }

        function loginWithCustomURL() {
            const customURL = prompt("Enter the URL you wish to open:");
            if (customURL) {
                window.open(customURL, "_blank");
            }
        }
    </script>

    <!-- Div to display user info -->
    <div id="user-info"></div>

</body>
</html>

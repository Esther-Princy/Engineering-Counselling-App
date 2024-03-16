<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6ffe6;
            color: #004d00;
        }

        header {
            text-align: center;
            padding: 80px 0;
            color: #fff;
            position: relative;
            background-image: url('https://www.jobboom.com/career/wp-content/uploads/2018/01/choix-ecole-1-770x433.jpg');
            background-size: cover;
            background-position: center center;
            background-color: #004d00;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
        }

        .features {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 60px 0;
        }

        .feature {
            text-align: center;
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .feature h2 {
            color: #004d00;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .cta {
            text-align: center;
            padding: 60px 0;
            background-color: #fff;
        }

        .cta h2 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #004d00;
        }

        .cta p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .signup-btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            background-color: #004d00;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
            border: none;
        }

        .signup-btn:hover {
            background-color: #003300;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #004d00;
            color: #fff;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #004d00;
        }

        .nav-btn {
            color: #fff;
            background-color: #004d00;
            border: 1px solid #004d00;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 4px;
        }

        .nav-btn:hover {
            background-color: #003300;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        .search-btn {
            background-color: #004d00;
            color: #fff;
            border: none;
            border-radius: 4px;
            margin-left: 10px;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #003300;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <button class="nav-btn" onclick="window.location.href='Thome.html'">Home</button>
        <div class="dropdown">
            <button class="nav-btn">Colleges</button>
            <div class="dropdown-content">
                <a href="gov.html">Government Colleges in South Tamil Nadu</a>
                <a href="private.html">Private Colleges in South Tamil Nadu</a>
                <a href="jee.html">JEE Based Colleges in South Tamil Nadu</a>
            </div>
        </div>
        <button class="nav-btn" onclick="window.location.href='sru.html'">Filters</button>
        <button class="nav-btn" onclick="window.location.href='Thostell.html'">Hostel</button>
        <button class="nav-btn" onclick="window.location.href='Tlogin.html'">Log In</button>
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-btn" onclick="window.location.href='private.html'">Search</button>
        </div>
    </div>

    <header>
        <h1>Welcome to Criterion Craft</h1>
        <p>Your Gateway to Lifelong Learning</p>
    </header>

    <section class="features">
        <div class="feature">
            <h2>Explore Diverse colleges</h2>
            <p>Discover a wide range of courses and topics tailored to your interests.</p>
        </div>
        <div class="feature">
            <h2>Engage with Knowledgeable Instructors</h2>
            <p>Connect with experienced educators and industry professionals.</p>
        </div>
        <div class="feature">
            <h2>Access Entire informations</h2>
            <p>Gain access to an entire college information based on your interests.</p>
        </div>
    </section>

    <!-- Remove the entire filters section -->
    
    <section class="cta">
        <h2>Join the Educational Hub Today!</h2>
        <p>Start your lifelong learning journey with us. Sign up now!</p>
        <a href="signup.html" class="signup-btn">Sign Up</a>
    </section>

    <footer>
        <p>&copy; 2023 Educational Hub. All rights reserved.</p>
    </footer>
</body>

</html>
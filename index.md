<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Academic Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
        }

        /* Sidebar style */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
            padding-left: 10px;
        }

        /* Main content style */
        .main-content {
            margin-left: 260px;
            padding: 30px;
            width: 100%;
        }

        .main-content h1 {
            color: #2c3e50;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            color: #2980b9;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .section p {
            font-size: 18px;
            color: #555;
        }

        /* Footer style */
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Your Name</h2>
        <ul>
            <li><a href="#research">Research</a></li>
            <li><a href="#teaching">Teaching</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#publications">Publications</a></li>
            <li><a href="#cv">Curriculum Vitae</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <h1>Your Academic Profile</h1>

        <!-- Research Section -->
        <div id="research" class="section">
            <h2>Research</h2>
            <p>Here you can describe your research interests, ongoing projects, and publications related to your academic work.</p>
        </div>

        <!-- Teaching Section -->
        <div id="teaching" class="section">
            <h2>Teaching</h2>
            <p>Include information about the courses you teach, teaching philosophy, and any relevant teaching materials or resources.</p>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="section">
            <h2>Contact</h2>
            <p>Provide ways for visitors to contact you, such as email, office location, or links to social media or professional networks (e.g., LinkedIn, ResearchGate).</p>
        </div>

        <!-- Publications Section -->
        <div id="publications" class="section">
            <h2>Publications</h2>
            <p>List your published works, including books, articles, conference papers, or other scholarly works with links if available.</p>
        </div>

        <!-- CV Section -->
        <div id="cv" class="section">
            <h2>Curriculum Vitae</h2>
            <p>Include a link to your full CV in PDF or HTML format or provide a summary of your academic career.</p>
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Your Name | Academic Profile</p>
        </footer>
    </div>

</body>
</html>

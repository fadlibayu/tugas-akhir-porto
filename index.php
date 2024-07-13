<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="logo">
            <img src="kbm.png" alt="Logo">
        </div>
        <h1>FADLI BAYU</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/fadbay_/"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
            </ul>
        </aside>

        <main>
            <section id="about">
                <h2>About Me</h2>
                <h1>Hi,I'm fadli</h1>
            <h3>full stack developer</h3>
            <p>My name is Fadli Bayu Syaputra part of the Informatics students of Ahmad Dahlan University</p>
            </section>

            <section id="projects">
                <h2>Projects</h2>
                <div class="project-gallery">
                    <img src="asset/1.png" alt="Project 1">
                    <img src="asset/2.png" alt="Project 2">
                    <img src="asset/3.png" alt="Project 3">
                </div>
                <p>This is the projects section.</p>
                <?php
                // Skrip implementasi array dan function PHP
                $projects = ["Project login from", "Project portofolio", "Project otakuverse"];
                function displayProjects($projects) {
                    echo "<ul>";
                    foreach ($projects as $project) {
                        echo "<li>$project</li>";
                    }
                    echo "</ul>";
                }
                displayProjects($projects);
                ?>
            </section>

            <section id="contact">
                <h2>Contact Me</h2>
                <form id="contactForm" action="form_handler.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone">
                    
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address">
                    
                    <input type="submit" value="Submit">
                </form>

                <form id="newsletterForm" action="form_handler.php" method="POST">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                    
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
                    
                    <label for="emailNewsletter">Email:</label>
                    <input type="email" id="emailNewsletter" name="emailNewsletter" required>
                    
                    <label for="preferences">Preferences:</label>
                    <input type="text" id="preferences" name="preferences">
                    
                    <label for="frequency">Frequency:</label>
                    <select id="frequency" name="frequency">
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                    </select>
                    
                    <input type="submit" value="Subscribe">
                </form>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy; 2024 Fadli Bayu Syaputra</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

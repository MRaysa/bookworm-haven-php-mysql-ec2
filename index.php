<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bookworm Haven - Join Our Reading Community</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Open+Sans:wght@400;600;700&display=swap');
    
    :root {
      --primary: #5d4037;
      --secondary: #8d6e63;
      --accent: #a1887f;
      --light: #efebe9;
      --dark: #3e2723;
      --success: #388e3c;
      --highlight: #ffab91;
    }
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Open Sans', sans-serif;
      background: #f9f9f9 url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
      background-size: cover;
      color: #333;
      line-height: 1.6;
      position: relative;
    }
    
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.85);
      z-index: 0;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      position: relative;
      z-index: 1;
    }
    
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 0;
      margin-bottom: 40px;
    }
    
    .logo {
      display: flex;
      align-items: center;
      font-family: 'Merriweather', serif;
      font-size: 1.8rem;
      color: var(--dark);
      text-decoration: none;
    }
    
    .logo-icon {
      font-size: 2.5rem;
      margin-right: 10px;
      color: var(--primary);
    }
    
    .hero {
      display: flex;
      align-items: center;
      margin-bottom: 60px;
      gap: 40px;
    }
    
    .hero-content {
      flex: 1;
      padding: 20px;
    }
    
    .hero h1 {
      font-family: 'Merriweather', serif;
      font-size: 2.8rem;
      color: var(--dark);
      margin-bottom: 20px;
      line-height: 1.2;
    }
    
    .hero p {
      font-size: 1.1rem;
      margin-bottom: 30px;
      color: #555;
    }
    
    .features {
      display: flex;
      gap: 20px;
      margin-bottom: 30px;
    }
    
    .feature {
      background: rgba(255, 255, 255, 0.8);
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      flex: 1;
      border-left: 4px solid var(--primary);
    }
    
    .feature h3 {
      color: var(--primary);
      margin-bottom: 10px;
    }
    
    .registration-box {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
      margin-left: auto;
      position: relative;
      overflow: hidden;
    }
    
    .registration-box::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 8px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }
    
    .registration-box h2 {
      color: var(--primary);
      margin-bottom: 25px;
      font-family: 'Merriweather', serif;
      font-size: 1.8rem;
      position: relative;
      text-align: center;
    }
    
    .registration-box h2::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: var(--accent);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: var(--dark);
      font-size: 0.95rem;
    }
    
    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 14px;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      background: #fafafa;
      transition: all 0.3s;
      font-family: 'Open Sans', sans-serif;
    }
    
    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: var(--accent);
      outline: none;
      box-shadow: 0 0 0 3px rgba(161, 136, 127, 0.2);
      background: white;
    }
    
    .btn {
      display: inline-block;
      background: var(--primary);
      color: white;
      border: none;
      padding: 14px 30px;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      width: 100%;
      text-align: center;
      margin-top: 10px;
    }
    
    .btn:hover {
      background: var(--dark);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .message {
      margin: 25px 0;
      padding: 15px;
      border-radius: 8px;
      font-weight: 600;
      background: #e8f5e9;
      color: var(--success);
      border-left: 4px solid var(--success);
    }
    
    .error {
      background: #ffebee;
      color: #c62828;
      border-left: 4px solid #c62828;
    }
    
    .user-table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }
    
    .user-table th {
      background: var(--primary);
      color: white;
      padding: 12px;
      text-align: left;
    }
    
    .user-table td {
      padding: 12px;
      border-bottom: 1px solid #e0e0e0;
    }
    
    .user-table tr:last-child td {
      border-bottom: none;
    }
    
    .user-table tr:hover {
      background: var(--light);
    }
    
    footer {
      margin-top: 60px;
      padding: 30px 0;
      text-align: center;
      background: rgba(255, 255, 255, 0.9);
      border-top: 1px solid #e0e0e0;
    }
    
    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    .footer-text {
      font-size: 0.9rem;
      color: #666;
    }
    
    .highlight {
      font-weight: 700;
      color: var(--primary);
    }
    
    .testimonials {
      margin: 60px 0;
      text-align: center;
    }
    
    .testimonials h2 {
      color: var(--primary);
      margin-bottom: 40px;
      font-family: 'Merriweather', serif;
    }
    
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .testimonial {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      text-align: left;
      position: relative;
    }
    
    .testimonial::before {
      content: '"';
      position: absolute;
      top: 10px;
      left: 20px;
      font-size: 4rem;
      color: var(--light);
      font-family: serif;
      line-height: 1;
      z-index: 0;
    }
    
    .testimonial-content {
      position: relative;
      z-index: 1;
    }
    
    .testimonial-text {
      font-style: italic;
      margin-bottom: 20px;
      color: #555;
    }
    
    .testimonial-author {
      font-weight: 700;
      color: var(--primary);
    }
    
    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
      }
      
      .registration-box {
        margin: 0 auto;
      }
      
      .features {
        flex-direction: column;
      }
      
      .hero h1 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <a href="#" class="logo">
        <span class="logo-icon">📚</span>
        <span>Bookworm Haven</span>
      </a>
    </header>
    
    <section class="hero">
      <div class="hero-content">
        <h1>Join Our Community of Avid Readers</h1>
        <p>Register today to get exclusive access to our book collection, member discounts, and reading events. Become part of Bangladesh's fastest growing book community!</p>
        
        <div class="features">
          <div class="feature">
            <h3>📖 10,000+ Titles</h3>
            <p>Access our vast collection of books across all genres</p>
          </div>
          <div class="feature">
            <h3>🎟️ Member Events</h3>
            <p>Exclusive invitations to author meetups and book clubs</p>
          </div>
        </div>
        
        <div class="features">
          <div class="feature">
            <h3>💰 Special Discounts</h3>
            <p>Enjoy member-only discounts on all purchases</p>
          </div>
          <div class="feature">
            <h3>🚚 Free Delivery</h3>
            <p>Free shipping on orders over 500৳ for members</p>
          </div>
        </div>
      </div>
      
      <div class="registration-box">
        <h2>Join Now</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" required placeholder="Your full name">
          </div>
          
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" required placeholder="Your email address">
          </div>
          
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" required placeholder="Your phone number">
          </div>
          
          <button type="submit" name="submit" class="btn">Become a Member</button>
        </form>

        <?php
        // Database connection configuration
        $servername = "localhost";
        $username = "root";
        $password = "newpassword"; // unchanged
        $database = "books_db";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
          die("<div class='message error'>Connection failed: " . $conn->connect_error . "</div>");
        }

        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $phone = $_POST["phone"];

          // Prepare and execute the SQL statement
          $stmt = $conn->prepare("INSERT INTO members (name, email, phone) VALUES (?, ?, ?)");
          $stmt->bind_param("sss", $name, $email, $phone);
          $stmt->execute();

          if ($stmt->affected_rows > 0) {
            echo "<div class='message'>🎉 Registration successful! Welcome to Bookworm Haven!</div>";
            
            // Display user information in a table
            echo "<h3 style='margin-top: 20px;'>Your Registration Details:</h3>";
            echo "<table class='user-table'>";
            echo "<tr><th>Field</th><th>Value</th></tr>";
            echo "<tr><td>Name</td><td>$name</td></tr>";
            echo "<tr><td>Email</td><td>$email</td></tr>";
            echo "<tr><td>Phone</td><td>$phone</td></tr>";
            echo "</table>";
          } else {
            echo "<div class='message error'>❌ Registration failed! Please try again.</div>";
          }

          $stmt->close();
        }

        $conn->close();
        ?>
      </div>
    </section>
    
    <section class="testimonials">
      <h2>What Our Members Say</h2>
      <div class="testimonial-grid">
        <div class="testimonial">
          <div class="testimonial-content">
            <p class="testimonial-text">Bookworm Haven has transformed my reading habits. The selection is incredible and the community events are wonderful!</p>
            <p class="testimonial-author">- Tahmina Akter</p>
          </div>
        </div>
        
        <div class="testimonial">
          <div class="testimonial-content">
            <p class="testimonial-text">As a student, the member discounts have allowed me to buy more books than I ever could before. Highly recommended!</p>
            <p class="testimonial-author">- Rahim Khan</p>
          </div>
        </div>
        
        <div class="testimonial">
          <div class="testimonial-content">
            <p class="testimonial-text">The monthly book club meetings have introduced me to genres I never would have tried otherwise. Great community!</p>
            <p class="testimonial-author">- Nusrat Jahan</p>
          </div>
        </div>
      </div>
    </section>
    
    <footer>
      <div class="footer-content">
        <p class="footer-text">Crafted with ❤️ by <span class="highlight">Mst. Aysa Siddika Meem (2220281)</span> | Cloud Computing Course Assignment 1</p>
        <p class="footer-text">© 2023 Bookworm Haven. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html> 
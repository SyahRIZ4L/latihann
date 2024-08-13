<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Zulfi</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-image: url('Assets/pertengahan1.jpg'); 
            width: 100%;
            color: rgb(0, 0, 0);
            padding: 1px 0;
            text-align: center;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            background-color: #0288d1;
            padding: 7px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            padding: 10px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #005f8a;
        }
        .content {
            padding: 15px;
        }

    </style>
</head>
<body>


    <div class="header">
        <h1>Dashboard</h1>
    </div>
    <div class="menu">
        <a href="{{url('dashboard')}}">Home</a>
        <a href="{{url('biodata')}}">Biodata</a>
        <a href="galeri.html">Galeri</a>
        <a href="login.html">Logout</a>
    </div>
    </div>
    <div>
        <main>
            <section class="contact-form">
                <h1>Contact Us</h1>
                <form action="mailto:youremail@example.com" method="post" enctype="text/plain">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
    
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject">
    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5"></textarea>
    
                    <button type="submit">Send</button>
                </form>
            </section>
    
        </main> 
        <footer>
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </footer>
        
    </div>


</body>
</html>


<nav>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="logout.php">logout</a></li> 
        
    </ul>
</nav>

<style>
    nav {
        background-color: #333;
        overflow: hidden;
        width: 40rem;
    }

    .navbar {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .navbar li {
        margin: 0;
    }

    .navbar a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        transition: background 0.3s;
    }

    .navbar a:hover {
        background-color: #575757;
    }
</style>

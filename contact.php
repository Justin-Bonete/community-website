<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<main class="container">
    <h2>Contact Us</h2>
    <form action="send_contact.php" method="post">
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Message</label>
        <textarea name="message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>

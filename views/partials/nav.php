<div class="header">
    <a href="/index.php" class="<?php echo isURL('/index.php') ? 'active' : ''; ?>">Home</a>
    <a href="/about.php" class="<?php echo isURL('/about.php') ? 'active' : ''; ?>">About</a>
    <a href="/contact.php" class="<?php echo isURL('/contact.php') ? 'active' : ''; ?>">Contact</a>
</div>

<style>
    .header .active {
        color: black;
    }
</style>
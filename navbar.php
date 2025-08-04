<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <h4 class="navbar-brand">Navbar</h4>
        <?php if (isset($_SESSION['user'])): ?>
            <a href="logout.php" class="btn btn-secondary">Sair</a>
        <?php endif; ?>
    </div>
</div>
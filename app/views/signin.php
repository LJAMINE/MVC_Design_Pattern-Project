 
<?php include 'include/header.php'; ?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Créer un Utilisateur</h2>

    <div class="card p-4 shadow">
        <form action="index.php?action=signin" method="POST">
           

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            

            <button type="submit" name="signin" class="btn btn-primary w-100"><i class="fas fa-user-plus"></i>
                Ajouter</button>
                
        </form>
        <a href="index.php?action=register">Register</a>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

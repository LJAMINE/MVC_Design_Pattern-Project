<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Créer un Utilisateur</h2>

    <div class="card p-4 shadow">
        <form action="index.php?action=create" method="POST">
            <div class="mb-3">
                <label for="first_name" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Rôle</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="admin">admin</option>
                    <option value="client">Client</option>

                </select>
            </div>

            <button type="submit" name="createuser" class="btn btn-primary w-100"><i class="fas fa-user-plus"></i>
                Ajouter</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
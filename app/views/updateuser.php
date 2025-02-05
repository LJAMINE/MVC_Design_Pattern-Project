<?php include 'include/header.php'; ?>
<?php include 'include/nav.php';

use app\models\User;

// require_once __DIR__ . "../../vendor/autoload.php";

?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Créer un Utilisateur</h2>

    <div class="card p-4 shadow">
        <form action="index.php?action=update&id=<?php echo htmlspecialchars($user['id']); ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">

            <div class="mb-3">
                <label for="first_name" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>



            <div class="mb-3">
                <label for="role" class="form-label">Rôle</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="admin">admin</option>
                    <option value="teacher">teacher</option>
                    <option value="student"> student</option>

                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">
                Modifier</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
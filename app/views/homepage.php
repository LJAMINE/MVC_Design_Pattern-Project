<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<!-- Contenu -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Liste des Utilisateurs</h2>

    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>password</th>
                <th>role</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($users as $user) :?>
            <tr>
                <td><?php echo htmlspecialchars($user["first_name"]); ?></td>
                <td><?php echo htmlspecialchars($user["last_name"]); ?></td>
                <td><?php echo htmlspecialchars($user["email"]); ?></td>
                <td><?php echo htmlspecialchars($user["password"]); ?></td>
                <td><?php echo htmlspecialchars($user["role"]); ?></td>
                <td>
                    <a href="index.php?action=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i> Delete
                    </a>
                </td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Update
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'include/footer.php'; ?>
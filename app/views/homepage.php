<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion des Utilisateurs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="fas fa-users"></i> Liste des
                            Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php"><i class="fas fa-user-plus"></i> Créer Utilisateur</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Liste des Utilisateurs</h2>

        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
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
                    <td>
                        <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </td>
                    <td>
                        <a href="update.php?id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">
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

</body>

</html>
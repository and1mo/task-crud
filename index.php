<?php 
include 'db.php'; 

// CREATE: Add a new task
if (isset($_POST['add_task'])) {
    $title = htmlspecialchars($_POST['title']);
    if (!empty($title)) {
        $stmt = $pdo->prepare("INSERT INTO tasks (title) VALUES (?)");
        $stmt->execute([$title]);
    }
}

// DELETE: Remove a task
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->execute([$id]);
}

// READ: Fetch all tasks
$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
$tasks = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Task Manager</h2>
                
                <form method="POST" class="input-group mb-3">
                    <input type="text" name="title" class="form-control" placeholder="New Task..." required>
                    <button class="btn btn-primary" name="add_task" type="submit">Add</button>
                </form>

                <ul class="list-group">
                    <?php foreach ($tasks as $task): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $task['title']; ?>
                            <a href="index.php?delete=<?php echo $task['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>

<?php // index.php
include 'db.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'create') {
  $sql = "INSERT INTO projects (project_name, project_description, status, start_date, end_date)
          VALUES (?,?,?,?,?)";
  $result = $mysqli->prepare($sql);
  $result->bind_param(
    "sssss",
    $_POST['project_name'],
    $_POST['project_description'],
    $_POST['status'],
    $_POST['start_date'],
    $_POST['end_date']
  );
  $result->execute();
  echo "<script>alert('Project created')</script>";
  header("Location: index.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'update') {
  $sql = "UPDATE projects
          SET project_name=?, project_description=?, status=?, start_date=?, end_date=?
          WHERE id=?";
  $result = $mysqli->prepare($sql);
  $result->bind_param(
    "sssssi",
    $_POST['project_name'],
    $_POST['project_description'],
    $_POST['status'],
    $_POST['start_date'],
    $_POST['end_date'],
    $_POST['id']
  );
  $result->execute();
    echo "<script>alert('Project updated')</script>";
  header("Location: index.php");
}


if ($_GET['action']  === 'delete' && isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  $result = $mysqli->prepare("DELETE FROM projects WHERE id=?");
  $result->bind_param("i", $id);
  $result->execute();
     echo "<script>alert('Project deleted')</script>";
  header("Location: index.php");

}


// $editRow = null;
// if (($_GET['action'] ?? '') === 'edit' && isset($_GET['id'])) {
//   $id = (int)$_GET['id'];
//   $result = $mysqli->prepare("SELECT * FROM projects WHERE id=?");
//   $result->bind_param("i", $id);
//   $result->execute();
//   $editRow = $result->get_result()->fetch_assoc();
// }

$result = $mysqli->query("SELECT id, project_name, status, start_date, end_date FROM projects ORDER BY id DESC");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Simple Project Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Project Management (CRUD)</h1>

<!-- 
<?php if ($editRow): ?>
  <h2>Edit Project</h2>
  <form method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= (int)$editRow['id'] ?>">
    <div class="row"><label>Project Name</label><input required name="project_name" value="<?= htmlspecialchars($editRow['project_name']) ?>"></div>
    <div class="row"><label>Description</label><textarea name="project_description" rows="4"><?= htmlspecialchars($editRow['project_description']) ?></textarea></div>
    <div class="row"><label>Status</label>
      <select name="status">
        <?php foreach (['pending','in progress','completed'] as $s): ?>
          <option value="<?= $s ?>" <?= $editRow['status']===$s?'selected':'' ?>><?= $s ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="row"><label>Start Date</label><input type="date" name="start_date" value="<?= htmlspecialchars($editRow['start_date']) ?>"></div>
    <div class="row"><label>End Date</label><input type="date" name="end_date" value="<?= htmlspecialchars($editRow['end_date']) ?>"></div>
    <button type="submit">Save Changes</button>
    <a href="index.php">Cancel</a>
  </form>
<?php else: ?> -->
  <h2>Add New Project</h2>
  <form method="post">
    <input type="hidden" name="action" value="create">
    <div class="row"><label>Project Name</label><input required name="project_name" placeholder="e.g., ERP Revamp"></div>
    <div class="row"><label>Description</label><textarea name="project_description" rows="4" placeholder="Short description..."></textarea></div>
    <div class="row"><label>Status</label>
      <select name="status">
        <option>pending</option>
        <option>in progress</option>
        <option>completed</option>
      </select>
    </div>
    <div class="row"><label>Start Date</label><input type="date" name="start_date"></div>
    <div class="row"><label>End Date</label><input type="date" name="end_date"></div>
    <button type="submit">Create Project</button>
  </form>
<?php endif; ?>

<h2>All Projects</h2>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Project Name</th>
      <th>Status</th>
      <th>Start</th>
      <th>End</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = $res->fetch_assoc()): ?>
    <tr>
      <td><?= (int)$row['id'] ?></td>
      <td><?= htmlspecialchars($row['project_name']) ?></td>
      <td><span class="badge"><?= htmlspecialchars($row['status']) ?></span></td>
      <td><?= htmlspecialchars($row['start_date']) ?></td>
      <td><?= htmlspecialchars($row['end_date']) ?></td>
      <td class="actions">
        <a href="index.php?action=edit&id=<?= (int)$row['id'] ?>">Edit</a>
        <a href="index.php?action=delete&id=<?= (int)$row['id'] ?>" onclick="return confirm('Delete this project?')">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>

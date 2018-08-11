<?php require 'partials/header.php'; ?>

<?php foreach($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit your name</h1>

<form method="POST" action="/PHP-Series/Series-1/08-namespace/index.php/names">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php'; ?>
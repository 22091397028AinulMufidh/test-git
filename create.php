<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    // $pekerjaan = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO barang VALUES (?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $jumlah, $harga]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Items</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Name Item</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="text">Count</label>
        <label for="harga">Price</label>
        <input type="text" name="jumlah" id="jumlah">
        <input type="text" name="harga" id="harga">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
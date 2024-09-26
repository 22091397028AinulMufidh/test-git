

<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 10;

// Calculate the offset for the SQL query based on the current page
$offset = ($page - 1) * $records_per_page;

// Prepare the SQL statement and get records from our data table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM pemasukan ORDER BY id_pemasukan LIMIT :offset, :record_per_page');
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of data, this is so we can determine whether there should be a next and previous button
$num_data = $pdo->query('SELECT COUNT(*) FROM pemasukan')->fetchColumn();
?>





<?=template_header('Read')?>



<div class="content read">
	<h2>Show Income Data</h2>
	<!-- <a href="create.php" class="create-contact">Sales Data</a> -->
	<table>
        <thead>
            <tr>
                <td>No</td>
                <td>Income Date</td>
                <td>Count</td>
                <td>Notes</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $contact): ?>
            <tr>
                <td><?=$contact['id_pemasukan']?></td>
                <td><?=$contact['tanggal']?></td>
                <td><?=$contact['nominal']?></td>
                <td><?=$contact['keterangan']?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="earn.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_data): ?>
		<a href="earn.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>
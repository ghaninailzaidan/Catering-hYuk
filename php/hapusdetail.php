<?php
include "koneksidatabase.php";

$id = $_GET['id'];
$sql = "SELECT * FROM tb_catering WHERE id = $id";
$result = mysqli_query($db, $sql);

if ($result) {
    $data = mysqli_fetch_assoc($result);
    $foto = $data['foto'];

    if (file_exists("file/$foto")) {
        unlink("file/$foto");
    }

    // Additional logic for deleting the record from the database can be added here
} else {
    echo "Error executing query: " . mysqli_error($db);
}


$query = "DELETE FROM tb_catering WHERE id = $id";
$eksekusi = mysqli_query($db, $query);

if ($eksekusi  ){
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='lihatpemesan.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='lihatpemesan.php';

</script>";
}


?>
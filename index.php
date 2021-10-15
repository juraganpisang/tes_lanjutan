<?php
include_once 'koneksi.php';

function rupiah($angka)
{

    $hasil_rupiah = number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<?php
// $query = mysqli_query($conn, 'SELECT akun.nama,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 1 , debit - kredit, 0) ) AS tanggal1,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 2 , debit - kredit, 0) ) AS tanggal2,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 3 , debit - kredit, 0) ) AS tanggal3,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 4 , debit - kredit, 0) ) AS tanggal4,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 5 , debit - kredit, 0) ) AS tanggal5,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 6 , debit - kredit, 0) ) AS tanggal6,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 7 , debit - kredit, 0) ) AS tanggal7,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 8 , debit - kredit, 0) ) AS tanggal8,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 9 , debit - kredit, 0) ) AS tanggal9,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 10 , debit - kredit, 0) ) AS tanggal10,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 11 , debit - kredit, 0) ) AS tanggal11,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 12 , debit - kredit, 0) ) AS tanggal12,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 13 , debit - kredit, 0) ) AS tanggal13,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 14 , debit - kredit, 0) ) AS tanggal14,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 15 , debit - kredit, 0) ) AS tanggal15,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 16 , debit - kredit, 0) ) AS tanggal16,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 17 , debit - kredit, 0) ) AS tanggal17,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 18 , debit - kredit, 0) ) AS tanggal18,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 19 , debit - kredit, 0) ) AS tanggal19,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 20 , debit - kredit, 0) ) AS tanggal20,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 21 , debit - kredit, 0) ) AS tanggal21,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 22 , debit - kredit, 0) ) AS tanggal22,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 23 , debit - kredit, 0) ) AS tanggal23,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 24 , debit - kredit, 0) ) AS tanggal24,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 25 , debit - kredit, 0) ) AS tanggal25,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 26 , debit - kredit, 0) ) AS tanggal26,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 27 , debit - kredit, 0) ) AS tanggal27,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 28 , debit - kredit, 0) ) AS tanggal28,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 29 , debit - kredit, 0) ) AS tanggal29,
// SUM( IF(YEAR(dt.tanggal) = 2019 && MONTH(dt.tanggal) = 8 && DAY(dt.tanggal) = 30 , debit - kredit, 0) ) AS tanggal30,
// SUM( debit - kredit ) AS total_trx
// FROM acc_trans_detail dt, acc_m_akun akun
// WHERE akun.id = dt.m_akun_id
// GROUP BY akun.id');
$tanggal_awal = '2019-08-01';
$tanggal_akhir = '2019-08-31';

$query = mysqli_query(
    $conn,
    'SELECT akun.id, akun.nama, dt.tanggal, dt.debit
FROM acc_trans_detail dt, acc_m_akun akun 
WHERE akun.id = dt.m_akun_id AND dt.tanggal BETWEEN "' . $tanggal_awal . '" AND "' . $tanggal_akhir . '" '
);

$arr_nama = [];
foreach ($query as $row_nama) {
    // $arr_nama['id'][] = $row_nama['id'];
    // $arr_nama['nama'][] = $row_nama['nama'];
    // $arr_nama['tanggal'][] = $row_nama['tanggal'];
    $arr_nama[] = $row_nama['nama'];
}

// Function to get all the dates in given range
function getDatesFromRange($start, $end, $format = 'Y-m-d')
{

    // Declare an empty array
    $array = array();

    // Variable that store the date interval
    // of period 1 day
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    // Use loop to store date into array
    foreach ($period as $date) {
        $array[] = $date->format($format);
    }

    // Return the array elements
    return $array;
}
$tanggal = getDatesFromRange($tanggal_awal, $tanggal_akhir);
print_r($tanggal);
?>

<body>
    <table class="table table-striped table-bordered ">
        <tr>
            <td rowspan="3" style="vertical-align: middle;">Nama Akun</td>
            <td colspan="30" class="text-center">Jumlah Rekapan</td>
        </tr>
        <tr>
            <td colspan="30" class="text-center">Tanggal</td>
        </tr>
        <tr>
            <?php for ($i = 1; $i <= 30; $i++) { ?>
                <td class="text-center"><?php echo $i; ?></td>
            <?php } ?>
        </tr>
        <tr>
                <td><?php echo $arr_nama[0]; ?></td>
                <?php for ($i = 1; $i <= 30; $i++) { ?>
                    <td class="text-center"><?php echo $i; ?></td>
            <?php }
            ?>
        </tr>
    </table>

</body>

</html>
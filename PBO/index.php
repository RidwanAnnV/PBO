<?php
require 'koneksi.php';
$db = new database();

$datas = $db->getData('siswa');
 foreach($datas as $data) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proseshapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endforeach ?>

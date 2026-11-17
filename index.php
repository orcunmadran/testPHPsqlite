<?php
require_once __DIR__ . '/baglanti.php';

$kitaplar = get_db()
    ->query("SELECT * FROM kitaplar WHERE kategori = 'Veri Tabanı ve Yazılım' ORDER BY yazar")
    ->fetchAll();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kütüphane Kataloğu</title>
</head>
<body>
    <h1>Kitaplar (<?= count($kitaplar) ?>)</h1>
    <table border="1" cellpadding="4" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>ISBN</th>
                <th>Başlık</th>
                <th>Yazar</th>
                <th>Yayınevi</th>
                <th>Yıl</th>
                <th>Kategori</th>
                <th>Raf Kodu</th>
                <th>Durum</th>
                <th>Eklenme Tarihi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kitaplar as $kitap): ?>
                <tr>
                    <?php foreach ($kitap as $deger): ?>
                        <td><?= htmlspecialchars((string) $deger) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php
/**
 * Kütüphane Kataloğu - Veri Tabanı Bağlantısı ve Yardımcı Fonksiyonlar
 * Veri Tabanı Yönetim Sistemleri dersi için hazırlanmıştır.
 */

define('DB_PATH', __DIR__ . '/kutuphane.db');

/** PDO üzerinden SQLite bağlantısı döndürür. */
function get_db(): PDO
{
    static $pdo = null;

    return $pdo ??= new PDO('sqlite:' . DB_PATH, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
}
?>
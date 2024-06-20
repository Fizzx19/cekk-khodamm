<?php
// Daftar nama-nama khodam
$khodamNames = [
    "Ayam Pade Rusdi",
    "Beruang Sigma",
    "Singa Ambatukam",
    "Kupu-kupu Malam",
    "Kura kura Jawa",
    "Kerbau Ohio",
    "Sapi Skibidi",
    "Bekicot Palembang",
    "Kambing papua",
    "Ular kasur",
    "Babi Sigma",
    "Katak Rizz",
    "Kangguru TuingTuing",
    "Kuda Gyat",
    "Aligator Ngawi",
    "Cacing Skibidi",
    "Cicak Cicak Di Pantat",
    "Capung Mewing",
    "Skibidi Toilet",
    "Ambatron Sigma",
    "Kontol Kejepit",
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
];

// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomKhodam() {
    global $khodamNames;
    $randomIndex = array_rand($khodamNames);
    return $khodamNames[$randomIndex];
}
?>

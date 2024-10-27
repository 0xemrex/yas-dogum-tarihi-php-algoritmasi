<?php
function findBirthDate($age = null, $birthYear = null) {
    if ($age !== null) {
        // Şu anki yılı al ve yaştan çıkararak doğum yılını hesapla
        $currentYear = date("Y");
        $birthYearCalculated = $currentYear - $age;
        return "Doğum Yılı: $birthYearCalculated";
    } elseif ($birthYear !== null) {
        return "Doğum Yılı: $birthYear";
    } else {
        return "Lütfen yaş veya doğum yılı girin.";
    }
}

// Örnek Kullanımlar:
echo findBirthDate(age: 25);           // Doğum Yılı: 1999 (örneğin)
echo findBirthDate(birthYear: 1995);   // Doğum Yılı: 1995
?>

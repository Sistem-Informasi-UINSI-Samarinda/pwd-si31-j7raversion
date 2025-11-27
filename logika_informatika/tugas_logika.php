<!DOCTYPE html>
<html>
<head>
    <title>Tabel Kebenaran 2 Input (A, B)</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #333; text-align: center; padding: 8px; }
        th { background-color: #4b7097ff; color: white; }
        h2 { text-align: center; }
        h3 { text-align: center; }
        body { background-color: #eef3f7; font-family: Arial, sans-serif; }
    </style>
</head>
<body>
    <h2>Tabel Kebenaran 2 Input (P, Q)</h2>
    <h3>Siti Fathimah Az Zahra - SI 3.1</h3>
    <table>
        <tr>
            <th>¬P</th>
            <th>¬Q</th>
            <th>P</th>
            <th>Q</th>
            <th>(P ∧ Q) ∧ ¬Q</th>
            <th>P ∧ (¬P ∨ ¬Q)</th>
            <th>(P → ¬Q) ∧ Q</th>
            <th>P ∨ (P ↔ Q)</th>
            <th>(¬P ↔ ¬Q) ↔ P</th>
            <th>(P ∨ ¬Q) → P ↔ Q</th>
        </tr>
        <?php
        $values = [1, 0];
        foreach ($values as $P) {
            foreach ($values as $Q) {
                $notP = !$P;
                $notQ = !$Q;
                $implikasi = $P || $notQ;
                $biimplikasi = ($P && $Q) || ($notP && $notQ);
                $pertama = $P || $notQ;
                $kedua = $biimplikasi;

                //hitungan
                $tabel5 = ($P || $Q) && $notQ;
                $tabel6 = $P && ($notP || $notQ);
                $tabel7 = ($notP) && $Q;
                $tabel8 = $P || $biimplikasi;
                $tabel9 = ($implikasi == $P);
                $tabel10 =  (!$pertama) || $kedua;
        
                echo "<tr>";
                echo "<td>$P</td>";
                echo "<td>$Q</td>";
                echo "<td>" . (int)$notP . "</td>";
                echo "<td>" . (int)$notQ . "</td>";
                echo "<td>" . (int)$tabel5 . "</td>";
                echo "<td>" . (int)$tabel6 . "</td>";
                echo "<td>" . (int)$tabel7 . "</td>";
                echo "<td>" . (int)$tabel8 . "</td>";
                echo "<td>" . (int)$tabel9 . "</td>";
                echo "<td>" . (int)$tabel10 . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <p style="text-align:center; margin-top:10px;">
        Keterangan: 1 = Benar (True), 0 = Salah (False)
    </p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Kebenaran 2 Input (A, B)</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #333; text-align: center; padding: 8px; }
        th { background-color: #007bff; color: white; }
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
                $and = $P && $Q;
                $or = $P || $Q;
                $implikasi = (!$P) || $Q;
                $biimplikasi = ($P && $Q) || (!$P && !$Q);

                //hitungan
                $tabel5 = ($P || $Q) && $notQ;
                $tabel6 = $P && ($notP || $notQ);
                $tabel7 = ((!$P) || $notP) || $Q;
                $tabel8 =  $P || (($P && $Q) || (!$P && !$Q));
                $tabel9 = ((!$notP) || $notQ) || ($P && $Q);
                $tabel10 = (($P || $notQ) || !$P) || (!$P && !$Q);
        
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

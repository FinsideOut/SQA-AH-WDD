<?php
include '../includes/header.php';
include '../includes/utils.php';
?>

<?php
$queryString = <<<SQL
        SELECT * FROM user
        ORDER BY streak DESC;
    SQL;
$result = runQuery($queryString);
?>

<main class="scores">
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>User</th>
                <th>Highest Streak</th>
                <th>Number Guessed</th>
                <th>Correct Guesses</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $row = mysqli_fetch_assoc($result);
            $rank = 1;
            while ($row) {
                echo <<<html
                        <tr>    
                        <td>$rank</td>
                        <td>{$row['username']}</td>
                        <td>{$row['streak']}</td>
                        <td>{$row['numGuesses']}</td>
                        <td>{$row['numCorrect']}</td>
                        </tr>
                    html;
                $row = mysqli_fetch_assoc($result);
                $rank += 1;
            }
            ?>
        </tbody>
    </table>
</main>

<?php
include '../includes/footer.php';
?>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Verdana, Geneva, sans-serif;
        box-sizing: border-box;
    }
    h1, h2 {
        text-align: center;
        margin: 20px;
    }
    form {
        width: clamp(400px, 50%, 800px);
        margin: 15px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    form > p {
        font-size: 24px;
        text-align: center;
    }
    .question {
        margin: 30px 0;
    }
    .answers {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin: 15px 0;
    }
    input[type=submit] {
        margin: 20px 0;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #1a53b3;
        color: #fff;
        cursor: pointer;
        transition: all .3s ease-in-out;
    }
    input[type=submit]:hover {
        background-color: #16489b;
    }
    input[type=submit]:active {
        background-color: #0e3372;
    }
    input[type=radio] {
        margin: 0 5px;
    }
    input[type=text] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: all .3s ease-in-out;
    }
    input[type=text]:focus {
        outline: none;
        border-color: #aaa;
        background-color: #eee;
    }
    label:has(input[type=radio]:checked) {
        font-weight: bold;
    }
</style>
<h1>Test</h1>
<form method="post">
<?php
include_once "mock-questions.php";
$pages = getPages();
$pageNum = 1;
$score = 0;
if(isset($_POST["page"])) {
    $pageNum = $_POST["page"];
}
if (count($_POST) < 12 && $pageNum > 1) {
    echo "<h2 style='color: red'>Please answer all questions.</h2>";
    $score = $_POST["score"];
    $pageNum--;
} elseif (isset($_POST["score"])) {
    $score = $_POST["score"];
    foreach ($_POST as $key => $value) {
        if ($key == "page" || $key == "score") {
            continue;
        }
        $temp = implode(" ", explode("_", $key));
        if (is_array($pages[$pageNum - 2][$temp])) {
            if ($pages[$pageNum - 2][$temp]["answer"] == $value) {
                $score += ($pageNum - 1) * 2 - 1;
            }
        } else {
            if (strtolower($pages[$pageNum - 2][$temp]) == strtolower($value)) {
                $score += ($pageNum - 1) * 2 - 1;
            }
        }
    }
}
if ($pageNum > count($pages)) {
    echo "<p>Your score is " . $score . " out of 90.</p>";
    echo "<input type='hidden' name='page' value='1'>";
    echo "<input type='hidden' name='score' value='0'>";
    echo "<input type='submit' value='Restart the test'>";
    exit(0);
} else {
    $keys = array_rand($pages[$pageNum - 1], 10);
    shuffle($keys);
    echo "<input type='hidden' name='page' value='" . ($pageNum + 1) . "'>";
    echo "<input type='hidden' name='score' value='" . $score . "'>";
    foreach ($keys as $key) {
        $answers = $pages[$pageNum - 1][$key];
        echo "<div class='question'>";
        echo "<h2>" . $key . "</h2>";
        echo "<div class='answers'>";
        if (is_array($answers)) {
            foreach ($answers as $letter => $answer) {
                if ($letter != "answer") {
                    echo "<label><input type='radio' name='" . $key . "' value='" . $letter . "'>" . $letter . ". " . $answer . "</label><br>";
                }
            }
        } else {
            echo "<input type='text' name='" . $key . "'><br>";
        }
        echo "</div></div>";
    }
}
?>
    <input type="submit" value="Submit answers">
</form>

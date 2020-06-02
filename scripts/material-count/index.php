<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

global $USER;
if (!$USER->IsAdmin()) {
    die;
}

$_SESSION['CHECK_ID'] = false;
$_SESSION['MATERIAL'] = [];

//dump($_SESSION['MATERIAL']);
?>

<button onclick="startCount(1)">Start</button>
<button onclick="toFile()">To file</button>


<script>
    function startCount(page) {
        $.ajax({
            method: 'get',
            url: '/scripts/material-count/count.php',
            data: {
                page
            },
            success: function(res) {
                if (!JSON.parse(res.toLowerCase())) {
                    alert('Данные посчитаны');
                    return;
                }

                startCount(++page);
            }
        });
    }

    function toFile() {
        $.ajax({
            method: 'get',
            url: '/scripts/material-count/to-file.php',
            success: function() {
                alert('Сделано');
            }
        });
    }
</script>

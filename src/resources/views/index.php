<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ブラウザに画面を表示できた！</h1>
    <p><?php echo $content ?></p>

    <table>
        <tr>
            <th>roomは</th>
            <td><?php echo $param ?><span>です</span></td>
        </tr>
        <tr>
            <th>idは</th>
            <td><?php echo $text ?><span>です</span>
            </td>
        </tr>
    </table>
</body>

</html>
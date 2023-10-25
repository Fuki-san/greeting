<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Greetingアプリ</title>
</head>

<body>
    @if ($displaymode == 'greet')
    <h1>{{ $time }}のあいさつ</h1>
    <h2>{{ $greetword }}</h2>

    @elseif ($displaymode == 'wording')
    <h1>自由なメッセージ</h1>
    <h2>{{ $word }}</h2>

    @elseif ($displaymode == 'random')
    <h1>ランダムなメッセージ</h1>
    <h2>{{ $result }}</h2>

    @endif

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>Home</title>
</head>
<style>
    body {
        font-family: sans-serif;
    }
</style>

<body>
    <div id="app">
        <h1 v-text="'Halo, ' + title"></h1>
        <header-component></header-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

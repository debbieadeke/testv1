<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial</title>
    @vite('resources/css/app.css')
    <link href="/path/to/dist/output.css" rel="stylesheet">

</head>
<body class="bg-slate-100 dark:bg-slate-800">
<x-navbar></x-navbar>
<div class="max-w-6xl mx-auto">
  {{$slot}}  
</div>
</body>
</html>

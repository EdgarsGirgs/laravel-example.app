<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create post</h1>
    <form action="/post" method="get">
        @csrf
        author: <input type="text" name = "author">
        title: <input type="text" name= "title">
        content: <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <input type="submit" value = "submit">
    </form>
</body>
</html>

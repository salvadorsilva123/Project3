<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<form action="" method="POST">
    <label for="">{{}}</label>
    <imput type="text" name="name" value="{{$client->name}}">
    <br/>

    <label for="">{{}}</label>
    <imput type="text" name="last_name" value="{{$client->last_name}}">
    <br/>

    <label for="">{{}}</label>
    <imput type="text" name="email" value="{{$client->email}}">
    <br/>

    <label for="">{{}}</label>
    <imput type="text" name="phone" value="{{$client->phone}}">
    <br/>

    <label for="">{{}}</label>
    <imput type="text" name="address" value="{{$client->address}}">
    <br/>

</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('index.client') }}>CRUDP Client</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('creat.client') }}>Add Client</a>
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $Client->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $Client->body }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('edit.client', $Client->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('destroy.client', $Client->id) }}" method="Client">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('index.client') }}">
        <button>Volver</button>
    </a>

</body>

</html>

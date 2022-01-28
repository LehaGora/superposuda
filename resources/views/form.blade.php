<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание заказа</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @if( session()->has('success') )
                        <p class="alert alert-success">{{ session()->get('success') }}</p>
                    @endif
                    <h1>Создание заказа</h1>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('store') }}">
                        <div>
                            @csrf
                            <div class="input-group row">
                                <label for="surname" class="col-sm-6 col-form-label">Фамилия: </label>
                                <div class="col-sm-12">
                                    @error('surname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="surname" value="Горскин">
                                </div>
                            </div>
                            <br>
                            <div class="input-group row">
                                <label for="name" class="col-sm-6 col-form-label">Имя: </label>
                                <div class="col-sm-12">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name" value="Алексей">
                                </div>
                            </div>
                            <br>
                            <div class="input-group row">
                                <label for="patronymic" class="col-sm-6 col-form-label">Отчество: </label>
                                <div class="col-sm-12">
                                    @error('patronymic')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="patronymic" value="Михайлович">
                                </div>
                            </div>
                            <br>
                            <div class="input-group row">
                                <label for="comment" class="col-sm-6 col-form-label">Комментарий клиента: </label>
                                <div class="col-sm-12">
                                    @error('comment')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="comment" value="https://github.com/LehaGora/superposuda.git">
                                </div>
                            </div>
                            <br>
                            <div class="input-group row">
                                <label for="vendorcode" class="col-sm-6 col-form-label">Артикул товара: </label>
                                <div class="col-sm-12">
                                    @error('vendorcode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="vendorcode" value="AZ105W">
                                </div>
                            </div>
                            <br>
                            <div class="input-group row">
                                <label for="manufacturer" class="col-sm-6 col-form-label">Бренд товара: </label>
                                <div class="col-sm-12">
                                    @error('manufacturer')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="manufacturer" value="Azalita">
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-success">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

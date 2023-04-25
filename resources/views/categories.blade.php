<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>

    </style>
</head>
<body class="antialiased" style="display: flex; align-content: center; justify-content:  center; flex-direction: column; padding: 15px;">

<div style="margin-top: 10px">
    @if( Request::path() != '/')
        <a href="{{ url('/') }}" > EN </a>
    @else
        <span> EN </span>
    @endif

    @if( Request::path() != 'ru')
        <a href="{{ url('/ru') }}" > RU </a>
    @else
        <span> RU </span>
    @endif
</div>

<form action="" method="post" style="margin-top: 10px">
    @csrf
    <table>
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                @lang('categories.name')
            </th>
            <th>
                @lang('categories.parent_name')
            </th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->category_id }}</td>
                    <td>
                        <input type="text" name="categories[{{ $category->id }}]" value="{{ $category->name }}">
                    </td>
                    @if($category->category->parent_id > 0)
                        <td>{{ $categories[$category->category->parent_id]->name }}</td>
                    @endif

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align: center">
                    <input type="submit" value="{{  __('categories.button') }}">
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
</html>

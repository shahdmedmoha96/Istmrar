<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .flag {
            display: block;
            margin: 0 auto 10px;
            width: 50px;
            border-radius: 50%;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .level-option {
            display: flex;
            align-items: center;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            transition: 0.3s;
            cursor: pointer;
        }

        .level-option:hover {
            background-color: #f1f1f1;
        }

        .level-icon {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            margin-right: 10px;
        }

        .selected {
            background-color: #d4edda !important;
            border-color: #28a745 !important;
        }

        .selected .level-icon {
            background-color: #28a745;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="{{ asset('img/flags/' . strtolower($target_language->name) . '.jpg') }}"
            alt="{{ $target_language->name }}" class="flag">
        <h2 class="text-center fw-bold">What is your current level?</h2>
        <p class="text-center text-muted">So we can plan your lessons</p>

        <div class="card p-4">
            @foreach($levels as $index => $level)
                <a href="{{ route('user.level.update', ['user_id' => Auth::user()->id, 'level_id' => $level->id]) }}">
                    <div class="level-option @if($index == 0) selected @endif" onclick="selectLevel(this)">
                        <div class="level-icon">{{ $index + 1 }}</div>
                        <div>
                            <h5 class="mb-0">{{ $level->name }}</h5>
                            <p class="text-muted mb-0">{{ $level->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <script>
        function selectLevel(element) {
            document.querySelectorAll('.level-option').forEach(el => el.classList.remove('selected'));
            element.classList.add('selected');
        }
    </script>

</body>

</html>
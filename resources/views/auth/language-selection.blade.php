<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        a {
            text-decoration: none;
        }

        .selection-text {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        select {
            background: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            margin: 0 5px;
        }

        .card {
            background: white;
            color: black;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: 0.3s;
            margin-top: 20px;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: 1.5s all;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php
$languages = App\Models\Language::all();
    ?>
    <div class="container">
        <!-- الجملة الرئيسية مع الـ Select -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="selection-text">
                    I am speak
                    <select id="native_language_select">
                        <!-- عرض اللغات من قاعدة البيانات -->
                        @foreach($languages as $language)
                            <option value="{{ $language->id }}" name="native_language">{{ $language->name }}</option>
                        @endforeach
                    </select>
                    and I want to learn.....
                </div>
            </div>
        </div>

        <!-- الكروت -->
        <div class="row justify-content-center">
            @foreach($languages as $language)
                <div class="col-md-4">
                    <!-- رابط مع الـ user_id و الـ target_language و الـ native_language -->
                    <a href="#" onclick="updateLanguage('{{ $language->id }}')">
                        <div class="card">
                            <!-- يمكنك إضافة صورة مخصصة لكل لغة بناءً على منطقك -->
                            <img src="{{ asset('img/flags/' . strtolower($language->name) . '.jpg') }}"
                                alt="{{ $language->name }} Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $language->name }}</h5>
                                <p class="card-text">Short description about this card.</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // دالة لتحديث اللغة للمستخدم
        function updateLanguage(languageCode) {
            var nativeLanguage = document.getElementById("native_language_select").value;
            var userId = "{{ auth()->user()->id }}";  // الحصول على الـ user_id من الـ session

            // بناء الرابط مع جميع المعلمات
            var url = "{{ route('user.language.update', ['user_id' => ':user_id']) }}?target_language=" + languageCode + "&native_language=" + nativeLanguage;

            // استبدال :user_id بـ الـ user_id الفعلي
            url = url.replace(':user_id', userId);

            // توجيه المستخدم إلى الرابط الذي يقوم بتحديث اللغة
            window.location.href = url;
        }
    </script>
</body>

</html>
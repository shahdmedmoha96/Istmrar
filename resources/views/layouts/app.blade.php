<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'الرئيسية' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- bootsrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @font-face {
            font-family: 'Cairo';
            src: url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');
        }
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <svg width="130" height="76" viewBox="0 0 130 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M80.4345 6.39894L79.8071 8.59322L81.9395 7.90773C82.3201 8.28935 82.1651 8.94304 81.6505 9.10911L79 9.96068C78.6792 10.0632 78.3761 9.76634 78.4678 9.44479L79.2538 6.70635C79.4018 6.18693 80.0538 6.01732 80.438 6.39894H80.4345Z" fill="url(#paint0_linear_132_1267)"/>
                <path d="M78.4791 9.76564L74.4491 13.8058L74.5812 13.9382L78.6112 9.89807L78.4791 9.76564Z" fill="url(#paint1_linear_132_1267)"/>
                <path d="M76.5754 6.68504L74.517 13.8651L81.4992 11.6213C82.7504 12.8757 82.2323 15.0134 80.5476 15.5541L71.8701 18.342C70.8233 18.6777 69.8293 17.7095 70.1324 16.653L72.7019 7.68854C73.1918 5.98541 75.3242 5.43065 76.5754 6.68504Z" fill="url(#paint2_linear_132_1267)"/>
                <path d="M49.6898 39.9948L50.3172 37.8005L48.1848 38.486C47.8042 38.1044 47.9592 37.4507 48.4738 37.2846L51.1243 36.4331C51.445 36.3306 51.7481 36.6274 51.6565 36.949L50.8705 39.6874C50.7225 40.2068 50.0704 40.3764 49.6863 39.9948H49.6898Z" fill="url(#paint3_linear_132_1267)"/>
                <path d="M51.6429 36.6283L55.6729 32.5881L55.5408 32.4557L51.5108 36.4959L51.6429 36.6283Z" fill="url(#paint4_linear_132_1267)"/>
                <path d="M53.5462 39.7089L55.6045 32.5288L48.6223 34.7726C47.3711 33.5182 47.8892 31.3805 49.574 30.8398L58.2515 28.0519C59.2983 27.7162 60.2922 28.6844 59.9891 29.7409L57.4197 38.7054C56.9298 40.4085 54.7974 40.9632 53.5462 39.7089Z" fill="url(#paint5_linear_132_1267)"/>
                <path d="M81.867 38.8113L79.6783 38.1823L80.362 40.3201C79.9814 40.7017 79.3293 40.5462 79.1637 40.0303L78.3142 37.3731C78.212 37.0516 78.5081 36.7477 78.8288 36.8396L81.5604 37.6275C82.0785 37.776 82.2477 38.4296 81.867 38.8148V38.8113Z" fill="url(#paint6_linear_132_1267)"/>
                <path d="M78.5047 36.8529L74.4747 32.8127L74.3426 32.9452L78.3726 36.9853L78.5047 36.8529Z" fill="url(#paint7_linear_132_1267)"/>
                <path d="M81.5775 34.9424L74.4156 32.8788L76.6537 39.8786C75.4025 41.133 73.2701 40.6136 72.7308 38.9246L69.95 30.2252C69.6151 29.1757 70.5808 28.1793 71.6347 28.4832L80.5766 31.0591C82.2754 31.5502 82.8288 33.688 81.5775 34.9424Z" fill="url(#paint8_linear_132_1267)"/>
                <path d="M48.3529 7.98881L50.5417 8.61777L49.8579 6.48001C50.2385 6.0984 50.8906 6.25387 51.0562 6.76976L51.9057 9.42693C52.0079 9.74848 51.7118 10.0524 51.3911 9.96049L48.6595 9.17252C48.1414 9.02412 47.9722 8.37042 48.3529 7.98527V7.98881Z" fill="url(#paint9_linear_132_1267)"/>
                <path d="M51.7088 9.94545L55.7388 13.9856L55.8709 13.8532L51.8409 9.81302L51.7088 9.94545Z" fill="url(#paint10_linear_132_1267)"/>
                <path d="M48.6361 11.8546L55.798 13.9181L53.5599 6.91833C54.8111 5.66395 56.9435 6.18337 57.4828 7.87237L60.2637 16.5718C60.5985 17.6212 59.6328 18.6177 58.5789 18.3138L49.6371 15.7379C47.9382 15.2467 47.3849 13.109 48.6361 11.8546Z" fill="url(#paint11_linear_132_1267)"/>
                <path d="M87.7199 22.5112L85.7286 23.6172L87.7199 24.6454C87.7199 25.186 87.149 25.5359 86.6661 25.2885L84.1918 24.0094C83.8923 23.8539 83.8887 23.4299 84.1813 23.2674L86.6696 21.8858C87.1419 21.6243 87.7235 21.967 87.7235 22.5077L87.7199 22.5112Z" fill="url(#paint12_linear_132_1267)"/>
                <path d="M83.9636 23.5078H78.2644V23.6951H83.9636V23.5078Z" fill="url(#paint13_linear_132_1267)"/>
                <path d="M84.7852 19.978L78.2648 23.5963L84.7852 26.9601C84.7852 28.7339 82.9137 29.8788 81.3382 29.0661L73.2352 24.886C72.2589 24.3807 72.2377 22.992 73.2 22.4585L81.3382 17.9392C82.8855 17.0805 84.7817 18.2007 84.7817 19.9745L84.7852 19.978Z" fill="url(#paint14_linear_132_1267)"/>
                <path d="M42.2804 24.4724L44.2718 23.3664L42.2804 22.3382C42.2804 21.7976 42.8514 21.4477 43.3342 21.6951L45.8085 22.9742C46.1081 23.1297 46.1116 23.5537 45.8191 23.7162L43.3307 25.0978C42.8584 25.3593 42.2769 25.0166 42.2769 24.4759L42.2804 24.4724Z" fill="url(#paint15_linear_132_1267)"/>
                <path d="M46.0375 23.4794H51.7367V23.2922H46.0375V23.4794Z" fill="url(#paint16_linear_132_1267)"/>
                <path d="M45.2078 27.0059L51.7282 23.3876L45.2078 20.0237C45.2078 18.2499 47.0793 17.1051 48.6548 17.9178L56.7578 22.0979C57.7341 22.6032 57.7553 23.9918 56.793 24.5254L48.6548 29.0447C47.1075 29.9033 45.2113 28.7832 45.2113 27.0094L45.2078 27.0059Z" fill="url(#paint17_linear_132_1267)"/>
                <path d="M63.7548 0.490714L64.858 2.48713L65.8836 0.490714C66.4229 0.490714 66.7718 1.06314 66.5251 1.54723L65.2492 4.02772C65.0941 4.32807 64.6711 4.3316 64.509 4.03832L63.1309 1.54369C62.8701 1.0702 63.212 0.487183 63.7512 0.487183L63.7548 0.490714Z" fill="url(#paint18_linear_132_1267)"/>
                <path d="M64.8135 4.25731V9.97095H65.0003V4.25731H64.8135Z" fill="url(#paint19_linear_132_1267)"/>
                <path d="M61.4008 3.37036L65.0099 9.90729L68.3653 3.37036C70.1347 3.37036 71.2766 5.24664 70.466 6.8261L66.2964 14.9496C65.7924 15.9283 64.4072 15.9495 63.875 14.9849L59.3671 6.8261C58.5106 5.2749 59.6279 3.3739 61.3972 3.3739L61.4008 3.37036Z" fill="url(#paint20_linear_132_1267)"/>
                <path d="M65.9622 46.0056L64.859 44.0091L63.8334 46.0056C63.2941 46.0056 62.9452 45.4331 63.1919 44.949L64.4678 42.4685C64.6229 42.1682 65.0458 42.1647 65.208 42.4579L66.5861 44.9526C66.8469 45.4261 66.505 46.0091 65.9657 46.0091L65.9622 46.0056Z" fill="url(#paint21_linear_132_1267)"/>
                <path d="M64.9966 42.2385V36.5249H64.8098V42.2385H64.9966Z" fill="url(#paint22_linear_132_1267)"/>
                <path d="M68.5908 43.0688L64.9817 36.5319L61.6263 43.0688C59.8569 43.0688 58.715 41.1926 59.5256 39.6131L63.6952 31.4896C64.1992 30.5109 65.5844 30.4897 66.1166 31.4543L70.6245 39.6131C71.481 41.1643 70.3637 43.0653 68.5944 43.0653L68.5908 43.0688Z" fill="url(#paint23_linear_132_1267)"/>
                <path d="M62.3067 24.7163V22.2676H60.0228V21.3418H64.4074C64.2276 21.6033 64.0972 21.9142 64.0444 22.2676H63.054V24.7163H68.8413C69.0105 24.7163 69.155 24.5467 69.155 24.3311C69.155 24.1156 69.014 23.9424 68.8413 23.9424H65.6375C65.0559 23.9424 64.5801 23.3594 64.5801 22.6421C64.5801 21.9248 65.0524 21.3453 65.6375 21.3453H69.3066V22.2711H65.6375C65.4683 22.2711 65.3344 22.4478 65.3344 22.6421C65.3344 22.8541 65.4683 23.0202 65.6375 23.0202H68.8413C69.4264 23.0202 69.9093 23.6068 69.9093 24.3347C69.9093 25.0625 69.4299 25.6491 68.8413 25.6491H60.0263V24.7198H62.3103L62.3067 24.7163Z" fill="url(#paint24_linear_132_1267)"/>
                <path d="M13.0205 64.6571V58.4241H6.24976V56.0566H19.2519C18.984 56.3923 18.7585 56.7598 18.5717 57.1555C18.3849 57.5513 18.2545 57.9753 18.1769 58.4241H15.2339V64.6571H32.4021C32.6559 64.6571 32.8744 64.5617 33.0577 64.3709C33.241 64.1801 33.3326 63.9469 33.3326 63.6713C33.3326 63.5299 33.3079 63.3992 33.2586 63.2791C33.2093 63.1589 33.1423 63.0565 33.0577 62.9681C32.9731 62.8798 32.8744 62.8091 32.7616 62.7561C32.6488 62.7031 32.529 62.6784 32.4021 62.6784H22.8999C22.4628 62.6784 22.0575 62.59 21.6768 62.4169C21.2962 62.2438 20.9649 62.007 20.6864 61.7067C20.4045 61.4098 20.1824 61.06 20.0168 60.6572C19.8511 60.2544 19.77 59.8233 19.77 59.3604C19.77 58.8976 19.8511 58.4771 20.0168 58.0742C20.1824 57.6714 20.4045 57.3216 20.6864 57.0248C20.9684 56.728 21.2997 56.4912 21.6768 56.3146C22.0575 56.1379 22.4628 56.0531 22.8999 56.0531H33.7838V58.4205H22.8999C22.6461 58.4205 22.4346 58.5159 22.2619 58.7032C22.0892 58.8905 22.0046 59.1096 22.0046 59.3604C22.0046 59.6254 22.0927 59.8516 22.269 60.0353C22.4452 60.2191 22.6567 60.3109 22.9034 60.3109H32.4056C32.8427 60.3109 33.2515 60.3993 33.6357 60.5724C34.0199 60.7491 34.3547 60.9858 34.6438 61.2897C34.9328 61.5936 35.1583 61.9469 35.324 62.3568C35.4896 62.7667 35.5707 63.2048 35.5707 63.6677C35.5707 64.1306 35.4896 64.5652 35.324 64.9716C35.1583 65.3779 34.9328 65.7348 34.6438 66.0387C34.3547 66.3461 34.0199 66.5864 33.6357 66.7595C33.2515 66.9362 32.8427 67.021 32.4056 67.021H6.25328V64.6536H13.024L13.0205 64.6571Z" fill="url(#paint25_linear_132_1267)"/>
                <path d="M36.3462 58.4242V56.0568H54.7903V58.4242H46.7014V67.0282H44.4668V58.4242H36.3462Z" fill="url(#paint26_linear_132_1267)"/>
                <path d="M56.6489 56.0108C57.1776 56.4737 57.657 56.8906 58.087 57.2617C58.5205 57.6327 59.0104 58.0567 59.5637 58.5302C60.1136 59.0037 60.6775 59.4877 61.2556 59.9895C61.8336 60.4913 62.394 60.9753 62.9473 61.4488C63.4972 61.9223 63.9906 62.3463 64.4241 62.7173C64.8577 63.0884 65.337 63.5053 65.8622 63.9682L75.1036 56.0143V66.9964H72.8902V60.9859L65.8516 67.0317C65.8093 66.9928 65.6754 66.8798 65.4498 66.6854C65.2242 66.4911 64.9458 66.2508 64.6109 65.9575C64.2761 65.6678 63.9025 65.3427 63.4866 64.9858C63.0707 64.6289 62.6513 64.265 62.2248 63.8975C61.7983 63.53 61.3824 63.1732 60.9806 62.8233C60.5753 62.4771 60.2158 62.1697 59.9056 61.8976C59.5919 61.6255 59.2465 61.3216 58.8659 60.9859V66.9964H56.6525V56.0143L56.6489 56.0108Z" fill="url(#paint27_linear_132_1267)"/>
                <path d="M80.3711 62.6784C79.9411 62.6784 79.5393 62.5901 79.1586 62.4169C78.778 62.2438 78.4502 62.007 78.1682 61.7067C77.8862 61.4099 77.6642 61.0601 77.4985 60.6573C77.3329 60.2544 77.2518 59.8234 77.2518 59.3605C77.2518 58.8976 77.3329 58.4771 77.4985 58.0708C77.6642 57.6644 77.8862 57.3111 78.1682 57.0142C78.4502 56.7174 78.7815 56.4807 79.1586 56.304C79.5393 56.1273 79.9411 56.0425 80.3711 56.0425H93.0031V58.4241H80.3711C80.1243 58.4241 79.9164 58.516 79.7437 58.6997C79.571 58.8835 79.4864 59.1061 79.4864 59.3605C79.4864 59.4948 79.5075 59.6149 79.5534 59.7315C79.5992 59.8446 79.6626 59.9435 79.7437 60.0283C79.8248 60.1131 79.9199 60.1802 80.0292 60.2332C80.1384 60.2863 80.2512 60.311 80.3711 60.311H93.0031V67.0246H90.7686V62.6784H84.019L80.2759 67.0246H77.2483L80.9914 62.6784H80.3711ZM94.7161 67.0246V56.0531L104.165 67.0246H101.148L96.9295 62.1378V67.0246H94.7161Z" fill="url(#paint28_linear_132_1267)"/>
                <path d="M120.628 56.0531C121.058 56.0531 121.459 56.1414 121.84 56.3146C122.221 56.4912 122.548 56.728 122.83 57.0248C123.112 57.3216 123.334 57.6714 123.5 58.0742C123.666 58.4771 123.747 58.9046 123.747 59.3604C123.747 59.8163 123.666 60.2544 123.5 60.6572C123.334 61.06 123.112 61.4098 122.83 61.7067C122.548 62.0035 122.217 62.2402 121.84 62.4169C121.459 62.5936 121.058 62.6784 120.628 62.6784H120.007L123.75 67.0245H120.723L116.976 62.6784H108.429V67.0245H106.216V60.3109H120.631C120.878 60.3109 121.086 60.2191 121.258 60.0353C121.431 59.8516 121.516 59.6254 121.516 59.3604C121.516 59.2368 121.495 59.1166 121.449 59.0036C121.403 58.8905 121.34 58.788 121.258 58.7067C121.177 58.6219 121.086 58.5548 120.98 58.5018C120.874 58.4488 120.758 58.4241 120.631 58.4241H106.216V56.0566H120.631L120.628 56.0531Z" fill="url(#paint29_linear_132_1267)"/>
                <defs>
                <linearGradient id="paint0_linear_132_1267" x1="78.5336" y1="9.8179" x2="81.1946" y2="7.16366" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint1_linear_132_1267" x1="74.4135" y1="13.9714" x2="78.4319" y2="9.96307" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint2_linear_132_1267" x1="78.8298" y1="17.6581" x2="70.5646" y2="9.41378" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint3_linear_132_1267" x1="51.5899" y1="36.5741" x2="48.9264" y2="39.2308" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint4_linear_132_1267" x1="56.056" y1="32.0691" x2="52.0375" y2="36.0775" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint5_linear_132_1267" x1="51.291" y1="28.7375" x2="59.5561" y2="36.9819" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint6_linear_132_1267" x1="78.4512" y1="36.9047" x2="81.1146" y2="39.5614" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint7_linear_132_1267" x1="73.9949" y1="32.4616" x2="78.0134" y2="36.47" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint8_linear_132_1267" x1="70.6326" y1="37.2026" x2="78.8953" y2="28.9607" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint9_linear_132_1267" x1="51.7656" y1="9.89023" x2="49.1046" y2="7.23598" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint10_linear_132_1267" x1="55.9443" y1="14.0568" x2="51.9258" y2="10.0484" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint11_linear_132_1267" x1="59.5814" y1="9.59627" x2="51.3187" y2="17.8381" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint12_linear_132_1267" x1="83.9592" y1="23.5854" x2="87.7164" y2="23.5854" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint13_linear_132_1267" x1="77.8885" y1="23.6032" x2="83.5572" y2="23.6032" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint14_linear_132_1267" x1="78.6384" y1="29.3346" x2="78.6384" y2="17.6494" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint15_linear_132_1267" x1="46.0341" y1="23.3982" x2="42.2804" y2="23.3982" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint16_linear_132_1267" x1="52.1433" y1="23.384" x2="46.4746" y2="23.384" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint17_linear_132_1267" x1="51.3582" y1="17.6492" x2="51.3582" y2="29.338" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint18_linear_132_1267" x1="64.8262" y1="4.2574" x2="64.8262" y2="0.490716" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint19_linear_132_1267" x1="64.9051" y1="10.0176" x2="64.9051" y2="4.33455" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint20_linear_132_1267" x1="70.7339" y1="9.53274" x2="59.0745" y2="9.53274" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint21_linear_132_1267" x1="64.8907" y1="42.2389" x2="64.8907" y2="46.0056" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint22_linear_132_1267" x1="64.9014" y1="35.7858" x2="64.9014" y2="41.4672" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="0.17" stop-color="#FAFAFA"/>
                <stop offset="0.35" stop-color="#ECEDED"/>
                <stop offset="0.55" stop-color="#D5D7D7"/>
                <stop offset="0.76" stop-color="#B5B8B9"/>
                <stop offset="0.97" stop-color="#8D9192"/>
                <stop offset="1" stop-color="#878C8D"/>
                </linearGradient>
                <linearGradient id="paint23_linear_132_1267" x1="59.2542" y1="36.9065" x2="70.9135" y2="36.9065" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint24_linear_132_1267" x1="60.0228" y1="23.4937" x2="69.9057" y2="23.4937" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint25_linear_132_1267" x1="6.24976" y1="61.5159" x2="123.749" y2="61.5159" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint26_linear_132_1267" x1="6.24982" y1="61.516" x2="123.749" y2="61.516" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint27_linear_132_1267" x1="6.25098" y1="61.516" x2="123.75" y2="61.516" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint28_linear_132_1267" x1="6.24924" y1="61.5159" x2="123.748" y2="61.5159" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                <linearGradient id="paint29_linear_132_1267" x1="6.25151" y1="61.5159" x2="123.75" y2="61.5159" gradientUnits="userSpaceOnUse">
                <stop stop-color="#091012"/>
                <stop offset="0.12" stop-color="#0C1317"/>
                <stop offset="0.27" stop-color="#161E25"/>
                <stop offset="0.43" stop-color="#27303E"/>
                <stop offset="0.6" stop-color="#3F4960"/>
                <stop offset="0.78" stop-color="#5E6A8C"/>
                <stop offset="0.96" stop-color="#8291C2"/>
                <stop offset="1" stop-color="#8B9ACE"/>
                </linearGradient>
                </defs>
                </svg>
                <div class="d-flex gap-5 align-items-center" style="height: 76px;">
                <a href="{{ route('home') }}"
                   class="nav-link {{ request()->routeIs('home') ? 'active' : 'text-white' }}">
                    الصفحة الرئيسية
                </a>
                <a href="#services" class="nav-link text-white">الخدمات</a>
                <a href="#we" class="nav-link text-white">من نحن</a>
                <a href="#contact" class="nav-link text-white">تواصل معنا</a>
            </div>
        </div>
    </nav>


    {{-- Main Content --}}
    <main class=" px-4">
        @yield('content')
    </main>
<script>
    const groups = document.querySelectorAll('.one, .two, .three, .four');

groups.forEach(group => {
    const plus = group.querySelector('.plus');
    const minus = group.querySelector('.minus');
    const paragraph = group.querySelector('.paragraph');

    if (paragraph.classList.contains('active')) {
        plus.style.display = 'none';
        minus.style.display = 'inline';
        paragraph.style.maxHeight = paragraph.scrollHeight + 'px';
    } else {
        plus.style.display = 'inline';
        minus.style.display = 'none';
        paragraph.style.maxHeight = '0px';
    }

    plus.addEventListener('click', () => {
        paragraph.classList.add('active');
        paragraph.style.maxHeight = paragraph.scrollHeight + 'px';
        plus.style.display = 'none';
        minus.style.display = 'inline';
    });

    minus.addEventListener('click', () => {
        paragraph.classList.remove('active');
        paragraph.style.maxHeight = '0px';
        plus.style.display = 'inline';
        minus.style.display = 'none';
    });
});

window.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.fade-in-left').classList.add('active');
    document.querySelector('.fade-in-right').classList.add('active');
});
document.querySelectorAll('.sidebar a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
});
const thumb = document.getElementById("scrollThumb");

    window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = scrollTop / docHeight;

        const trackHeight = document.querySelector(".scroll-bar").offsetHeight;
        const thumbHeight = thumb.offsetHeight;
        const maxThumbTop = trackHeight - thumbHeight;

        const newTop = scrollPercent * maxThumbTop;

        thumb.style.top = `${newTop}px`;
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Absensi Kantor - PT SKI DIY</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="w-screen flex items-center justify-center bg-slate-300 min-h-screen">
        <div class="w-11/12 h-11/12 flex">
            <div class="w-1/4 bg-pink-200 text-emerald-500 flex flex-col items-center rounded-l-lg">
                <img 
                    src="{{ asset("ski.png") }}" 
                    alt="Logo PT Sistem Kesehatan Indonesia" 
                    loading="lazy"
                    width="100"
                    height="100"    
                    class="mt-4"
                >
                <p class="text-center font-bold">PT. Sistem Kesehatan Indonesia</p>
                <p class="text-center font-bold">(Abiyosoft)</p>
                <nav class="mt-10 mb-10 w-full flex flex-col items-end gap-3">
                    <a class="rounded-l-full bg-white w-3/4 text-right p-2 pr-3 font-bold" href="#"><i class="bi bi-house-fill"></i> Home</a>
                    <a class="rounded-l-full border-2 border-white w-3/4 text-right p-2 pr-3 font-bold" href="#"><i class="bi bi-alarm-fill"></i> Clockify</a>
                    <a class="rounded-l-full border-2 border-white w-3/4 text-right p-2 pr-3 font-bold" href="#"><i class="bi bi-bookmark-star-fill"></i> Report</a>
                    <a class="rounded-l-full border-2 border-white w-3/4 text-right p-2 pr-3 font-bold" href="#"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                    <a class="rounded-l-full border-2 border-white w-3/4 text-right p-2 pr-3 font-bold" href="#"><i class="bi bi-exclamation-circle-fill"></i> About</a>
                </nav>
            </div>
    
            <div class="w-3/4 p-3 bg-slate-200">
                <p>Content</p>
            </div>
        </div>
    </div>
</body>
</html>
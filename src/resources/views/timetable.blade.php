<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>わたしの時間割づくり | POSSE大学</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <header class="bg-[#1f3a5f] text-white">
        <div class="mx-auto max-w-5xl px-4 py-4">
            <p class="text-xs tracking-widest text-blue-100">POSSE大学 学務ポータル</p>
            <h1 class="mt-1 text-xl font-bold">わたしの時間割づくり</h1>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-6">
        <div class="grid gap-6 md:grid-cols-2">
            <section class="min-w-0 rounded-lg border border-slate-200 bg-white">
                <div class="border-b border-slate-200 px-5 pb-3 pt-4">
                    <h2 class="text-base font-bold text-slate-800">
                        <span class="mr-2 text-slate-500">区画1</span>月曜日の授業
                    </h2>
                    <p class="mt-1 text-xs text-slate-500">時限の早い順に並べています。</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-700">
                        <thead class="bg-slate-50 text-slate-600">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium">時限</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium">授業名</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium">担当教員</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium">教室</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mondayCourses as $course)
                                <tr class="border-t border-slate-200">
                                    <td class="whitespace-nowrap px-4 py-2">{{ $course->period }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">{{ $course->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">{{ $course->teacher }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">{{ $course->room }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="min-w-0 rounded-lg border border-slate-200 bg-white">
                <div class="border-b border-slate-200 px-5 pb-3 pt-4">
                    <h2 class="text-base font-bold text-slate-800">
                        <span class="mr-2 text-slate-500">区画2</span>必修科目
                    </h2>
                    <p class="mt-1 text-xs text-slate-500">科目コードの順に並べています。</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-700">
                        <thead class="bg-slate-50 text-slate-600">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium">授業名</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium">単位数</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requiredCourses as $course)
                                <tr class="border-t border-slate-200">
                                    <td class="whitespace-nowrap px-4 py-2">{{ $course->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">{{ $course->credits }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
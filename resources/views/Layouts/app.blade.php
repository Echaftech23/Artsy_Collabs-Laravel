<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/vendors/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('resources/css/vendors/flatpickr.min.css') }}">
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>

    <script defer data-domain='preview.cruip.com,rollup.cruip.com' src='../../plausible.cruip.com/js/script.js'></script>
</head>

<body class="dark:text-slate-400 c3jt4 c6w4h c6vqo c0ndv csf1w" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex ct1ew c3z79">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content area -->
        <div class="flex c8gbp cqd18 c4ijw chmlm cy6kd">

            <!-- Site header -->
            @include('layouts.header')

            <main class="ckut6">
                @yield('contents')
            </main>

        </div>

    </div>

    <script src="{{ mix('resources/js/vendors/alpinejs.min.js') }}" defer=""></script>
    <script src="{{ mix('resources/js/main.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/chart.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/moment.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/chartjs-adapter-moment.js') }}"></script>
    <script src="{{ mix('resources/js/dashboard-charts.js') }}"></script>
    <script src="{{ mix('resources/js/vendors/flatpickr.js') }}"></script>
    <script src="{{ mix('resources/js/flatpickr-init.js') }}"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"851a6c54be386eb4","version":"2024.2.0","r":1,"token":"59cc17d45d734f9ba118c63036ab1b84","b":1}' crossorigin="anonymous"></script>
</body>

</html>

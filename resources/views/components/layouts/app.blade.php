<!DOCTYPE html>
<html lang="id">
<head>
    @include('components.layouts.head')
</head>
<body>

    @include('components.layouts.navMobile')

    @include('components.layouts.searcbar')

    <main>
        {{$slot}}
    </main>

    @include('components.layouts.script')

</body>
</html>

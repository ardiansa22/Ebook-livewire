<!DOCTYPE html>
<html lang="id">
<head>
    @include('components.layouts.head')
</head>
<body>

    @include('components.layouts.navMobile')


    <main>
        {{$slot}}
    </main>

    @include('components.layouts.script')

</body>
</html>

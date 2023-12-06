<!DOCTYPE html>
<html lang="en" ata-bs-theme="dark">

    @include("components.head")
<body>
    

    <div class="container">

        @include("components.navigation")

        @yield("content")
    
        @include("components.footer")
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

    @include("components.head")
<body>
    

    <div class="container">

        @include("components.navigation")

        @yield("content")
    
        @include("components.footer")
    </div>
</body>
</html>
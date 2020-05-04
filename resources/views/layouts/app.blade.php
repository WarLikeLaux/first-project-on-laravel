<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    @include('inc.header')
    <div class="container mt-5">
    @include('inc.messages')
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('inc.aside')
            </div>
        </div>
    </div>
    @include('inc.footer')
</body>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 194989787, {disableExpandChatSound: "1",disableNewMessagesSound: "1",tooltipButtonText: "Есть вопрос?"});
</script>
</script>
</html>

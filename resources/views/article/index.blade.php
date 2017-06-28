<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel jScroll</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.7/jquery.jscroll.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 >Article List</h1>
                <hr>
                <div class="infinite-scroll">
                    @foreach($articles as $article)
                        <h2><span>Title: {{$article->title}}</span></h2>
                        <h2><p>{{$article->content}}</p></h2>
                        <hr>
                    @endforeach
                    {{ $articles->links() }}
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>

</body>
</html>


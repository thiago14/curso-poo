</div>
<!-- /container -->
<footer>
    <div class="container text-center">
        Thiago Mori - Curso POO - Code Education.
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<link rel="stylesheet" href="css/theme.bootstrap.css">
<script type="text/javascript" src="js/jquery.tablesorter.min.js" ></script>
<script type="text/javascript" src="js/jquery.tablesorter.widgets.js" ></script>
<script type="text/javascript">
    $(function() {
        $.extend($.tablesorter.themes.bootstrap, {
            sortAsc    : 'icon-chevron-up glyphicon glyphicon-chevron-up',     // includes classes for Bootstrap v2 & v3
            sortDesc   : 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
        });
        $("table").tablesorter({
            theme: "bootstrap",
            widthFixed: true,
            headerTemplate: '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!
            widgets: ["uitheme"],
        });
    });
</script>
</body>
</html>

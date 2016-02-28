<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>jquery.bootsrap.treeselect</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="/css/jquery.bootstrap.treeselect.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="/js/jquery.bootstrap.treeselect.js"></script>
        <script>
            
            $(function(){
                $('#productgroep').treeselect();
            });
            
        </script>
    </head>
    <body>
        <select multiple="multiple" id="productgroep" name="productgroepen">
            <option value="1" selected="selected">Groep 1</option>
            <option value="2" data-parent="1">Groep 2</option>
            <option value="3" data-parent="2">Groep 3</option>
            <option value="4">Groep 4</option>
            <option value="5">Groep 5</option>
        </select>
    </body>
</html>

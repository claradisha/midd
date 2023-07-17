<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 60%;
        }

        #sortable li {
            margin: 0 3px 3px 3px;
            padding: 0.4em;
            padding-left: 1.5em;
            font-size: 1.4em;
            height: 18px;
        }

        #sortable li span {
            position: absolute;
            margin-left: -1.3em;
        }
    </style>
    <script>
        $(function() {
            $("#sortable").sortable();
            $("#sortable").disableSelection();
        });
    </script>
</head>

<body>
    <ul id="sortable">
        <li><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
        <li><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
        <li><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
        <li><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
        <li><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
        <li><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
    </ul>
</body>

</html>
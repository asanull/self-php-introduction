<html>
    <head>
        <title>Simple PHP</title>
    </head>
    <body>
        <style>

            * {
                cursor: default;
            }
            
            body {
                background: black
            }

            .outer {
                position: relative;
                height: 75%;
            }

            .inner {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                text-align: center;
                color: white;
                font-family: 'Segoe UI';
                font-size: larger
            }

            purple {
                color: #ff6d9c
            }
            blue {
                color: #47c9f2
            }
            green {
                color: #e4fa8c
            }
            gray {
                color: gray
            }

        </style>
        <div class="outer">
            <div class="inner">
                <p>
                    <?php
                        echo "
                            <div style='text-align: left; margin-left: 20%'>
                                \$lang <purple>=</purple> <green>'PHP'</green>;<br>
                                <purple>class</purple> <blue>objectClass</blue> {<br>
                                    <purple>public</purple> \$string = <green>'Result: 👋 Hello '</green>;<br>
                                }<br>
                                \$object <purple>= new</purple> <blue>objectClass</blue>();<br>
                                \$string <purple>=</purple> \$object<purple>-></purple>string <purple>.</purple> \$lang;<br>
                                <blue>echo</blue> \$string<br>
                            </div><br>
                            <br><br>
                        ";
                        $lang = 'PHP';
                        class objectClass {
                            public $string = '<gray>Result:</gray> 👋 Hello ';
                        }
                        $object = new objectClass();
                        $string = $object->string . $lang;
                        echo $string
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>
<?php
function fooBar($arg)
{
    for ($i = 1; $i <= $arg; $i = $i + 1) {
        if ($i % 3 == 0 && $i % 5 != 0) {
            echo "Foo";
        } elseif ($i % 5 == 0 && $i % 3 != 0) {
            echo "Bar";
        } elseif ($i % 3 == 0 && $i % 5 == 0) {
            echo "FooBar";
        } else {
            echo $i;
        }
    }
    /*    return TRUE;*/
}
echo fooBar(15);
?>
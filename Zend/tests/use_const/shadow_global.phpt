--TEST--
shadowing a global constant with a local version
--FILE--
<?php

namespace {
    require 'includes/global_bar.php';
    require 'includes/foo_bar.php';
}

namespace {
    var_dump(bar);
}

namespace {
    use const foo\bar;
    var_dump(bar);
    echo "Done\n";
}

?>
--EXPECT--
string(10) "global bar"
string(9) "local bar"
Done

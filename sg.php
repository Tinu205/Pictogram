<pre>
    <?php
        session_start();
        print_r($_SESSION);

        if(isset($_SESSION['a'])){
            print("a is set");
        } else {
            $_SESSION['a'] = time();
            printf("Setting new value: $_SESSION[a]");
        }
    ?>
</pre>
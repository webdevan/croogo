<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title_for_layout; ?> - <?php __('Croogo'); ?></title>
    <?php
        echo $javascript->codeBlock("var baseUrl = '" . $html->url('/') . "';");
        echo $javascript->codeBlock("var params = " . $javascript->object($this->params) . ";");
        echo $html->css(array(
                         'reset',
                         '960',
                         'admin'
                        ));
        echo $scripts_for_layout;
    ?>
</head>

<body>

    <div id="wrapper" class="login">
        <div id="header">
            <p id="backtosite">
            <?php echo $html->link(__('Back to', true) . ' ' . Configure::read('Site.title'), '/'); ?>
            </p>
        </div>

        <div id="main">
            <div id="login">
            <?php
                $layout->sessionFlash();
                echo $content_for_layout;
            ?>
            </div>
        </div>

        <?php echo $this->element('admin/footer'); ?>

    </div>


    </body>
</html>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <?php Yii::app()->bootstrap->register(); ?> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="container">
            <?php
            $this->widget('bootstrap.widgets.TbNavbar', array(
                'brandLabel' => CHtml::encode(Yii::app()->name),
                'display' => null, // default is static to top
                'items' => array(
                    array(
                        'class' => 'bootstrap.widgets.TbNav',
                        'items' => array(
                            array('label' => 'Home', 'url' => array('/site/index')),
                            array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Data Master', 'url' => array('#'), 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                    array('label' => 'Payment Methods', 'url' => array('/backend/paymentMethods')),
                                    array('label' => 'Bills', 'url' => array('/backend/bills')),
                                    array('label' => 'Type Product', 'url' => array('/backend/typeProduct')),
                                    array('label' => 'Products', 'url' => array('/backend/products')),
                                    array('label' => 'User', 'url' => array('/backend/user')),
                                    array('label' => 'Role', 'url' => array('/backend/role')),
                                    array('label' => 'Operation', 'url' => array('/backend/operation')),
                                    array('label' => 'Log'),
                                    array('label' => 'Access Log', 'url' => array('/backend/accessLog')),
                                    array('label' => 'Payment Log', 'url' => array('/backend/paymentLog')),
                                )),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                        ),
                    ),
                ),
            ));
            ?>
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumb', array(
                    'links' => $this->breadcrumbs,
                ));
                ?>
            <?php endif ?>

            <?php echo $content; ?>

            <?php echo Yii::app()->params['copyrightInfo']; ?><br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div>
    </body>
</html>

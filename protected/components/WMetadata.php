<?php

class WMetadata extends CApplicationComponent {

    /**
     * Get all information about application
     * if modules of your application have controllers with same name, it will raise fatall error
     * 
     */
    public function getAll() {

        $meta = array();
        $controllers = array();
        foreach ($this->getControllers() as $controller) {
            $controllers[] = array(
                'name' => $controller,
                'actions' => $this->getActions($controller)
            );
        }

        $meta['controllers'] = $controllers;


        $modules = array();
        foreach ($this->getModules() as $module) {

            $controllers = array();

            foreach ($this->getControllers($module) as $controller) {
                $controllers[] = array(
                    'name' => $controller,
                    'actions' => $this->getActions($controller, $module)
                );
            }


            $modules[] = array(
                'name' => $module,
                'controllers' => $controllers,
            );
        }
        $meta['modules'] = $modules;

        return $meta;
    }

    /**
     * Get actions of controller
     * 
     * @param mixed $controller
     * @param mixed $module
     * @return mixed
     */
    public function getActions($controller, $module = null) {
        $declaredClasses = get_declared_classes();
        $path = ($module === NULL) ? 'application.controllers.' : 'application.modules.' . $module . '.controllers.';
        $controller = ucfirst($controller . 'Controller');
        $class = basename($controller, ".php");
        if (!in_array($class, $declaredClasses))
            Yii::import($path . $class, true);

        $reflection = new ReflectionClass($controller);
        $methods = $reflection->getMethods();

        $actions = array();
        foreach ($methods as $method) {
            if (strpos($method->name, 'action') === 0 && ctype_upper($method->name[6])) {
                $actions[] = lcfirst(str_replace('action', '', $method->name));
            }
        }
        return $actions;
    }

    /**
     * Get list of controllers with actions
     * 
     * @param mixed $module
     * @return array
     */
    function getControllersActions($module = null) {
        $c = $this->getControllers($module);
        foreach ($c as &$controller) {
            $controller = array(
                'name' => $controller,
                'actions' => $this->getActions($controller, $module)
            );
        }
        return $c;
    }

    /**
     * Scans controller directory & return array of MVC controllers
     * 
     * @param mixed $module
     * @param mixed $include_classes
     * @return array
     */
    public function getControllers($module = null) {
        $path = ($module === NULL) ? Yii::getPathOfAlias('application.controllers') : Yii::getPathOfAlias('application.modules.' . $module . '.controllers');
        $iterator = new FilesystemIterator($path);
        $filter = new RegexIterator($iterator, '/Controller.php$/');
        $controllers = array();
        foreach ($filter as $entry) {
            $controllers[] = lcfirst(str_replace('Controller.php', '', $entry->getFilename()));
        }
        return $controllers;
    }

    /**
     * Returns array of module names
     * 
     */
    public function getModules() {
        $iterator = new FilesystemIterator(Yii::getPathOfAlias('application.modules'));
        $modules = array();
        foreach ($iterator as $entry) {
            if ($entry->isDir() && file_exists($entry->getPathname() . DIRECTORY_SEPARATOR . ucfirst($entry->getFilename()) . 'Module.php'))
                $modules[] = $entry->getFilename();
        }
        return $modules;
    }

}

<?php

class LiquidacionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Liquidacion;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Liquidacion'])) {
            $model->attributes = $_POST['Liquidacion'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idLiquidacion));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $modelEmpleado = Empleado::model()->findByPk($model->Empleado_idEmpleado);//buscando al empleado cn su id
        $modelContrato = Contrato::model()->findByPk($modelEmpleado->Contrato_idContrato);//buscando el contrato con su id
        $modelAsistencia = Asistencia::model()->findAll(array(
            'select' => '*',
            'condition' => 'Empleado_idEmpleado=:idEmpleado',
            'params' => array(':idEmpleado' => $modelEmpleado->idEmpleado),
        ));//buscando la asistencia del empleado con la condicion de que el Empleado_idEmpleado = idEmpleado
        if (isset($_POST['Liquidacion'])) {
            $model->sueldoBase = $modelContrato->sueldoBase;
            $model->horasTrabajadas=$this->totalHorasTrabajadas($this->asistenciaDeEsteMes($modelAsistencia));
            $model->diasTrabajados=($model->horasTrabajadas)/8;
            
            if ($model->save())
                $this->redirect(array('update', 'id' => $model->idLiquidacion));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }
    public function asistenciaDeEsteMes($modelAsistencia){//filtra la asistencia del mes actual
        $esteMes= new CDbExpression('now()');
        $datos=$modelAsistencia->findAll(array(
            'select'=>'*',
            'condition'=>'YEAR(registroEntrada)=YEAR(:esteMes) AND MONTH(registroEntrada)=MONTH(:esteMes)
                    AND YEAR(registroSalida)=YEAR(:esteMes) AND MONTH(registroSalida)=MONTH(:esteMes)',
            'params'=>array(':esteMes'=>$esteMes),
        ));
        return $datos;//returnar todos los dias trabajados del mes actual
    }

    public function totalHorasTrabajadas($datos) {//sumar las horas trabajadas del mes filtrado anteriormente
        $horas=$datos->findAll(array(
            'select'=>'TIMESTAMPDIFF(HOUR, `registroEntrada`, `registroSalida`) as horasTrabajadas'
        ));//se realiza la consulta con TIMESTAMPDIFF para sacar la diferencia de cada registro de entrada y salida
        $totalHorasTrabajadas=0;
        foreach ($horas as $hora) {
            $totalHorasTrabajadas=$totalHorasTrabajadas + $hora['horasTrabajadas'];
        }
        return $totalHorasTrabajadas;
    }
    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Liquidacion');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Liquidacion('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Liquidacion']))
            $model->attributes = $_GET['Liquidacion'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Liquidacion the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Liquidacion::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Liquidacion $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'liquidacion-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}

<?php

namespace app\controllers;

use app\forms\ProductForm;
use app\models\Brand;
use app\models\BrandSearch;
use app\models\Category;
use app\models\CategorySearch;
use app\models\Products;
use app\models\ProductsSearch;
use app\models\Vendor;
use app\models\VendorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeviceController implements the CRUD actions for Vendor model.
 */
class DeviceController extends BaseController
{

    /**
     * Lists all Vendor models.
     *
     * @return string
     */
    public function actionVendor()
    {
        $searchModel = new VendorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('vendor', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Vendor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionAddVendor()
    {
        $model = new Vendor(['scenario'=>Vendor::SCENARIO_CREATE]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                \Yii::$app->getSession()->setFlash('s', "Vendor $model->company added successfully.");
                return $this->redirect(['vendor']);
            }
        }

        return $this->render('form-vendor', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Vendor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateVendor($id)
    {
        $model = Vendor::findOne(['id'=>$id]);
        $model->scenario = Vendor::SCENARIO_UPDATE;
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$model->company} has been updated successfully.");
            return $this->redirect(['vendor']);
        }

        return $this->render('form-vendor', [
            'model' => $model,
        ]);
    }

    /**
     * Lists all Brand models.
     *
     * @return string
     */
    public function actionBrand()
    {
        $searchModel = new BrandSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('brand', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Brand model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionAddBrand()
    {
        $model = new Brand(['scenario'=>Brand::SCENARIO_CREATE]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                \Yii::$app->getSession()->setFlash('s', "Brand $model->name added successfully.");
                return $this->redirect(['brand']);
            }
        }

        return $this->render('form-brand', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Brand model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateBrand($id)
    {
        $model = Brand::findOne(['id'=>$id]);
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$model->name} has been updated successfully.");
            return $this->redirect(['brand']);
        }

        return $this->render('form-brand', [
            'model' => $model,
        ]);
    }


    /**
     * Lists all Category models.
     *
     * @return string
     */
    public function actionCategory()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('category', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionAddCategory()
    {
        $model = new Category(['scenario'=>Category::SCENARIO_CREATE]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                \Yii::$app->getSession()->setFlash('s', "Category $model->name added successfully.");
                return $this->redirect(['category']);
            }
        }

        return $this->render('form-category', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing successful model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateCategory($id)
    {
        $model = Category::findOne(['id'=>$id]);
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$model->name} has been updated successfully.");
            return $this->redirect(['category']);
        }

        return $this->render('form-category', [
            'model' => $model,
        ]);
    }


     /**
     * Lists all Product models.
     *
     * @return string
     */
    public function actionProducts()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('product', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionAddProducts()
    {
        $model = new ProductForm(['scenario'=>Products::SCENARIO_CREATE]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                \Yii::$app->getSession()->setFlash('s', "Product $model->name added successfully.");
                return $this->redirect(['products']);
            }
        }

        return $this->render('form-product', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing successful model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateProducts($id)
    {
        $product = Products::findOne(['id'=>$id]);
        if (!$product instanceof Products) {
            \Yii::$app->getSession()->setFlash('e', 'Record not found');
            return $this->redirect(["products"]);
        }
        $model = new ProductForm(['scenario'=>Products::SCENARIO_UPDATE]);
        $model->load($product->attributes, '');
        $model->attr = $product->getAttList();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            \Yii::$app->getSession()->setFlash('s', "{$model->name} has been updated successfully.");
            return $this->redirect(['products']);
        }

        return $this->render('form-product', [
            'model' => $model,
        ]);
    }
    
}

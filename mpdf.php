// dibawah ini adalah action untuk generate pdf
// jangan lupa untuk set vendor kartik mpdfnya di 777 biar writeable

<?php
public function actionMpdf() {

        $output = $this->renderPartial('haha');

        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8,
            'format' => Pdf::FORMAT_A4,
            'orientation' => Pdf::ORIENT_PORTRAIT,
            'destination' => Pdf::DEST_BROWSER,
            'content' => $output,
            //'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            'cssInline' => '.kv-heading-1{font-size:18px}',
            //'options' => ['title' => 'My report ' . date("Y/m/d", time())],
            'methods' => [
                //'SetHeader'=>['My report ' . date("Y/m/d", time())],
                //'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        
        return $pdf->render();

    }

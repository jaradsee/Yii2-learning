<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kmdocs".
 *
 * @property int $id
 * @property string $ref หลายเลข referent สำหรับอัพโหลดไฟล์ ajax
 * @property string $title ชื่องาน
 * @property int $typeteam
 * @property int $typedocs
 * @property string $uploader ผู้อัพโหลด
 * @property string $covenant หนังสือสัญญา
 * @property string $docs เอกสารประกอบ
 * @property string $upload_date วันที่อัพโหลด
 * @property string $end_date วันที่สิ้นสุดสัญญา
 * @property string $success_date งานเสร็จวันที่
 * @property string $create_date สร้างวันที่
 */
class Kmdocs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kmdocs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['typeteam', 'typedocs'], 'integer'],
            [['docs'], 'string'],
            [['upload_date', 'end_date', 'success_date', 'create_date'], 'safe'],
            [['ref'], 'string', 'max' => 50],
            [['title', 'uploader', 'covenant'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ref' => 'Ref',
            'title' => 'Title',
            'typeteam' => 'Typeteam',
            'typedocs' => 'Typedocs',
            'uploader' => 'Uploader',
            'covenant' => 'Covenant',
            'docs' => 'Docs',
            'upload_date' => 'Upload Date',
            'end_date' => 'End Date',
            'success_date' => 'Success Date',
            'create_date' => 'Create Date',
        ];
    }
}

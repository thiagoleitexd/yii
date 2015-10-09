<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sge_evento".
 *
 * @property integer $idEvento
 * @property string $Sigla
 * @property string $Descricao
 * @property string $local
 * @property string $DataIni
 * @property string $DataFim
 * @property string $Hora
 * @property string $Vagas
 * @property integer $cargaHoraria
 * @property integer $Tipo_idTipo
 * @property string $imagem
 * @property integer $Usuario_idUsuario
 * @property string $detalhe
 * @property string $horafim
 * @property integer $allow
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sge_evento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sigla', 'Descricao', 'local', 'DataIni', 'DataFim', 'Tipo_idTipo', 'Usuario_idUsuario', 'detalhe'], 'required'],
            [['Hora', 'horafim'], 'safe'],
            [['cargaHoraria', 'Tipo_idTipo', 'Usuario_idUsuario', 'allow'], 'integer'],
            [['detalhe'], 'string'],
            [['Sigla', 'local', 'Vagas'], 'string', 'max' => 45],
            [['Descricao'], 'string', 'max' => 600],
            [['DataIni', 'DataFim'], 'string', 'max' => 10],
            [['imagem'], 'string', 'max' => 145]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEvento' => 'Id Evento',
            'Sigla' => 'Sigla',
            'Descricao' => 'Descricao',
            'local' => 'Local',
            'DataIni' => 'Data Ini',
            'DataFim' => 'Data Fim',
            'Hora' => 'Hora',
            'Vagas' => 'Vagas',
            'cargaHoraria' => 'Carga Horaria',
            'Tipo_idTipo' => 'Tipo Id Tipo',
            'imagem' => 'Imagem',
            'Usuario_idUsuario' => 'Usuario Id Usuario',
            'detalhe' => 'Detalhe',
            'horafim' => 'Horafim',
            'allow' => 'Allow',
        ];
    }
}

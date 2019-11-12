<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Disposisi_rn;

/**
 * Disposisi_rnSearch represents the model behind the search form of `app\models\Disposisi_rn`.
 */
class Disposisi_rnSearch extends Disposisi_rn
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'instansi_id', 'jabatan_id', 'penerima_surat'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Disposisi_rn::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'instansi_id' => $this->instansi_id,
            'jabatan_id' => $this->jabatan_id,
            'penerima_surat' => $this->penerima_surat,
        ]);

        return $dataProvider;
    }
}

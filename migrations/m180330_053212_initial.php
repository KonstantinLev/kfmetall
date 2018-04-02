<?php

use yii\db\Migration;

/**
 * Class m180330_053212_initial
 */
class m180330_053212_initial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->integer(),
            'title' => $this->string(4000),
            'img_path' => $this->string(4000),
        ]);

        $this->batchInsert('categories', ['id', 'title', 'img_path'], [
            [1, 'Профиль перфорированный', 'profile.jpg'],
            [2, 'Профиль для монтажа гипосокартона', 'profile-gypsum.jpg'],
            [3, 'Крепежные изделия', 'fixture.jpg'],
            [4, 'Комплектующие', 'complect.jpg'],
        ]);

        $this->createTable('applications', [
            'id' => $this->primaryKey(),
            'phone' => $this->string(4000),
            'name' => $this->string(4000),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'result_send' => $this->string(4000),
        ]);

        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'fid_category' => $this->integer(),
            'title' => $this->string(4000),
            'description' => $this->text(),
            'add_date' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'img_path_full' => $this->string(4000),
        ]);

        $this->batchInsert('products', ['fid_category', 'title', 'description', 'img_path_full'], [
            [1, 'ПУ 20', 'Оцинкованный профиль угловой ПУ-20x20', 'perforated_profile/1.png'],
            [1, 'ПУ 25', 'Оцинкованный профиль угловой ПУ-25x25', 'perforated_profile/2.png'],
            [1, 'ПM 23*6', 'Оцинкованный профиль маячковый 23*6 для ГКЛ', 'perforated_profile/3.png'],
            [1, 'ПM 23*-10', 'Оцинкованный профиль маячковый 23*-10 для ГКЛ', 'perforated_profile/4.png'],
            [1, 'ПУ 35*35', 'Оцинкованный профиль угловой ПУ-35x35', 'perforated_profile/5.png'],

            [2, 'ПП 60*27', 'Профиль потолочный для ГКЛ 60x27', 'hypocarton_profile/1.png'],
            [2, 'ПН 27*28', 'Профиль направляющий 27x28', 'hypocarton_profile/1.png'],
            [2, 'ПН 50*40', 'Профиль направляющий 50x40', 'hypocarton_profile/1.png'],
            [2, 'ПС 50*50', 'Профиль С-образный 50x40', 'hypocarton_profile/1.png'],
            [2, 'ПН 75*40', 'Профиль направляющий 75x40', 'hypocarton_profile/1.png'],
            [2, 'ПС 75*50', 'Профиль С-образный 75x50', 'hypocarton_profile/1.png'],
            [2, 'ПН 100*40', 'Профиль направляющий 100x40', 'hypocarton_profile/1.png'],
            [2, 'ПС 100*50', 'Профиль С-образный 100x50', 'hypocarton_profile/1.png'],

            [3, 'Лента монтажная 12*25', 'Лента монтажная 12*25', 'fasteners/1.png'],
            [3, 'Лента монтажная 20*25', 'Лента монтажная 20*25', 'fasteners/2.png'],
            [3, 'Уголок крепежный KU-90x65', 'Перфорированный уголок крепежный KU-90x65', 'fasteners/3.png'],
            [3, 'Уголок крепежный усиленный KUU-70x55', 'Перфорированный уголок крепежный усиленный KUU-70x55', 'fasteners/4.png'],
            [3, 'Крепежный уголок равносторонний KUR-40x20', 'Перфорированный крепежный равносторонний уголок KUR-40x20', 'fasteners/5.png'],
            [3, 'Крепежный уголок равносторонний KUR-60x60', 'Перфорированный крепежный равносторонний уголок KUR-60x60', 'fasteners/5.png'],
            [3, 'Уголок крепежный усиленный KUU-105x105', 'Перфорированный уголок крепежный усиленный KUU-105x105', 'fasteners/4.png'],
            [3, 'Уголок крепежный усиленный KUU-50x35', 'Перфорированный уголок крепежный усиленный KUU-50x35', 'fasteners/4.png'],
            [3, 'Уголок крепежный усиленный KUU-90x40', 'Перфорированный уголок крепежный усиленный KUU-90x40', 'fasteners/4.png'],
            [3, 'Пластина соединительная PS-40x160', 'Перфорированная соединительная пластина PS-40x160', 'fasteners/10.png'],
            [3, 'Пластина соединительная PS-80x240', 'Перфорированная соединительная пластина PS-80x240', 'fasteners/10.png'],
            [3, 'Пластина соединительная PS-60x300', 'Перфорированная соединительная пластина PS-60x300', 'fasteners/10.png'],

            [4, 'Анкерный подвес с зажимом', 'Анкерный подвес с зажимом', 'accessories/1.png'],
            [4, 'Тяга', 'Тяга', 'accessories/2.png'],
            [4, 'Соединитель одноуровневый "краб"', 'Соединитель одноуровневый "краб"', 'accessories/krab.png'],
            [4, 'Пружинный подвес', 'Пружинный подвес', 'accessories/4.png'],
            [4, 'Соединитель 2-х уровневый', 'Соединитель 2-х уровневый', 'accessories/5.png'],
            [4, 'Подвес прямой', 'Подвес прямой', 'accessories/podves_pryamoj.png'],
            [4, 'Удлинитель ПП-профиля', 'Удлинитель ПП-профиля', 'accessories/7.png'],
        ]);

        $this->createTable('product_characters', [
            'id' => $this->integer(),
            'title' => $this->string(4000),
        ]);

        $this->batchInsert('product_characters', ['id', 'title'], [
            [1, 'Высота (мм.)'],
            [2, 'Длина (мм.)'],
            [3, 'Ширина (мм.)'],
            [4, 'Толщина (мм.)'],
            [5, 'Вес изделия (кг.)'],
        ]);

        $this->createTable('rel_prod_character', [
            'id' => $this->primaryKey(),
            'fid_product' => $this->integer(),
            'fid_prod_character' => $this->integer(),
            'value' => $this->string(4000),
        ]);

//        $this->batchInsert('product_characters', ['fid_product', 'fid_prod_character', 'value'], [
//            [1, 1, ''],
//            [1, 2, ''],//TODO доделать
//        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
        $this->dropTable('applications');
        $this->dropTable('products');
        $this->dropTable('product_characters');
        $this->dropTable('rel_prod_character');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180330_053212_initial cannot be reverted.\n";

        return false;
    }
    */
}

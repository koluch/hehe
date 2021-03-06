<?php

use yii\db\Migration;

class m160703_095325_fix_texts extends Migration
{
    public function up()
    {
        $this->update('i18n_texts', [
            'ru-RU' =>
                '## Если хотите самостоятельно купить препараты и отправить в Гватемалу

Есть несколько вариантов отправлений

1. [Почтой РФ](/help/russian-post);
1. Почтой СНГ;
1. Курьерские службы.

## Полный список необходимых медикаментов

####  Перевязка и расходные материалы

| Бинт стерильный 16 м х 1000 мм | 30 ₽ |
| Бинт стерильный 14 м х 700 мм | 21 ₽ |
| Бинт стерильный 10 м х 700 мм | 4 ₽ |
| Салфетки стерильные 14 x 16 см в упаковках по 20 штук | 24 ₽ |
| Трубчатые эластичные сетчато-трубчатые бинты № 1 | 15 ₽ |
| Трубчатые эластичные сетчато-трубчатые бинты № 2 | 12 ₽ |
| Клей БФ-6 10,0 (Лифузоль, Фуропласт, Пластубол) | 50 ₽ |
| Лейкопластырь на тканевой основе рулонный, 3 м х 500 мм | 69 ₽ |
| Салфетки кровоостанавливающие в упаковках по 7 штук | 90 ₽ |
| Перчатки хирургические стерильные | 14 ₽ |
| Перчатки хирургические нестерильные | 8 ₽ |

#### Медицинский препараты
| Анальгин в таблетках | 40 ₽ |
| Анальгин в ампулах | 100 ₽ |
| Нимика (Нимесулид, Найз) | 63 ₽ |
| Кетанов (Кеторолак, Кетокам) 10 мг №20 | 56 ₽ |
| Парацетамол | 40 ₽ |
| Аспирин (ацетилсалициловая кислота) №20 | 200 ₽ |
| Но-шпа или дротаверин в таб. №24 | 177 ₽ |
| Но-шпа в амп. №5 | 97 ₽ |
| Фуразолидон №20 | 120 ₽ |
| Амоксициллин 0,5-№16 | 60 ₽ |
| Азитромицин0,25 №6 | 80 ₽ |
| Тетрациклин таб0,1 №20 | 60 ₽ |
| Линкомицин в амп. №10 | 53 ₽ |
| Лоратадин  в таб. 10мг №30 | 51 ₽ |
| Тавегил в амп. №5 | 201 ₽ |
| Хлоропирамин (супрастин) в таб. №20 | 110 ₽ |
| Хлоропирамин (супрастин) в амп. №5 | 128 ₽ |
| Дексаметазон 4 мг/мл №25 | 177 ₽ |
| Драмина (от укачивания) | 152 ₽ |
| Крем «Бепантен», «Пантенол» 50,0 | 101 ₽ |
| Левомеколь мазь 40,0 | 120 ₽ |
| Вермокс 0,1 № 6 таб. | 100 ₽ |
| Пирантел 0,25 №3 | 24 ₽ |
| Немазол | 145 ₽ |
| Метронидазол | 20 ₽ |
| Лидокаин в амп. 2%, 2 мл, №10 | 30 ₽ |
| Новокаин в амп. 2%, 2 мл, №10 | 30 ₽ |
| Ацикловир в таб. №20 | 50 ₽ |
| Папаверин в амп. №10 | 80 ₽ |
| Фуросемид в таб. | 27 ₽ |
| Фуросемид в амп. | 30 ₽ |
| Домперидон в таб. 10 мг №30 | 87 ₽ |
| Эналаприл 10 мг  №20 | 20 ₽ |
| Омепразол 20 мг №20 | 50 ₽ |
| Фталозол в таб. №20 | 22 ₽ |
| Цефалексин 0,5 №16 | 77 ₽ |
| Гидровит/регидрон №10 | 120 ₽ |
| Комплевит №60 | 135 ₽ |
| Селмевит №60 | 226 ₽ |'
        ], [
            'name' => 'help/pharmacy/part2'
        ]);



        $this->update('i18n_texts', [
            'ru-RU' => '# Если вы хотите приехать в Гватемалу в качестве волонтера

Мы рассчитываем на вашу готовность'
        ], [
            'name' => 'help/volunteers/part1',
            'scope' => 'help',
        ]);
    }

    public function down()
    {
        echo "m160703_095325_fix_texts cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

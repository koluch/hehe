<?php

use yii\db\Migration;

class m160713_232240_fix_texts extends Migration
{
    public function safeUp()
    {
 
        
        $this->update('i18n_texts', [
            'ru-RU' => '## Зачем мне становиться волонтером?

Волонтерство связывают с желанием помогать нуждающимся, а это еще и отличная возможность познакомиться с новыми людьми и получить полезные навыки. Разберемся со всем по порядку.

### Карьера
Предположим, в обычной жизни вы инженер, бухгалтер, водитель троллейбуса или официант — проектируете автомобили, утюги или бетонные конструкции, работаете с документами и 1С, профессионально преодолеваете пробки или запоминаете заказы. Став волонтером, вы приобретаете навыки, которые может оценить ваш руководитель, например, опыт командной работы, деловой переписки с партнерами и спонсорами, написания и перевода текстов.
Если вы еще только заканчиваете обучение, те же самые навыки повысят вашу ценность для работодателя и выделят вас из массы вчерашних выпускников.

### Саморазвитие
На работе и в университете нас с вами контролируют — ставят задачи и дедлайны, дают инструкции и корректируют в процессе выполнения. Волонтеры мотивируют и контролируют себя самостоятельно, поэтому волонтерство — отличный шанс научиться управлять своим временем, освоить планирование и приоретизацию задач. Вы можете попробовать себя в разном: может быть, вы отлично рисуете иллюстрации или придумываете идеи для футболок, но еще не занимались этим.

### Общение
Наш проект объединяет людей из разных стран - Россия, Беларусь, США, Португалия, Германия, Гватемала и так далее. Если вы живете в крупном городе России, скорее всего, среди его жителей найдется наш волонтер, с которым вы сможете познакомиться и пообщаться. Во время скайп-встреч мы вместе обсуждаем рабочие вопросы, делимся мнениями, принимаем решения, шутим и смеемся. Люди часто жалуются на то, что у них почти нет общих семейных дел кроме дачи и просмотра телевизора. Привлеките детей или родителей к проекту, и одной общей целью станет больше. Рассматривать после ужина шапочки для новорожденных, связанные вашей мамой или бабушкой, интереснее, чем смотреть новости.

### Удовольствие
Помогая людям, мы чувствуем себя лучше. Попробуйте, вам понравится ;-)

Если вы хотите стать нашим волонтером, пожалуйста, напишите Михаилу Никифорову на [nimimi@yandex.ru](mailto:nimimi@yandex.ru)'
        ], [
            'name' => 'help/volunteers/part4',
            'scope' => 'help',
        ]);
    }

    public function down()
    {
        echo "m160713_232240_fix_texts cannot be reverted.\n";

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

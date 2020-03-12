<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    const
        TYPE_CREDIT = 'credit',       // Купить в кредит
        TYPE_EXCHANGE = 'exchange',   // Предложить обмен
        TYPE_ESTIMATE = 'extimate',   // Оценить авто
        TYPE_COMISSION = 'comission', // Комиссионная продажа
        TYPE_BUYOUT = 'buyout',       // Выкуп авто
        TYPE_FIND = 'find',           // Подбор авто
        TYPE_QUESTION = 'question',   // Задать вопрос об авто
        TYPE_CALLBACK = 'callback',   // Заказать звонок
        TYPE_OWN_PRICE = 'own-price'  // Предложить свою цену
    ;

    const TYPES = [
        self::TYPE_BUYOUT,
        self::TYPE_CALLBACK,
        self::TYPE_COMISSION,
        self::TYPE_CREDIT,
        self::TYPE_ESTIMATE,
        self::TYPE_EXCHANGE,
        self::TYPE_FIND,
        self::TYPE_OWN_PRICE,
        self::TYPE_QUESTION,
    ];

    /**
     * Scope a query to only include users of a given type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}

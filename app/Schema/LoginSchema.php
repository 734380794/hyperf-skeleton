<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Schema;

use Hyperf\Swagger\Annotation\Property;
use Hyperf\Swagger\Annotation\Schema;
use JsonSerializable;

#[Schema(title: 'LoginSchema')]
class LoginSchema implements JsonSerializable
{
    #[Property(property: 'id', title: 'ID', type: 'integer')]
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
        ];
    }
}

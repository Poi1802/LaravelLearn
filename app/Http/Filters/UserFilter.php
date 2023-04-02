<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
  public const NAME = 'name';
  public const LAST_NAME = 'last_name';
  public const EMAIL = 'email';


  protected function getCallbacks(): array
  {
    return [
      self::NAME => [$this, 'name'],
      self::LAST_NAME => [$this, 'last_name'],
      self::EMAIL => [$this, 'email'],
    ];
  }

  public function name(Builder $builder, $value)
  {
    $builder->where('name', 'like', "%{$value}%");
  }

  public function last_name(Builder $builder, $value)
  {
    $builder->where('last_name', 'like', "%{$value}%");
  }

  public function email(Builder $builder, $value)
  {
    $builder->where('email', 'like', "%$value%");
  }
}
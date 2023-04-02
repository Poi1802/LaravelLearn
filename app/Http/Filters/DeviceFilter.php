<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class DeviceFilter extends AbstractFilter
{
  public const NAME = 'name';
  public const description = 'description';
  public const CATEGORY_ID = 'category_id';
  public const BRAND = 'brand';


  protected function getCallbacks(): array
  {
    return [
      self::NAME => [$this, 'name'],
      self::description => [$this, 'description'],
      self::CATEGORY_ID => [$this, 'categoryId'],
      self::BRAND => [$this, 'brand'],
    ];
  }

  public function name(Builder $builder, $value)
  {
    $builder->where('name', 'like', "%{$value}%");
  }

  public function description(Builder $builder, $value)
  {
    $builder->where('description', 'like', "%{$value}%");
  }

  public function categoryId(Builder $builder, $value)
  {
    $builder->where('category_id', $value);
  }

  public function brand(Builder $builder, $value)
  {
    $builder->where('brand', 'like', "%{$value}%");
  }
}
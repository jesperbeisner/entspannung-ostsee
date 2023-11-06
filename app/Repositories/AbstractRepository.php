<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Exceptions\DatabaseException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @template T of Model
 */
abstract class AbstractRepository
{
    /**
     * @param class-string<T> $model
     */
    public function __construct(
        protected readonly string $model,
    ) {
    }

    /**
     * @return T
     */
    public function get(string|int $id): object
    {
        return $this->model::findOrFail($id);
    }

    /**
     * @return ?T
     */
    public function find(string|int $id): ?object
    {
        return $this->model::find($id);
    }

    /**
     * @return Collection<int, T>
     */
    public function findAll(): Collection
    {
        return $this->model::all();
    }

    /**
     * @param T $model
     */
    public function save(Model $model): void
    {
        if (false === $model->save()) {
            throw new DatabaseException(sprintf('Could not save model "%s"', $model::class));
        }
    }

    /**
     * @param T $model
     */
    public function delete(Model $model): void
    {
        if (false === $model->delete()) {
            throw new DatabaseException(sprintf('Could not delete model "%s"', $model::class));
        }
    }
}

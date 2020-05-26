<?php

namespace App\Policies;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MoviePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Movie $movie
     * @return mixed
     */
    public function view(User $user, Movie $movie)
    {
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user = null)
    {
        return null !== $user;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Movie $movie
     * @return mixed
     */
    public function update(User $user, Movie $movie)
    {
        return $user->id === $movie->created_by || $user->is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Movie $movie
     * @return mixed
     */
    public function delete(User $user, Movie $movie)
    {
        return $user->id === $movie->created_by || $user->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Movie $movie
     * @return mixed
     */
    public function restore(User $user, Movie $movie)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Movie $movie
     * @return mixed
     */
    public function forceDelete(User $user, Movie $movie)
    {
        //
    }
}
